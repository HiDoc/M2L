<?php 
if(isset($_POST['submit'])){

$q = $_POST['recherche'];
$bdd = $GLOBALS['bdd'];
	$count = 0;
	foreach($bdd->query('SELECT * FROM formation') as $data) {
	if (levenshtein(metaphone($q), metaphone($data['titre'])) < 2) {
		echo "<tr>";
		echo "<td>".$data['id_f']."</td>";
		echo "<td>".$data['titre']."</td>";
		echo "<td>".$data['description']."</td>";
		echo "<td>".$data['id_prestataire']."</td>";
		echo "</tr>";
		$count++;
      echo "lol";
	  }
	}
  if($count == 0){
          echo "<tr>";
          echo "<td colspan='6'></td>";
          echo "</tr>";
      }
}
?>