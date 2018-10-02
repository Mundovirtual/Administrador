<?php 
include_once("../../class/Vertical.php");


 if (isset($_POST['NombreVertical'])&&isset($_POST['DescripcionVertical'])&&isset($_POST['AsesoriaVertical'])&&isset($_POST['EdicionVertical']) ){
 			if ($_POST['EdicionVertical']=="Selecciona...") {
 				 
 			}
 			else{
 		 
 			$Vertical=new Vertical();
			$Registrar=$Vertical->InsertarVertical($_POST['NombreVertical'],$_POST['DescripcionVertical'],$_POST['AsesoriaVertical'],$_POST['EdicionVertical']);
			echo $Registrar;
		} 
 	}
		


 
 
?>
 