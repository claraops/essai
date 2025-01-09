<?php
session_start();


if (isset($_SESSION["statut"])){  
    if($_SESSION["statut"] == 'admin'){
        header("Location: ../commande.php");
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