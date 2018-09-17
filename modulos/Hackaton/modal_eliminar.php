 <script type="text/javascript">
 	EliminarHackaton = function(id,edi){
 		$('#Eliminar').val(id);
    $('#e').val(edi);
    alert(edi);
 	}
 </script>

 <div class="modal fade" id="EliminarHackaton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form method="POST" action="" >
        <div class="modal-dialog" role = "document">
            <div class="modal-dialog" role="document">
            
                <div class="modal-content">
                    <div class="modal-header">
	      	             <input type="hidden" name="Eliminar" id="Eliminar">
	                     <h5 class="modal-title" id="eliminar1" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>	      
	                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                     </button>
	                </div>
                     <div class="modal-body">	      		
		                <h1>Estás a punto de eliminar </h1>
		                      Quiere proceder?

	                 </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Aceptar</button>
                    </div>

                </div>
            </div>
        </div>
         
	</form>
</div>
 <?php 
if(isset($_POST['Eliminar'])){
	 require_once '../class/conexion.php';
 	 $con = new Conexion();
 		
      $id = $_POST['Eliminar'];

      $sql = "DELETE FROM `hackatonedicion` WHERE `hackatonedicion`.`id` = $id";
      $contenido = $con->query($sql);
    
}

 ?>