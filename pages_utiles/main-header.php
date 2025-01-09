 <?php

  include_once './config/ConnectDB.php';


  ?>




 <header class="main-header">

   <!-- Logo -->
   <a href="#" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini"><b>OREL</b>EXTECH</span>
     <!-- logo for regular state and mobile devices -->
     <span class="logo-lg"><b>OREL</b>EXTECH</span>
   </a>

   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top" style="background-color:#295281 ;">
     <!-- Sidebar toggle button-->
     <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
       <span class="sr-only">Toggle navigation</span>
     </a>
     <!-- Navbar Right Menu -->
     <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">

         <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <p>Date du jour: <span>

                 <?php
                  date_default_timezone_set('Africa/Bangui');
                  $datenow = date('d/m/Y');
                  $hours = date('H:i');

                  echo '<button type="button" class="btn bg-navy btn-flat margin"> <i class=\'fa fa-calendar\'></i> ' . $datenow . ' : <i class=\'fa fa-clock-o\'></i> ' . $hours . '</button>';
                  ?>

               </span></p>

           </a>

         </li>


         <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <img src="dist/img/comptes/" class="img-circle" width="38" height="40" />
             <span class="hidden-xs"></span>
           </a>
           <ul class="dropdown-menu">
             <!-- User image -->
             <li class="user-header">
               <img src="dist/img/comptes/" class="img-circle" width="38" height="40" />

              
             </li>

             <!-- Menu Footer-->
             <li class="user-footer">

               <div class="pull-right">
                 <a href="config/deconnexion.php" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-off"></i> D&eacute;connexion</a>
               </div>
             </li>
           </ul>
         </li>
         <!-- Control Sidebar Toggle Button -->

         <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">


         </li>
         <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
       </ul>
     </div>

   </nav>
 </header>