
<?php

include_once '/manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");




if (isset($_GET['modifier_panier'])) {
    echo'voir';
    $idproduit = $_GET['idproduit'];
    $quantity = $_GET['quantity'];
    echo $quantity;
    $database->connect();
    $database->modifier_quantite($idproduit,$quantity);
    header("Location: listes-produit.php ");
    exit;
   
 }


if (isset($_POST['modifier'])) {
    $database->connect();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Récupération des données du formulaire
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $file = $_FILES['file']["name"];
      $idproduit = $_POST['id'];
  

      

      // Vérification si le tableau existe dans la session
    //   if (isset($_SESSION['products'])) {
        echo 'je suis ici';
        $targetDir = "uploads/";
          $targetFile = $targetDir . basename($_FILES["file"]["name"]);
  
          if (move_uploaded_file($_FILES["file"]["tmp_name"],$targetFile)){
              echo $quantity;
          }else {
              echo "erreur de chargement !";
          }
  
          $database->connect();
          $database->modifier($idproduit, $name, $price, $quantity, $file);
              header("Location: admin.php ");
          exit;
       
    //   } 
    
}
}
/* {
    // Création du tableau pour stocker les données
    $_SESSION['products'] = array(
        array(
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        )
    );*/

    ?>

