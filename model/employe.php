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
function getFormation($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM formation f, suivreFormation s 
                        WHERE f.id_f = s.f_id
                        AND s.e_id = ".$id );
  return $query->fetchAll();
}
?>