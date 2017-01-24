<?php 
function getEmploye(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".$_SESSION['id']);
  return $query->fetchAll();
}
function getNumber(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".$_SESSION['id']);
  return $query->rowCount();
}
?>