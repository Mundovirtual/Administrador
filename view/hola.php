<?php 
$var=2;
$msg=array();
if ($var<5) {
	$msg[]="menor q 5";
}
if ($var <4) {
	$msg[]="menor q 4";
}
if ($var>5) {
	$msg[]="Mayor q 5";
}
var_dump($msg);


 ?>