
<?php
  
 if (isset($_POST['Usuario']) and isset($_POST['Password']) ) {
    $user = $_POST['Usuario'];
    $passwd = $_POST['Password'];
    login($user, $passwd);
    
}
 

function login($usr,$pss){
	$psw=md5($pss);
	include_once("../conexion.php");
		$con=new Conectar();
		$Conexion=$con->conexion();
		$sql="SELECT `id`, `Nombre`, `Correo`, `Usuario`, `psw`, `Status` FROM `admin` WHERE `Correo`='$usr' or `Usuario`='$usr' and `psw`='$psw' and `Status`='1'"; 
		if ($num=mysqli_num_rows(mysqli_query($Conexion,$sql)) !=0) {
			 $resultado=mysqli_fetch_assoc(mysqli_query($Conexion,$sql));
			 session_start();
			 $_SESSION['activo'] = true;
			 $_SESSION['NombreAdmin'] = $resultado["id"]; 
			 $_SESSION['IdAdmin'] =$resultado["Nombre"] ;

			 echo json_encode(array('error'=>false));  

		}
		else{
			 echo json_encode(array('error'=>true));
		}

}
 

 
 
 ?>