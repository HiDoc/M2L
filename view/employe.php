<div class="container-fluid">
  <div class="row text-center">
    <h1 class="hidden-xs">Liste des employés</h1></div>
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="row menu-formation">
        <div class="col-xs-12">
          <div class="row text-center jour-credit">
            <div class="col-xs-6">
              <h3><?= getNumber(); ?></h3>
              <p>Employés
                <p>
            </div>
            <div class="col-xs-6">
              <h3>5000 Crédits</h3>
              <p>requis</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <h2>Récapitulatif des employés :</h2>
              <table class="table table-condensed historique-table">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Formation de l'employé</th>
                  </tr>
                </thead>
                <tbody>
                  <?php showEmploye();?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row text-center jour-credit">
        <div class="col-xs-6">
          <h3>2 jours</h3>
          <p>de formation
            <p>
        </div>
        <div class="col-xs-6">
          <h3>5000 Crédits</h3>
          <p>requis</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h2>Formation à valider :</h2>
          <table class="table table-condensed historique-table">
            <thead>
              <tr>
                <th>Nom de la formation</th>
                <th>Date de la formation</th>
                <th>Durée de la formation</th>
                <th>Valider la formation</th>
              </tr>
            </thead>
            <tbody id='toValid'>
              <?php getEmployeFormation(); ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h2>Formation validée :</h2>
          <table class="table table-condensed historique-table">
            <thead>
              <tr>
                <th>Nom de la formation</th>
                <th>Date de la formation</th>
                <th>Durée de la formation</th>
                <th>Invalider la formation</th>
              </tr>
            </thead>
            <tbody id="toUnvalid">
              <?php getEmployeFormationValid(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>