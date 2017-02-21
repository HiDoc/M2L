<?php 
require('../controller/bdd.php');
function getFormation($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
  SELECT titre, date(date_f), creditPoint, lieu,description,prerequis, nom 
  FROM formation f, prestataire p 
  WHERE id_f = :id
  AND p_id = id_p');
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();
  if($query->rowCount() == 1){
    return $query->fetch();
  }
  else return 'Formation non trouvée';
}
function lastFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query('
  SELECT titre, date(date_f), creditPoint, lieu, description, prerequis, nom 
  FROM formation f, prestataire 
  WHERE id_f = (SELECT MAX(id_f) 
                FROM formation)
  AND p_id = id_p');
  return $query->fetch();
}
?>