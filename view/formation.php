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
  eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(\'3\').8(2(){7 0=$(6).5(\'1-0\');$(\'3[1-0|=\'+0+\']\').h(\'4-8\')}).g(2(){7 0=$(6).5(\'1-0\');$(\'3[1-0|=\'+0+\']\').m(\'4-8\')});$(i).d(2(){$(\'.9-4\').f(\'a/b.c\')});$(\'3\').j(2(){7 $0=$(6).5(\'1-0\');$.k("a/b.c",{0:$0}).l(2(1){$(\'.9-4\').e(1)})});',23,23,'id|data|function|tr|formation|attr|this|var|hover|menu|controller|ajax_getFormation|php|ready|html|load|mouseout|addClass|document|click|post|done|removeClass'.split('|'),0,{}));
</script>
<?php /*$('tr').hover(function(){
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
  $.post( "controller/ajax_getFormation.php",{id : $id }).done(function(data){
      $('.menu-formation').html(data);
    });
  });*/?>