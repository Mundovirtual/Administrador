 
<div class="container">
	<h1 align="center"> </i>Hackaton</h1>     
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-1"></div>
	 	<div class="col-md-5">
			<form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			 </form>
		</div>
		<div class="col-md-6">
			<div align="right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalHackaton">Nuevo
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
			      <th scope="col">Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>@mdo</td> 
			      <td>
			      	<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
			       
			      	<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
			      </td>
			      
			      
			    </tr>			     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="ModalHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i>Registro Hackaton</h5>
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
			   		  <input type="date" id="InicioHack" class="form-control datetimepicker" value="10/05/2016"/>
				    </div>
				    <div class="col">
				       <label class="label-control">Fecha Limite de Registros</label>
			    	   <input type="date" id="EntregaProyectos" class="form-control datetimepicker" value="10/05/2016"/>
				    </div>
				  </div>
			    
			  </div>			 
			  <div class="form-group" align="center">
			    <label class="label-control">Fin de Hackaton</label>
			    	<div class="col-md-6">
			    		<input type="date" id="FinHack" class="form-control datetimepicker" value="10/05/2016"/>
			    	</div>
			  </div>			  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" id="GuardarHack">Guardar</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>



 