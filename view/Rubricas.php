 
<div class="container">
	<h1 align="center">Criterios de evaluación</h1></br>  
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-3">
 			 <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="Hackaton">Hackaton</label>
			  </div>
			  <select class="custom-select" id="Hackaton">
			    <option selected>Seleccione...</option>
			    <option value="1">Hackaton 1</option>
			    <option value="2">Hackaton 2</option>
			    <option value="3">Hackaton 3</option>
			  </select>
			</div>
 		</div>
 		<div class="col-md-3">
 			 <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="Vert">Vertical</label>
			  </div>
			  <select class="custom-select" id="Vert">
			    <option selected>Seleccione...</option>
			    <option value="1">Vertical 1</option>
			    <option value="2">Vertical 2</option>
			    <option value="3">Vertical 3</option>
			  </select>
			</div>
 		</div>
	 	<div class="col-md-5">
			<form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			    <button class="btn btn-outline-success my-1 my-sm-0 fas fa-search" type="submit">Buscar</button>
			 </form>
		</div>
		<div class="col-md-1">
			<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalRubricas">Nueva
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
			      <th scope="col">Pregunta</th> 
			      <th scope="col">Acciones</th> 
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      	<td>Un hombre puede imaginar cosas que son falsas, pero sólo puede entender cosas que son ciertas??
 					</td>
			       
			      <td>
			      	<button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarRubricas">	 
			      	 </button>

			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarRubricas"></button>
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
	<div class="modal fade" id="ModalRubricas" tabindex="-1" role="dialog" aria-labelledby="Editar" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-plus-circle"></i>Registro de Criterios de evaluación</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form>
		      	<div class="input-group mb-2"> 
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
				<p class="font-weight-bold" align="center">Ingresa los criterios de evaluación</p>   	
			   <div class="container"> 	                  
	                <div class="form-group">  	                       
                      <div class="table-responsive">  
                           <table class="table table-bordered" id="dynamic_field">  
                                <tr>  
	                                 <td><textarea type="text" rows="1" name="name[]" placeholder="Criterio de evaluación" class="form-control name_list" /></textarea></td>  
	                                 <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                                </tr>  
                           </table>                             
                      </div>  	                     
	                </div>  
	           </div> 			  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-success"  name="submit" id="submit">Registrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	 
	<!-- Editar -->
	<div class="modal fade" id="EditarRubricas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Criterio de evaluación</h5>
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

                <div class="form-group">  	                       
                   <input id="cEvaluacion" type="text" rows="2" value="HOla modificame"  class="form-control name_list" /></input>      
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
 
	<div class="modal fade" id="EliminarRubricas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 
  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><textarea type="text" rows="1" name="name[]" placeholder="Criterio de evaluación" class="form-control name_list" /></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 
 </script>
  <?php
  /*  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  `
 }  
 */?> 