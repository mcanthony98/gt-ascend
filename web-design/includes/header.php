 <!-- Viewport-->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Favicon and Touch Icons-->
 <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
 <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
 <link rel="manifest" href="assets/favicon/site.webmanifest">
 <link rel="mask-icon" color="#6366f1" href="assets/img/favicon.png">
 <meta name="msapplication-TileColor" content="#080032">
 <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
 <meta name="theme-color" content="white">
 <!-- Theme mode-->
 <script>
   // Check if the user prefers dark mode
   if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
     // User prefers dark mode, so add the 'dark-mode' class to the HTML element
     document.documentElement.classList.add('dark-mode');
     // Save the user preference to localStorage
     window.localStorage.setItem('mode', 'dark');
   } else {
     // User prefers light mode (default), so remove the 'dark-mode' class
     document.documentElement.classList.remove('dark-mode');
     // Save the user preference to localStorage
     window.localStorage.setItem('mode', 'light');
   }
   let mode = window.localStorage.getItem('mode'),
     root = document.getElementsByTagName('html')[0];
   if (mode !== undefined && mode === 'dark') {
     root.classList.add('dark-mode');
   } else {
     root.classList.remove('dark-mode');
   }
 </script>
<!-- Page loading styles-->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11424153475"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());

  gtag('config', 'AW-11424153475');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P22MPJ8M');</script>
<!-- End Google Tag Manager -->
<style>
   .page-loading {
     position: fixed;
     top: 0;
     right: 0;
     bottom: 0;
     left: 0;
     width: 100%;
     height: 100%;
     -webkit-transition: all .4s .2s ease-in-out;
     transition: all .4s .2s ease-in-out;
     background-color: #fff;
     opacity: 0;
     visibility: hidden;
     z-index: 9999;
   }

   .dark-mode .page-loading {
     background-color: #121519;
   }

   .page-loading.active {
     opacity: 1;
     visibility: visible;
   }

   .page-loading-inner {
     position: absolute;
     top: 50%;
     left: 0;
     width: 100%;
     text-align: center;
     -webkit-transform: translateY(-50%);
     transform: translateY(-50%);
     -webkit-transition: opacity .2s ease-in-out;
     transition: opacity .2s ease-in-out;
     opacity: 0;
   }

   .page-loading.active>.page-loading-inner {
     opacity: 1;
   }

   .page-loading-inner>span {
     display: block;
     font-family: 'Inter', sans-serif;
     font-size: 1rem;
     font-weight: normal;
     color: #6f788b;
   }

   .dark-mode .page-loading-inner>span {
     color: #fff;
     opacity: .6;
   }

   .page-spinner {
     display: inline-block;
     width: 2.75rem;
     height: 2.75rem;
     margin-bottom: .75rem;
     vertical-align: text-bottom;
     background-color: #d7dde2;
     border-radius: 50%;
     opacity: 0;
     -webkit-animation: spinner .75s linear infinite;
     animation: spinner .75s linear infinite;
   }

   .dark-mode .page-spinner {
     background-color: rgba(255, 255, 255, .25);
   }

   @-webkit-keyframes spinner {
     0% {
       -webkit-transform: scale(0);
       transform: scale(0);
     }

     50% {
       opacity: 1;
       -webkit-transform: none;
       transform: none;
     }
   }

   @keyframes spinner {
     0% {
       -webkit-transform: scale(0);
       transform: scale(0);
     }

     50% {
       opacity: 1;
       -webkit-transform: none;
       transform: none;
     }
   }
 </style>
 
 <!-- Page loading scripts-->
 <script>
   (function() {
     window.onload = function() {
       const preloader = document.querySelector('.page-loading');
       preloader.classList.remove('active');
       setTimeout(function() {
         preloader.remove();
       }, 1500);
     };
   })();
 </script>
 <!-- Import Google Font-->
 <link rel="preconnect" href="https://fonts.googleapis.com/">
 <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
 <!-- Vendor styles-->
 <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css" />
 <link rel="stylesheet" media="screen" href="assets/vendor/aos/dist/aos.css" />
 <!-- Main Theme Styles + Bootstrap-->
 <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
 <!-- Customizer generated styles-->
 <style id="customizer-styles">
   :root {
     --ar-primary: #17aba8;
     --ar-primary-rgb: 23, 171, 168;
     --ar-link-color: #17aba8;
     --ar-link-hover-color: #00928f;
   }

   .btn-primary {
     --ar-btn-bg: #17aba8;
     --ar-btn-border-color: #17aba8;
     --ar-btn-hover-bg: #00928f;
     --ar-btn-hover-border-color: #00928f;
     --ar-btn-active-bg: #00928f;
     --ar-btn-active-border-color: #00928f;
     --ar-btn-disabled-bg: #17aba8;
     --ar-btn-disabled-border-color: #17aba8;
   }

   .btn-outline-primary {
     --ar-btn-color: #17aba8;
     --ar-btn-border-color: #17aba8;
     --ar-btn-hover-bg: #17aba8;
     --ar-btn-hover-border-color: #17aba8;
     --ar-btn-active-bg: #17aba8;
     --ar-btn-active-border-color: #17aba8;
     --ar-btn-disabled-color: #17aba8;
     --ar-btn-disabled-border-color: #17aba8;
   }
 </style>