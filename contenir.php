<?php

include_once 'manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");

    $idproduit= $_GET['id'];
    $quantity= $_GET['quantity'];
    $database->connect();



    
    $database->contenir($_SESSION["IDPANIER"],$idproduit,$quantity);
    header("Location: produit.php");
    




?>