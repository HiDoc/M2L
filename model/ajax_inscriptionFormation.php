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
    FROM '.$name.' WHERE '.$tabId.' = :user
  ');
  $queryP->bindValue(':user', $id, PDO::PARAM_INT);
  $queryP->execute();
  return $queryP->fetch();
}
function updatePoints($data, $user){
  $bdd = $GLOBALS['bdd'];
  $update = $bdd->query('
  UPDATE employe 
  SET creditJour = '.$data[2].', 
  creditPoint = '.$data[1].' 
  WHERE id_e = '.$user);
}
?>