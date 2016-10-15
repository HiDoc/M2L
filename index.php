<?php

require_once "model/connect.php";
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));

if(!isset($_GET['p']) || $_GET['p'] == "") {
	$_GET['p'] = "accueil";
}
else {
	if(!file_exists("controller/".$_GET['p'].".php")) 
		$_GET['p'] = '404';
}

ob_start();
	include "controller/".$_GET['p'].".php";
	$content = ob_get_contents();
ob_end_clean();	

require "view/layout.php";
?>