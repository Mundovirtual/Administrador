<?php 
include_once("../../class/Hackaton.php");

/*Registrar Imagen*/
/*Variable para dejar la imagen como nula como primera etapa de desarrollo*/
$imagen="null";
if (isset($_POST['NombreHack'])&&isset($_POST['InicioHack'])&&isset($_POST['EntregaProyectos'])&&isset($_POST['FinHack'])){

	$inicioHack=strtotime($_POST['InicioHack']);
	$EntregaHack=strtotime($_POST['EntregaProyectos']);
	$FinHack=strtotime($_POST['FinHack']);

if ($inicioHack > $EntregaHack) {
		echo "1";
	}		 
	else if ($EntregaHack > $FinHack) {
		echo "2";
	}
	else if ($inicioHack > $FinHack) {
		echo "3";
	}
	else if ( $inicioHack < $EntregaHack &&  $EntregaHack<$FinHack) {
		
		$Hackaton=new Hackaton();
		$Registrar=$Hackaton->InsertarHackaton($_POST['NombreHack'],$_POST['InicioHack'],$_POST['EntregaProyectos'],$_POST['FinHack'], $imagen);
		echo "0"; 
	}
 
}
 
if (isset($_POST['IdEliminar'])){
	$Hackaton=new Hackaton();
	$eliminar=$Hackaton->EliminarHackaton($_POST['IdEliminar']); 
	echo "0";
}


/*Estatus*/
if (isset($_POST['EstatusHackaton'])) {
	$Hackaton=new Hackaton();
	$eliminar=$Hackaton->CambiarEstado($_POST['EstatusHackaton']); 
	echo "0";
}


/*Actualizar*/


if (isset($_POST["idAc"])&&isset($_POST["EhN"])&&isset($_POST["EhI"])&&isset($_POST["EhE"])&&isset($_POST["EhF"])/*&& isset($_POST["EhImg"])*/) {
 	
 	$EditarinicioHack=strtotime($_POST['EhI']);
	$EditarEntregaHack=strtotime($_POST['EhE']);
	$EditarFinHack=strtotime($_POST['EhF']);
	$msj="";
	

	if ($EditarinicioHack > $EditarEntregaHack) {
		$msj="1";
	}		 
	else if ($EditarEntregaHack > $EditarFinHack) {
		$msj="2";
	}
	else if ($EditarinicioHack > $EditarFinHack) {
		$msj="3";
	}
	else if (strlen($_POST["EhN"]) <=4) {
			$msj="4"; 
	}
	 
	 else  if(strlen($_POST["EhN"]) > 4 && strlen($_POST["EhN"]) <45 && $EditarinicioHack < $EditarEntregaHack &&  $EditarEntregaHack<$EditarFinHack){
	 	$Hackaton=new Hackaton();
		 $Registrar=$Hackaton->ActualizarHackaton($_POST["idAc"],$_POST["EhN"],$_POST["EhI"],$_POST["EhE"],$_POST["EhF"],$imagen);
 
		 $msj="0";
	 }

	 echo $msj;

	 

}
  
 
?>
