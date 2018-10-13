<?php 
include_once("conexion.php");
	 class Hacker{
	 	/*Modulo slolicitud Jueces*/	 
	 	function MostrarHacker(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `comunidad`.`id`, `comunidad`.`Nombre`, `comunidad`.`Apellidos`, `comunidad`.`E-mail`, `comunidad`.`psw`, `comunidad`.`Celular`, `carrera`.`Carrera`,`institucion`.`Institucion`,`comunidad`.`FechaNacimiento`, `comunidad`.`Rol_idRol`, `comunidad`.`Genero_idSexo` FROM `comunidad` inner join `carrera` on `Carrera_id`= `carrera`.`id` inner join `institucion` on `comunidad`.`Institucion_id`=`institucion`.`id` WHERE `Rol_idRol`='6'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}
	 	function EliminarHacker($id){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `comunidad` WHERE `id`='".$id."'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}
		 
	 
	 	function ActualizarDatosHacker($id,$Nombre,$Apellidos,$Email,$psw,$Celular,$playera,$fcb,$twr,$Habilidades,$Hobbies){
	 		$Actpsw=md5($psw);
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
 	 		$sql="UPDATE `comunidad` SET  `Nombre`='$Nombre',`Apellidos`='$Apellidos',`E-mail`='$Email',`psw`='$psw',`Celular`='$Celular',`Talla_Playera_idTalla_Playera`='$playera',`Facebook`='$fcb',`Twitter`='$twr',`Habilidades`='$Habilidades',`Hobbies`='$Hobbies' WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();

	 	}
  		 

	 }
 

 ?>