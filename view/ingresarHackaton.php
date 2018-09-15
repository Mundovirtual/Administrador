
  	<form id="guardarDatosHackaton" method="post">
  		<div class="modal fade" tabindex="-1" id="ModalHackaton1" role = "dialog" aria-LabelLebby = "registrar" aria-hidden = "true">
  			<div class="modal-dialog" role = "document">
  				<div class="modal-content">
  					<div class="modal-header">
  						<h5 class="modal-title" id="registrar"><i class="fas fa-plus-circle"></i>Registro Hackaton</h5>
	                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                         <span aria-hidden="true">&times;</span>
	                     </button>
  					</div>

  					<div class="modal-body">
  						 <div class="form-group">
			                <label >Edición : <span class="text-danger">Required</span> </label>
			                <input type="text" class="form-control" name="edicion" placeholder="Hackaton">
			             </div>
			
			         <div class="form-group">
			  	         <div class="form-row">
				             <div class="col">
				                 <label class="label-control">Inicio Hackaton <span class="text-danger">Required</span></label>
			   		             <input type="date" id="inicio" name="inicio" class="form-control " value=""/>
				             </div>
				             <div class="col">
				                 <label class="label-control">Fecha Limite <span class="text-danger">Required</span></label>
			    	             <input type="date" id="limite" name="limite" class="form-control " value=""/>
				             </div>
				         </div>
			    
			         </div>			 
			         <div class="form-group">
			   	         <div class="form-row">
				             <div class="col">
						         <label class = "label-control">Fin Hackaton <span class="text-danger">Required</span></label>
						         <input type="date" id = "fin" name="fin" class = "form-control">
				             </div>
						     <div class="col">
						         <label class = "label-control">Imagen Principal2</label>
						         <input type="text" id = "imagen" name="imagen" class = "form-control">
						     </div>
				         </div>
			         </div>	
			         <div class="form-group">
			             <div class="mensaje">
				  	
				         </div>
			         </div>
			  	             
			       
  					</div>

  					 <div class="modal-footer">
	                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	                     <button type="submit" class="btn btn-success" id="re">Registrar</button>
	                 </div>	
  				</div>
  			</div>
  		</div>
  	</form>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#guardarDatosHackaton').submit(function(event){
    			var valor = $(this).serialize();
    			$.ajax({
		 url: 'registrohackaton.php',
		 type:'post',
		 data:valor,
		 beforeSend:function(){
		 	$(".mensaje").html("<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'><i class='fas fa-times'></i><strong> Cargando datos !</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
		 },
		 success:function(respuesta){
		 	$(".mensaje").html(respuesta);
		 }
	        })
    			event.preventDefault();

    		})
    	})
    	 
    	
    </script> 
