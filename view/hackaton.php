 <?php
 include_once("../modulos/login/security.php");
 include_once("../class/Hackaton.php")    
 ?>  
 
<div>
	<div class="container">
	<h1 align="center">Hackaton</h1>     
</div>
 
 
<div class="d-flex"> 
	<div class="col-md-1"></div>
	<div class="col-md-5">	 
	</div>
	<div class="col-md-6">
		<div align="right">
			<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalHackaton">Nuevo
			</button>
		</div>			 
	</div>
</div>
   
 <div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
		<table id="MostrarHackaton" class="table display">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Edicion</th>
		      <th scope="col">Inicio</th>
		      <th scope="col">Limite de registro</th>
		      <th scope="col">Fin</th> 
		      <th scope="col"></th>
		      <th scope="col"></th>

		    </tr>
		  </thead>		   
		  <tbody>
		  </tbody>
		</table>		
	</div>	 
</div>

	<!-- REGISTRO -->
<div class="modal fade" id="ModalHackaton" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	 	    <div class="modal-header">
	    	    <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Registro Hackaton</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        </div>
	      	<div class="modal-body">
	       		<form class="form" id="ModalRegistroHackaton" method="POST" >
					<div class="form-group">
					    <label>Edicion</label>
					    <input type="text" class="form-control"  minlength="5" maxlength="45" id="NombreHack" name="NombreHack"  placeholder="Edición" required="">
					</div>
					<div class="form-group">
					  	<div class="form-row">
						    <div class="col">
						      <label class="label-control">Inicio Hackaton</label>
					   		  <input type="date" id="InicioHack" name="InicioHack"  class="form-control " value="" required="" />
						    </div>
						    <div class="col">
						       <label class="label-control">Fecha Limite de Registros</label>
					    	   <input type="date" id="EntregaProyectos" name="EntregaProyectos" class="form-control " value="" required="" />
						    </div>
						</div>			    
				    </div>
       			    <div class="form-group" align="center">
					  <label class="label-control">Fin de Hackaton</label>
				    	<div class="col-md-6">
				    		<input type="date" id="FinHack" name="FinHack" class="form-control"  required="" />
				    	</div>			 	
					</div>
	    		    <div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			        	<button type="submit" class="btn btn-success" id="GuardarHack">Registrar</button>
			      	</div>
	  	 		</form>
	    	</div>
	  </div>
	</div>
</div>
	 
	<!-- Editar -->
	
<div class="modal fade" id="EditarHackaton" tabindex="-1" role="dialog"  >
    <div class="modal-dialog" role="document">
	    <div class="modal-content">
	        <div class="modal-header">
		        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Actualizar Hackaton</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        </div>
	     
	    	<div class="modal-body">
		       	<form id="ModalEditarHackaton">
				 	<div class="form-group">
				    	<label for="inputNombre">Edición</label>
				    	<input type="text" minlength="5" maxlength="45" class="form-control" id="EditarNombreHack" name="EditarNombreHack" placeholder="Edición" required="">
				 	</div>
				  	<div class="form-group">
				  		<div class="form-row">
						    <div class="col">
						      <label class="label-control">Inicio Hackaton</label>
					   		  <input type="date" id="EditarInicioHack" name="EditarInicioHack" class="form-control " required="" value=""/>
						    </div>

						    <div class="col">
						       	<label class="label-control">Fecha Limite de Registros</label>
					    	   	<input type="date" id="EditarEntregaProyectos" name="EditarEntregaProyectos" class="form-control " value="" required="" />
						    </div>
					    </div>
				    </div>

				   	<label class="label-control">Fin de Hackaton</label>
			    	<div class="col-md-6">
			    		<input type="date" id="EditarFinHack" name="EditarFinHack" class="form-control" required="" />
			    	</div>
				    <div class="col-md-6">
					  
					</div>	
				 </form>
			</div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-success" id="ActualizarHackk" onclick="ActualizandoHackaton()">Actualizar</button>
		    </div>	
    	</div>
    </div>	
</div>
 

<div class="modal fade" id="EliminarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
	    <div class="modal-content">
     	    <div class="modal-header">
		        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>	      
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      	</div>
		    <div class="modal-body">	      		
				<h1>Estás a punto de eliminar</h1> 
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-danger" id="bEliminarHackaton">Continuar</button>
		    </div>
 		</div>
 	</div>
</div>	


<script src="../modulos/hackaton/Hackaton.js"></script>
</div>