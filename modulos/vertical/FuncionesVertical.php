<?php 
include_once("MetodosVertical.php");
    echo json_encode($_POST['EdicionVertical']);

 if (isset($_POST['NombreVertical'])&&isset($_POST['DescripcionVertical'])&&isset($_POST['AsesoriaVertical'])&&isset($_POST['EdicionVertical'])){
		echo "hola desde muy lejos".$_POST['EdicionVertical'];   
 }	
 
?>
 