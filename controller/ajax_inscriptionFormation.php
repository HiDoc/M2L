<?php session_start();?>
<?php require ('../controller/bdd.php')?>
<?php require ('../core/class.button.php')?>
<?php require ('../model/ajax_inscriptionFormation.php')?>
<?php
  
function verifyEnough($user, $formation){
  $empl = getPoints('employe', $user);
  $form = getPoints('formation', $formation);
  $points = $empl[0] - $form[0];
  $jours = $empl[1] - $form[1];
  var_dump($empl);
  var_dump($form);
  return array(($points >= 0) && ($jours >= 0), $points, $jours);
}

if(isset($_POST['id'],$_SESSION['id'])){
  $id_f = $_POST['id'];
  $id_e = $_SESSION['id'];
  $data = verifyEnough($id_e, $id_f);
  var_dump($data);
  if(updatePoints($data, $id_e,  $id_f)){
    if(inscription($id_e, $id_f)){
      new Button('warning','toValid',$id_f);
    }
    else {
      new Button('danger','failed',$id_f);
    }
  }
}
else {
  new Button('danger','points');
}
?>