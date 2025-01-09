<?php
include_once 'manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commande</title>

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

  <!-- Template Main CSS File --
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">

    <!-- <script src="boostrap/code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    
   
</head>


<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>

     <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="produit.php">produit</a></li>
          <li><a class="nav-link scrollto" href="login.php">compte</a></li>
          <li><a class="nav-link scrollto" href="manager/redirect.php">admin</a></li>

         <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
        </ul>
       
       
      </nav> 

      <a href="#about" class="get-started-btn scrollto"> 
        <?php 
      if (isset($_SESSION["firstname"])){
          echo $_SESSION["firstname"];
      } else{
        echo "connectez-vous";
      }
        ?></a>

     

  </header>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<br><br><br>


<body class="bg-primary">
  <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
          <main>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-7">
                          <div class="card shadow-lg border-0 rounded-lg mt-5">
                              <div class="card-header"><h3 class="text-center font-weight-light my-4">Insertion</h3></div>
                              <div class="card-body">
                              <?php
                                      if (isset($_SESSION['success'])){
                                          if( $_SESSION['success'] == 'success'){
                                          echo'produit ajouter avec success';
                                        }
                                      }
                                        
                                      ?>
                                <b>remplissez les informations suivantes:</b> <br>
                                  <form action="ajouter_produit.php"  method="post" enctype="multipart/form-data"> <br>
                                      <div class="row mb-3">
                                            <div class="col-md-8">
                                                <!--<div class="form-floating">-->
                                                    <label>nom du produit</label>
                                                        <input class="form-control" id="name" type="text" name="name" placeholder=" ">
                                                
                                                <!--</div> -->
                                            </div>
                                            <div class="col-md-6">
                                                <!--<div class="form-floating">-->
                                                    <label for="">prix</label>
                                                        <input class="form-control" id="price" type="number" name="price"placeholder=""  />
                                                
                                                
                                            </div>    
                                       
                                            <div class="col-md-8">
                                               <!-- <div class="form-floating">-->
                                                    <label for="">Quantité</label>
                                                        <input class="form-control" id="quantity" type="number" name="quantity" placeholder=""  />
                                            
                                                
                                                 <!--</div> -->
                                            </div> 

                                            <div class="col-md-4">
                                               <!-- <div class="form-floating w-80">-->
                                                    <label for="">photo</label>
                                                        <input class="form-control" id="photo" type="file" name="file" placeholder="" />
                                            
                                            
                                            </div> 

                                         
                                      </div>

                                  
                                 
                                  <div class="row">
                                      <div class=" ajout col text-center font-weight-light my-4"> 
                                        <button type="submit" id="btn" name="ajouter_produit">Ajouter</button>
                                      </div>
                                     
                                    
                                    <!-- <br><br>
                                    <b style="text-align: center">listes des produits enregisterés</b> <br> <br>
                                
                                    <div>
                                <form method='post'>
                                    <div class="row"><tr>
                                        <div class="col-md-2">numros</div>
                                        <div class="col-md-2">
                                            <label>nom du produit</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label>quantité</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label>prix</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>dispo</label>
                                        </div>
                                        <div class="col-md-2">
                                            
                                        </div>
                                        <div class="col-md-2">
                                           
                                        </div>
                                       
                                    </div>
                                </form>
                            </div>  
                                    
                                       -->
                                            <?php 
                            /*   $database->afficher_produit();


                               $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bdventes";

                                

                            // Créer une connexion à la base de données
                            $conn = new mysqli($servername, $username, $password, $dbname);
                             $result = $conn-> query ("SELECT * FROM produit");
                                while($row= $result-> fetch_assoc()){
                                    $produit = $row["NOM_PROD"];
                                    $disponibilite = $row["DISPONIBILITE"];

                                   echo '
                                    <div>
                                    <form method="post" >
                                        <div class="row">
                                            <input type="hidden" name="idproduit" value="'.$row["IDPRODUIT"].'">
                                            <div class="col-md-2" >'.$row["IDPRODUIT"].'</div>
                                            <div class="col-md-2">
                                                '.$row["NOM_PROD"].'
                                            </div>
                                            <div class="col-md-2">
                                            '.$row["PRIX"].'
                                            </div>
                                            <div class="col-md-1">
                                            '.$row["quantite"].'
                                            </div>
                                            <div class="col-md-1">
                                            '.$row["DISPONIBILITE"].'
                                            </div>
                                            <div class="col-md-2">
                                            <a class="bg1" name="modifier"  onclick="openModal()"('.$row["IDPRODUIT"].',"'.$produit.'", '.$row["PRIX"].','.$row["quantite"].',"'.$disponibilite.'")">modifier</a> 

                                            </div>
                                            <div class="col-md-2">
                                            <button type="submit" class="bg2"name="supprimer">Supprimer</button> 
                                     
                                            </div>
                                           
                                        
                                            
                                    </form>
                                </div>
                                    ';
                                }*/
                              ?>
                            
                            

                                  </form>
                              </div>

                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Isertion</h3></div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>



                                <!-- Bouton déclencheur de la fenêtre modale -->
<!-- <button type="button"  class="btn btn-primary" onclick="openModal()">
  Modifier Un Produit
</button> -->

<!-- Fenêtre modale -->
<div id="myModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modification du produit</h5>
        <button type="button" class="close" onclick="closeModal()">
          <span>&times;</span>
        </button>
     </div> 
     
      <div class="modal-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-8">
                    <!--<div class="form-floating">-->
                        <label>nom du produit</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder=" ">
                                                    
                    <!--</div> -->
                </div>
                <div class="col-md-6">
                    <!--<div class="form-floating">-->
                        <label for="">prix</label>
                            <input class="form-control" id="price" type="number" name="price"placeholder=""  />                                 
                </div>    
                                       
                <div class="col-md-8">
                    <!-- <div class="form-floating">-->
                    <label for="">Quantité</label>
                        <input class="form-control" id="quantity" type="number" name="quantity" placeholder=""  />                                                        
                                        <!--</div> -->
                </div> 

                <div class="col-md-4">
                    <!-- <div class="form-floating w-80">-->
                        <label for="">photo</label>
                            <input class="form-control" id="photo" type="file" name="file" placeholder="" />
                    <!--</div> -->
                </div> 

                                         
        </div>                          
    </form>

    </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Fermer</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Fonction pour ouvrir la fenêtre modale
  function openModal(idproduit,name,price,quantity) {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    // alert(idproduit,name,price,quantity)
    
  }

  // Fonction pour fermer la fenêtre modale
  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
</script>





 -->



           




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






      <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
      <script src="scripts.js"></script>
</body>
</html>



