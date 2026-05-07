<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <!-- SEO meta tags -->
    <title>Thank You | GaniamBiz</title>
    <meta name="description" content="Thank you for your payment - GaniamBiz Ecommerce Website Builder">
    <meta name="keywords" content="payment, successful, thank you, ecommerce, website builder">
    <meta name="author" content="GaniamBiz">
    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets-biz/img/ganiam-biz-favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets-biz/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets-biz/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="assets-biz/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="assets-biz/vendor/aos/dist/aos.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="assets-biz/icons/around-icons.min.css">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets-biz/css/theme.min.css">
    <style>
        :root {
            --ar-primary: #0aad0a;
            --ar-primary-rgb: 10, 173, 10;
            --ar-warning-rgb: #edcb50;
            --ar-warning-rgb: 237, 203, 80;
            --ar-link-color: #0aad0a;
            --ar-link-hover-color: #009400;
        }

        .btn-primary {
            --ar-btn-bg: #0aad0a;
            --ar-btn-border-color: #0aad0a;
            --ar-btn-hover-bg: #009400;
            --ar-btn-hover-border-color: #009400;
            --ar-btn-active-bg: #009400;
            --ar-btn-active-border-color: #009400;
            --ar-btn-disabled-bg: #0aad0a;
            --ar-btn-disabled-border-color: #0aad0a;
        }

        .btn-warning {
            --ar-btn-bg: #edcb50;
            --ar-btn-border-color: #edcb50;
            --ar-btn-hover-bg: #d4b237;
            --ar-btn-hover-border-color: #d4b237;
            --ar-btn-active-bg: #d4b237;
            --ar-btn-active-border-color: #d4b237;
            --ar-btn-disabled-bg: #edcb50;
            --ar-btn-disabled-border-color: #edcb50;
        }

        .btn-outline-primary {
            --ar-btn-color: #0aad0a;
            --ar-btn-border-color: #0aad0a;
            --ar-btn-hover-bg: #0aad0a;
            --ar-btn-hover-border-color: #0aad0a;
            --ar-btn-active-bg: #0aad0a;
            --ar-btn-active-border-color: #0aad0a;
            --ar-btn-disabled-color: #0aad0a;
            --ar-btn-disabled-border-color: #0aad0a;
        }

        .btn-outline-warning {
            --ar-btn-color: #edcb50;
            --ar-btn-border-color: #edcb50;
            --ar-btn-hover-bg: #edcb50;
            --ar-btn-hover-border-color: #edcb50;
            --ar-btn-active-bg: #edcb50;
            --ar-btn-active-border-color: #edcb50;
            --ar-btn-disabled-color: #edcb50;
            --ar-btn-disabled-border-color: #edcb50;
        }

        .accordion-button:not(.collapsed)::after {
            --ar-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='%230aad0a'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")
        }
    </style>

    <!-- Overflow Stlying-->
    <style>
        .tab-nav-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .nav-tabs {
            flex-wrap: nowrap;
            white-space: nowrap;
        }
    </style>

    <!-- Customizer generated styles -->
    <style id="customizer-styles"></style>

    <!-- Page loading styles -->
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

        [data-bs-theme="dark"] .page-loading {
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
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
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

        [data-bs-theme="dark"] .page-spinner {
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

    <!-- Page loading scripts -->
    <script>
        (function() {
            window.onload = function() {
                const preloader = document.querySelector('.page-loading')
                preloader.classList.remove('active')
                setTimeout(function() {
                    preloader.remove()
                }, 1500)
            }
        })()
    </script>

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

    <!-- Event snippet for DM - Ganiam - Submit Lead Form conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-11424153475/7oO-CPCosoEZEIP_uscq',
            'value': 1.0,
            'currency': 'USD'
        });
    </script>

    <script>
        // Function to set the theme based on the user's device mode
        function setTheme() {
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'light');
            }
        }

        // Set the initial theme on page load
        setTheme();

        // Listen for changes in the user's device mode
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setTheme);
    </script>

    <!-- LightBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" />

</head>
<!-- Body -->

