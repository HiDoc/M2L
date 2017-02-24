<?php require('ajax_getFormation.php')?>
<?php 
function getInscrits($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
    SELECT Count(*) as number 
    FROM suivreFormation
    WHERE f_id=:id');
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetchAll();
}
?>