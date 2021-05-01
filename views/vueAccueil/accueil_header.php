<!-- Header -->
<header class="py-4 mb-5">
  <!-- début container -->
    <div class="container h-100"> 
      <!-- début row  -->
      <div class="row h-100 align-items-center">
        <!-- début bloc info -->
        <div class="col-lg-12 mt-5 text-center">
          <?php 
            if($estConnecté){
              echo'
              <h1 class="display-4 text-white">Bienvenue '.$_SESSION["username"].'</h1>';
            }else{
              echo '
              <h1 class="display-4 text-white">Page Accueil</h1>
              <p class="lead mb-5 text-white-50">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. 
                Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam. 
              </p>';
            } 
          ?>
        </div>
          <div class="row">
            <div class="col"> 
              <h3 class="msgAccueil"></h3>
              <!-- heure local du serveur -->
              <?php afficherHeures(); ?>
              <!-- via innerHTML on génère un heure qui correspond à celui du pc -->
              <div id="hrsJS" class="time"></div>
            </div>
          </div>
        </div>
        <!-- fin bloc info -->
      </div>
      <!-- fin row -->
    </div>
    <!-- fin container -->
  </header>

