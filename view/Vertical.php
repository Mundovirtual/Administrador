<?php
 include_once("../modulos/login/security.php"); 
 include_once("../class/Vertical.php"); 
 include_once("../class/Hackaton.php"); 
?>  



 <div class="container">
	<h1 align="center">Verticales</h1>  
	<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalVertical">Nuevo
				</button>
	</div>	   
</div>
 	
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			 
			 <table id="MostrarVertical" class="table display">
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
			  	<?php 

					$con=new Vertical();
					$datos=$con->mostrarDatos();
				  	foreach ($datos as $key) {				  		
				  		?>
					<tr>
 
				      <td><?php echo $key[1];?></td>
				      <td><?php echo $key[2];?></td>
				      <td><?php echo $key[3];?></td>
				      <td><?php echo $key[4];?></td> 
				      <td>
				      	<button type="button" id="editarVerticall" onclick="ActualizarVertical(<?php echo "'".$key[0]."','".$key[1]."','".$key[2]."','".$key[3]."','".$key[4]."'";?>)" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#editarVertical" value="<?php echo $key[0]; ?>""></button> 

					  </td>
					  <td>
				      	<button type="button" id="EliminarV"  class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarVertical" id="EliminarVerticalTabla" value="<?php echo $key[0];?>"></button>

				      </td>				     
				     <tr>
			     		

					 <?php	 		 
				 	}				 				 
			  	?> 
			  </tbody>
			</table> 
			
		</div>
		<div class="col-md-1">
		</div>
	</div>
 

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
			    <input type="text"  minlength="8" maxlength="45" id="NombreVertical"  name="NombreVertical" class="form-control letras" placeholder="Vertical" required="">
			  </div>
			  <div class="form-group">
			    <label >Descripcion*</label>
			    <textarea class="form-control letras" id="DescripcionVertical"  name="DescripcionVertical" rows="2" placeholder="Descripcion" minlength="10" maxlength="80" required="" ></textarea>
			  </div>
			  <div class="form-group">
			    <label>Asesoria*</label>
			    <textarea class="form-control letras" id="AsesoriaVertical "  name="AsesoriaVertical" required="" rows="2" placeholder="Asesoria" minlength="10" maxlength="80" ></textarea>
			  </div>
		      <div class="input-group mb-3"> 
			    <div class="input-group-prepend">
			      <label class="input-group-text">Edición</label>
			    </div>
			    <select  class="custom-select" id="EdicionVertical" name="EdicionVertical" required="">
			      <option selected>Selecciona...</option>
				  <?php 
				  $con=new Hackaton();
			       $datosH=$con->mostrarDatosHackaton(); 
				  foreach ($datosH as $key) {
				  	?>
				  	<option value="<?php echo $key["0"];?>"><?php echo $key["1"];?></option>
				  	<?php
				  }
			       ?> 
				   
			    </select>
			  </div>
			</div>
			  <div class="modal-footer">
		          <button type="button"class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		          <button type="submit" id="RegistroVertical" class="btn btn-success">Registrar</button>	 
		          
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
	       	<form class="form" id="EV" method="POST">
			  <div class="form-group">
			    <label for="inputNombre">Nombre</label> 
			    <input type="text" class="form-control" id="eNv" name="eNv" placeholder="Hackaton">
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Descripcion</label>
			    <textarea class="form-control" id="eDv" name="eDv" rows="2" placeholder="Descripcion"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Asesoria</label>
			    <textarea class="form-control" id="eAv" name="eAv" rows="2" placeholder="Asesoria"></textarea>
			  </div>
		    <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Hackaton</label>
			  </div>
			  <select required class="custom-select" id="eHv" name="eHv">
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
	        <button type="button" class="btn btn-success" id="ActualizarVertical" onclick="UpdateVertical()">Actualizar</button>
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
	        <button type="button" class="btn btn-danger" id="EliminarVer">Continuar</button>
	      </div>
	    </div>
	  </div>
	</div>
  <script src="../modulos/vertical/ValidatorVertical.js"></script>
  <script src="../modulos/vertical/cargartabla.js"></script>