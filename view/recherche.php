<div class="container-fluid">
	<div class="row text-center">
		<h1 class="hidden-xs">Rechercher une formation</h1>
	</div>
	<div class="row">
      <div class="col-xs-12 col-sm-6 menu-formation">
        <div class="row">
          <div class="col-xs-12 border-top-purple">
            <h2>Retrouver une formation :</h2>
            <form method="POST" id="formResearch">
              <input type="text" id="recherche" name="recherche" class="form-control" placeholder="Chercher une formation" aria-describedby="sizing-addon2">
              <input type="submit" id="submit" name="submit" value="Ok">
            </form>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6" id='result'>
      </div>
	</div>
</div>
<script async>
  jQuery('span#sizing-addon2').click(function(){
    
  });
</script>