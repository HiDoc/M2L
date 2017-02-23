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
        <h3><?=$data[0]?></h3>
        <h4><?=$data[1]?></h4>
        <p class="hidden-xs">
            <span class="label label-danger"><?=$data[2]?> crédits</span>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
     <?php buttonToShow()?>
    </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-offset-1 col-sm-10">
      <h3>Lieu :</h3>
      <p><?=$data[3]?></p>
      <h3>Contenu :</h3>
      <p><?=$data[4]?></p>
      <h3>Prérequis :</h3>
      <p><?=$data[5]?></p>
      <h3>Prestataire :</h3>
      <p><?=$data[6]?></p>
  </div>
</div>