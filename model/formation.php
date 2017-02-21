<?php 
/**
  * Récupère les formations à venir
  */
function getFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query('
  SELECT titre, duree, date(date_f), lieu, nom, description, prerequis, id_f FROM formation f, prestataire p 
  WHERE date_f > now()
  AND p_id = id_p
  ORDER BY id_f DESC');
  return $query->fetchAll();
}
?>