<div class="container-fluid">
  <div class="row text-center">
    <h1 class="hidden-xs">Mes formations</h1> </div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 menu-formation historique-formation">
      <div class="row">
        <div class="col-xs-12 border-top-purple formation-table-content">
          <h2>Formations en cours ou à venir :</h2>
          <div class="tablescroll">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th class="text-left">Formation</th>
                  <th class="text-center">Date de début</th>
                  <th class="text-center">Lieu</th>
                  <th class="text-center">État</th>
                  <th class="text-center">Télécharger au format pdf</th>
                </tr>
              </thead>
              <tbody>
                <?php showFormation()?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row list-border">
        <div class="col-xs-12 border-top-purple">
          <h2>Historique des formations</h2></div>
        <div class="col-xs-12 col-sm-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher une formation..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </span>
          </div>
          <!-- /input-group -->
        </div>
        <!-- /.col-sm-6 -->
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
      <div class="row historique-table-content">
        <div class="tablescroll">
          <table class="table table-condensed historique-table">
            <thead>
              <tr>
                <th>Intitulé de la formation</th>
                <th>Durée</th>
                <th>Date / Heure</th>
                <th>Lieu</th>
                <th>Prestataire</th>
              </tr>
            </thead>
            <tbody>
              <?php showHistorique(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 calendar-mesformations">
      <div id="card">
        <div class="front">
          <div class="row">
            <div class="col-xs-12 border-top-purple">
              <h2>Calendrier de mes formations :</h2> </div>
          </div>
          <div id='calendar'></div>
        </div>
        <div class="back"> </div>
      </div>
    </div>
  </div>
</div>