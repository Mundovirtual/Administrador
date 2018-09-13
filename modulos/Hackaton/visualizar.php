<?php 
    class visualizar{
    	public function visualizarDatos(){
    		require_once 'conectar.php';
    		$esqueleto = new esqueleto();
    		$resultado = $esqueleto->setVisualizar("SELECT `id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion`");
    		?>
    		<table class="table table-hover">
    			<thead>
    				 <tr>
			           <th scope="col">#</th>
			           <th scope="col">Edicion</th>
			           <th scope="col">Inicio</th>
			           <th scope="col">Limite de registro</th>
			           <th scope="col">Fin</th>
			           <th scope="col">Acciones</th>
			         </tr>
    			</thead>
    		<tbody>
    		<?php
    		if($resultado->num_rows > 0){
    			while($row = $resultado->fetch_assoc()){
    			 echo "<tr>";
    		     echo "<td>".$row['id']."</td>";
    		     echo "<td>".$row['Edicion']."</td>";
    		     echo "<td>".$row['InicioHackaton']."</td>";
    		     echo "<td>".$row['FechLimiteRegProy']."</td>";
    		     echo "<td>".$row['TerminoHack']."<td>";
    		     echo "<td>";
    		     ?>
    		     <button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarHackaton">	 
			     </button>

			     <button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"  data-target="#EliminarHackaton"></button>  
    		     <?php
    		     echo "</td>";
    			}
    		     
    		}else{
    			?>
    			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                 <strong> No hay registros !</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <?php
    		}
    		?>
    		</tbody>
           </table>
    		<?php

    	}
    }

    $vis = new visualizar();
    $vis->visualizarDatos();

?>