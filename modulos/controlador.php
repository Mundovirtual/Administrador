<?php
	include_once("../class/hackatonEdition.php");
	class controladorHackatonEdition{

		//atributos
		private $hackaton;

		//metodos
		public function __construct(){
			$this->$hackaton= new hackaton();
		}
		public function index(){ 
			$resultado->$this->hackaton->listar();
			return $resultado;
		}
		public function crear($Edicion,$InicioHackaton,$FechLimiteRegProy,$TerminoHack,$imagen){
 			$this->hackaton->set("Edicion",$Edicion);
 			$this->hackaton->set("InicioHackaton",$InicioHackaton);
 			$this->hackaton->set("FechLimiteRegProy",$FechLimiteRegProy);
 			$this->hackaton->set("TerminoHack",$TerminoHack);
 			$this->hackaton->set("Imagen",$imagen);

 			 $resultado=$this->hackaton->crear();
 			 return $resultado;
		}

		public function eliminar($id){
			$this->hackaton->set("id",$id);
			$this->hackaton->eliminar();
		}

		public function ver($id){
			$this->hackaton->set("id",$id);
			$this->hackaton->ver();
		}

		public function editar($id){
			$this->hackaton->set("id",$id);
			$this->hackaton->ver();
			$this->hackaton->editar();
		}


	} 
?>
