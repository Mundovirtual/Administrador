<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" type="png" href="../img/favicon.png">
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

  	<?php require_once 'ingresarHackaton.php'; ?>
<div class="container">
	<h1 align="center">Hackaton</h1>     
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-1"></div>
	 	<div class="col-md-5">
			<form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search" type="submit">Buscar</button>
			 </form>
		</div>
		<div class="col-md-6">
			<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalHackaton1"> Nuevo
				</button>
			</div>			 
		</div>
	</div>
 </header>
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			 <div class="visualizar">	
			 </div>
			 <div class="info">	
			 </div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</body>
<script type="text/javascript">
	$.ajax({
		 url: '../modulos/Hackaton/visualizar.php',
		 beforeSend:function(){
		 	$(".visualizar").html("<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'><i class='fas fa-times'></i><strong> Cargando datos !</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
		 },
		 success:function(respuesta){
		 	$(".visualizar").html(respuesta);
		 }
	})
</script>

	
	<!-- Editar -->
	<div class="modal fade" id="EditarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Datos</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!--EDITAR INFORMACION-->
	      <div class="modal-body">
	       	<form>
			  <div class="form-group">
			    <label for="inputNombre">Nombre</label>
			    <input type="text" class="form-control" id="inputNombre" placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			  	 <div class="form-row">
				    <div class="col">
				      <label class="label-control">Inicio Hackaton</label>
			   		  <input type="date" id="InicioHack" class="form-control " value=""/>
				    </div>
				    <div class="col">
				       <label class="label-control">Fecha Limite de Registros</label>
			    	   <input type="date" id="EntregaProyectos" class="form-control " value=""/>
				    </div>
				  </div>
			    
			  </div>			 
			  <div class="form-group" align="center">
			    <label class="label-control">Fin de Hackaton</label>
			    	<div class="col-md-6">
			    		<input type="date" id="FinHack" class="form-control" value=""/>
			    	</div>
			  </div>			  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success" id="ActualizarHack">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Eliminar -->	
 
	<div class="modal fade" id="EliminarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>	      
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <div class="modal-body">	      		
		<h1>Estás a punto de eliminar</h2>

		Quiere proceder?
	      	
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-danger" id="ActualizarHack">Continuar</button>
	      </div>
	    </div>
	  </div>	
	</div>
   
     
    <script src="../js/Bootstrap/bootstrap.min.js"></script> 
  </body>    
</html> 
 















	

 