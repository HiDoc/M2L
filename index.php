<?php

require_once "controller/bdd.php";
foreach (glob("core/*.php") as $filename)
{
  require_once ($filename);
}

session_start();
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));

if(isset($_SESSION['user'])){
  if(!isset($_GET['p']) || $_GET['p'] == "" || $_GET['p'] == 'login' || $_GET['p'] == 'bdd') {
      $_GET['p'] = "accueil";
  }
  else {
      if(!file_exists("controller/".$_GET['p'].".php")) 
          $_GET['p'] = '404';
  }
}
else {
  $_GET['p']='connexion';
}

ob_start();
	include "controller/".$_GET['p'].".php";
	$content = ob_get_contents();
ob_end_clean();	

require "view/layout.php";
?>