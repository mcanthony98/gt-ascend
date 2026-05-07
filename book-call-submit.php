<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: book-a%20call.html');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$sourcePage = trim($_POST['source_page'] ?? 'book-a call.html');

if ($name === '' || $email === '' || $company === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: book-a%20call.html?status=error');
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

header('Location: book-a%20call.html?status=error');
exit;
?>
