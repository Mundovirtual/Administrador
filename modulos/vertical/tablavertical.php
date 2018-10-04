<?php 
 include_once("../../class/Vertical.php");
	$Vertical=new Vertical();
	$ver=$Vertical->mostrarDatos();
 	$tabla="";
	$i=1;
  foreach ($ver as $key ) {
		$Editar='<button type=\"button\" id=\"editarVerticall\" onclick=\"ActualizarVertical("'.$key[0].'","'.$key[1].'","'.$key[2].'","'.$key[3].'","'.$key[4].'")" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" data-target=\"#editarVertical\" value=\"'.$key[0].'"\></button>';

		$Eliminar='<button type=\"button\" id=\"EliminarV\" onclick=\"eliminarVertical("'.$key[0].'\") class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarVertical\"></button>';

	 	$tabla.='{
					  "id":"'.$i.'",
					  "Nombre":"'.$key['1'].'",
					  "Descripcion":"'.$key['2'].'",
					  "Asesorias":"'.$key['3'].'",
					  "Hack":"'.$key['4'].'",
					  "Editar":"'.$Editar.'",
					  "Eliminar":"'.$Eliminar.'"

				},';
 
 
	}

	$tabla= substr($tabla,0, strlen($tabla)-1);  
	echo '{"dataVertical":['.$tabla.']}';
?>