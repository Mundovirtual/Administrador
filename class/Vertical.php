<?php 
	 include_once("conexion.php");
	 
	 class Vertical{

	 	function mostrarDatos(){
	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `vertical`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function InsertarVertical($Vertical,$Descripcion,$asesoria,$Hackaton){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `vertical`(`Nombre`, `Descripcion`, `InfAsesoria`, `HackatonEdicion_id`) VALUES 		('$Vertical','$Descripcion','$asesoria','$Hackaton')";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function ActualizarVertical($id,$Nombre,$Descripcion,$asesoria,$Hackaton){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="UPDATE `vertical` SET `Nombre`='$Nombre',`Descripcion`='$Descripcion',`InfAsesoria`='$asesoria',`HackatonEdicion_id`='$Hackaton' WHERE `id`='$id'";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function EliminarVertical($id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="DELETE FROM `vertical` WHERE `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 }
 
	   
 
 
 ?>