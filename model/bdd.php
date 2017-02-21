<?php 

// Construction d'un objet PDO pour l'utiliser dans les fonctions
global $bdd;
try {
    $bdd = new PDO("mysql:host=$hostname;dbname=$dbname;",$user,$password);
}
catch(Exception $e){
    die('Erreur de connection ');
}

?>