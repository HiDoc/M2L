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
						<input type="text" class="form-control" id="keywords" placeholder="Rechercher une formation...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
						</div><!-- /input-group -->
					</div><!-- /.col-sm-6 -->
				<div class="col-xs-12 col-sm-offset-3 col-sm-1">
					<div class="input-group">
					  <div class="input-group-btn">
						<button class="btn btn-default active" type="button" data-display="list"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
						<button class="btn btn-default" type="button" data-display="thumbnail"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></button>
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