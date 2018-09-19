<?php 

 class registro{
 	function __construct(){
 		$this->edicion = $_POST["edicion"];
 		$this->inicio  = $_POST["inicio"];
 		$this->limite  = $_POST["limite"];
 		$this->fin     = $_POST["fin"];
 		$this->estado  = 0;

 	}

 	public function guardarHackaton(){
 		if($_SERVER["REQUEST_METHOD"] == "POST"){
 			if(empty($_POST["edicion"]) && empty($_POST["inicio"]) && empty($_POST["limite"]) && empty($_POST["fin"])){
 				?>
 				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 					<strong>Se require rellenar los campos !</strong>
 					<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 						<span aria-hidden = "true">&times;</span>
 					</button>
 					
 				</div>
 				<?php
 			}else if(empty($_POST["edicion"])){
 				?>
 				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 					<strong>Se require rellenar El campo edicion!</strong>
 					<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 						<span aria-hidden = "true">&times;</span>
 					</button>
 					
 				</div>
 				<?php
 			}else if(empty($_POST["inicio"])){
 				?>
 				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 					<strong>Se require rellenar El campo Inicion Hackaton!</strong>
 					<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 						<span aria-hidden = "true">&times;</span>
 					</button>
 					
 				</div>
 				<?php
 			}else if(empty($_POST["limite"])){
 				?>
 				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 					<strong>Se require rellenar El campo Fecha limite!</strong>
 					<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 						<span aria-hidden = "true">&times;</span>
 					</button>
 					
 				</div>
 				<?php
 			}else if(empty($_POST["fin"])){
 				?>
 				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 					<strong>Se require rellenar El campo Fin Hackaton!</strong>
 					<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 						<span aria-hidden = "true">&times;</span>
 					</button>
 					
 				</div>
 				<?php

 			}else{
 				require_once 'esqueleto_crud.php';
 				$esqueleto = new esqueleto();
 				$sql = "INSERT INTO `hackatonedicion` (`id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen`, `estado`) VALUES (NULL, '$this->edicion', '$this->inicio', '$this->limite', '$this->fin', NULL, '$this->estado');";
 				$resultado = $esqueleto->setRead($sql);
 				if($resultado){
 					?>
 					<div class="alert alert-success alert-dismissible fade show text-center" role = "alert"><i class="fas fa-check"></i>
 						<strong>Hackaton registrado !!</strong>
 						<button type="button" class="close" data-dismiss = "alert" aria-label = "Close">
 							<span aria-hidden = "true">&times;</span>
 						</button>
 						
 					</div>
 					<?php
 				} 
 			}

 		}
 	}
 }

 $registro = new registro();
 $registro->guardarHackaton();
?>