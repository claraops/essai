<?php
include_once 'manager/connexion.php';



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



// Récupérer le terme de recherche depuis la requête AJAX
$query = $_GET['query'];

// Requête SQL pour rechercher des éléments dans la base de données
$sql = "SELECT * FROM produit WHERE NOM_PROD LIKE '%$query%'";

// Exécuter la requête
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Construire la liste des résultats
    $output = '
    <div id="searchdata">
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
    while ($row = $result->fetch_assoc()) {
        $output .=
         '           
        <tr>
            <th scope="row"  >'.$row["IDPRODUIT"].'</th>
            <th scope="row" >'.$row["NOM_PROD"].'</th>
            <td > '.$row["PRIX"].' fcfa</td>
            <td >'.$row["quantite"].'</td>
            <td>
              <form method="post" action="manager/page.php" >
                
                    <a href="#" class="bg1" name="modifier"  onclick="openModal('.$row["IDPRODUIT"].')">modifier</a> 
                    <button type="submit" class="bg2"name="supprimer">Supprimer</button> 
                
              </form>
            </td>
        </tr>
    
            ';
          }
          
    $output .= '
    </table>
</div>';
    echo $output;
} else {
    echo ' <Span class="" style="text-aligin;color:black; margin: 20px;padding: 30px; display: flex; justify-content: center;">
        <h2>Aucun resultat trouver.</h2>
    </span>';
}

// Fermer la connexion à la base de données
$conn->close();
?>