<?php require "model/ficheFormation.php" ?>
<?php 
if(isset($_GET['get'])) $data = getFormation($_GET['get']);
function inscritsNumber($id){
  $data = getInscrits($id)[0]['number'];
  $show = '<h3>';
  $show .= (empty($data) ? 'Aucune' : $data) ;
  $show .= ' personne'. ( $data == '1' ? '' : 's');
  $show .= '</h3>';
  $show .= '<p>Inscrite'.( $data == '1' ? '' : 's').' à la formation<p>';
  return $show;
}
?>

<?php require "view/ficheFormation.php"; ?>