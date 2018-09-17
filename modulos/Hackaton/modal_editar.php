<script type="text/javascript">
EditarHackaton = function(id,edicion,inicio,limite,fin){
	 $('#idedicion').val(id);
     $("#Edicion").val(edicion);
     $("#InicioHack").val(inicio);
     $("#EntregaProyectos").val(limite);
     $("#FinHack").val(fin);
}
</script>
<!-- Editar -->

	<div class="modal fade" id="EditarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form method="POST">
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
	       	<form method="post" >
			  <div class="form-group">
			  	<input type="hidden" class="form-control" id="idedicion" name="idedicion">
			    <label for="inputNombre">Edicion</label>
			    <input type="text" class="form-control" id="Edicion" name="Edicion" placeholder="Hackaton">
			  </div>
			  <div class="form-group">
			  	 <div class="form-row">
				    <div class="col">
				      <label class="label-control">Inicio Hackaton</label>
			   		  <input type="date" id="InicioHack" name="InicioHack" class="form-control " value=""/>
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
			    		<input type="date" id="FinHack" name="FinHack" class="form-control" value=""/>
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
	</form>
	</div>

	<?php 
	if(isset($_POST['idedicion'])){
	 require_once '../class/conexion.php';
 	  $con = new Conexion();
 	  $id      = $_POST['idedicion'];
 	 
      $edicion = $_POST['Edicion'];
     
      $inicio  = $_POST['InicioHack'];
      $limite  = $_POST['EntregaProyectos'];
      $fin     = $_POST['FinHack'];

      $sql = "UPDATE `hackatonedicion` SET `Edicion` = '$edicion', `InicioHackaton` = '$inicio', `FechLimiteRegProy` = '$limite', `TerminoHack` = '$fin' WHERE `hackatonedicion`.`id` = $id;";
      $contenido = $con->query($sql);
}
	?>