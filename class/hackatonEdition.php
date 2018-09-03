<?php 
 	require("conexion.php");
 	
 	class hackaton{
 		//atributos
 		private $id;
 		private $Edicion;
		private $InicioHackaton;
		private $FechLimiteRegProy;
		private $TerminoHack;
		private $Imagen;

		private $con;

		public function __constructor(){
			$this->con=new conexion(); 
		}

		public function set($atributo,$contenido){
			$this->$atributo=$contenido;

		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function create(){
			$sql2="SELECT `Edicion` FROM `hackatonedicion` WHERE `Edicion`='{$this->$Edicion}'";
			$resultado=$this->con->consultaRetorno($sql2);
			$num=mysqli_num_rows($sql2);

			if ($num!=0) {
				return false;
			}
			else{
				$sql="INSERT INTO `hackatonedicion
								`(`Edicion`,
								`InicioHackaton`,
								`FechLimiteRegProy`,
								`TerminoHack`
							) 
				VALUES (
						'{$this->$Edicion}',
						'{$this->$InicioHackaton}',
						'{$this->$FechLimiteRegProy}',
						'{$this->$TerminoHack}'
						)";

			$this->con->consultaSimple($sql);

			}

		
		}
		public function delete($id){
			$sql="DELETE FROM `hackatonedicion` WHERE `id`='{$this->$Edicion}'";
			$resultado=$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql="SELECT `id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen` FROM `hackatonedicion` WHERE `id`='{$this->$id}'"; 			
 			$resultado=$this->con->consultaRetorno($sql); 			
 			$fila=mysqli_fetch_assoc($resultado);

 			//set
 			$this->id=$fila["id"];
 			$this->id=$fila["Edicion"];
 			$this->id=$fila["InicioHackaton"];
 			$this->id=$fila["FechLimiteRegProy"];
 			$this->id=$fila["TerminoHack"];
 			$this->id=$fila["Imagen"];

		}

		public function update(){
			$sql="UPDATE `hackatonedicion` SET  
												`Edicion`='{$this->$Edicion}',
												`InicioHackaton`='{$this->$InicioHackaton}',
												`FechLimiteRegProy`='{$this->$FechLimiteRegProy}',
												`TerminoHack`='{$this->$TerminoHack}',
												`Imagen`='{$this->$Imagen}'
											WHERE `id`='{$this->$id}'";
			$resultado=$this->con->consultaSimple($sql);								
 
		}
		public function listar(){
			$sql="SELECT * FROM `hackatonedicion`";
			$resultado=$this->con->consultaRetorno($sql); 
			return $resultado;
		}

	}
 
?>
