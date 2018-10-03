<?php

	include ("dbconfig.php");
  	$registro = $mysqli->query("SELECT * FROM `hackatonedicion`
");
	$tabla = "";
	if (mysqli_num_rows($registro) > 0) {
		$cont = 1;
		while($dato = $registro->fetch_array()){

			$editar = '<a href=\"#\" data-id=\"'.$dato['id'].'\" data-Edicion=\"'.$dato['Edicion'].'\" data-InicioHackaton=\"'.$dato['InicioHackaton'].'\" data-FechaLimite=\"'.$dato['FechLimiteRegProy'].'\" data-TerminoHack=\"'.$dato['TerminoHack'].'\" data-toggle=\"modal\" data-target=\"#myUpd\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

			$eliminar = '<a href=\"#\" data-id=\"'.$dato['id'].'\" data-toggle=\"modal\" data-target=\"#myDel\"  title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
            $holamundo = "Hola mundo";
			$tabla.='{
				  "id":"'.$cont.'",
				  "Edicion":"'.$dato["Edicion"].'",
				  "InicioHackaton":"'.$dato["InicioHackaton"].'",
				  "FechLimiteRegProy":"'.$dato["FechLimiteRegProy"].'",
				  "TerminoHack":"'.$dato["TerminoHack"].'",
				  "acciones":"'.$editar." ".$eliminar.'"
				},';
			$cont++;
		}
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';

?>
