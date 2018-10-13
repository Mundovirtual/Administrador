 <?php
 include_once("../modulos/login/security.php");  
 require_once("../modulos/Juez/juezjs.php"); 
?> 
 
<div class="container">
	<h1 align="center">Jueces
	</h1>     
</div>
 
 
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<table id="TablaJuezAceptado" class="table table-hover">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Nombre</th>
				  <th scope="col">Celular</th> 
				  <th scope="col">E-mail</th> 
				  <th scope="col">Detalles</th> 
				  <th scope="col">Editar</th> 
				  <th scope="col">Eliminar</th>
				   
				</tr>
			  </thead>
			  <tbody>
				 	     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>


<!-- Detalles -->
<div class="modal fade" id="detallesJueces" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Jueces</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">

		<div class="form-row">
			<div class="col-md-12">
			  <label for="password">password</label>
			  <input type="text" class="form-control" id="PasswordJuez" name="PasswordJuez"  disabled="">
			</div> 
		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Institucion">Institución</label>
			  <input type="text" class="form-control" id="InstitucionJuez" name="InstitucionJuez" disabled="">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Carrera">Carrera</label>
			  <input type="text" class="form-control" id="CarreraJuez" name="CarreraJuez"  disabled="">
			</div>
		</div>
		<div class="form-group">
			    <label for="Habilidades">Habilidades</label>
			    <textarea class="form-control" id="HabilidadesJuez" name="HabilidadesJuez" rows="2" disabled=""></textarea>
		</div>
		<div class="form-group">
			    <label for="Hobbies">Hobbies</label>
			    <textarea class="form-control" id="HobbiesJuez" name="HobbiesJuez" rows="2" disabled=""></textarea>
		</div>
		<div class="form-row">
			<div class="col-md-5">
			  <label for="FechaNacimiento">Fecha de nacimiento</label>
			  <input type="text" class="form-control" id="FechaNacimientoJuez" name="FechaNacimientoJuez" disabled="">
			</div>
			<div class="col-md-3">
			  <label for="Sexo">Sexo</label>
			  <input type="text" class="form-control" id="sexoJuez" name="sexoJuez" disabled="">
			</div>
			<div class="col-md-3">
			  <label for="Playera">Playera</label>
			  <input type="text" class="form-control" id="playeraJuez" name="playeraJuez" disabled="">
			</div>					     
		</div>

	<!--		 
		<span></span>
		<div class="form-row">
			<div class="col-md-4"> 					 
			</div>			    
			<div class="col-md-8">
				
				<a href="https://www.facebook.com/carlosmartinez123456789" target="_blank">
					<button type="button" class="btn btn-primary fab fa-facebook fa-1x" >
					</button>
				</a>	       
				<a href="https://twitter.com/ereschiste?lang=es" target="_blank">
					<button type="button" class="btn btn-info fab fa-twitter fa-1x" >
					</button>
				</a>
			</div>
		</div>
	-->
   </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
	  </div>
	</div>
  </div>
</div>

 
<!-- Editar -->
<div class="modal fade" id="EditarJueces" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Editar Datos</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body"> 
		<div class="form-row">
			<div class="col-md-12">
			<!--
			  <label for="password">password</label>
			-->
			  <input type="hidden" class="form-control" id="PaswJuez"  name="PaswJuez" disabled="" placeholder="Password">
			</div>

		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Celular">Celular</label>
			  <input type="tel" class="form-control" id="CelularJuez"  name="CelularJuez"  placeholder="Celular">
			</div>
		</div>	
		<div class="form-row">
			<div class="col-md-12">
			  <label for="password">Correo</label>
			  <input type="email" class="form-control" id="CorreoJuez"  name="CorreoJuez" placeholder="Correo">
			</div>
		</div>		      
	  </div>
		 

  
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
		<button type="button" class="btn btn-success"   onclick="actualizandoJuez()">Actualizar</button>
	  </div>
	</div>
  </div>
</div>
<!-- Eliminar -->	

<div class="modal fade" id="EliminarJueces" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-danger" onclick="EliminandoJuez()">Continuar</button>
      </div>
    </div>
  </div>
</div> 



 