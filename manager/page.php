<?php

include_once 'connexion.php';
$database = new Database("localhost", "root", "", "bdventes");


if (isset($_POST['supprimer'])) {
    echo'supprimer';
    $idproduit = $_POST['idproduit'];
    echo $idproduit;
    $database->connect();
    $database->supprimer($idproduit);
     header("Location: ../admin.php ");
    exit;
   
 }

 
 if (isset($_POST['supprimer_produit'])) {
   $idproduit = $_POST['idproduit'];
   echo $idproduit;
   $database->connect();
   $database->supprimer_produit($idproduit);
    header("Location: ../listes-produit.php ");
   exit;
  
}

 if (isset($_GET['voir'])) {
    echo'voir';
    $_SESSION['idpanier_actif'] = $_GET['idpanier'];
    $idproduit = $_POST['idproduit'];
    echo $idproduit;
    $database->connect();
    $database->supprimer($idproduit);
    header("Location: ../listes-produit.php ");
    exit;
   
 }

 if (isset($_GET['supprimer_panier'])) {
   echo'supprimer';
   $idpanier = $_GET['idpanier'];
   echo $idpanier;
   $database->connect();
   $database->supprimer_panier($idpanier);
    header("Location: ../panier.php ");
   exit;
 }


?>