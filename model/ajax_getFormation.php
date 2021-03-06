<?php 

function retrieveFormation($name){
  $q = 'SELECT titre, date(date_f), creditPoint, lieu, description, prerequis, nom, duree, id_f as id, creditJour
        FROM formation f, prestataire p ';
  if($name == 'get'){
    $q .='WHERE id_f = :id 
      AND p_id = id_p ';
  }
  else {
    $q .= ' WHERE NOT EXISTS (
              SELECT * 
              FROM suivreformation  
              WHERE e_id = ' . unserialize($_SESSION['user'])->getId_e() . ' 
              AND f.id_f = suivreFormation.f_id) 
            AND date_f > now() 
            ORDER BY id_f DESC
            LIMIT 1
                              ';
  }
  return $q;
}

/**
  * Récupère la formation dans la bdd et renvoie les données
  */
function getFormation($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare(retrieveFormation('get'));
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();
  if($query->rowCount() == 1){
    return $query->fetch();
  }
}
/**
  * Récupère la dernière formation insérée dans la bdd et renvoie les données
  */
function lastFormation(){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->query(retrieveFormation('last'));
  return $query->fetch();
}
function lastID(){
  return lastFormation()['id'];
}
?>