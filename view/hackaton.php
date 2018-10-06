 <?php
 include_once("../modulos/login/security.php");
 include_once("../class/Hackaton.php")    
 ?>  
 
<div class="container">
	<h1 align="center"> </i>Hackaton</h1>     
</div>
 
 <header>
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
 </header>
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Edicion</th>
			      <th scope="col">Inicio</th>
			      <th scope="col">Limite de registro</th>
			      <th scope="col">Fin</th>
			      <th scope="col">Imagen</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>			    
			   <?php
				/*SELECT `id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen` FROM `hackatonedicion` WHERE 1 */
					$Hackaton=new Hackaton();
					$Ver=$Hackaton->mostrarDatosHackaton();  
					foreach ($Ver as $key) {?>	
					<tr>					
				      <th scope="row"><?php echo $key[0] ?></th>
				      <td><?php echo $key[1]; ?></td>
				      <td><?php echo $key[2]; ?></td>
				      <td><?php echo $key[3]; ?></td> 
				      <td><?php echo $key[4]; ?></td>
				      <td><?php if ($key[5]=="null") echo ""; ?></td> 
				      <td>
				      	<button type="button" class="btn btn-primary fas fa-edit" onclick="ActualizarHackaton(<?php  echo "'".$key[0]."','".$key[1]."','".$key[2]."','".$key[3]."','".$key[4]."','".$key[5]."'"; ?>)" data-toggle="modal" data-target="#EditarHackaton">	 
				      	 </button>
					  </td>
					  <td>
				      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarHackaton"></button>
				      </td>
				     </tr>
					<?php
					}

				 ?>
			    			     
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
	       	<form class="form" id="ModalRegistroHackaton" method="POST" >
			  <div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" id="NombreHack" name="NombreHack"  placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			  	 <div class="form-row">
				    <div class="col">
				      <label class="label-control">Inicio Hackaton</label>
			   		  <input type="date" id="InicioHack" name="InicioHack"  class="form-control " value=""/>
				    </div>
				    <div class="col">
				       <label class="label-control">Fecha Limite de Registros</label>
			    	   <input type="date" id="EntregaProyectos" name="EntregaProyectos" class="form-control " value=""/>
				    </div>
				  </div>			    
			  </div>		 
			  <div class="form-group" align="center">
			  <label class="label-control">Fin de Hackaton</label>
		    	<div class="col-md-6">
		    		<input type="date" id="FinHack" name="FinHack" class="form-control" />
		    	</div>
			    <div class="col-md-6">
				   <label class="label-control" align="center">Imagen</label>	    			
				</div>	
			  </div>
			  <div class="form-group" >
			  	<input type="file" class="form-control-file" id="ImagenPrincipal" name="ImagenPrincipal"  accept=".jpg, .jpeg, .png">
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

	 
	<!-- Editar -->
	<div class="modal fade" id="EditarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Actualizar Datos</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form id="ModalEditarHackaton" class="form" method="POST">
			  <div class="form-group">
			    <label for="inputNombre">Nombre</label>
			    <input type="text" class="form-control" id="EditarNombreHack" name="EditarNombreHack" placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			  	 <div class="form-row">
				    <div class="col">
				      <label class="label-control">Inicio Hackaton</label>
			   		  <input type="date" id="EditarInicioHack" name="EditarInicioHack" class="form-control " value=""/>
				    </div>
				    <div class="col">
				       <label class="label-control">Fecha Limite de Registros</label>
			    	   <input type="date" id="EditarEntregaProyectos" name="EditarEntregaProyectos" class="form-control " value=""/>
				    </div>
				  </div>
			    
			  </div>	
			  <label class="label-control">Fin de Hackaton</label>
		    	<div class="col-md-6">
		    		<input type="date" id="EditarFinHack" name="EditarFinHack" class="form-control" />
		    	</div>
			    <div class="col-md-6">
				   <label class="label-control" align="center">Imagen</label>	    			
				</div>	
			 
			  <div class="form-group" >
			  	<input type="file" class="form-control-file" id="EditarImagenPrincipal" name="EditarImagenPrincipal"  accept=".jpg, .jpeg, .png">
			  </div>				 			  
 

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success" id="ActualizarHack" onclick="UpdateHackaton()">Actualizar</button>
	      </div>	
	    </form>
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
	        <button type="button" class="btn btn-danger" id="ActualizarHack">Eliminar</button>
	      </div>
	    </div>
	  </div>
	</div>
  <script src="../modulos/hackaton/Hackaton.js"></script>	




 