 <?php

  include_once './config/ConnectDB.php';

  ?>

 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">

       </div>
       <div class="pull-left info">
         <p><?php echo ["login"]; ?></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
       </div><br /><br />
     </div>

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MENU PRINCIPALE</li>
       <li class="active treeview menu-open">
         <a href="stater.php">
           <i class="fa fa-diamond"></i> <span>Tableau de bord</span>
         </a>
       </li>

       <!-- ----------------------------------------------------Administrateur---------------------------------------------- -->


       <li class="treeview">
         <a href="#">

           <?php

            if (["fonction"] == "Administrateur") {
              echo " <i class=\"fa fa-plug\"></i> 
		           <span> Comptes </span>
		           <span class=\"label label-primary pull-right\">6</span> ";
            } ?>
         </a>
         <ul class="treeview-menu">

           <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"admin_compte.php\"><i class=\"fa fa-plus\"></i> Admin Compte</a></li> ";
            } ?>

            <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"tech_compte.php\"><i class=\"fa fa-cog\"></i> Technicien Compte</a></li> ";
            } ?>

           <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"modifier_pass_admin.php\"><i class=\"fa fa-plus\"></i> Mon compte </a></li> ";
            } ?>
           <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"liste_clients.php\"><i class=\"fa fa-plus\"></i> Liste des clients </a></li> ";
            } ?>
           <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"listeCmd_clients.php\"><i class=\"fa fa-plus\"></i> Commandes clients </a></li> ";
            } ?>

             <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"contrat_client-admin.php\"><i class=\"fa fa-plus\"></i> liste des contrats </a></li> ";
            } ?>

            <?php if ($_SESSION["fonction"] == "Administrateur") {
              echo "
            <li><a href=\"liste_facture-admin.php\"><i class=\"fa fa-plus\"></i> liste des factures </a></li> ";
            } ?>


         </ul>
       </li>

       <!-- ----------------------------------------------Administrateur------------------------------------------------------------ -->





       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>