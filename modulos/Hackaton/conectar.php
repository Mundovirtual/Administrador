<?php 
class esqueleto{
	public function setVisualizar($sql){
		include '../../class/conexion.php';
		$con = new Conexion();
		$contenido = $con->query($sql);
		return $contenido;
	} 
}

?>