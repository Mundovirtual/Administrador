<?php 
include_once("../../class/Vertical.php");


if (isset($_POST['NombreVertical'])&&isset($_POST['DescripcionVertical'])&&isset($_POST['AsesoriaVertical'])&&isset($_POST['EdicionVertical']) ){
	if ($_POST['EdicionVertical']=="Selecciona...") {
		  echo "malll";
	}
	else{ 		 
		$Vertical=new Vertical();
		$Registrar=$Vertical->InsertarVertical($_POST['NombreVertical'],$_POST['DescripcionVertical'],$_POST['AsesoriaVertical'],$_POST['EdicionVertical']);
		 
	} 
}
 
if (isset($_POST['IdEliminar'])){
	$Vertical=new Vertical();
	$eliminar=$Vertical->EliminarVertical($_POST['IdEliminar']);
	if ($eliminar) {
		echo "siii";
	}
	else{
		echo "false";
	}

}
 
 
if (isset($_POST["idAc"])&&isset($_POST["eNv"])&&isset($_POST["eDv"])&&isset($_POST["eAv"])&&isset($_POST["eHv"])) {
	 $Vertical=new Vertical();
	 $Registrar=$Vertical->ActualizarVertical($_POST["idAc"],$_POST["eNv"],$_POST["eDv"],$_POST["eAv"],$_POST["eHv"]);


}

 
?>
 