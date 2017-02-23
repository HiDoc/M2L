<div class="container-fluid">
	<div class="row text-center">
		<h1 class="hidden-xs">Offres de formations :</h1>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 menu-formation">
			
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="row">
				<div class="col-xs-12 border-top-purple">
					<h2>Toutes les offres</h2>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Rechercher une formation...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
						</div><!-- /input-group -->
					</div><!-- /.col-sm-6 -->
				<div class="col-xs-12 col-sm-offset-3 col-sm-1">
					<div class="input-group">
					  <div class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></button>
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
					  </div>
					</div>
				</div>
			</div>	
			<div class="row tablescroll">
				<table class="table table-condensed formation-table">
						<thead>
						   <tr>
							   <th>Intitulé de la formation</th>
							   <th>Durée</th>
							   <th>Date</th>
							   <th>Lieu</th>
							   <th>Prestataire</th>
							 </tr>
						</thead>
						<tbody>
							<?php showFormation(); ?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</div>
<script>
  $('tr').hover(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').addClass('formation-hover');
}).mouseout(function(){
  var id = $(this).attr('data-id');
  $('tr[data-id|='+ id +']').removeClass('formation-hover');
});
$(document).ready(function(){
  $('.menu-formation').load('controller/ajax_getFormation.php');
});
$('tr').click(function(){
  var $id = $(this).attr('data-id');
  $.post( "controller/ajax_getFormation.php",{id : $id, source:'formation' }).done(function(data){
      $('.menu-formation').html(data);
    });
  });
</script>