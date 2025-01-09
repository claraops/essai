<?php

include_once 'connexion.php';

echo'bonjour';

$database = new Database("localhost", "root", "", "bdventes");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdventes";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
$database->connect();

// Vérifier si la connexion a échoué
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}



 // Variables pour l'email et le mot de passe à vérifier
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 // Requête SQL pour vérifier l'email et le mot de passe
 $sql = "SELECT * FROM compte WHERE email = '$email' AND passwords = '$password'";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {
    //ssession_start();
    while($donne = $result->fetch_assoc()){
        $_SESSION["firstname"] = $donne["NOM_FAC"];
        $_SESSION["id"] = $donne["IDCOMPTE"];
    $_SESSION["lastname"] = $donne["PRENOM"];
    $_SESSION["email"] = $donne["EMAIL"];
    $_SESSION["telephone"] = $donne["TELEPHONE"];

    if( $donne["STATUT"]=="admin"){
        $_SESSION["statut"]="admin";
    }else{
        $_SESSION["statut"]="user";
    }


    echo  $_SESSION["statut"];

    $idpanier = $database->create_panier($donne["IDCOMPTE"],'n°'. $donne["NOM_FAC"]);
    $_SESSION["IDPANIER"]= $idpanier;

    }
    
   header("Location: ../produit.php ");
    exit;
     // L'email et le mot de passe existent dans la base de données
     //echo "Connexion réussie !";
 } else {
     // L'email et/ou le mot de passe sont incorrects
     echo "Identifiants invalides.";
 }




 

    
    //$database->prepare($email, $password);


    // Fermeture de la connexion
$conn->close();


?>