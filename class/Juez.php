<?php 
include_once("conexion.php");
	 class ValidarJuez{

	 	function MostrarJuezPorActivar(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `carrera`.`Carrera`,`institucion`.`Institucion`,`comunidad`.`FechaNacimiento`,  `comunidad`.`Rol_idRol`, `comunidad`.`Genero_idSexo` FROM `comunidad` inner join `carrera` on `Carrera_id`= `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` WHERE `Rol_idRol`='3' and `status`='0'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function MostrarJuezActivados(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `comunidad` WHERE `Rol_idRol`='3' and `status`='1'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function EliminarSolicitudJuez($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `comunidad` WHERE `id`='".$id."' and `Rol_idRol`='3'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
		 
	 	function aceptarSolicitud($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="UPDATE `comunidad` set `status`='1' WHERE `id`='".$id."' and `Rol_idRol`='3'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
	 		 

	 }
 

 ?>