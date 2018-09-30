 <?php
 include_once("../modulos/login/security.php");    
?>    
<div class="container">
	<h1 align="center">Configuracion de Ediciones</h1>     
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
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalConfiguraciones">Nuevo
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
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Edicion</th>
			      <th scope="col">Vertical</th>
			      <th scope="col">Fase</th>
			      <th scope="col">Equipos</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Edicion 1 </td>
			      <td>Agroeconomia</td>
			      <td>fase 1</td>
			      <td>5</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarConfiguraciones">	 
			      	 </button>

			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarConfiguraciones"></button>
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
	<div class="modal fade" id="ModalConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Nueva Configuración </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form>
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="Vertical">Vertical</label>
			  </div>
			  <select class="custom-select" id="Vertical">
			    <option selected>Selecciona...</option>
			    <option value="1">Vertical 1</option>
			    <option value="2">Vertical 2</option>
			    <option value="3">Vertical 3</option>
			  </select>
			</div>
			<div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="Fases">Fase</label>
			  </div>
			  <select class="custom-select" id="Fases">
			    <option selected>Selecciona...</option>
			    <option value="1">Primera</option>
			    <option value="2">Segunda</option>
			    <option value="3">Tercera</option>
			  </select>
			</div>
			<div>
		      <label class="sr-only" for="nEquipos">Username</label>
		      <div class="input-group">
		        <div class="input-group-prepend">
		          <div class="input-group-text">Equipos Limite</div>
		        </div>
		        <input type="number"  class="form-control col-sm-3" id="nEquipos" placeholder="5">
		      </div>
		    </div>
				 		
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success" id="GuardarHack">Registrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	 
	<!-- Editar -->
	<div class="modal fade" id="EditarConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Configuración</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
			  <form>
				<div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="Vertical">Vertical</label>
				  </div> 
      				<input type="text" class="form-control" placeholder="Vertical 1" disabled>
				</div>
				<div class="input-group mb-3"> 
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="Fases">Fase</label>
				  </div>
				  <select class="custom-select" id="Fases">
				    <option selected>Selecciona...</option>
				    <option value="1">Primera</option>
				    <option value="2">Segunda</option>
				    <option value="3">Tercera</option>
				  </select>
				</div>
				<div>
			      <label class="sr-only" for="nEquipos"></label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text">Equipos Limite</div>
			        </div>
			        <input type="number"  class="form-control col-sm-3" id="nEquipos" placeholder="5">
			      </div>
			    </div>
				 		
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success" id="ActualizarHack">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Eliminar -->	
 
	<div class="modal fade" id="EliminarConfiguraciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar Configuración</h5>	      
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
	

 