<?php
session_start();

echo "je suis ici";
echo $_SESSION["statut"];
if (isset($_SESSION["statut"])){  
    if($_SESSION["statut"] == 'admin'){
    header("Location: ../admin.php");
        exit;
    } 
    else{
        header("Location: error.php");
            exit;
        }
} else{
    header("Location: error.php");
    exit;
}

?>