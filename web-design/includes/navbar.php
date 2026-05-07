<!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
<header class="navbar navbar-expand-lg <?php if (!$pg) {
                                          echo 'fixed-top';
                                        } ?>">
  <div class="container">
    <a class="navbar-brand pe-sm-1 py-0" style="max-width: 105px;" href="index.php">
      <img src="assets/img/logo-dark.png" class="img-fluid d-block d-dark-mode-none" alt="Ganiam Tech Logo">
      <img src="assets/img/logo-light.png" class="img-fluid d-none d-dark-mode-block" alt="Ganiam Tech Logo">
    </a>
    <a class="btn btn-primary order-lg-2 me-2 me-lg-4 btn-sm" href="contact-us.php"><i class="ai-download fs-xl me-2 ms-n1"></i>Request a Free Quote</a>
    <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
    <nav class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link link-primary d-none" href="ecommerce.php">E-commerce</a></li>        
        <li class="nav-item"><a class="nav-link" href="portfolio.php">Our Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link link-primary fs-lg" href="tel:254799830928"><i class="ai-phone"></i>&nbsp; 0799-830-928</a></li>
      </ul>
    </nav>
  </div>
</header>