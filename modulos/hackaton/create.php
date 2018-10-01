<?php
	require_once 'dbconfig.php';
	if($_POST) {
		
		if (empty($_POST['edicion'])) {
			$errors[] = "Campo Edicion esta Vacío";
		}else if (empty($_POST['inicio'])) {
			$errors[] = "Campo Inicio esta Vacío";
		}else if (empty($_POST['limite'])) {
			$errors[] = "Campo limite esta Vacío";
		}else if (empty($_POST['fin'])) {
			$errors[] = "Campo Fin esta Vacío";
		}else if (!empty($_POST['edicion']) && !empty($_POST['inicio'])  && !empty($_POST['limite'])  && !empty($_POST['fin'])) {
			$campo1 = $_POST['edicion'];
			$campo2 = $_POST['inicio'];
			$campo3 = $_POST['limite'];
			$campo4 = $_POST['fin'];
			$campo5 = 0;

			$save = $mysqli->query("INSERT INTO `hackatonedicion` (`id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack`, `Imagen`, `estado`) VALUES (NULL, '$campo1', '$campo2', '$campo3', '$campo4', NULL, '$campo5');");
			if ($save) {
				$messages[] = "Los Datos fueron Guardados Exitosamente";
			}else{
				$errors[] = "Ocurrio un Error al momento de Guardar los Datos";
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