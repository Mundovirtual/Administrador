<?php 
require_once("../../class/Juez.php");
 
if (isset($_POST["IdActualizar"]) &&isset($_POST["psw"]) &&isset($_POST["celular"]) &&isset($_POST["correo"])) {

	$msj="";
	if ($_POST["psw"]=='') {

		 $msj="1";

	}
	elseif ($_POST["celular"]=='' or strlen($_POST["celular"])<9 ) {

		$msj="2";

	}elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL) or $_POST["correo"]=='' ) {
		
		$msj="3";

	}else{

		$ActualizarJuez=new Juez();
		$Registrar=$ActualizarJuez->ActualizarDatosJueces($_POST["IdActualizar"],$_POST["correo"],$_POST["psw"],$_POST["celular"]);
		$msj="0";
	}
	echo $msj;
}

 
/*Eliminar*/
if (isset($_POST['idEliminar'])) {

	$msg="";
	if ($_POST['idEliminar']!='') {
		$JuezEliminar=new Juez();
		$Registrar=$JuezEliminar->EliminarSolicitudJuez($_POST['idEliminar']);
		$msg='0';
	}else{
		$msg='1';
	}
	echo $msg;
}







 ?> 