<?php

class validarUsuario{
	function login($usr,$psw){
				include_once("../../class/conexion.php");
		 		$con=new Conectar();
		 		$Conexion=$con->conexion();
		 		$sql="SELECT `id`, `Nombre`, `Correo`, `Usuario`, `psw`, `Status` FROM `admin` WHERE `Correo`='$usr' or `Usuario`='$usr' and `psw`='$psw' and `Status`='1'"; 
		 		if ($num=mysqli_num_rows(mysqli_query($Conexion,$sql)) !=0) {
		 			 $resultado=mysqli_fetch_assoc(mysqli_query($Conexion,$sql));
		 			 $_SESSION['activo'] = true;
		 			 $_SESSION['NombreAdmin'] = $resultado["id"]; 
		 			 $_SESSION['IdAdmin'] =$resultado["Nombre"] ; 
		 			  header("../../view/index.php");
			 		 return true;		 		 
			 		$Conexion->mysql_close();
		 		}
		 		else{
		 			return false;
		 		}

	}

}

 
 
 ?>