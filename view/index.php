 <?php

 include_once("../modulos/login/security.php");
  include_once("../modulos/enrutador.php");   
    if (!isset($_GET['cargar'])) {
      $_GET['cargar']="";
  } 
 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.css">
         
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../js/malihu/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">

    <!-- Font Awesome CSS-->
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet"> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>    
    <!-- Alertyfy js-->
    <link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Data tables-->
    <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css">
    <script type="text/javascript" src="../js/DataTables/datatables.js"></script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><div class="fas fa-user-astronaut fa-2x"></div>
            <h3 class="h3"><?php echo $_SESSION['IdAdmin']; ?></h2><span>Administrador</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>I</strong><strong class="text-primary">H</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          
            <li><a href="../view/index.php?cargar=10" aria-expanded="false"> 
                <i class="fas fa-tachometer-alt"></i>Estado del Concurso </a>
            </li>                  
            <li>
                <a href="../view/index.php?cargar=11" aria-expanded="false"> 
                  <i class="fas fa-chalkboard-teacher"></i>Panel de control</a>
            </li>

           <li><a href="#Monitoreo" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-laptop"></i>Consultas </a>
              <ul id="Monitoreo" class="collapse list-unstyled ">                
                  <li><a href="../view/index.php?cargar=6">Proyectos</a></li>   
                  <li><a href="../view/index.php?cargar=7">Hackers</a></li>
                  <li><a href="../view/index.php?cargar=8">Jueces</a></li>
                  <li><a href="../view/index.php?cargar=9">Calificaciones</a></li>
              </ul>
            </li> 

            <li><a href="#Registros" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-plus"></i>Registros </a>
              <ul id="Registros" class="collapse list-unstyled ">
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
    </nav>
    <div class="page ">
      <!-- navbar-->
      <header class="header sticky-top">
        <nav class="navbar">
          <div class="container-fluid ">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                <a id="toggle-btn" href="#" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </a>
                 
                  <img src="../img/inovahackNavbar.png" height="20" width="100" align="center">
                
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>                     
                  </ul>
                </li>
                 
                <!-- Log out-->
                <li class="nav-item"><a href="../modulos/login/SesionClose.php" class="nav-link logout"> <span class="fas fa-sign-out-alt">Logout</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
         <div class="right_col" role="main" >
          <div>
            <?php
              $enrutador = new enrutador();
              
              if ($enrutador->validarGET($_GET['cargar'])) { 
                    $enrutador->cargarVista($_GET['cargar']);
                 } 
                 else{
                 echo "BienVenido";
                 }
            ?>
           
          </div>

        </div>
      </section>
      <footer class="main-footer ">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-sm-10">
              <p>El mejor modo de predecir el futuro es inventándolo. –Alan Key</p>
            </div>
            <div class="col-sm-2 text-right">
              <p>Equipo LABSOL</p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="../js/Bootstrap/bootstrap.min.js"></script>
    <script src="../js/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/alertifyjs/alertify.js"></script> 

    <!-- Main File-->
    <script src="../js/front.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

  </body>
</html>