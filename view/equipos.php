 <div class="container">
	<h1 align="center">Equipos</h1></br>  
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-3">
 			 <div class="input-group mb-3"> 
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="HackatonEquipos">Hackaton</label>
			  </div>
			  <select class="custom-select" id="HackatonEquipos">
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
			    <label class="input-group-text" for="VertEquipo">Vertical</label>
			  </div>
			  <select class="custom-select" id="VertEquipo">
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
			      <th scope="col">Equipo</th> 
			      <th scope="col">Vertical</th>
			      <th scope="col">proyecto</th> 
			      <th scope="col">Detalles</th>
			      <th scope="col">Eliminar</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      	<td>Inge Juan</td>			      	 
			      	<td>Vertical 1</td>
			      	<td>Innovando3.0</td>
			       <td>
			      	<a data-toggle="modal" data-target="#DetallesEquipo">
			      		<i class="fa fa-eye fa-2x" align="center" aria-hidden="true">
			           	</i>
			      	</a>			      	
			      </td>
			      <td>
			      	<button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarEquipos"></button>
			      </td>
			      
			    </tr>			     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>


<!-- DetallesEquipo -->
<div class="modal fade" id="DetallesEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Datos Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       	<div class="form-row">
		    <div class="col-md-12">
		      <label for="Descripcion">Descripcion</label>
		      <textarea type="text" class="form-control" id="DescripcionProyecto"  disabled="">		      	
		      </textarea> 
		    </div>
		    <div class="col-md-12">
		      <label for="Telefono">Fecha de registro</label>
		      <input type="text" class="form-control" id="RegistroProyecto" value="2/85/1985" disabled="">
		    </div>		     
	 	</div>

	   	<div class="form-row">
		    <div class="col-md-7">
		      <label for="Integrantes">Integrantes</label>
		      <input type="text" class="form-control" id="Integrantes" value="Integrante Integrante 1" disabled="">
		      <input type="text" class="form-control" id="Integrantes" value="Integrante Integrante 2" disabled="">
		      <input type="text" class="form-control" id="Integrantes" value="Integrante Integrante 3" disabled="">
		      <input type="text" class="form-control" id="Integrantes" value="Integrante Integrante 4" disabled="">
		    </div>
		 
		    
	 	</div>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>

 
<!-- Eliminar -->	

<div class="modal fade" id="EliminarEquipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 	document.getElementById("DescripcionProyecto").value = "Isaac Santiago Coronel Isaac Santiago Coronel Isaac Santiago Coronel Isaac Santiago Coronel";
 </script>