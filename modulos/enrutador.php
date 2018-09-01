<?php 
	class enrutador{
		public function cargarVista($vista){
 
			switch ($vista) {
			    case "crear": 
			        include_once("../view/".$vista.".php");
			         
			        break;
			    case "error":
			    	include_once("../view/".$vista.".php");
			    break;	

			    default:	
					include_once("../view/error.php");
			}

		}

		public function validarGET($variable){ 
			if (empty($variable)) {
				 include_once("../view/dashboard.php");
			}
			else{
				return true;
			}
		} 
	}


?>