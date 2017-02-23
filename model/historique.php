<?php 
  
function coloriserTD($data){
  $color = 'default';
    
  // Vérifie si la formation est passée
  if(strtotime($data['date_f']) + $data['duree'] > time()):
    $color = 'active';
  else :
    //$color = ($data['validate']) ? 'warning' : 'success';
    $color = 'success';
  endif;
  
  //Structure d'une ligne du tableau avec la couleur
  echo '<tr data-formation="'.$data['id_f'].'" class="'.$color.'">';
  
  foreach($data as $value){
    echo '<td>'.$value.'</td>';
  }
  
  echo '</tr>';
}

//affichage du tableau
function afficherTableau(){ 
  $query = $GLOBALS['bdd']->query('SELECT * from formation');
  while($data = $query->FETCH(PDO::FETCH_ASSOC)){
    coloriserTD($data);
  }
}

?>