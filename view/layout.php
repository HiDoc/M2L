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
		<link href="<?=BASE_URL?>/view/css/bootstrap.css" rel="stylesheet">
		<link href="<?=BASE_URL?>/view/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?=BASE_URL?>/view/css/style.css" rel="stylesheet">
        <link href='<?=BASE_URL?>/view/css/fullcalendar.min.css' rel='stylesheet' />
        <link href='<?=BASE_URL?>/view/css/fullcalendar.print.css' rel='stylesheet' media='print' />
		<!-- Google Font CSS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
		<!-- Loader -->
	</head>

	<body>
		<nav class="navbar navbar-static-top navbar-default">
		  <div class="container-fluid">
			<!-- Nom de l'entreprise et liste pour mobile -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1,#navbar-collapse-2" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="accueil">M2L GESTION</a>
			</div>
			
			<!-- Navbar Haut -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Mon compte&nbsp;<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="profil"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Profil </a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>&nbsp;&nbsp;Se déconnecter</a></li>
						</ul>
					</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="wrapper">
			<div class="row">
				<div class="container-fluid">
                    <div class="col-sm-2">
                        <div class="collapse navbar-collapse" id="navbar-collapse-2">

                            <!-- Navbar Gauche -->
                            <nav>
                                <ul class="nav nav-pills nav-stacked">
                                  <li role="menuitem"><a href="accueil"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Accueil</a></li>
                                  <li role="menuitem"><a href="formation"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp;&nbsp;Offres de formations</a></li>
                                  <li role="menuitem"><a href="mesFormations"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Mes formations</a></li>
                                  <li role="menuitem"><a href="messagerie"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Messages</a></li>
                                  <li role="menuitem"><a href="connexion"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>&nbsp;&nbsp;Se connecter</a></li>
                                  <li role="menuitem"><a href="ficheFormation"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Fiche de formation</a></li>
                                </ul>
                            </nav>
                        </div>
					</div>
					<div class="col-xs-12 col-md-10">
						<section class="section">
						<?php echo $content; ?>
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js">
		<!-- Plugins jQuery -->
		<script src="<?=BASE_URL?>/view/js/bootstrap.min.js"></script>
        <script src='<?=BASE_URL?>/view/js/moment.min.js'></script>
        <script src='<?=BASE_URL?>/view/js/fullcalendar.min.js'></script>
        <script>
			var actual = window.location.pathname.substr(5);
			$('#navbar-collapse-2 > nav > ul > li > a[href$=' + actual +']').parent().addClass('active');
		</script>
	</body>
</html>