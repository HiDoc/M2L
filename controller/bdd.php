<?php 
/**
  * Logs base de données
  */
$hostname = "localhost";
$dbname = "m2l";
$user = "root";
$password = "";
/**
  * Vérifie si la requête vient de l'index ou d'une page en ajax
  */
if(file_exists('../model/bdd.php'))
  require('../model/bdd.php');
else require ('model/bdd.php');
?>