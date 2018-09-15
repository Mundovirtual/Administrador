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
 			}else{
 				
 			}

 		}
 	}
 }

 $registro = new registro();
 $registro->guardarHackaton();
?>