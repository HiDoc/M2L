<?php 

// Appel d'une variable globale pour utiliser dans les fonctions
global $bdd;
try {
    $bdd = new PDO("mysql:host=$hostname;dbname=$dbname;",$user,$password);
}
catch(Exception $e){
    die('Erreur de connection ');
}

?>