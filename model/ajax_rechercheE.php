<?php 
function getE(){return unserialize($_SESSION['user'])->getId_e();};
function getEmploye($mot){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
    SELECT * FROM employe 
    WHERE superieur_id = '.getE().' 
    AND ( nom LIKE :mot 
    OR prenom LIKE :mot 
    OR email LIKE :mot )');
  $query->bindValue(':mot', "%$mot%",PDO::PARAM_STR);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
?>