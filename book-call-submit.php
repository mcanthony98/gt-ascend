<?php
declare(strict_types=1);

const BOOK_PAGE = 'book-a-call.html';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BOOK_PAGE, true, 302);
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$company = trim((string)($_POST['company'] ?? ''));
$sourcePage = trim((string)($_POST['source_page'] ?? BOOK_PAGE));

// Basic header-injection hardening for values that end up in email headers/body.
$name = preg_replace('/[\r\n]+/', ' ', $name) ?? '';
$email = preg_replace('/[\r\n]+/', '', $email) ?? '';
$company = preg_replace('/[\r\n]+/', ' ', $company) ?? '';
$sourcePage = preg_replace('/[\r\n]+/', ' ', $sourcePage) ?? BOOK_PAGE;

if ($name === '' || $email === '' || $company === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . BOOK_PAGE . '?status=error', true, 302);
    exit;
}

$calendlyBaseUrl = 'https://calendly.com/tutorjamesbenjamin/30min?hide_event_type_details=1&hide_gdpr_banner=1';

$to = 'ganiamtech@gmail.com';
$subject = 'New Booking Lead Submission';
$message = "You have a new booking lead submission.\n\n"
    . "Name: {$name}\n"
    . "Email: {$email}\n"
    . "Company/Website: {$company}\n"
    . "Source Page: {$sourcePage}\n"
    . "Calendly Link: {$calendlyBaseUrl}\n";

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/plain; charset=UTF-8';
$headers[] = 'From: no-reply@localhost';
$headers[] = 'Reply-To: ' . $email;

$sent = mail($to, $subject, $message, implode("\r\n", $headers));

if ($sent) {
    $query = http_build_query([
        'name' => $name,
        'email' => $email,
        'a1' => $company,
    ]);
header('Location: ' . $calendlyBaseUrl . '&' . $query);
    exit;
}

header('Location: ' . BOOK_PAGE . '?status=error', true, 302);
exit;
?>
