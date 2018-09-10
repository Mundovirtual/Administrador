<div class="container">
	<h1 align="center">Tripulación
	</h1>     
</div>
 
 <header>
	<div class="d-flex"> 
		<div class="col-md-1"></div>
		<div class="col-md-6">
			
		</div>
		<div class="col-md-5">
			 <form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0 fas fa-search" type="submit">Buscar</button>
			 </form>

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
				  <th scope="col">Nombre</th>
				  <th scope="col">Celular</th> 
				  <th scope="col">E-mail</th> 
				  <th scope="col">Detalles</th> 
				  <th scope="col">Acciones</th> 
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Isaac Santiago Coronel</td>
				  <td>953 456 45 45</td>
				  <td>Isaaaaaaaaaaaaac@gmail.com</td> 	
				  <td>
					<a data-toggle="modal" data-target="#DetallesHacker">
						<i class="fa fa-eye fa-2x" align="center" aria-hidden="true">
						</i>
					</a>			      	
				  </td> 
				  <td>
				 	 <button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarHacker">	 
			      	 </button> 
					<button type="button" class="btn btn-danger fa fa-trash" data-toggle="modal"  data-target="#EliminarHackers"> </button>
				  </td>
				  
				</tr>			     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>


<!-- Detalles -->
<div class="modal fade" id="DetallesHacker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Hacker</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">

		<div class="form-row">
			<div class="col-md-12">
			  <label for="password">password</label>
			  <input type="text" class="form-control" id="paswHacker" value="#$@$@#$@isac" disabled="">
			</div> 
		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Institucion">Institución</label>
			  <input type="text" class="form-control" id="Institucion" value="Instituto Tecnológico de san Miguel El grande" disabled="">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Carrera">Carrera</label>
			  <input type="text" class="form-control" id="Carrera" value="Ingeniería en Sistemas Computacionales " disabled="">
			</div>
		</div>
		<div class="form-group">
			    <label for="Habilidades">Habilidades</label>
			    <textarea class="form-control" id="Habilidades" rows="2" disabled="" value=""></textarea>
		</div>
		<div class="form-group">
			    <label for="Hobbies">Hobbies</label>
			    <textarea class="form-control" id="Hobbies" rows="2" disabled="" value=""></textarea>
		</div>
		<div class="form-row">
			<div class="col-md-5">
			  <label for="FechaNacimiento">Fecha de nacimiento</label>
			  <input type="text" class="form-control" id="FechaNacimiento" value="02/12/1995" disabled="">
			</div>
			<div class="col-md-3">
			  <label for="Sexo">Sexo</label>
			  <input type="text" class="form-control" id="sexo" value="Masculino" disabled="">
			</div>
			<div class="col-md-3">
			  <label for="Playera">Playera</label>
			  <input type="text" class="form-control" id="playera" value="Mediana" disabled="">
			</div>					     
		</div>

		 
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
   </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
	  </div>
	</div>
  </div>
</div>

 
<!-- Editar -->
<div class="modal fade" id="EditarHacker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			  <label for="password">password</label>
			  <input type="text" class="form-control" id="paswHackerEdit" value="#$@$@#$@isac" placeholder="Password">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12">
			  <label for="Celular">Celular</label>
			  <input type="tel" class="form-control" id="CelularEdit" value="953 145 54 54" placeholder="Celular">
			</div>
		</div>	
		<div class="form-row">
			<div class="col-md-12">
			  <label for="password">Correo</label>
			  <input type="email" class="form-control" id="paswHackerEdit" value="qIsaac@gmail.com" placeholder="Correo">
			</div>
		</div>		      
	  </div>
		 

  
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
		<button type="button" class="btn btn-success"  name="submit" id="submit">Registrar</button>
	  </div>
	</div>
  </div>
</div>
 

<!-- Eliminar -->	

<div class="modal fade" id="EliminarHackers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-danger" id="ActualizarHack">Continuar</button>
      </div>
    </div>
  </div>
</div> 



 <script type="text/javascript">
 	document.getElementById("Hobbies").value = "Billiards, billar.Bowling, juego de bolos, boliche.Brainteasers, acertijos.Camping, acampar.";
 	document.getElementById("Habilidades").value = "Flexibilidad/adaptabilidad. ...Habilidades comunicativas. ...Capacidad para resolver problemas. ...Creatividad. ...";
 </script>


 