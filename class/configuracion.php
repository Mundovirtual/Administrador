<?php 
 include_once("conexion.php");
	 
	 class Hackaton{

	 	function mostrarDatosHackaton(){	 		
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `hackatonedicion`";
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	 	}

	 	function InsertarHackaton($Edicion,$InicioHackaton,$FechLimiteRegProy,$TerminoHack,$Imagen){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="INSERT INTO `hackatonedicion`(`Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen`) VALUES  ('$Edicion','$InicioHackaton','$FechLimiteRegProy','$TerminoHack','$Imagen')"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function ActualizarHackaton($id,$Edicion,$InicioHackaton,$FechLimiteRegProy,$TerminoHack,$Imagen){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();

	 		$sql="UPDATE `hackatonedicion` SET `Edicion`='$Edicion',`InicioHackaton`='$InicioHackaton',`FechLimiteRegProy`='$FechLimiteRegProy',`TerminoHack`='$TerminoHack',`Imagen`='$Imagen' WHERE `id`='$id'";  
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 	function EliminarHackaton($id){
	 		$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="DELETE FROM `hackatonedicion` WHERE  `id`='$id'"; 
	 		$resultado=mysqli_query($Conexion,$sql);
	 		return $resultado;
	 		$Conexion->mysql_close();
	 	}

	 }
 

 ?>