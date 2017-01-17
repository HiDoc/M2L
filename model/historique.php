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
  /*$query = $GLOBALS['bdd']->query("SELECT f.id_f as id_formation, s.titre as titre, s.date_f as date, s.duree as duree, s.creditJour as creditJour, 
                        s.description as description, s.prerequis as prerequis, p.nom as nomprestataire
                        FROM suivreFormation s, formation f, prestataire p 
                        WHERE s.e_id =".$_SESSION['id_e'].' 
                        AND a.f_id = f.id_f 
                        AND a.p_id = p.id_p');
  */
  $query = $GLOBALS['bdd']->query('SELECT * from formation');
  while($data = $query->FETCH(PDO::FETCH_ASSOC)){
    coloriserTD($data);
  }
}

?>