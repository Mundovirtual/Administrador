<?php

require_once 'dbconfig.php';


if(isset($_POST)) {
	if (empty($_POST['e_id'])) {
		$errors[] = "El id esta Vacío";
	}else if (!empty($_POST['e_id'])) {
		$id = intval($_POST['e_id']);
		$save = $mysqli->query("DELETE FROM hackatonedicion WHERE id = '$id'");
		if ($save) {
			$messages[] = "Los Datos fueron Eliminados Exitosamente";
		}else{
			$errors[] = "Ocurrio un Error al momento de Eliminar los Datos";
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