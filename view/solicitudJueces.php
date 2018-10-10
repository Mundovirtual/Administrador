 <?php
 include_once("../modulos/login/security.php");    
?>   
<div class="container">
	<h1 align="center">Solicitud de Jueces</h1>     
</div>
 
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<table id="MostrarJueces" class="table table-hover">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Nombre</th>
				  <th scope="col">Celular</th>
				  <th scope="col">E-mail</th> 
				  <th scope="col">Detalles</th>
				  <th scope="col">Aceptar</th>
				  <th scope="col">Rechazar</th>
				</tr>
			  </thead>
			  <tbody>
 			     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>
 
<!-- Detalles -->
<div class="modal fade" id="Detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Juez</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">

		<div class="form-row">
			<div class="col-md-7">
			  <label for="Nombre">Nombre</label>
			  <input type="text" class="form-control" id="NombreJuez" Name="NombreJuez" placeholder="First name"  disabled="">
			</div>
		     <div class="col-md-5">
			  <label >Fecha de nacimiento</label>
			  <input type="text" class="form-control" id="FechaNacimientoJuez" name="FechaNacimientoJuez"  disabled="">
			</div>	 
		</div>

		<div class="form-row">
			<div class="col-md-7">
			  <label for="Correo">Correo</label>
			  <input type="text" class="form-control" id="CorreoJuez" name="CorreoJuez" disabled="">
			</div>
				     
		</div>

		<div class="form-row">
			<div class="col-md-12">
			  <label >Institución</label>
			  <input type="text" class="form-control" id="InstitucionJuez"  name="InstitucionJuez" disabled="">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-12">
			  <label >Carrera</label>
			  <input type="text" class="form-control" id="CarreraJuez" name="CarreraJuez" disabled="">
			</div>
		</div> 
		 
   	</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
	  </div>
	</div>
  </div>
</div>
 
	<!-- Aceptar -->	
 
	<div class="modal fade" id="AceptarJuez" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Aceptar solitud</h5>	      
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <div class="modal-body">	      		
			<h1>Estás a punto de aceptar</h1> 
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success"  onclick="Aceptado()">Continuar</button>
	      </div>
	    </div>
	  </div>
	</div>
 
	<!-- Eliminar -->	
 
	<div class="modal fade" id="EliminarJuez" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar Juez</h5>	      
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <div class="modal-body">	      		
		<h1>Estás a punto de eliminar </h1> 
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-danger"  onclick="Rechazar()">Continuar</button>
	      </div>
	    </div>
	  </div>
	</div>
 
<script src="../modulos/Juez/juez.js"></script>