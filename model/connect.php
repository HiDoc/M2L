<?php 
	// Appel d'une variable globale pour utiliser dans les fonctions
	global $bdd;
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=M2L;','root','');
	}
	catch(Exception $e){
		die('Erreur de connection');
	}
?>