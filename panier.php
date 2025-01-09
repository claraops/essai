
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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li> -->

          <li><a class="nav-link scrollto" href="login.php">compte</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>

        


          <!--<form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


  
     
      <a href="" class="get-started-btn scrollto" style="color:white;">
        <?php 
        if (isset($_SESSION["firstname"])){
            echo $_SESSION["firstname"];
        } else{
          echo "connectez-vous ";
        }
          ?></a>
    </div>
  </header>
  
<!---------------------------------------------------- fin header --------------------------------------------------------------------------------------------->

<body>

<br><br><br>

    <div class="card-header"><h3 class="text-center font-weight-light my-4">Panier</h3></div>
        <div class="card-body">
                               

    <b style="text-align: center">listes des produits enregisterés</b> <br> <br>

    <?php 
                            //    $database->afficher_produit();


                               $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bdventes";


                                echo '
                                <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <tr>
                                        <th scope="col" id="class">numéros</th>
                                        <th scope="col" id="teacher">options</th>
                                       
                                    </tr>
                                ';

                            // Créer une connexion à la base de données
                            $idcompte = $_SESSION["id"] ;
                            $conn = new mysqli($servername, $username, $password, $dbname);
                             $result = $conn-> query ("SELECT * FROM panier WHERE IDCOMPTE = '$idcompte'");
                                while($row= $result-> fetch_assoc()){
                                  echo '           
                                  <tr>
                                      <th scope="row"  >' .$row["IDFACTURE"].'</th>
                                      <th scope="row" >'.$row["IDPANIER"].'</th>
                              
                                      
                                      <td>
                                        <form method="get" action="manager/page.php" >
                                        <input type="hidden" name="idpanier" value="'.$row["IDPANIER"].'">
                                          
                                              <button type="submit" class="bg1" name="voir" >voir</button>  
                                              <button type="submit" class="bg2" name="supprimer_panier">Supprimer</button> 
                                          
                                        </form>
                                      </td>
                                  </tr>
                              
                                      ';
                                    }
                                    
                                
  
                                  echo'
                                        </table>
                                </div>
                                  ';
  

                                 
                                
?>
                             
                                
                                   
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files 

  echo '
                                    <div>
                                    <form method="get" action="manager/page.php" >
                                        <div class="row">
                                            <input type="hidden" name="idpanier" value="'.$row["IDPANIER"].'">
                                            <div class="col-md-1" >'.$row["IDPANIER"].'</div>
                                            <div class="col-md-2">
                                                '.$row["IDFACTURE"].'
                                            </div>
                                            
                                            <div class="col">
                                            <button type="submit" class="bg1" name="voir" >voir</button>
                                            <button type="submit" class="bg2"name="supprimer">Supprimer</button> 
              
                                            </div>
                                        
                                            
                                    </form>
                                </div>
                                    ';



-->
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