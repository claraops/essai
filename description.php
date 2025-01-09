
<?php
include_once 'manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
 

  <link href="asset/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./asset/images/logo/favicon.ico" type="image/x-icon">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./asset/css/style-prefix.css">

  -
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  -

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">





    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts --
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files --
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File --
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!---------------------------------------------------- header ---------------------------------------------------------------------------------------------->

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>


          <!--<form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    

      <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header>
  
<!---------------------------------------------------- fin header --------------------------------------------------------------------------------------------->

<body>

<div class="product-featured">

<h2 class="title">les choix du jour</h2>

<div class="showcase-wrapper has-scrollbar">

  <div class="showcase-container">

    <div class="showcase">
      
      <div class="showcase-banner">
        <img src="./asset/images/products/cle.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
      </div>

      <div class="showcase-content">
        
        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
        </div>

        <a href="#">
          <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
        </a>

        <p class="showcase-desc">
          Lorem ipsum dolor sit amet consectetur Lorem ipsum
          dolor dolor sit amet consectetur Lorem ipsum dolor
        </p>

        <div class="price-box">
          <p class="price">$150.00</p>

          <del>$200.00</del>
        </div>

        <button class="add-cart-btn">add to cart</button>

        <div class="showcase-status">
          <div class="wrapper">
            <p>
              already sold: <b>20</b>
            </p>

            <p>
              available: <b>40</b>
            </p>
          </div>

          <div class="showcase-status-bar"></div>
        </div>

        <div class="countdown-box">

          <p class="countdown-desc">
            Hurry Up! Offer ends in:
          </p>

          <div class="countdown">

            <div class="countdown-content">

              <p class="display-number">360</p>

              <p class="display-text">Days</p>

            </div>

            <div class="countdown-content">
              <p class="display-number">24</p>
              <p class="display-text">Hours</p>
            </div>

            <div class="countdown-content">
              <p class="display-number">59</p>
              <p class="display-text">Min</p>
            </div>

            <div class="countdown-content">
              <p class="display-number">00</p>
              <p class="display-text">Sec</p>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="showcase-container">
  
    <div class="showcase">
  
      <div class="showcase-banner">
        <img src="./asset/images/products/ordi.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
      </div>
  
      <div class="showcase-content">
  
        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
        </div>
  
        <h3 class="showcase-title">
          <a href="#" class="showcase-title">pour vos PC</a>
        </h3>
  
        <p class="showcase-desc">
         vos Ordinateur portabable, moins cher et bonne capacité
         les prix sont cassez !
        </p>
  
        <div class="price-box">
          <p class="price">90000.00 CFA</p>
          <del>100000.00 CFA</del>
        </div>
  
        <button class="add-cart-btn">add to cart</button>
  
        <div class="showcase-status">
          <div class="wrapper">
            <p> already sold: <b>15</b> </p>
  
            <p> available: <b>40</b> </p>
          </div>
  
          <div class="showcase-status-bar"></div>
        </div>
  
        <div class="countdown-box">
  
          <p class="countdown-desc">Hurry Up! Offer ends in:</p>
  
          <div class="countdown">
            <div class="countdown-content">
              <p class="display-number">360</p>
              <p class="display-text">Days</p>
            </div>
  
            <div class="countdown-content">
              <p class="display-number">24</p>
              <p class="display-text">Hours</p>
            </div>
  
            <div class="countdown-content">
              <p class="display-number">59</p>
              <p class="display-text">Min</p>
            </div>
  
            <div class="countdown-content">
              <p class="display-number">00</p>
              <p class="display-text">Sec</p>
            </div>
          </div>
  
        </div>
  
      </div>
  
    </div>
  
  </div>

</div>

</div>












<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
</body>
</html>