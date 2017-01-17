<?php 
$bdd = $GLOBALS['bdd'];
$query = $bdd->query("SELECT titre, description, DATE_FORMAT(`date_f`, '%Y-%m') as date FROM formation ORDER BY date");

$oldDate = 0;
echo "<ul>";
while($data = $query->fetch()){
  if(strtotime($data['date']) >= $oldDate){
    echo '<li>'.$data['titre'].' '.$data['date'].'</li>';
    echo "\n";
  }
  else {
    echo "\n";
    echo "<li></li>";
    echo "<li>".$data['titre'].' '.$data['date']."</li>";
  }
  $oldDate = strtotime($data['date']);
}
echo "</ul>";
?>