<body>
    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>
    <!-- Page wrapper -->
    <main class="page-wrapper">
        <!-- Thank You content -->
        <section class="d-flex align-items-center min-vh-80 bg-secondary px-1 py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center">
                        <h2 class="h1 mb-4">Thank You for Choosing Ganiam<span class="text-primary"><i>Biz</i></span></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="d-sm-flex align-items-center justify-content-center text-center text-sm-start">
                            <div class="me-4">
                                <img src="assets-biz/img/mark2.jpg" alt="Founder Image text-center" class="img-fluid rounded-circle" style="max-width: 200px;">
                            </div>
                            <div>
                                <p class="fs-lg mb-0"><b>Welcome aboard!</b><br/>
                                     Thank you for booking a video meeting with us! We're looking forward to our session.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials (tabs) -->
         <!-- Testimonials (tabs) -->
         <section class="container mt-n3 mt-sm-0 py-md-3 py-lg-4 mt-5">
            <h2 class="text-center pb-3 mb-lg-4">Our clients love our work...</h2>

            <!-- Nav tabs -->
            <div id="reviews" class="overflow-auto pb-3 pb-xl-4 mb-3 mb-lg-4">
                <ul class="nav nav-tabs justify-content-between flex-nowrap text-nowrap p-0 m-0" role="tablist" style="min-width: 1000px;">
                    <li class="nav-item mb-0">
                        <a class="nav-link active" href="#foster" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="assets-biz/img/timkent-logo.png" style="max-height: 50px;" alt="Foster">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="assets-biz/img/timkent-logo.png" style="max-height: 50px;" alt="Foster">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#klinos" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="assets-biz/img/kiliki-logo.png" style="max-height: 50px;" alt="Klinos">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="assets-biz/img/kiliki-logo.png" style="max-height: 50px;" alt="Klinos">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#champion" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="assets-biz/img/xlogo-logo.png" style="max-height: 50px;" alt="Champion">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="assets-biz/img/xlogo-logo.png" style="max-height: 50px;" alt="Champion">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#airbnb" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="assets-biz/img/kiboko-logo.png" style="max-height: 50px;" alt="Airbnb">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="assets-biz/img/kiboko-logo.png" style="max-height: 50px;" alt="Airbnb">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#starcraft" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="assets-biz/img/wrapify-logo.png" style="max-height: 50px;" alt="StarCraft">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="assets-biz/img/wrapify-logo.png" style="max-height: 50px;" alt="StarCraft">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tabs content -->
            <div class="card border-0 bg-secondary">
                <div class="tab-content card-body px-lg-0 py-lg-5">

                    <!-- Testimonial (active tab) -->
                    <div class="tab-pane fade show active" id="foster" role="tabpanel">
                        <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="klinos" role="tabpanel">
                    <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="champion" role="tabpanel">
                    <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="airbnb" role="tabpanel">
                    <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="starcraft" role="tabpanel">
                    <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="alpine" role="tabpanel">
                    <div class="row align-items-center py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-3 text-center pb-4 pb-md-0 mb-2 mb-md-0">
                                <img class="d-block rounded-circle mb-3 mx-auto" src="assets-biz/img/user.png" width="86" alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-9">
                                <p class="text-dark lead mb-4">"The ecommerce website GaniamBiz built for us has transformed our business. The unique design and seamless functionality have greatly improved our online sales. We couldn't be happier with the results!"</p>
                                <div class="swiper mx-n2" data-swiper-options='{
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": ".swiper-button-prev",
                "nextEl": ".swiper-button-next"
              }
            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 1">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 1">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 2">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 2">
                                            </a>
                                        </div>
                                        <div class="swiper-slide px-2">
                                            <a href="assets-biz/img/kiliki.png" data-lightbox="image-gallery" data-title="Screenshot 3">
                                                <img src="assets-biz/img/kiliki.png" class="img-fluid rounded-3" alt="Screenshot 3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                                </div>
                            </div>
                        </div>
                </div>
        </section>

    </main>
    <!-- Back to top button -->
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>
    <!-- Vendor scripts: JS libraries and plugins -->
    <script src="assets-biz/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets-biz/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-biz/vendor/aos/dist/aos.js"></script>
    <script src="path/to/lightbox-plus-jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets-biz/js/theme.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>


</body>

</html>