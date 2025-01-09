<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- --- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="#"> -->

</head>

   
<header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
          <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>

          <!-- <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="login.php">Compte</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>


        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  </div> --


          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>
              <li><a class="nav-link scrollto" href="/">compte</a></li>
              <li><a class="nav-link scrollto" href="commande.php">commande</a></li>
    
    
        
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>-->
    
      </header>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<br><br><br>


<body class="bg-primary">
  <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
          <main>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-5">
                          <div class="card shadow-lg border-0 rounded-lg mt-5">
                              <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                              <p id="messagederreur"> veiller remplir tout les champs</p>
                              <div class="card-body">
                                  <form action="manager/verifier.php" method="post" id="formulaire">
                                      <div class="form-floating mb-3">
                                          <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required/>
                                          <label for="inputEmail">Email address</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                          <input class="form-control" id="mot_de_passe" type="password" name="password" placeholder="Password" required />
                                          <label for="inputPassword">Password</label>
                                      </div>
                                      <div class="form-check mb-3">
                                          <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                          <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                       <a class="small" href="password.php">Forgot Password?</a>
                                        
                                        
                                         <!-- <a class="btn btn-primary" href=""  type="submit">envoi</a> -->
                                         <input type="submit" id="submit" value="envoyer" style="color: white; background-color: dodgerblue; border: 3px; display: inline-block; 
                                         padding: 5px 10px;border-radius: 4px;"> 

                                      </div>
                                    
                                      <p id="message"></p>
                                     
                                  </form>
                                  
                                 
                              </div>
                              <div class="card-footer text-center py-3">
                                  <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                  <div class="small"><a href="produit.php">return</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>
      

  





  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>




  
      





      <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>