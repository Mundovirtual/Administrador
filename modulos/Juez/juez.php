<?php 

include_once("../../class/Juez.php");

if (isset($_POST['IdAceptarJuez'])) {

	if ($_POST['IdAceptarJuez']!="") {
	 $Solicitudes=new ValidarJuez();
	 $Aceptar=$Solicitudes->aceptarSolicitud($_POST['IdAceptarJuez']);
		echo "0";
	}
	else{
		echo "1";
	}

}

if (isset($_POST['idRechazar'])) {
	if ($_POST['idRechazar']!='') {
		$Solicitudes=new ValidarJuez();
		$Aceptar=$Solicitudes->EliminarSolicitudJuez($_POST['idRechazar']);
		echo "0";
	}
	else{
		echo "1";
	}
	
}






 ?> 

