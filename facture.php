
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
        font-weight: bold;
        font-size: 18px;
    }
    table,th,td{
       /* border: 1px solid #c0c0c0;*/
        text-align: center;
    }
    table{
        border-collapse: none;
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
        th{font-weight: bold;}

        .color{
            background-color: #c0c0c0;
        }

        .total{
            float: right;
            margin-right: 20%;
            padding: 30px;
        }

        .total span{
            font-size: 20px;
            font-weight: bolder;
            font-family: \'Times New Roman\', Times, serif;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Facture</h1>
        <hr>

        <div class="container_header">
            <div class="container1">
                <span style="font-weight: bolder;" >
                    Nom_Client
                </span><br>
                <span >
                    Adresse
                </span><br>
                <span >
                    Telephone
                </span><br>
            </div>
            <div class="container2">
                <span> <b>N ° :</b> </span><br>
                <span >
                    Nom_Facture : cara erasre
                 </span><br>
                 <span >
                     Nom panier : panier-fou
                 </span><br>
            </div>
        </div>

        <div class="body">
            <table>
                <tr>
                    <th>nom produit</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>montant</th>
                </tr>
                <tr>
                    <td>cles</td>
                    <td>5000 FCFA</td>
                    <td>2</td>
                    <td>10 000fcfa</td>
                </tr>
                <tr class="color">
                    <td>cles</td>
                    <td>5000 FCFA</td>
                    <td>2</td>
                    <td>10 000fcfa</td>
                </tr>
                <tr>
                    <td>cles</td>
                    <td>5000 FCFA</td>
                    <td>2</td>
                    <td>10 000fcfa</td>
                </tr>
                <tr class="color">
                    <td>cles</td>
                    <td>5000 FCFA</td>
                    <td>2</td>
                    <td>10 000fcfa</td>
                </tr>

            </table>
            
        </div>

        <div class="total">
            <span>Total :</span>
            <span>500000 FCFA</span>
        </div>
    


</body>
</html>
