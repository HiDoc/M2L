<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Icone et titre -->
		<link rel="icon" type="image/png" href="favicon.png" />
		<title>M2L Gestion</title>
		<!-- Mise en page / CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Google Font CSS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<!-- Loader -->
	</head>

	<body>
		<nav class="navbar navbar-static-top navbar-default">
		  <div class="container-fluid">
			<!-- Marque et liste pour mobile -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">M2L GESTION</a>
			</div>
			
			<!-- Navbar -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
					<li>	
					  <form class="navbar-form navbar-left">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-btn">
								<input type="search" class="form-control" placeholder="Rechercher...">
									<button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					  </form>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profil</a></li>
							<li><a href="#">Paramètres de compte</a></l/********************/**</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Se déconnecter <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></li>
						</ul>
					</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="wrapper">
			<div class="row">
				<div class="container-fluid">
					<div class="col-xs-4 col-md-2">
						<nav>
							<ul class="nav nav-pills nav-stacked">
							  <li role="presentation" class="active"><a href="#">Home</a></li>
							  <li role="presentation"><a href="#">Profile</a></li>
							  <li role="presentation"><a href="#">Messages</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-xs-8 col-md-10">
						<section class="section">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6">
										<h1>Hello, world!</h1>
									</div><!-- /COL -->
								</div><!-- /ROW -->
							</div><!-- /Container-Fluid -->
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Plugins jQuery -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>