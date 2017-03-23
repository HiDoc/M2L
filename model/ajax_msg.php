<?php 
function getE(){return unserialize($_SESSION['user'])->getId_e();};
function getMessagesFrom($id){
  $bdd = $GLOBALS['bdd'];
  $query = $bdd->prepare("
  SELECT id_m, envoi_id as e_id, recep_id as r_id ,m_date as 'date', m_text as message, e.id_e as id_1, concat(e.nom,' ',e.prenom) as personne_1, f.id_e as id_2, concat(f.nom,' ',f.prenom) as personne_2 
  FROM messages, employe e, employe f
  WHERE e.id_e = :id_e1
  AND f.id_e = :id_e2
  AND ( (e.id_e = envoi_id and recep_id = f.id_e)
        OR (f.id_e = envoi_id and recep_id = e.id_e)
  )
  ");
  $query->bindValue(':id_e1', getE(), PDO::PARAM_INT);
  $query->bindValue(':id_e2', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
?>