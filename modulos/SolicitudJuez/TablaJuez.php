<?php 
include_once("../../class/Juez.php");
	$Juez=new Juez();
	$ver=$Juez->MostrarJuezPorActivar();
 	$tabla="";
	$i=1;

 
  foreach ($ver as $key ) {
 
 	$nombre=$key['1']." ".$key['2'];

	$detalles='<button type=\"button\" class=\"btn btn-default fa fa-eye fa-1x\" data-toggle=\"modal\" data-target=\"#Detalles\" onclick=\"DetallesJuez('."'".$nombre."','".$key['8']."','".$key['3']."','".$key['7']."','".$key['6']."'".')\"></button>';
	$Aceptar='<button type=\"button\" class=\"btn btn-success fa fa-check\" data-toggle=\"modal\" data-target=\"#AceptarJuez\" onclick=\"AceptarJuez('."'".$key['0']."'".')\"></button>';

	$Rechazar='<button type=\"button\" class=\"btn btn-danger fa fa-trash\" data-toggle=\"modal\"  data-target=\"#EliminarJuez\" onclick=\"RechazarJuez('."'".$key['0']."'".')\"></button>';
	 	

 	$tabla.='{
				  "Num":"'.$i.'",
				  "Nombre":"'.$nombre.'",
				  "Telefono":"'.$key['5'].'",
				  "correo":"'.$key['3'].'", 
				  "Detalles":"'.$detalles.'" ,
				  "Aceptar":"'.$Aceptar.'",
				  "Rechazar":"'.$Rechazar.'"
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 

?>  