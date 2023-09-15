<?php
if(!isset($_POST['code'])){
	echo 'Error On POST!';
}
date_default_timezone_set("America/La_Paz");
echo date('H:i');

?>
