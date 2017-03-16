<?php 
foreach (glob("*.php") as $filename){
  require_once ($filename);
}
?>