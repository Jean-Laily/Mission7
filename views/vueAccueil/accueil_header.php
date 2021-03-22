<!-- Header -->
<header class="py-5 mb-5">
  <!-- debut container -->
    <div class="container h-100"> 
      <!-- debut row  -->
      <div class="row h-100 align-items-center">
        <!-- debut bloc info -->
        <div class="col-lg-12 text-center">
          <?php 
            if($estConnecté){
              echo'
              <img class="float-right" src="./assets/enTete/trombi.img.png" alt="une image">
              <h1 class="display-4 text-white mt-5 mb-2">Page accueil</h1>';
            }else{
              echo '
              <img class="float-right" src="./assets/enTete/trombi.img.png" alt="une image">
              <h1 class="display-4 text-white mt-5 mb-2">Page Accueil</h1>
              <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. 
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
              <p id="hrsJS" class="time"></p>
            </div>
          </div>
        </div>
        <!-- fin bloc info -->
      </div>
      <!-- fin row -->
    </div>
    <!-- fin container -->
  </header>

