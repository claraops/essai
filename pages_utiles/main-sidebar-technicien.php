 <?php

  include_once './config/ConnectDB.php';

  ?>

 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar" style="background:#152d42;">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">

       </div>
       <div class="pull-left info">
         <p></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
       </div><br /><br />
     </div>

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header" style="background:#0f2436;">MENU PRINCIPALE</li>
       <li class="active treeview menu-open">
         <a href="stater.php" style="background:#072031;">
           <i class="fa fa-diamond"></i> <span>Tableau de bord</span>
         </a>
       </li>

       <!-- ----------------------------------------------------Technicien---------------------------------------------- -->


       <!-- Début paramètre -->

       <li class="treeview">
         <a href="#" style="background:#072031;">

           <?php if ($_SESSION["fonction"] == "Technicien") {
              echo " <i class=\"fa fa-cog\"></i> 
		           <span> Espace analyse </span>
		           <span class=\"label label-primary pull-right\">3</span> ";
            } ?>
         </a>
         <ul class="treeview-menu">

           <?php if ($_SESSION["fonction"] == "Technicien") {
              echo "
            <li><a href=\"liste_commande-clients.php\"><i class=\"fa fa-plus\"></i> Télécharger les commandes </a></li> ";
            } ?>

           <?php if ($_SESSION["fonction"] == "Technicien") {
              echo "
            <li><a href=\"receptions_contrats.php\"><i class=\"fa fa-plus\"></i> Contrats validés </a></li> ";
            } ?>

           <?php if ($_SESSION["fonction"] == "Technicien") {
              echo "
            <li><a href=\"modifier_pass_technicien.php\"><i class=\"fa fa-plus\"></i> Mon compte </a></li> ";
            } ?>







         </ul>
       </li>


       <!-- ----------------------------------------------Technicien------------------------------------------------------------ -->




       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>