<?php

require_once 'dbconfig.php';


if(isset($_POST)) {
	if (empty($_POST['Edicion'])) {
		$errors[] = "El campo Edicion esta Vacío";
	}else if (empty($_POST['InicioHackaton'])) {
		$errors[] = "Campo InicioHackaton esta Vacío";
	}else if (empty($_POST['FechLimiteRegProy'])) {
		$errors[] = "Campo Limite esta Vacío";
	}else if (empty($_POST['TerminoHack'])) {
		$errors[] = "Campo fin esta Vacío";
	}else if (!empty($_POST['Edicion']) && !empty($_POST['InicioHackaton'])&& !empty($_POST['FechLimiteRegProy']) && !empty($_POST['TerminoHack'])) {
		$Edicion = $_POST['Edicion'];
		$InicioHackaton = $_POST['InicioHackaton'];
		$FechlimiteRegProy = $_POST['FechLimiteRegProy'];
		$TerminoHack= $_POST['TerminoHack'];
		$id = intval($_POST['id']);
		$save = $mysqli->query("UPDATE `hackatonedicion` SET `Edicion` = '$Edicion', `InicioHackaton` = '$InicioHackaton', `FechLimiteRegProy` = '$FechlimiteRegProy', `TerminoHack` = '$TerminoHack' WHERE `hackatonedicion`.`id` = $id;");
		if ($save) {
			$messages[] = "Los Datos fueron Actualizados Exitosamente";
		}else{
			$errors[] = "Ocurrio un Error al momento de Actualizar los Datos";
		}
	}	
	

	if (isset($errors)) {
		?>
		<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!</strong> 
				<?php
				foreach ($errors as $error) {
					echo $error;
				}
				?>
		</div>
		<?php
	}

	if (isset($messages)) {
		?>
		<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>¡Bien hecho!</strong>
			<?php
			foreach ($messages as $message) {
				echo $message;
			}
			?>
		</div>
		<?php
	}
}
?>