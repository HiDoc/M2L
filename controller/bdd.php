<?php 
/**
  * Logs base de données
  */
$hostname = "localhost";
$dbname = "m2l";
$user = "root";
$password = "";
if(file_exists('model/bdd.php')){ 
  require('model/bdd.php');
}
else require('../model/bdd.php');
?>