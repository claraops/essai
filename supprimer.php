<?php

include_once 'manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdventes";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier si la connexion a échoué
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données du formulaire
    $product_id = $_POST['product_id'];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Préparer et exécuter la requête SQL pour supprimer le produit
    $sql = "DELETE FROM produit WHERE idproduit=$productId";

    if ($conn->query($sql) === TRUE) {
        echo "Le produit a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du produit : " . $conn->error;
    }
// Fermer la connexion à la base de données
$conn->close();
?>