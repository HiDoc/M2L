<?php

require_once "controller/bdd.php";
foreach (glob("core/*.php") as $filename)
{
  require_once ($filename);
}

session_start();
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
if(!isset($_GET['ajax'])){ 
  if(isset($_SESSION['user'])){
    unserialize($_SESSION['user'])->update($bdd);
    if(!isset($_GET['p']) || $_GET['p'] == "") {
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
}
else {
  if(!file_exists("controller/ajax_".$_GET['ajax'].".php")){
    include "controller/404.php";
  } 
  else
    include "controller/ajax_".$_GET['ajax'].".php";
}
?>