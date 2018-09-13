<?php
class esqueleto{
	public function setRead($sql){
		include '../conexion/abrirconexion.php';
		$con = new Conexion();
		$contenido = $con->query($sql);
		return $contenido;
	} 
}	
 ?>