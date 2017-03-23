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
  * Script de la page à rafraichir si une 
  * nouvelle requête à été exécutée
  * TODO : Définir l'utilisation
  */
$scriptBase = "  
$(document).ready(function(){
  $('.menu-formation').load('/m2l/ajax/getFormation/',function(){
    $('button.btn-success').click(function(){
      $.post('/m2l/ajax/inscriptionFormation/', {id : $(this).attr('data-id') }, \"json\").done(function(data){
          $('#btn-div button:first-of-type').remove();
          data = JSON.parse(data);
          $('#btn-div').prepend(data.buttons);
          $('div.jour-credit > div:nth-child(1) h3').text(data.cj + ' jours');
          $('div.jour-credit > div:nth-child(2) h3').text(data.cp + ' crédits');
        });
    });
  });
  $('#search').click(function(){
    var getType = $('button.active[data-display]').attr('data-display');
    $.post('/m2l/ajax/recherche/',{ keywords : $(\"#keywords\").val(),type : getType }).done(function(data){
      $('tbody').html(data);
      reload();
      });
  });
  $('#keywords').keypress(function(event){
    var getType = $('button.active[data-display]').attr('data-display');
    if ( event.which == 13) {
      $.post('/m2l/ajax/recherche/',{ keywords : $(\"#keywords\").val(), type : getType }).done(function(data){
      $('tbody').html(data);
      reload();
      });
    }
  });
  $('button[data-display~=thumbnail], button[data-display~=list]').click(function(event){
    $('button[data-display~=thumbnail], button[data-display~=list]').removeClass('active');
    $(this).addClass('active');
    var displayBox = $(this).attr('data-display') == 'list';
    event.preventDefault;
    $.post('/m2l/ajax/recherche/',{ keywords : $.trim($('#keywords').val()), type : $(this).attr('data-display')}).done(
      function(data) { 
        if(displayBox) 
          $('thead').fadeIn(200);
        else
          $('thead').fadeOut(200);
        $('tbody').html(data);
        reload();
      });
    });
  });
  ";
$script = "
$('tr').hover(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').addClass('formation-hover');
}).mouseout(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').removeClass('formation-hover');
});
$('tr, button[data-id]').click(function(){
  var thisId = $(this).attr('data-id');
  $.post('/m2l/ajax/getFormation/',{id : thisId, source:'formation' }).done(function(data){
      $('.menu-formation').html(data);
      $('button.btn-success').click(function(){
        $.post('/m2l/ajax/inscriptionFormation/', {id : $(this).attr('data-id') }, \"json\").done(function(data){
          data = JSON.parse(data);  
          $('#btn-div button:first-of-type').remove();
          $('#btn-div').prepend(data.buttons);
          $('div.jour-credit > div:nth-child(1) h3').text(data.cj + ' Jours');
          $('div.jour-credit > div:nth-child(2) h3').text(data.cp + ' Crédits');
        });
      });
    });
  });
";
?>
<?php require "view/formation.php"; ?>
