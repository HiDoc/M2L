<?php 
function getUser(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare('SELECT * from employe, typeEmploye 
                          WHERE email =:email
                          AND mdp =:password
                          AND id_te = typeEmploye_ID');
  $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $query->bindValue(':password', sha1($_POST['password']), PDO::PARAM_STR);
  $query->execute();
  if($query->rowCount() == 1){
    $data = $query->fetch();
    return [$data['id_e'],true];
  }
  else{
    return ["<div class='row red'><div class='col-xs-12 col-sm-2 col-sm-offset-6'>Identifiants incorrects</div></div>",false]; 
  }
}

?>