<?php

include_once 'connexion.php';
echo'bonjuor';



$database = new Database("localhost", "root", "", "bdventes");


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $telephone =$_POST["telephone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_serveur = "localhost";
    $_utilisateur = "root";
    $_mot_de_passe ="";
    $_base_de_donnee ="bdventes";

    
}
   $database->connect();
   $database->inscription( $firstname, $lastname, $telephone, $email, $password);




?>