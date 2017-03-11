<?php
function inscription($user,$formation){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('INSERT INTO suivreFormation VALUES(:user, :formation, default)');
  $query->bindValue(':user', $user, PDO::PARAM_INT);
  $query->bindValue(':formation', $formation, PDO::PARAM_INT);
  return $query->execute();
}
function getPoints($name, $id){
  $bdd = $GLOBALS['bdd'];
  $tabId = 'id_'.$name[0]; 
  $queryP = $bdd->prepare('
    SELECT creditPoint, creditJour 
    FROM :name  
    WHERE :id =:user
  ');
  $queryP->bindValue(':user', $id, PDO::PARAM_INT);
  $queryP->bindValue(':name', $name, PDO::PARAM_STR);
  $queryP->bindValue(':id', $tabId, PDO::PARAM_STR);
  $queryP->execute();
  echo 'SELECT creditPoint, creditJour FROM '.$name.' WHERE '.'id_'.$name[0].' ='.$id;
  
  return $queryP->fetch();
}
function updatePoints($data, $user, $formation){
  $bdd = $GLOBALS['bdd'];
  $update = $bdd->prepare('UPDATE employe set creditJour =:jour, creditPoint =:point WHERE id_e = :id');
  $update->bindValue(':point', $data[1], PDO::PARAM_INT);  
  $update->bindValue(':jour', $data[2], PDO::PARAM_INT);  
  $update->bindValue(':id', $user, PDO::PARAM_INT);
    return $update->execute();
}
?>