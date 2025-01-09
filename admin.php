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

  <script src="jquery.min.js"></script>
  
    <script>
      
        $(document).ready(function(){
            $("#searchForm").submit(function(event){
                event.preventDefault(); // Empêche la soumission du formulaire par défaut
                searchdata = document.getElementById("searchdata");
                var query = $("#query").val(); // Récupère la valeur du champ de recherche
                console.log(searchdata);
                if(query == ''){
                  searchdata.style.display = 'block';
                }else{
                  searchdata.style.display = 'none';
                  $.ajax({
                    url: "search.php",
                    method: "GET",
                    data: { query: query },
                    success: function(data){
                        $("#searchResult").html(data); // Affiche les résultats dans une div
                    }
                });
              }   
            });
        });
    </script>
</head>

<body>

  <!---------------------------------------------------- header ---------------------------------------------------------------------------------------------->

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>

      
       
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="login.php">compte</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>
          <li><a class="nav-link scrollto" href="commande.php">commande</a></li>
          <li><a class="nav-link scrollto" href="produit.php">ventes</a></li>



          <form class="d-flex" action=""method="get" id="searchForm">
              <div class="header-search-container">
                <input type="search" name="search" class="search-field" id="query" name="query"aria-label="Search" placeholder="Enter your product name...">
                <img src="assets/img/icons8" alt="" srcset="">
                <button class="btn btn-outline-success" type="submit" >Search</button>
              </div>
          </form> 

          <!-- <form class="d-flex" action=""method="get" id="searchForm">
            <input class="form-control me-2" type="search" placeholder="Search" id="query" name="query"aria-label="Search">
            <button class="btn btn-outline-success" type="submit" >Search</button>
          </form>  -->

    
         

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    

      <a href="#about" class="get-started-btn scrollto">
        <?php 
        if (isset($_SESSION["firstname"])){
            echo $_SESSION["firstname"];
        } else{
          echo "connectez-vous";
        }
          ?></a>
      </a>
    </div>
  </header>



    
    </div>
    
  </header>
  
<!---------------------------------------------------- fin header --------------------------------------------------------------------------------------------->

<body>

<br><br><br>

        <div class="card-body">
            <!-- <form action="commande.php"  method="post" enctype="multipart/form-data">  -->
              <br><br>

                  <h6 style="text-align: center;"><b> Listes Des Produits Enregisterés :</b></h6> <br>

                  
                                
                              <div>
                              <form method='post'  >
                              
                                   
                                </form>
                            </div>  

                            <div id="searchResult"></div> <!-- Ici seront affichés les résultats de la recherche -->

                        <?php 
                            //    $database->afficher_produit();
                            

                               $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bdventes";


                                echo '
                          <div id="searchdata">
                            <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <tr>
                                    <th scope="col" id="class">numéros</th>
                                    <th scope="col" id="teacher">nom du produit</th>
                                    <th scope="col" id="males">prix</th>
                                    <th scope="col" id="males">quantite</th>
                                    <th scope="col" id="females"></th>
                                </tr>
                            ';

                            // Créer une connexion à la base de données
                            $conn = new mysqli($servername, $username, $password, $dbname);
                             $result = $conn-> query ("SELECT * FROM produit");
                                while($row= $result-> fetch_assoc()){
                                    $produit = $row["NOM_PROD"];
                                    $disponibilite = $row["DISPONIBILITE"];

                                    echo '           
                                    <tr>
                                        <th scope="row"  >'.$row["IDPRODUIT"].'</th>
                                        <th scope="row" >'.$row["NOM_PROD"].'</th>
                                        <td > '.$row["PRIX"].' fcfa</td>
                                        <td >'.$row["quantite"].'</td>
                                        <td>
                                          <form method="post" action="manager/page.php" >
                                                <input type="hidden" name="idproduit" value='.$row["IDPRODUIT"].'>
                                                <a href="#" class="bg1" name="modifier"  onclick="openModal('.$row["IDPRODUIT"].')">modifier</a> 
                                                <button type="submit" class="bg2"name="supprimer">Supprimer</button> 
                                            
                                          </form>
                                        </td>
                                    </tr>
                                
                                        ';
                                      }
                                  
    
                                    echo'
                                          </table>
                                  </div>
                                </div>
                                    ';
                                 ?> 
                             
                              <!-- echo '
                                    <div id="searchdata">
                                    <form method="post" action="manager/page.php" >
                                        <div class="row">
                                            <input type="hidden" name="idproduit" value="'.$row["IDPRODUIT"].'">
                                            <div class="col-md-1" >'.$row["IDPRODUIT"].'</div>
                                            <div class="col-md-2">
                                                '.$row["NOM_PROD"].'
                                            </div>
                                            <div class="col-md-2">
                                            '.$row["PRIX"].'
                                            </div>
                                            <div class="col-md-2">
                                            '.$row["quantite"].'
                                            </div>
                                            <div class="col-md-2">
                                            '.$row["DISPONIBILITE"].'
                                            </div>

                                           
                                            
                                            <div class="col">
                                            <a href="#" class="bg1" name="modifier"  onclick="openModal('.$row["IDPRODUIT"].')">modifier</a> 
                                            <button type="submit" class="bg2"name="supprimer">Supprimer</button> 
                                            
                                            </div>
                                            

                                            
                                    </form>
                                   
                                </div>
                                    ';
                                } 
                              ?>->
                            
                            

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>


      <?php
      if(isset($_GET['query'])){
        $searchquery = $_GET['query'];
        $conn = $database->connect();
        $searchquery= $conn->real_escape_string($searchquery);


        $result = $conn->rechercher($searchquery);
        if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo $row['NOM_PROD'];
          }
        }
        $result->free_result();
      }

      ?>


                 <!-- Bouton déclencheur de la fenêtre modale -->
<!-- <button type="button" class="btn btn-primary" onclick="">
  Modifier Un Produit
</button> -->

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
        <form action="modifier.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-8">
                    <!--<div class="form-floating">-->
                      <input type="hidden" id="idproduit" name="id">
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
    

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Fermer</button>
        <button type="submit" name="modifier"class="btn btn-primary" >modifier</button>
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
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</body>
</html> -->