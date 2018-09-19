<?php 
 class esqueleto{
 	public function setRead($sql){
 		require_once '../../class/conexion.php';
 		$con = new Conexion();
 		$contenido = $con->query($sql);
 		return $contenido;
 	}

 }

?>