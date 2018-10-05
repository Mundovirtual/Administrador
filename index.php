@@ -1,83 +0,0 @@
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" /> 
  <link rel="icon" type="../image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>InnovaHack Admin</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="css/indexLogin.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
  <!-- CSS Files -->
  <link href="css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/login.css" rel="stylesheet" />

</head>

<body class="login-page sidebar-collapse">
   
  <div class="page-header header-filter" style="background-image: url('img/innovahack.png'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" id="Login" method="POST">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Iniciar sesión</h4>
                <div class="profile-photo-small">
                	<img src="img/user.svg" class="rounded-circle img-fluid" width="60" height="60">
                </div>
              </div>
               
              <div class="card-body">
                 
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="text" id="Usuario" name="Usuario" class="form-control" placeholder="Email">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" id="Password" name="Password" class="form-control " placeholder="Password">
                </div>
              </div>
               
              <div class=" text-center">
              	<button class="btn btn-primary	btn-round " type="submit">Entrar</button> 
              </div>

              <div id="ErrorLogin" align="center"> 
                <span class="text-danger"><h4><dt>Datos de ingreso no válidos, inténtelo de nuevo por favor</dt></h4></span> 
            </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
 
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="js/plugins/jquery.sharrre.js" type="text/javascript"></script> 
  <script src="modulos/login/login.js"></script>
  
</body>

</html>