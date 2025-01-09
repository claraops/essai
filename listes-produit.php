
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
    
          <li><a class="nav-link scrollto" href="login.php">Compte</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>
          <li><a class="nav-link scrollto" href="" style="color: white;">ventes</a></li>
         

          <a class="get-started-btn scrollto "style="color:white;background-color:black;border">date : <?php echo date("d/m/y"); ?> </a>
         
        </ul>
        
      </nav>


    

      <a href="#about" class="get-started-btn scrollto">
      <?php 
        if (isset($_SESSION["firstname"])){
            echo $_SESSION["firstname"];
        } else{
          echo "connectez-vous";
        }
          ?>
      </a>
    </div>
  </header>
  
<!---------------------------------------------------- fin header --------------------------------------------------------------------------------------------->

<body>

<br><br><br>

    <div class="card-header"><h3 class="text-center font-weight-light my-4">Listes des produits</h3></div>
        <div class="card-body">
          <br>
              <b style="text-align: center">listes des produits enregisterés</b> <br> <br>


    <?php 
                            //    $database->afficher_produit();


                               $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bdventes";

                            // Créer une connexion à la base de données
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $idpanier=  $_SESSION['idpanier_actif'];
                            $totals = 0 ;

                            echo '
                            <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <tr>
                                    <th scope="col" id="class">numéros</th>
                                    <th scope="col" id="teacher">nom du produit</th>
                                    <th scope="col" id="males">prix</th>
                                    <th scope="col" id="males">quantite</th>
                                    <th scope="col" id="females">montant</th>
                                    <th scope="col" id="females"></th>
                                </tr>
                            ';
                             $result = $conn-> query ("SELECT * FROM contenir WHERE IDPANIER ='$idpanier'");
                                while($row= $result-> fetch_assoc()){
                                    $idproduit= $row["IDPRODUIT"];
                                  $result2 = $conn-> query ("SELECT * FROM produit WHERE IDPRODUIT ='$idproduit'");
                                  while($row2= $result2-> fetch_assoc()){
                                    $prix = $row2["PRIX"];
                                    $quantite = $row["quantite"];    
                                    $total=$prix*$quantite;
                                    $totals += $total;
                                    echo '           
                                <tr>
                                    <th scope="row"  >'.$row2["IDPRODUIT"].'</th>
                                    <th scope="row" >'.$row2["NOM_PROD"].'</th>
                                    <td > '.$row2["PRIX"].' fcfa</td>
                                    <td >'.$row["quantite"].'</td>
                                    <td>'.$total.' fcfa</td>
                                    <td>
                                      <form method="post" action="manager/page.php" >
                                            <input type="hidden" value="'.$row2["IDPRODUIT"].'" name="idproduit">
                                            <a href="#" class="bg1" name="modifier"  onclick="openModal('.$row2["IDPRODUIT"].')">modifier</a> 
                                            <button type="submit" class="bg2"name="supprimer_produit">Supprimer</button> 
                                        
                                      </form>
                                    </td>
                                </tr>
                            
                                    ';
                                  }
                                  
                                }

                                echo'
                                      </table>
                              </div>
                                ';

                                echo '
                                <div class="row bg-gray">
                                <input type="hidden" name="idproduit" value="">
                                <div class="col-md-1" >Total</div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col">
                                '.$totals.' fcfa
                                </div>
                                
                                <div class="col">
                                
                            </div>
                                ';
                              ?>
                             
                                </div> 
                                <!-- <a href="factures.php" type="submit" class="btn-primary" >Payer</button> -->
                             <form action="factures.php"  method="post" enctype="multipart/form-data">  
                                <input type="submit" id="submit" value="payer" style="color: white; background-color: dodgerblue; border: 3px; display: inline-block; 
                                         padding:10px; margin: 20px;border-radius: 4px; "> 
                              </form>  
                          
       
                              
    <!-- Fenêtre modale -->
<div id="myModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modification du produit :<span id="id_produit"></span></h5>
        <button type="button" class="close" onclick="closeModal()">
          <span>&times;</span>
        </button>
     </div> 
     
      <div class="modal-body">
        <form action="modifier.php" method="get" enctype="multipart/form-data">
            <div class="row mb-3">                           
                <div class="col-md-8">
                    <!-- <div class="form-floating">-->
                    <input type="hidden" id="idproduit" name="idproduit">

                    <label for="">Quantité</label>
                        <input class="form-control" id="quantity" type="number" name="quantity" placeholder=""  />                                                        
                                        <!--</div> -->
                </div>                           
        </div>                          
    

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Fermer</button>
        <button type="submit" name="modifier_panier"class="btn btn-primary" >modifier</button>
      </div>

    </div>
    </form>
  </div>
</div>


<script>
  // Fonction pour ouvrir la fenêtre modale
  function openModal(idproduit) {
    var modal = document.getElementById("myModal");
    var id_produit=document.getElementById("id_produit");
    var idzproduit=document.getElementById("idproduit");
    id_produit.innerHTML=idproduit;
    idzproduit.value = idproduit ; 
    modal.style.display = "block";

    
    alert(idproduit)
    
  }

  // Fonction pour fermer la fenêtre modale
  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

</script>




                                   
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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