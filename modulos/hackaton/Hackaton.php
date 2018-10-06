<?php 
include_once("../../class/Hackaton.php");

/*Registrar Imagen*/
/*Variable para dejar la imagen como nula como primera etapa de desarrollo*/
$imagen="null";
if (isset($_POST['NombreHack'])&&isset($_POST['InicioHack'])&&isset($_POST['EntregaProyectos'])&&isset($_POST['FinHack'])){
	 		 
		$Hackaton=new Hackaton();
		$Registrar=$Hackaton->InsertarHackaton($_POST['NombreHack'],$_POST['InicioHack'],$_POST['EntregaProyectos'],$_POST['FinHack'], $imagen);
		echo $Registrar;
 
}
 
if (isset($_POST['IdEliminar'])){
	$Hackaton=new Hackaton();
	$eliminar=$Hackaton->EliminarHackaton($_POST['IdEliminar']);
	if ($eliminar) {
		echo "siii";
	}
	else{
		echo $eliminar;
	}

}
   
 
if (isset($_POST["idAc"])&&isset($_POST["EhN"])&&isset($_POST["EhI"])&&isset($_POST["EhE"])&&isset($_POST["EhF"])&& isset($_POST["EhImg"])) {
	 $Hackaton=new Hackaton();
	 $Registrar=$Hackaton->ActualizarHackaton($_POST["idAc"],$_POST["eNv"],$_POST["eDv"],$_POST["eAv"],$_POST["eHv"],$_POST["EhImg"]);

}
 
 
?>
 