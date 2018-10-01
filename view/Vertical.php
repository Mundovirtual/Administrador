<?php
 include_once("../modulos/login/security.php");    
?>  
<script type="text/javascript">    
   $(document).ready(function() {
	    $('#DatosVertical').DataTable();
	} );
</script>

<script src="../js/jquery.validate.min.js"></script> 
<script src="../modulos/vertical/ValidatorVertical.js"></script>
<div class="container">
	<h1 align="center">Verticales</h1>  
	<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalVertical">Nuevo
				</button>
	</div>	   
</div>
 
 
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10" id="TablaVertical" class="displayVertical">
			 
			 <table id="DatosVertical" class="display table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Asesorias</th>
			      <th scope="col">Hackaton</th>
			      <th></th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">2</th>
			      <td>Vertical 1</td>
			      <td>Herramienta de análisis y monitoreo....</td>
			      <td>Subsecretaria de ....</td>
			      <td>Primera Edición</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#editarVertical">	 
			      	 </button>
					</td>
						<td>
			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarVertical"></button>
			      </td>
			      
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Vertical 1</td>
			      <td>Herramienta de análisis y monitoreo....</td>
			      <td>Subsecretaria de ....</td>
			      <td>Primera Edición</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#editarVertical">	 
			      	 </button>
					</td>
						<td>
			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarVertical"></button>
			      </td>
			      
			    </tr>	
			    <tr>
			      <th scope="row">1</th>
			      <td>Vertical 1</td>
			      <td>Herramienta de análisis y monitoreo....</td>
			      <td>Subsecretaria de ....</td>
			      <td>Primera Edición</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#editarVertical">	 
			      	 </button>
					</td>
						<td>
			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarVertical"></button>
			      </td>
			      
			    </tr>				     
			  </tbody>
			</table> 
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>

	<!-- REGISTRO -->
	<div class="modal fade" id="ModalVertical" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Registro de Verticales</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form class="form" id="RV" method="POST">
			  <div class="form-group">
			    <label>Nombre*</label>
			    <input type="text"  minlength="8" maxlength="45" id="NombreVertical" class="form-control letras" placeholder="Vertical" required>
			  </div>
			  <div class="form-group">
			    <label >Descripcion*</label>
			    <textarea class="form-control letras" id="DescripcionVertical" rows="2" placeholder="Descripcion" minlength="10" maxlength="80" required ></textarea>
			  </div>
			  <div class="form-group">
			    <label>Asesoria*</label>
			    <textarea class="form-control" id="AsesoriaVertical letras" required rows="2" placeholder="Asesoria" minlength="10" maxlength="80" ></textarea>
			  </div>
			    <div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text">Edición</label>
				  </div>
				  <select  class="custom-select" id="EdicionVertical">
				    <option selected required>Selecciona...</option>
				    <option value="1">Hackaton 1</option>
				    <option value="2">Hackaton 2</option>
				    <option value="3">Hackaton 3</option>
				  </select>
				</div>
				
				<div class="modal-footer">
			        <button type="button"class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			        <button type="submit" id="RegistroVertical" class="btn btn-success">Registrar</button>	
			        
			        <script type="text/javascript">
			        	$("#RegistroVertical").validate();
			        </script>	        
			        
			    </div>	
			 
			</form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	 
	<!-- Editar -->
	<div class="modal fade" id="editarVertical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Vertical</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form>
			  <div class="form-group">
			    <label for="inputNombre">Nombre</label>
			    <input type="text" class="form-control" id="inputNombre" placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Descripcion</label>
			    <textarea class="form-control" id="Descripcion" rows="2" placeholder="Descripcion"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Asesoria</label>
			    <textarea class="form-control" id="Asesoria" rows="2" placeholder="Asesoria"></textarea>
			  </div>
		    <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Hackaton</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option selected>Selecciona...</option>
			    <option value="1">Hackaton 1</option>
			    <option value="2">Hackaton 2</option>
			    <option value="3">Hackaton 3</option>
			  </select>
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
 
	<div class="modal fade" id="EliminarVertical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar Vertical</h5>	      
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
 
 