<?php require "model/formation.php"; ?>
<?php 
/**
  * Affiche les formations sous forme de tableau dans la partie droite
  */
function showFormation(){
  $data = getFormation();
  foreach($data as $value){
    echo '
    <tr class="formation-table-infos" data-id="'.$value[7].'">
        <td>'.$value[0].'</td>
        <td>'.round($value[1]/86400).' jours</td>
        <td>'.$value[2].'</td>
        <td>'.$value[3].'</td>
        <td>'.$value[4].'</td>
    </tr>
    <tr class="formation-table-contenu" data-id="'.$value[7].'">
        <td colspan="1">Contenu :</td>
        <td colspan="5">'.$value[5].'</td>
    </tr>
    <tr class="formation-table-prerequis" data-id="'.$value[7].'">
        <td colspan="1">Prérequis</td>
        <td colspan="5">'.$value[6].'</td>
    </tr>
    ';
  }
}
/**
  * Script de la page
  * TODO : Définir l'utilisation
  */
$script = "  
$(document).ready(function(){
  $('.menu-formation').load('/m2l/controller/ajax_getFormation.php',function(){
    $('button.btn-success').click(function(){
      $.post('/m2l/controller/ajax_inscriptionFormation.php',{id : $(this).attr('data-id') }).done(function(data){
        $('#btn-div button:first-of-type').remove();
        $('#btn-div').prepend(data);
      });
    });
  });
});
$('tr').hover(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').addClass('formation-hover');
}).mouseout(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').removeClass('formation-hover');
});
$('tr').click(function(){
  var thisId = $(this).attr('data-id');
  $.post('/m2l/controller/ajax_getFormation.php',{id : thisId, source:'formation' }).done(function(data){
      $('.menu-formation').html(data);
      $('button.btn-success').click(function(){
        $.post('/m2l/controller/ajax_inscriptionFormation.php',{id : $(this).attr('data-id') }).done(function(data){
          $('#btn-div button:first-of-type').remove();
          $('#btn-div').prepend(data);
        });
      });
    });
  });
  $('#search').click(function(){
  $.post('/m2l/controller/ajax_recherche.php',{ keywords : $(\"#keywords\").val() }).done(function(data){
    $('tbody').html(data);
    reload();
  });
});";
?>
<?php require "view/formation.php"; ?>
