<?php

function recherche($mot){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
    SELECT * FROM formation, prestataire 
    WHERE ( titre LIKE :mot 
    OR date_f LIKE :mot 
    OR lieu LIKE :mot
    OR nom LIKE :mot
    OR description LIKE :mot
    OR prerequis LIKE :mot )
    AND p_id = id_p
    AND date_f > now()
    ORDER BY date_f DESC');
  $query->bindValue(':mot', "%$mot%",PDO::PARAM_STR);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
  
?>