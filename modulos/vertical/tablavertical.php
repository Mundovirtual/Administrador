 
<?php 
 include_once("../../class/Vertical.php");
	$Vertical=new Vertical();
	$ver=$Vertical->mostrarDatos();
 	$tabla="";
	$i=1;
  foreach ($ver as $key ) {
 
	$Editar='<button type=\"button\" id=\"editarVerticall\" onclick=\"ActualizarVertical('."'".$key['0']."','".$key['1']."','".$key['2']."','".$key['3']."','".$key['4']."'".')\" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" data-target=\"#editarVertical\" value=\"'.$key['0'].'\"></button>';
	 	 

	$Eliminar=  '<button type=\"button\" id=\"EliminarV\" onclick=\"eliminarVertical('."'".$key['0']."'".')\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarVertical\"></button>';

	 
		 	$tabla.='{
						  "idT":"'.$i.'",
						  "NombreT":"'.$key['1'].'",
						  "DescripcionT":"'.$key['2'].'",
						  "AsesoriasT":"'.$key['3'].'",
						  "HackT":"'.$key['6'].'",
						  "EditarT":"'.$Editar.'",
						  "EliminarT":"'.$Eliminar.'" 
					},';
	 
	 	$i++;	
	}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}'; 
?>