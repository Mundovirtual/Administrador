 <?php
	session_start();
	if (!$_SESSION['activo']==true) {
		header("../../index.php");	
		}	
?>
