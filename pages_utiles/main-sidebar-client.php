 <?php

  include_once './config/ConnectDB.php';

  ?>

 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar" style="background-color:#2a5651;">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">

       </div>
       <div class="pull-left info">
         <p> </p>
         <a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
       </div><br /><br />
     </div>

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header" style="background-color:#10333d; color:#29936d;">MENU PRINCIPALE</li>
       <li class="active treeview menu-open">
         <a href="stater.php" style="background-color:#10333d; border-left-color:#29936d;">
           <i class="fa fa-gear"></i> <span>Tableau de bord</span>
         </a>
       </li>

       <!-- ----------------------------------------------------client---------------------------------------------- -->


       <!-- Début paramètre -->

       <li class="treeview" style="background-color:#10333d;">
         <a href="#">

           <?php if (["email"]) {
              echo " <i class=\"fa fa-minus-square-o\"></i> 
		           <span> Comptes client</span>
		           <span class=\"label label-primary pull-right\" style=\"background-color:#36a980;\">5</span> ";
            } ?>
         </a>
         <ul class="treeview-menu" style="background-color:#2c413e;">

           <?php if (["email"]) {
              echo "
            <li><a href=\"ajouter_commande.php\"><i class=\"fa fa-plus\"></i> Ajouter une commande</a></li> ";
            } ?>

           <?php if (["email"]) {
              echo "
            <li><a href=\"liste_commande.php\"><i class=\"fa fa-plus\"></i> Liste des commandes</a></li> ";
            } ?>

           <?php if (["email"]) {
              echo "
            <li><a href=\"contrat_client.php\"><i class=\"fa fa-plus\"></i> Liste des contrats</a></li> ";
            } ?>

           <?php if (["email"]) {
              echo "
            <li><a href=\"liste_facture.php\"><i class=\"fa fa-plus\"></i> Liste de vos factures </a></li> ";
            } ?>

           <?php if (["email"]) {
              echo "
            <li><a href=\"recevoir_message.php\"><i class=\"fa fa-plus\"></i> Messages </a></li> ";
            } ?>


         </ul>
       </li>


       <!-- ----------------------------------------------client------------------------------------------------------------ -->

       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>