<?php 
/**
  * Récupère les formations à venir
  */
function getFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query('
  SELECT titre, duree, date(date_f), lieu, nom, description, prerequis, id_f 
  FROM formation f, prestataire p
  WHERE date_f > now()
  AND p_id = id_p
  AND NOT EXISTS (SELECT * from suivreformation where e_id = ' . unserialize($_SESSION['user'])->getId_e() . ' and f.id_f = suivreFormation.f_id)
  ORDER BY date_f DESC');
  return $query->fetchAll();
}
?>