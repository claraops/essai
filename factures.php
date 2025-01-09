<?php
include_once 'manager/connexion.php';
$database = new Database("localhost", "root", "", "bdventes");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdventes";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

$sss = "";
$totals = 0;
$date = date("d/m/y");

// if(extension_loader('uuid')){
//     $uuid = uuid_create(UUID_TYPE_RANDOM);
//     echo $uuid;
// }else{
//     echo 'nada';
// }



$uuid = uniqid();



$idpanier=  $_SESSION['idpanier_actif'];
$totals = 0 ;
 $result = $conn-> query ("SELECT * FROM contenir WHERE IDPANIER ='$idpanier'");
    while($row= $result-> fetch_assoc()){
        $idproduit= $row["IDPRODUIT"];
      $result2 = $conn-> query ("SELECT * FROM produit WHERE IDPRODUIT ='$idproduit'");
      while($row2= $result2-> fetch_assoc()){
        $prix = $row2["PRIX"];
        $quantite = $row["quantite"];
        $total=$prix*$quantite;
        $totals += $total;


        $data="<tr>
        <td>".$row2["NOM_PROD"]."</td>
        <td>".$row2["PRIX"]." fcfa</td>
        <td>".$row["quantite"]."</td>
        <td>".$total."</td>
        </tr>";
        $sss= $sss.$data;


        //mettre a jour les produits 
        $new_quantite = $row2["quantite"]-$row["quantite"];
        $database->connect();
        $myresult = $database->modifier($row["IDPRODUIT"],$row2["NOM_PROD"],$row2["PRIX"] ,$new_quantite,$row2["PHOTO"]);
        // echo $myresult;
        // echo "myresult";

        $idfacture = $myresult;

            //upddate du panier en inserant id de la facture 
        $update_panier = $conn-> query ("UPDATE panier SET IDFACUTRE='$idfacture' WHERE ID='$idpanier'");



        


      }
      
    }
















require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF('p', 'mm', 'A4', true, 'UTF-8');

$html = ' 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
    
    th{
        background-color: #c0c0c0;
        font-weigth : bold;
        font-size: 25px;
    }
    table,th,td{
       /* border: 1px solid #c0c0c0;*/
        text-align: center;
    }
    table{
        border-collapse: collaspe;
        width: 50%;
        height: 10%;
    
    
    }
    th,td{
        padding: 15px;
    }
    
        .container_header{
            display: flex;
            justify-content: space-evenly;
        }
        .container1, .container2{
            margin: 30px 28%;
            width: 100%;
        }
        .container_header span{
            font-size: 16px;
            float: left;
        }

        .body{
            display: flex;
            justify-content: center;
        }
        th{font-weight: bold;
            font-size: 16px;
            float: left;
        }

        .color{
            background-color: #c0c0c0;

        }

        .total{
            float: right;
            margin-right: 20%;
            padding: 30px;
        }

        .total span{
            font-size: 18px;
            font-weight: bolder;
            font-family: \'Times New Roman\', Times, serif;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Facture</h1>
        <hr>
        <div>
        <a href="" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
        </div>

        <div class="container_header" style=" display: flex;
        justify-content: space-evenly;">
            <div class="container1">
                        <span >
                        Date : '.$date.'
                            </span><br>
                <span  >
                    Nom_Client : '.$_SESSION["firstname"].'                
                    </span><br>
                <span >
                    Adresse : '.$_SESSION["email"].'               
                    </span><br>
                <span >
                    Telephone : '.$_SESSION["telephone"].'
                </span><br>
            </div>
            <div class="container2">
                <span> <b>N ° : '.$uuid.' </b> </span><br>
                
            </div>
        </div>

        <div class=" body">
            <table>
                <tr>
                    <th style="padding: 15px;">nom produit</th>
                    <th  style="font-weight: bolder; font: size 20px;" >prix</th>
                    <th style="font-weight: bolder;" >quantite</th>
                    <th  style="font-weight: bolder;" >montant</th>
                </tr>
                '.$sss.'
            </table>
            
        </div>

        <div class="total">
            <span>Total :</span>
            <span>'.$totals.' FCFA</span>
        </div>
    


</body>
</html>
';
$uuid = 'n°'.$uuid;
$sql = "INSERT INTO facture (NOM_FAC,MONTANT,DATE) VALUES ('$uuid','$totals', '$date')";
// echo $firstname, $lastname, $telephone, $email, $password;
    if ($conn->query($sql) === TRUE) {
       
    } else {
       
} 

$file = 'facture n°'.$uuid.'.pdf';
$pdf->AddPage();
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output($file, 'D');


?>



