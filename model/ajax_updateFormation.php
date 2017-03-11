<?php
$path = 'controller/bdd.php';
if(file_exists('../'.$path))
  require '../'.$path;
else
  require($path);
function validate($e_id, $f_id, $bool){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('
    UPDATE suivreFormation 
    SET validate = :bool
    WHERE e_id = :e_id
    AND f_id = :f_id');
  $query->bindValue(':e_id', $e_id, PDO::PARAM_INT);
  $query->bindValue(':f_id', $f_id, PDO::PARAM_INT);
  $query->bindValue(':bool', $bool, PDO::PARAM_INT);
  $query->execute();
}
?>