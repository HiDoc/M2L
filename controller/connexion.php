<?php require "view/connexion.php" ?>
<?php require "model/connexion.php" ?>
<?php 
if(isset($_POST['submit'])){
  $data = getUser();
  if(!$data[1])
    echo $data[0];
  else {
    $_SESSION['id'] = $data[1];
    $_SESSION['connecte'] = true;
    header('location:/m2l/accueil');
    die();
  }
}
?>