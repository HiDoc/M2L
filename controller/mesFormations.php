<?php require "model/mesFormations.php" ?>
<?php 
$script =
"$(document).ready(function () {
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today'
      , center: 'title'
      , right: 'month,basicWeek,basicDay'
    }
    , events: '/M2L/controller/json_getCalendar.php'
    , defaultDate: new Date()
    , navLinks: true // can click day/week names to navigate views
    , editable: false
    , eventLimit: true
    , eventClick: function (calEvent, jsEvent, view) {
      $.post( '/m2l/ajax/getFormation/',{id : calEvent.sqlId, source : 'mesFormations' }).done(function(data){
        $('.back').html(data);
        $('#card').flip(true);
      });
    }
  });
  
  $('#card .back').load('/m2l/ajax/getFormation/');
});
$('#card').flip({trigger:'manual'});
$('.back').click(function(){
  $('#card').flip(false);
});
$('tr.historique-table-infos, tr.formationToGo-table-infos').click(function(){
  var thisId = $(this).attr('data-id');
  $.post( '/m2l/ajax/getFormation/',{id : thisId, source: 'mesFormations' }).done(function(data){
    $('.back').html(data);
    $('#card').flip(true);
  });
});
";

function showFormation(){
  $data = getFormation();
  if(!isset($data[0])){
    echo "<tr><td colspan='5'><div class=\"alert alert-info\"> Aucune participation à une formation n'a été trouvé</div></td></tr>";
  }
  foreach($data as $value){ 
    echo '<tr data-id="'.$value[5].'" class="formationToGo-table-infos">
            <td class="text-left">'.$value[0].'</td>
            <td class="text-center">'.$value[2].'</td>
            <td class="text-center">'.$value[3].'</td>
            <td class="text-center">'. coloriserTD($value[4]). '</td>
            <td class="text-center"><button class="btn btn-info" type="button"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;Télechargement</span></button></td>
          </tr>';
  }
}
function showHistorique(){
  $data = getHistorique();
  if(!isset($data[0])){
    echo "<tr><td colspan='5'><div class=\"alert alert-info\"> Aucune participation à une formation n'a été trouvé</div></td></tr>";
  }
  foreach($data as $value){
      echo '<tr class="historique-table-infos" data-id="'.$value[5].'">
              <td>'.$value[0].'</td>
              <td>'.round($value[1]/86400).' jours</td>
              <td>'.$value[2].'</td>
              <td>'.$value[3].'</td>
              <td>'.$value[4].'</td>
            </tr>';
  }
}
function coloriserTD($data){
  $span = "<span class ='label label-";
  $span .= $data ? 'success' : 'warning';
  $span .= "'>";
  $span .= $data ? 'Validé' : 'En attente de validation';
  $span .= "</span>";
  return $span;
}
?>
<?php require "view/mesFormations.php" ?>