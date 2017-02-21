<?php 
function getFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query('SELECT titre, duree, date(date_f), lieu, nom, description, prerequis FROM formation f, prestataire p 
                        WHERE date_f > now()
                        AND p_id = id_p');
  return $query->fetchAll();
}
?>