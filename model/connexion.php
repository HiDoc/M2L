<?php 
function getUsername(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('SELECT email FROM employe WHERE email=:email');
  $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $query->execute();
  return ($query->rowCount() == 1);
}

function getUser(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('SELECT * from employe, typeEmploye 
                          WHERE email =:email
                          AND mdp =:password
                          AND id_te = typeEmploye_ID');
    $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $query->bindValue(':password', sha1($_POST['password']), PDO::PARAM_STR);
    $query->execute();
    if($query->rowCount() == 1) 
      return $query->fetch();
    else 
      return false;
}
?>