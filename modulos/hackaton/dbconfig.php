<?php 
	$db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_base = 'inovahack';

    try{
        $mysqli = new MySQLI($db_host, $db_user, $db_pass, $db_base);
    }catch(MySQLIExeption $e){
        echo $e->getMessage();
    }
	

?>
