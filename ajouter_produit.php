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


// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $file = $_FILES['file']["name"];

    // Vérification si le tableau existe dans la session
    if (isset($_SESSION['products'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"],$targetFile)){
            echo "fichier enregistrer avec succes !";
        }else {
            echo "erreur de chargement !";
        }

        $database->connect();
        $database->ajouter_produit($name, $price, $quantity, "25", $file);
        $_SESSION['success'] = 'success';
        header("Location: commande.php ");
        exit;
     
    } else {
        // Création du tableau pour stocker les données
        $_SESSION['products'] = array(
            array(
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity
            )
        );
    }
   




echo "</tbody>";
echo "</table>";

          

}

?>



