<div class="container-fluid">
	<div class="row text-center">
		<h1 class="hidden-xs">Offres de formations :</h1>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 menu-formation">
			<div class="row text-center jour-credit">
				<div class="col-xs-6">
					<h3>15 jours</h3>
					<p>de formations restants<p>
				</div>
				<div class="col-xs-6">
					<h3>5000 Crédits</h3>
					<p>de formations restants</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 border-top-purple">	
					<h2>Description de la formation :</h2>
				</div>
			</div>
			<div class="row list-border">
				<div class="col-xs-4 col-sm-3 col-sm-offset-1"></div>
				<div class="col-xs-8 col-sm-6">
					<h3>Nom de la formation</h3>
					<h4>Date de la formation</h4>
					<p class="hidden-xs">
						<span class="label label-danger">500 crédits</span>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-offset-1">
					<button class="btn btn-success" type="button">S'inscrire</button>
					<button class="btn btn-info" type="button">Télécharger au format PDF <span class="glyphicon glyphicon-download" aria-hidden="true"></span></button>
				</div>
			</div>
			<div class="row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
				<h3>Lieu :</h3>
				<p>Paris</p>
				<h3>Contenu :</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic a cumque eum obcaecati maiores odit pariatur illum repellendus dolores molestias. Reprehenderit quis recusandae placeat voluptatum expedita dolorum, labore maxime delectus.</p>
				<h3>Prérequis :</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit impedit dolor ex, mollitia ducimus tempore reiciendis provident distinctio, deleniti odio sunt cum quos aut harum, tenetur et ut, laboriosam a.</p>
				<h3>Prestataire :</h3>
				<p>ML2 GESTION</p>
			</div>
			</div>
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