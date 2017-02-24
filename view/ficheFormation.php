<div class="container-fluid">
  <div class="row text-center">
    <h1 class="hidden-xs">Fiche descriptive de la formation</h1> </div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 menu-formation">
      <div class="row text-center jour-credit">
        <div class="col-xs-6">
          <h3><?=round($data['duree']/86000)?> jours</h3>
          <p>de formation
            <p>
        </div>
        <div class="col-xs-6">
          <h3><?=$data['creditPoint']?> Crédits</h3>
          <p>requis</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 border-top-purple">
          <h2>Description de la formation :</h2> </div>
      </div>
      <div class="row list-border">
        <div class="col-xs-4 col-sm-3 col-sm-offset-1"></div>
        <div class="col-xs-8 col-sm-6">
          <h3><?=$data[0]?></h3>
          <h4><?php //TODO : rajouter les tags?></h4> 
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
          <p><?=$data['lieu']?></p>
          <h3>Contenu :</h3>
          <p><?=$data['description']?></p>
          <h3>Prérequis :</h3>
          <p><?=$data['prerequis']?></p>
          <h3>Prestataire :</h3>
          <p><?=$data['nom']?></p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row jour-credit text-center programme-formation">
        <div class="col-xs-6">
         <?= inscritsNumber($data['id']) ?>
        </div>
        <div class="col-xs-6">
          <h3>Modalité :</h3>
          <p>en centre</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 border-top-purple">
          <h2>Programme de la formation :</h2>
          <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ad ex cum libero sunt laboriosam doloribus sapiente necessitatibus facere ducimus quam, commodi exercitationem eos deserunt tempora quod eum nihil quas.</span> <span>At excepturi dolore sit a optio? Delectus, fugiat saepe rem praesentium ipsa dolore nostrum et sequi aperiam, fugit obcaecati facilis soluta tempora. Vel unde, fugit error alias sed harum neque.</span> <span>Commodi cum fugiat ab cupiditate optio debitis perferendis quae consectetur eum adipisci nemo odit vel, doloribus iure animi blanditiis nulla, cumque, laudantium neque totam tempore! A dolore, sed praesentium vel.</span> <span>Nisi voluptatibus, at vero, quaerat porro sequi, id corporis facere esse commodi officiis quo? Iste ea non, nihil quis consectetur ipsa ex, a, fugiat laborum minima dolore sapiente nesciunt id.</span> <span>Cupiditate voluptates dolorem nesciunt minima consequuntur. Laudantium quisquam tempora fuga culpa sequi voluptas rerum neque odit vitae. Magnam quisquam, nihil autem officia voluptatum quam voluptas incidunt vero corrupti non quas!</span> <span>Doloremque assumenda temporibus mollitia earum quae at? Fugiat eaque voluptas placeat doloribus ipsum, quod inventore vel nihil adipisci dolore eligendi, veritatis voluptatum fuga dolorem corrupti, minus debitis incidunt velit hic.</span> <span>Repellendus a autem voluptas saepe tempora tempore quo odio obcaecati enim labore aliquam vero ullam blanditiis corporis aperiam ratione culpa doloribus quaerat sit architecto, doloremque aspernatur perferendis. Nesciunt, quis, molestias.</span> <span>Architecto vel tempora voluptatum pariatur consectetur eius ipsum commodi dolore. Debitis ut, tempore, cupiditate cumque impedit eaque ipsum iure error quibusdam at perferendis. Ducimus odit, tenetur. Ullam rem, non ad.</span> <span>Aspernatur ad id quam, iusto harum hic, voluptate recusandae porro ipsam necessitatibus temporibus est libero culpa ullam optio vitae ea deserunt error laudantium quibusdam assumenda incidunt. Iure, et impedit voluptatem.</span> <span>Velit corporis sequi vitae ab cum doloremque iusto reiciendis nobis molestiae tenetur illo natus voluptatum sunt nisi, commodi culpa aliquid veritatis eveniet saepe distinctio minus. Harum eius, cum incidunt iste.</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>