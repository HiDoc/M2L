<?php 
session_destroy();
unset($_SESSION);
header('location:/M2L/accueil');
die();
?>