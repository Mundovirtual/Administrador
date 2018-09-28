<script type="text/javascript">
 	$(document).ready(function() {
	    $('#TablaVertical').DataTable();
	    $('.displayVertical').dataTable();
	} );
 </script>
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
			<table class="displayVertical">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Pellido</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Isaac </td>
			            <td>Santiago</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			        <tr>
			            <td>Isaac </td>
			            <td>Coronel</td>
			        </tr>
			    </tbody>
			</table>
			<!--<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Asesorias</th>
			      <th scope="col">Hackaton</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Vertical 1</td>
			      <td>Herramienta de análisis y monitoreo....</td>
			      <td>Subsecretaria de ....</td>
			      <td>Primera Edición</td> 
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#editarVertical">	 
			      	 </button>

			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarVertical"></button>
			      </td>
			      
			    </tr>			     
			  </tbody>
			</table>-->	
			
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
	       	<form>
			  <div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" id="NombreVertical" placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			    <label >Descripcion</label>
			    <textarea class="form-control" id="DescripcionVertical" rows="2" placeholder="Descripcion"></textarea>
			  </div>
			  <div class="form-group">
			    <label>Asesoria</label>
			    <textarea class="form-control" id="AsesoriaVertical" rows="2" placeholder="Asesoria" ></textarea>
			  </div>
		    <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text">Edición</label>
			  </div>
			  <select class="custom-select" id="EdicionVertical">
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
	        <button type="button" class="btn btn-success" onclick="guardarVertical()">Registrar</button>
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
 
 <script type="text/javascript">
 	function guardarVertical(){
 		var Nombre=$("#NombreVertical").val;
 		var Descripcion=$("#DescripcionVertical").val;
 		var Asesoria=$("#AsesoriaVertical").val;
 		var Hack=$("#EdicionVertical").val;
 		$.ajax({
 			url: '/path/to/file',
 			type: 'default GET (Other values: POST)',
 			dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
 			data: {param1: 'value1'},
 		})
 		.done(function() {
 			console.log("success");
 		})
 		.fail(function() {
 			console.log("error");
 		})
 		.always(function() {
 			console.log("complete");
 		});
 		
 	}
 </script>