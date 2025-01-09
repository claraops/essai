 <?php 

  include_once './config/ConnectDB.php';  
  
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Panneau de commande
        
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li> -->
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
             <div class="pad margin no-print">
                <div class="callout callout-info" style="margin-bottom: 0!important;">
                   <h4>Note : <i class="fa fa-exclamation"></i>:</h4>
                    Effectuer une action 
                </div>
              </div>
            <div class="icon">
              <i class="fa fa-child"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">En Savoir <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      
     
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">



        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">

          <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Commandes</h3>

                  <p>1</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Télécharger une commande <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>

           <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Contrats</h3>

                  <p>2</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Contrats validés <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Factures</h3>

              <p>3</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
             Liste des factures <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
          
        </section>
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->