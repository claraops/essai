<?php

include_once 'connexion.php';
$database = new Database("localhost", "root", "", "bdventes");

if (isset($_POST['modifier'])) {
    $database->connect();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Récupération des données du formulaire
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $file = $_FILES['file']["name"];
  
      // Vérification si le tableau existe dans la session
      if (isset($_SESSION['products'])) {
          $targetDir = "../uploads/";
          $targetFile = $targetDir . basename($_FILES["file"]["name"]);
  
          if (move_uploaded_file($_FILES["file"]["tmp_name"],$targetFile)){
              echo "fichier enregistrer avec succes !";
          }else {
              echo "erreur de chargement !";
          }
  
          $database->connect();
        //   $database->modifier($name, $price, $quantity, $file);
          header("Location: ../admin.php ");
          exit;
       
      } 
}
else {
    // Création du tableau pour stocker les données
    $_SESSION['products'] = array(
        array(
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        )
    );
}

?>