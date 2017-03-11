<?php
$path = 'controller/bdd.php';
if(file_exists('../'.$path))
  require '../'.$path;
else
  require($path);

function recherche($mot){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
    SELECT * FROM formation, prestataire 
    WHERE ( titre LIKE :mot 
    OR date_f LIKE :mot 
    OR lieu LIKE :mot
    OR description LIKE :mot
    OR prerequis LIKE :mot )
    AND p_id = id_p
    AND date_f > now()');
  $query->bindValue(':mot', "%$mot%",PDO::PARAM_STR);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
  
?>