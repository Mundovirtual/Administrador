<?php
  include_once("../modulos/enrutador.php");   
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>    
    <!-- Bootstrap CSS--> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet"> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>
    <!-- Jquery js--> 
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="../css/poppins.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.apple-icon.png">
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">          
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand -->
                <a href="../view/index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>HACKATON </span><strong>Admin</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">       
                <!-- Logout    -->
                <li class="nav-item"><a href="../index.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-in"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header> 

      <div class="page-content d-flex align-items-stretch"> 
        
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><i class="fas fa-user-astronaut fa-4x"></i></div>
            <div class="title">
              <h1 class="h4">Isaac Santiago Coronel</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">     
          <!-- Menu Registros -->        
            <li><a href="#Registros" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-plus"></i>Registro </a>
              <ul id="Registros" class="collapse list-unstyled ">
                <li><a href="../view/index.php?cargar=1">Hackaton</a></li>
                <li><a href="../view/index.php?cargar=2">Vertical</a></li>
                <li><a href="../view/index.php?cargar=3">Configuraciones</a></li>
                <li><a href="../view/index.php?cargar=4">Rubricas</a></li> 
              </ul>
            </li>
          <!-- Menu Monitoreo --> 
             <li><a href="#Monitoreo" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-laptop"></i>Monitoreo </a>
              <ul id="Monitoreo" class="collapse list-unstyled ">                
                  <li><a href="../view/index.php?cargar=6">Proyectos</a></li>   
                  <li><a href="../view/index.php?cargar=7">Hackers</a></li>
                  <li><a href="../view/index.php?cargar=8">Jueces</a></li>
                  <li><a href="../view/index.php?cargar=9">Calificaciones</a></li>
              </ul>
            </li>    
          <!-- Menu solicitudes -->        
            <li>
              <a href="../view/index.php?cargar=5" aria-expanded="false"> 
                <i class="fa fa-bell"></i>Solicitudes 5 </a>
            </li>          
          </ul>         
        </nav>

        <div class="content-inner">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                 <section class="dashboard-counts no-padding-bottom">
                  <?php  
                    $enrutador =new enrutador();                    
                        
                    if ($enrutador->validarGET($_GET['cargar'])) { 
                          $enrutador->cargarVista($_GET['cargar']);
                       } 
                  ?>             
                </section> 
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
     
    <script src="../js/Bootstrap/bootstrap.min.js"></script> 
  </body>    
</html> 
 

