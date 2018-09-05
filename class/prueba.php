<?php 
	require_once("hackatonEdition.php");	 
	$hackaton= new hackaton();	
	$hola=$hackaton->index();
	print_r($hola);
 ?>