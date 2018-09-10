<div class="container">
	<h1 align="center">Solicitudes de Jueces</h1>     
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
				  <td>442 545 45 54 </td> 
				  <td>Isaac@gmail.com</td> 	
				  <td>
					<a data-toggle="modal" data-target="#Detalles">
						<i class="fa fa-eye fa-2x" align="center" aria-hidden="true">
						</i>
					</a>			      	
				  </td> 
				  <td>
					<button type="button" class="btn btn-success fa fa-check" data-toggle="modal" data-target="#EditarJueces"> Aceptar	 
					 </button>

					<button type="button" class="btn btn-danger fa fa-trash" data-toggle="modal"  data-target="#EliminarJueces"> Rechazar</button>
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
<div class="modal fade" id="Detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Juez</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">

		<div class="form-row">
			<div class="col-md-7">
			  <label for="Nombre">Nombre</label>
			  <input type="text" class="form-control" id="NombreJuez" placeholder="First name" value="Isaac Santiago Coronel" disabled="">
			</div>
			<div class="col-md-5">
			  <label for="Telefono">Telefono</label>
			  <input type="text" class="form-control" id="Telefono" value="953 455 54 45" disabled="">
			</div>		     
		</div>

		<div class="form-row">
			<div class="col-md-7">
			  <label for="Correo">Correo</label>
			  <input type="text" class="form-control" id="Correo" value="isaacasd32@gmail.com" disabled="">
			</div>
			<div class="col-md-5">
			  <label for="FechaNacimiento">Fecha de nacimiento</label>
			  <input type="text" class="form-control" id="FechaNacimiento" value="02/12/1995" disabled="">
			</div>		     
		</div>

		<div class="form-row">
			<div class="col-md-10">
			  <label for="Institucion">Institución</label>
			  <input type="text" class="form-control" id="Institucion" value="Instituto Tecnológico de Tlaxiaco" disabled="">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-10">
			  <label for="Carrera">Carrera</label>
			  <input type="text" class="form-control" id="Carrera" value="Ingenieria en sistemas computacionales" disabled="">
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
 



 