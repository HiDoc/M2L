<?php
session_start();
require_once "model/connect.php";
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));


if(isset($_SESSION['connecte']) && ($_SESSION['connecte']) == 'true'){
  if(!isset($_GET['p']) || $_GET['p'] == "") {
      $_GET['p'] = "accueil";
  }
  else {
      if(!file_exists("controller/".$_GET['p'].".php")) 
          $_GET['p'] = '404';
  }
}
else{
  $_GET['p']='login';
}

ob_start();
	include "controller/".$_GET['p'].".php";
	$content = ob_get_contents();
ob_end_clean();	

require "view/layout.php";
?>