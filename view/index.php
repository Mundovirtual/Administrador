<?php
  include_once("../modulos/enrutador.php");    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Administrador</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.apple-icon.png">
    <!-- Bootstrap -->
    <link href="../js/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../js/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">        
    <!-- Custom Theme Style -->
    <link href="../js/build/css/custom.min.css" rel="stylesheet">

    <!-- Font Awesome CSS-->
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet"> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>
    <!-- Jquery js--> 
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Alertyfy js-->
    <script src="../js/alertifyjs/alertify.js"></script> 
    <link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    

    <!--Datatable-->
    <link rel="stylesheet" type="text/css" href="../js/DataTables/bootstrap.min.css"/>    
    <script type="text/javascript" src="../js/DataTables/datatables.min.js"></script> 

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title">
                <img src="../img/inovahackNavbar.png" height="30" width="180" >
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
               <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><i class="fas fa-user-astronaut fa-4x"></i></div>
                <div class="title">
                  <h1 class="h4">Isaac Santiago Coronel</h1>
                </div>
               </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../view/index.php?cargar=10" aria-expanded="false"> 
                      <i class="fas fa-tachometer-alt"></i>Estado del Concurso </a>
                  </li>                  
                  <li>
                      <a href="../view/index.php?cargar=11" aria-expanded="false"> 
                        <i class="fas fa-chalkboard-teacher"></i>Panel de control</a>
                  </li>

                  <li><a><i class="fa fa-laptop"></i>Consultas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../view/index.php?cargar=6">Proyectos</a></li>   
                      <li><a href="../view/index.php?cargar=7">Hackers</a></li>
                      <li><a href="../view/index.php?cargar=8">Jueces</a></li>
                      <li><a href="../view/index.php?cargar=9">Calificaciones</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-plus"></i> Registros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../view/index.php?cargar=1">Hackaton</a></li>
                      <li><a href="../view/index.php?cargar=2">Vertical</a></li>
                      <li><a href="../view/index.php?cargar=3">Configuraciones</a></li>
                      <li><a href="../view/index.php?cargar=4">Rubricas</a></li>
                    </ul>
                  </li> 
                  <li>
                    <a href="../view/index.php?cargar=5" aria-expanded="false"> 
                      <i class="fa fa-bell"></i>Solicitudes 5 </a>
                  </li> 

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
 
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        
         <?php  
                    $enrutador = new enrutador();
                    
                    if ($enrutador->validarGET($_GET['cargar'])) { 
                          $enrutador->cargarVista($_GET['cargar']);
                       } 


                  ?>   
        
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../js/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/vendors/bootstrap/dist/js/bootstrap.min.js"></script>      
    <!-- Custom Theme Scripts -->
    <script src="../js/build/js/custom.min.js"></script>
  
  </body>
</html>
