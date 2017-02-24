<?php 
$path = 'controller/bdd.php';
if(file_exists('../'.$path))
  require '../'.$path;
else
  require($path);

function retrieveFormation($name){
  $q = 'SELECT titre, date(date_f), creditPoint, lieu, description, prerequis, nom, duree, id_f as id 
        FROM formation f, prestataire p ';
  if($name == 'get'){
    $q .= 'WHERE id_f = :id AND p_id = id_p';
  }
  else {
    $q .= 'WHERE id_f = (SELECT MAX(id_f) FROM formation)AND p_id = id_p';
  }
  return $q;
}

/**
  * Récupère la formation dans la bdd et renvoie les données
  */
function getFormation($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare(retrieveFormation('get'));
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();
  if($query->rowCount() == 1){
    return $query->fetch();
  }
}
/**
  * Récupère la dernière formation insérée dans la bdd et renvoie les données
  */
function lastFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query(retrieveFormation('last'));
  return $query->fetch();
}
?>