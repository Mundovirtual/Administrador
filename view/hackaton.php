 
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
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalHackaton">Nuevo
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
			      <th scope="col">Inicio</th>
			      <th scope="col">Limite de registro</th>
			      <th scope="col">Fin</th>
			      <th scope="col">Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Primera Edicion</td>
			      <td>22/09/2018</td>
			      <td>30/09/2018</td>
			      <td>05/10/2018</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarHackaton">	 
			      	 </button>

			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarHackaton"></button>
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
	<div class="modal fade" id="ModalHackaton" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Registro Hackaton</h5>
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
			  <div class="form-group">
			   	<div class="form-row">
				     <div class="col">
						 <label class = "label-control">Fin de Hackaton</label>
						 <input type="text" id = "FinHack" class = "form-control">
				     </div>
						 <div class="col">
						 <label class = "label-control">Imagen Principal</label>
						 <input type="text" id = "imagen" class = "form-control">
						 </div>
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
	<div class="modal fade" id="EditarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Datos</h5>
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
	




 