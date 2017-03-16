<?php 
if(isset($_POST['refresh'])){
  require_once('../controller/bdd.php');
}
function getEmploye(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".unserialize($_SESSION['user'])->getId_e());
  return $query->fetchAll();
}
function getNumber(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".unserialize($_SESSION['user'])->getId_e());
  return $query->rowCount();
}
function getFormation($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM formation f, suivreFormation s 
                        WHERE f.id_f = s.f_id
                        AND validate = false
                        AND s.e_id = ".$id );
  return $query->fetchAll();
}
//TODO : fusionner les deux fonctions
function getFormationValid($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM formation f, suivreFormation s 
                        WHERE f.id_f = s.f_id
                        AND validate = true
                        AND s.e_id = ".$id );
  return $query->fetchAll();
}

?>