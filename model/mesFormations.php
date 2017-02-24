<?php 
/**
  * Récupère les formation à venir
  */
function getFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("
  SELECT titre, duree, date_f, lieu, validate, id_f
  FROM formation, suivreFormation 
  WHERE e_id = ".$_SESSION['id']."
  AND f_id = id_f
  AND date_f > now()
  ORDER BY id_f DESC");
  return $query->fetchAll();
}
/**
  * Récupère l'historique des formations
  */
function getHistorique(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query("
  SELECT titre, duree, date_f, lieu, nom, id_f
  FROM formation, suivreFormation, prestataire
  WHERE e_id = ".$_SESSION['id']."
  AND f_id = id_f
  AND p_id = id_p
  AND date_add(date_f, interval duree second) < now()
  ORDER BY id_f DESC");
  return $query->fetchAll();
}
?>