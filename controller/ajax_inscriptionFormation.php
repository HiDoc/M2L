<?php require('../core/class.user.php'); ?>
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
  return array(($points >= 0) && ($jours >= 0), $points, $jours);
}

if(isset($_POST['id'], $_SESSION['user'])){
  $id_e = (int)unserialize($_SESSION['user'])->getId_e();
  $id_f = (int)$_POST['id'];
  $data = verifyEnough($id_e, $id_f);
  $buttons = '';
  if($data[0]){
    updatePoints($data, $id_e,  $id_f);
    if(inscription($id_e, $id_f)){
      $buttons .= (string) new Button('warning','toValid',$id_f,true);
      $buttons .= ' ';
      $buttons .= (string) new Button('danger','unValid',$id_f,true);
      unserialize($_SESSION['user'])->update($GLOBALS['bdd']);
    }
    else {
      $buttons .= (string) new Button('danger','failed',$id_f,true);
    }
  }
  else {
    $buttons .= (string) new Button('danger','points',0,true);
  }
  echo json_encode(array('buttons' => $buttons, 'cj' => unserialize($_SESSION['user'])->getCreditJour(),'cp' => unserialize($_SESSION['user'])->getCreditPoint()), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
?>