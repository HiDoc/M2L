<?php 
$script ="
$(document).ready(function () {
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
          });
";
require "view/accueil.php";
?>