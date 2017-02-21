<?php 
require('../model/ajax_getFormation.php');
if(isset($_POST['id'])){
  $data = getFormation($_POST['id']);
  require('../view/ajax_getFormation.php');
}
else {
  $data = lastFormation();
  require('../view/ajax_getFormation.php');
}
?>