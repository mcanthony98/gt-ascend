<?php 
session_start();
$pg="portfolio";?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Thank You from | Ganiam Tech </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Thank you for trusting Ganiam Tech. We guarantee solutions that will help your business prosper.">
    <meta name="author" content="Ganiam Tech">
   
    <?php include "includes/header.php";?>

    <!-- Event snippet for DM - Ganiam - Submit Lead Form conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-11424153475/7oO-CPCosoEZEIP_uscq',
        'value': 1.0,
        'currency': 'USD'
      });
    </script>

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
       <!-- Hero -->
       <section class="pt-3">
        <div class="container position-relative zindex-2 pt-5 mt-3 mt-sm-4 mt-md-5">
          <div class="row pt-xl-3 pt-xxl-4">
            <div class="col-lg-7 col-xxl-6">
              <h1 class="display-3 text-center text-lg-start">Your Inquiry Has Been Received With Thanks!</h1>
            </div>
            <div class="col-lg-5 offset-xxl-1 pt-sm-3">
              <p class="fs-lg text-center text-lg-start pb-3 pb-sm-0 pb-md-2 mb-4 mb-sm-5">Dear <?php if(isset($_SESSION['thankyou_name'])){echo $_SESSION['thankyou_name']; unset($_SESSION['thankyou_name']);}else{ echo "Customer";}?>,<br>Thank you for reaching out to us! We've received your message and will be in touch shortly. Your feedback matters!</p>
              
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
            <p class="fs-sm mb-1">Don't want to wait for us?</p>
            <a href="schedule-meeting.php" target="_blank" class="btn btn-primary btn-lg">Schedule a Video Meeting Now!</a> 
        </div>
      </section>
      <hr class="my-3 mx-5">     
      
    </main>
    <?php include "includes/footer.php";?>
    <?php include "includes/scripts.php";?>
  </body>

</html>
