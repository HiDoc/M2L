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
      $.post( '/M2L/controller/ajax_getFormation.php',{id : calEvent.sqlId, source : 'mesFormations' }).done(function(data){
        $('.back').html(data);
        $('#card').flip(true);
      });
    }
  });
  
  $('#card .back').load('/m2L/controller/ajax_getFormation.php');
});
$('#card').flip({trigger:'manual'});
$('.back').click(function(){
  $('#card').flip(false);
});
$('tr.historique-table-infos, tr.formationToGo-table-infos').click(function(){
  var thisId = $(this).attr('data-id');
  $.post( '/m2l/controller/ajax_getFormation.php',{id : thisId, source: 'mesFormations' }).done(function(data){
    $('.back').html(data);
    $('#card').flip(true);
  });
});
";

function showFormation(){
  $data = getFormation();
  foreach($data as $value){ 
    echo '<tr data-id="'.$value[5].'" class="formationToGo-table-infos">
            <td>'.$value[0].'</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            <td class="text-right"><button class="btn btn-info" type="button"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;Télechargement</span></button></td>
          </tr>';
  }
}
function showHistorique(){
  $data = getHistorique();
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
function coloriserTR($data){
  $color = 'default';
    
  // Vérifie si la formation est passée
  if(strtotime(($data[1] + $data[2]) > time())):
    $color = 'active';
  else :
    $color = 'success';
  endif;
  
  //Returne une ligne colorisée
  echo '<tr data-id="'.$data[0].'" class="'.$color.'">';
  
}
?>
<?php require "view/mesFormations.php" ?>