<?php 
class formatDate{
  /** 
  * Permet de formater une date
  * 
  * @param DateTime $debut 
  * @param DateTime|null $fin 
  * @return string 
  */ 
  public static function Diff($debut, $fin=null) { 
      if(!($debut instanceof DateTime)) { 
          $debut = new DateTime($debut); 
      } 

      if($fin === null) { 
          $fin = new DateTime(); 
      } 

      if(!($fin instanceof DateTime)) { 
          $fin = new DateTime($debut); 
      } 

      $intervalle = $fin->diff($debut); 
      $ajoutPluriel = function($nb,$str){return $nb>1?$str.'s':$str;}; // Ajoute des 's' pour les pluriels 

      $format = array(); 
      if($intervalle->y !== 0) { 
          $format[] = "%y ".$ajoutPluriel($intervalle->y, "année"); 
      } 
      if($intervalle->m !== 0) { 
          $format[] = "%m ".$ajoutPluriel($intervalle->m, "mois"); 
      } 
      if($intervalle->d !== 0) { 
          $format[] = "%d ".$ajoutPluriel($intervalle->d, "jour"); 
      } 
      if($intervalle->h !== 0) { 
          $format[] = "%h ".$ajoutPluriel($intervalle->h, "heure"); 
      } 
      if($intervalle->i !== 0) { 
          $format[] = "%i ".$ajoutPluriel($intervalle->i, "minute"); 
      } 
      if($intervalle->s !== 0) { 
          if(!count($format)) { 
              return "Il y a moins d'une minute"; 
          } else { 
              $format[] = "%s ".$ajoutPluriel($intervalle->s, "seconde"); 
          } 
      } 

       
      if(count($format) > 1) { 
          $format = array_shift($format)." et ".array_shift($format); 
      } else { 
          $format = array_pop($format); 
      } 

      // retourne la date formatée
      return 'envoyé il y a '.$intervalle->format($format); 
  } 
}
?>