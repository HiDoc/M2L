<?php   
function getE(){return unserialize($_SESSION['user'])->getId_e();};
function getEmploye(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".getE());
  return $query->fetchAll();
}
function getNumber(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT * FROM employe WHERE superieur_id = ".getE());
  return $query->rowCount();
}
function getValidation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("SELECT count(id_e) 
                        FROM employe, suivreFormation 
                        WHERE superieur_id = ".getE()."  
                        AND id_e = e_id 
                        AND validate = 0");
  return $query->fetch()[0];
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