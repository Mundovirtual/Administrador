 <?php
 include_once("../modulos/login/security.php");    
?> 
 <div class="container">
	<h1 align="center">Calificaciones de Proyectos</h1></br>  
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
			      <th scope="col">Fase</th> 
			      <th scope="col">Integrantes</th>
			      <th scope="col">Calificacion Final</th>

			      <th scope="col">Detalles</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      	<td>Inge Juan</td>			      	 
			      	<td>Vertical 1</td>
			      	<td>1` fase</td>
			      	<td>
			      	<a  data-toggle="modal" data-target="#DetallesIntegrantes">
			      		<i class="fas fa-users fa-2x" align="center" aria-hidden="true"></i>
			      	</a>			      	
			      </td>
			      	<td>8.5</td>
			       <td>
			      	<a data-toggle="modal" data-target="#DetCalif">
			      		<i class="fa fa-eye fa-2x" align="center" aria-hidden="true"></i>
			      	</a>			      	
			      </td>
			       
			      
			    </tr>			     
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1">
		</div>
	</div>

</body>


<!-- Integrantes de Equipos -->
<div class="modal fade" id="DetallesIntegrantes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar"><i class="fas fa-users"></i>Integrantes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
	   	<div class="form-row">
		    <div class="col-md-1">
		    </div>
		    <div class="col-md-10">
		      <h2 align="center">Integrantes</h2>
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



<!-- Detalles calificaciones -->
<div class="modal fade" id="DetCalif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Jueces</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
	   	<div class="form-row">
		    <div class="col-md-12"> 
		      <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Juez</th>
				      <th scope="col">calificación</th>
				      <th scope="col">Detalles</th> 
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mayte Garcia Garcia</td>
				      <td>9.5</td>
				      <td>
						<a  data-toggle="modal" data-target="#DetCalifPorRubrica">
			      		<i class="fas fa-clipboard-list fa-2x" align="center" aria-hidden="true"></i>
			      		</a>
				     </td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jovanny Garcia Garcia</td>
				      <td>8.5</td>
				      <td>
						<a  data-toggle="modal" data-target="#DetCalifPorRubrica">
			      		<i class="fas fa-clipboard-list fa-2x" align="center" aria-hidden="true"></i>
			      		</a>
				     </td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Javier Ventura Garcia Garcia</td>
				      <td>7.5</td>
				      <td>
						<a  data-toggle="modal" data-target="#DetCalifPorRubrica">
			      		<i class="fas fa-clipboard-list fa-2x" align="center" aria-hidden="true"></i>
			      		</a>
				     </td>
				    </tr>
				    
				  </tbody>
				  <tr>
				      <th scope="row">calificación</th>
				      <td></td>
				      <td>8.5</td> 
				    </tr>
				</table>
		    </div>
	    
	 	</div>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>

<!-- Rubricas por proyecto calificaciones -->
<div class="modal fade" id="DetCalifPorRubrica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar"><i class="fas fa-pencil-alt"></i>Criterios de evaluacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
	   	<div class="form-row">
		    <div class="col-md-12"> 
		      <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Criterios de evaluacion</th>
				      <th scope="col">Calificacion</th> 
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Las ideas principales están  fundamentadas con rigor, claridad y precisión.</td>
				      <td>7.5</td>				       
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Aporta información accesoria interesante.</td>
				      <td>8.5</td>				       
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Desarrolla el discurso con una estructura clara: introducción, desarrollo, conclusión.</td>
				      <td>9.5</td>				       
				    </tr>
				     
				    
				  </tbody>
				  <tr>
				      <th scope="row">calificación</th>
				      <td></td>
				      <td>8.5</td> 
				    </tr>
				</table>
		    </div>
	    
	 	</div>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>
   