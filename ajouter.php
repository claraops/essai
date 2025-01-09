<?php
include_once 'config/ConnectDB.php';
// Nous démarrons la session
session_start();
// Nous vérifions nos sessions
if (!isset($_SESSION["login"])) {
  header("location:stater_technicien.php");
}

?>

<!-- Page entete -->
<?php include_once 'pages_utiles/entete.php'; ?>
<!-- Fin Page entete -->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">



    <!-- Main header -->
    <?php include_once 'pages_utiles/main-header.php'; ?>
    <!-- Fin Main header -->


    <!-- Main sidebar -->
    <?php include_once 'pages_utiles/main-sidebar-technicien.php'; ?>
    <!-- Main sidebar -->


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1></h1>
      </section>

      <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
          <h4>Note</h4>
          Entrer correctement les informations.
        </div>
      </div>





      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-send-o"></i> Envoyer la facture
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->

        <!-- début bonus -->
        <?php


        if (isset($_POST['save'])) {

          $bd = new Connexionbd();

          $email = $_GET["reference_Facture"];

          $name = $_FILES['file']['name'];
          $size = $_FILES['file']['size'];
          $type = $_FILES['file']['type'];
          $temp = $_FILES['file']['tmp_name'];


          $c = $bd->bdd->query("SELECT * FROM factures WHERE email_cli = '" . $email . "' ") or die(mysql_error());
          $a1 = $c->fetch();

          if ($a1 == NULL) {

            $path = "factures/" . $name;
            move_uploaded_file($temp, $path);

            $p = $bd->bdd->query("INSERT INTO factures (email_cli,file_fct,loc_fct,size) VALUES ('$email','$name','$path','$size')");

            if ($p == true) {

              echo "
                                 <div class=\"alert alert-success alert-dismissible\" style=\"width:400px;\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-check\"></i> Alert !</h4>
                                     Facture envoyé avec succès !
                                  </div> 

                                 ";
            } else {

              echo "
                                  <div class=\"alert alert-danger alert-dismissible\" style=\"width:400px;\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert !</h4>
                                    Echec d'envoi, veuillez recommencer !
                                  </div>

                                   ";
            }
          } else {

            echo "
                                   <div class=\"alert alert-danger alert-dismissible\" style=\"width:400px;\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                        <h4><i class=\"icon fa fa-ban\"></i> Alert !</h4>
                                        Cette facture existe déja !
                                    </div>

                            ";
          }
        }


        ?>

        <!-- fin table bonus -->


        <!-- /.box-header -->
        <form action=" " method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
              <div class="col-md-5">

                <?php

                $bd = new ConnectDB();
                $email = $_GET["reference_Facture"];
                $req = $bd->bdd->query("SELECT * FROM client WHERE email_cli = '" . $email . "' ")
                  or die(mysql_error());
                $rep = $req->fetch();

                ?>


                <div class="form-group">
                  <label>Client</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="login" value=" <?php echo  $email; ?> " readonly>
                  </div>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                  <label> Entrer la facture à envoyer </label>
                  <div class="form-inline">
                    <button type="button" style="color: #0d5c5d;background-color: #78bf92;font-size: 15px;line-height: 1.5;padding:5px 10px;border-radius: 4px;border: 0;overflow: hidden;width:150px;height:40px;">
                      <p><i class="fa fa-upload"></i> choisir un fichier
                        <input type="file" required name="file" style="cursor: pointer;transform: scale(3);opacity:0;">
                      </p>
                    </button>
                    <!-- <input type="file" name="file" class="form-control" required>
                              <button class="btn btn-primary" > <i class="fa fa-file-pdf-o"></i></button> -->
                  </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-location-arrow"></i> Envoyé </button>
                  <button type="reset" style="margin-left:10px;" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Annuler </button>
                </div>


        </form><br />




        <!--  </div> -->
        <!-- /.box -->

      </section>
      <!-- /.content -->
      <div class="clearfix"></div>
    </div>
    <!-- /.content-wrapper -->
    <!-- Fin Content wrapper -->



    <!-- Pied de page -->
    <?php include_once 'pages_utiles/main-footer.php'; ?>
    <!-- Fin Pied de page -->


    <!-- Control Sidebar -->
    <?php include_once 'pages_utiles/control-sidebar.php'; ?>
    <!-- Fin Control Sidebar -->



    <div class="control-sidebar-bg"></div>

  </div>

  <!-- Script javascript et Jquery -->
  <?php include_once 'pages_utiles/script_pied.php'; ?>
  <!-- Fin Script javascript et Jquery -->

</body>

</html>