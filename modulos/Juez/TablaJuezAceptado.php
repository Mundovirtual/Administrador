 <?php 
include_once("../../class/Juez.php");
	$Juez=new Juez();
	$ver=$Juez->JuecesAceptados();
 	$tabla="";
	$i=1;
 
  foreach ($ver as $key ) {
 
 	$nombre=$key['1']." ".$key['2'];


	$detalles='<button type=\"button\" class=\"btn btn-default fa fa-eye fa-1x\" data-toggle=\"modal\" data-target=\"#detallesJueces\" onclick=\"DetallesJuez('."'".md5($key['4'])."','".$key['8']."','".$key['7']."','".$key['12']."','".$key['13']."','".$key['11']."','".$key['15']."','".$key['6']."'".')\"></button>';

$Editar='<button type=\"button\" class=\"btn btn-success fa fa-check\" data-toggle=\"modal\" data-target=\"#EditarJueces\" onclick=\"EditarJuez('."'".$key['0']."','".$key['4']."','".$key['5']."','".$key['3']."'".')\"></button>';

	$Eliminar='<button type=\"button\" class=\"btn btn-danger fa fa-trash\" data-toggle=\"modal\"  data-target=\"#EliminarJueces\" onclick=\"EliminarJuez('."'".$key['0']."'".')\"></button>';
	 	

 	$tabla.='{
				  "Num":"'.$i.'",
				  "Nombre":"'.$nombre.'",
				  "Telefono":"'.$key['5'].'",
				  "correo":"'.$key['3'].'", 
				  "Detalles":"'.$detalles.'" ,
				  "Editar":"'.$Editar.'",
				  "Eliminar":"'.$Eliminar.'"
			},';
 
 	$i++;	
}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
 

?>  
 