<?php require "view/connexion.php" ?>
<?php require "model/connexion.php" ?>
<?php require_once "core/class.user.php" ?>
<?php 
if(isset($_POST['submit'])){
  if(!getUsername())
    echo "<div class='row red'><div class='col-xs-12 col-sm-2 col-sm-offset-6'>Identifiant incorrect</div></div>";
  else {
    if(!getUser())
      echo "<div class='row red'><div class='col-xs-12 col-sm-2 col-sm-offset-6'>Mot de passe incorrect</div></div>";
    else {
      $data = getUser();
      $_SESSION['user'] = serialize(new User($data));
      header('location:/m2l/accueil');
      die();
    }
  }
}
?>