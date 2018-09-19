<?php
class esqueleto{
	public function setRead($sql){
		include '../Hackaton/conectar.php';
		$con = new Conexion();
		$contenido = $con->query($sql);
		return $contenido;
	} 
}	
 ?>