<?php
  include_once("../modulos/enrutador.php");
  include_once("../modulos/controlador.php");
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
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
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
                <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>HACKATON </span><strong>Admin</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">            
                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
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
            <div class="avatar"><img src="../img/city.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Mark Stephen</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
             
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Registro </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Hackaton</a></li>
                <li><a href="#">Vertical</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>
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
    <!-- JavaScript files-->
    <script src="../js/jquery/jquery.min.js"></script> 
    <script src="../js/Bootstrap/bootstrap.min.js"></script> 
  </body>    
</html> 
 

