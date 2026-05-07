<?php
$pg = "portfolio";
$selectedService = '';
if (isset($_GET['service'])) {
    $rawService = trim((string) $_GET['service']);
    if ($rawService !== '') {
        $rawService = strip_tags($rawService);
        $rawService = preg_replace('/[^a-z0-9\s\-_]/i', ' ', $rawService);
        $normalizedService = preg_replace('/\s+/', ' ', str_replace(['-', '_'], ' ', $rawService));
        $selectedService = ucwords(trim($normalizedService));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Request a Free Quote | Contact Us | Ganiam Tech</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Write a message to us and we'll get back to you. We build websites and applications that help your business to stand out in the digital world.">
    <meta name="keywords" content="bootstrap, business website, corporate website, professional website, e-commerce development, mobile app development, html5, css3, javascript, Website developers, Website designers, Kenya Web developers, Web designers in Kenya">
    <meta name="author" content="Ganiam Tech">

    <meta property="og:title" content="Request a Free Quote | Contact Us | Ganiam Tech">
    <meta name="twitter:title" content="Request a Free Quote | Contact Us | Ganiam Tech">

    <meta property="og:description" content="Write a message to us and we'll get back to you. We build websites and applications that help your business to stand out in the digital world.">
    <meta name="twitter:description" content="Write a message to us and we'll get back to you. We build websites and applications that help your business to stand out in the digital world.">

    <meta property="og:image" content="https://ganiamtech.com/assets/img/logo-dark.png">
    <meta name="twitter:image" content="https://ganiamtech.com/assets/img/logo-dark.png">
    <meta property="og:url" content="https://ganiamtech.com">
    <meta property="og:site_name" content="Ganiam Tech">
    <meta property="og:type" content="website">
   
    <?php include "includes/header.php";?>
    
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18145848807"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-18145848807');
</script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "wnjq9mebe4");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S9N233H044"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S9N233H044');
</script>
</head>
  <!-- Body-->
  <body>
    <?php include "includes/customizer.php";?>
   
    <!-- Page wrapper-->
    <main class="page-wrapper">
        <?php include "includes/navbar.php";?>

      <!-- Page content-->
      <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-2 bg-secondary">
        <div class="container py-lg-4 py-xl-4 py-xxl-5">
          <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
            <div class="col-lg-5 mb-5 mb-lg-0">
              <h2 class="h1">Benefits of working with us</h2>
              <p class="pb-1 pb-md-0 mb-4 mb-md-5">Elevate Your Online Presence, increase your Sales with Our Web Solutions. </p>
              <h3 class="mb-4">Talk to Us Now!</h3>
              <form class="needs-validation row g-4" novalidate method="post" action="processes.php" id="contact-form">
                <?php if ($selectedService !== ''): ?>
                <div class="col-lg-10">
                  <div class="alert alert-info mb-0" role="alert">
                    <strong>Selected service:</strong> <?php echo htmlspecialchars($selectedService, ENT_QUOTES, 'UTF-8'); ?>
                  </div>
                </div>
                <?php endif; ?>
                <input type="hidden" name="service_option" value="<?php echo htmlspecialchars($selectedService, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="name">Name</label>
                  <input class="form-control form-control-lg" type="text" placeholder="Your name" name="name" required id="name">
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input class="form-control form-control-lg" type="email" placeholder="Email address" name="email" required id="email">
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="phone">Phone Number</label>
                  <input class="form-control form-control-lg" type="tel" placeholder="Phone Number" name="phone" required id="phone">
                  <div class="invalid-feedback">Please provide a valid phone number!</div>
                </div>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="message">Describe your business</label>
                  <textarea class="form-control form-control-lg" placeholder="Your description" rows="4" name="desc" required id="message"></textarea>
                  <div class="invalid-feedback">Please write your message!</div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label fs-base">How would you like us to contact you?</label>

                    <div class="form-check">
                        <input class="form-check-input" value="Email"  name="contmethod" type="radio" id="Email">
                        <label class="form-check-label fs-base" for="Email">Email</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="WhatsApp"  name="contmethod"  type="radio" id="WhatsApp" >
                        <label class="form-check-label fs-base" for="WhatsApp">WhatsApp</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="Phone Call" name="contmethod" type="radio" id="Call">
                        <label class="form-check-label fs-base" for="Call">Phone Call</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="Either"  name="contmethod" type="radio" id="Either" checked>
                        <label class="form-check-label fs-base" for="Email">Either</label>
                    </div>
                </div>
                <div class="col-lg-10">
                  <button class="btn btn-lg btn-dark rounded-pill mt-2" name="ganiamrequest" type="submit">Send request</button>
                </div>
              </form>
            </div>
            <div class="col-lg-7 col-xl-6 offset-xl-1">
              <div class="row row-cols-1 row-cols-sm-2">
                <div class="col">
                  <div class="card border-0 mb-4">
                    <div class="card-body">
                      <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning" d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z" fill="currentColor"></path>
                        <path class="text-primary" d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z" fill="currentColor"></path>
                        <path class="text-warning" d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z" fill="currentColor"></path>
                      </svg>
                      <h3 class="h4" style="max-width: 180px;">Time zones ain't no thing</h3>
                      <p class="card-text fs-sm">We handle global projects seamlessly, bridging time zone gaps to deliver timely results for your international clientele.</p>
                    </div>
                  </div>
                  <div class="card border-0 bg-primary dark-mode">
                    <div class="card-body">
                      <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.7496 11.4756C25.3743 8.85089 25.3743 4.59539 22.7496 1.97068C20.1249 -0.654032 15.8694 -0.654033 13.2447 1.97068C10.6199 4.59539 10.6199 8.85089 13.2447 11.4756C15.8694 14.1003 20.1249 14.1003 22.7496 11.4756Z" fill="white"></path>
                        <path class="text-warning" d="M13.2173 26.3746C14.0903 24.3107 15.2282 22.395 16.6119 20.6516C12.48 16.1818 6.56698 13.3827 0 13.3827V36H11.2733C11.2733 32.6628 11.9274 29.4243 13.2173 26.3746Z" fill="currentColor"></path>
                        <path class="text-warning" d="M36.0001 36.0001V13.3828C23.5089 13.3828 13.3828 23.5089 13.3828 36.0001H36.0001Z" fill="currentColor"></path>
                      </svg>
                      <h3 class="h4" style="max-width: 180px;">Flexible work terms</h3>
                      <p class="card-text fs-sm">Adapt to your project's unique demands with our flexible work terms, empowering your vision and objectives.</p>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column pt-4 mt-sm-3">
                  <div class="card border-0 order-sm-2 mb-4 mb-sm-0">
                    <div class="card-body">
                      <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning" d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z" fill="currentColor"></path>
                        <path class="text-primary" d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z" fill="currentColor"></path>
                        <path class="text-warning" d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z" fill="currentColor"></path>
                      </svg>
                      <h3 class="h4" style="max-width: 180px;">24/7 Support</h3>
                      <p class="card-text fs-sm">Reliable support around the clock. We're here whenever you need us to ensure your website stays running smoothly.</p>
                    </div>
                  </div>
                  <div class="card border-0 bg-primary dark-mode order-sm-1 mb-sm-4">
                    <div class="card-body">
                      <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.4844 22.4814H36.0031V36.0001H22.4844V22.4814Z" fill="white"></path>
                        <path class="text-warning" d="M8.96266 18C8.96266 13.0088 13.0088 8.96266 18 8.96266C22.9912 8.96266 27.0373 13.0088 27.0373 18H36C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36V27.0373C13.0088 27.0373 8.96266 22.9912 8.96266 18Z" fill="currentColor"></path>
                      </svg>
                      <h3 class="h4" style="max-width: 180px;">Impossible? We're on it</h3>
                      <p class="card-text fs-sm">Our problem-solving expertise transforms the impossible into innovative solutions, ensuring your web projects stand out.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact details-->
           
      
    </main>
    <?php include "includes/footer.php";?>
    <?php include "includes/scripts.php";?>
  </body>

</html>
