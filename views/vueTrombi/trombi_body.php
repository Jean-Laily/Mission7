
<!-- contenu body trombi -->
<div class="container">
  <div class="row">
    <?php 
    if(isset($_GET["err"])){
      echo $_GET["err"];
    } ?>
    <div class="col-12">
      <table class="table table-striped text-center">
          <thead>
            <tr>
              <th colspan="4"><h4>Liste des sections</h4></th>
            </tr>
            <tr>
              <td>code section</td>
              <td>libelé section</td>
              <td>date debut section</td>
              <td>nombre stagiaire</td>
            </tr>
          </thead>
          <tbody >
            <!-- affichage de la liste des section existante  -->
            <?php 
            //lecture de l'ensemble du tableau par paire ?!? $nbSect correspond à l'intération du forEach 
            foreach($tabListeSec as $keys => $values){
             echo '
              <tr>
                  <td><img src="./assets/media/'.$values["codSec"].'_icons.png" /></td>
                  <td>'.$values["libSec"].'</td>
                  <td>'.$values["datDebSec"].'</td>
                  <td>'.$values["nbStag"].'</td>
                  <td>
                      <a href="./index.php?act=se&coSec='.$values["codSec"].'">
                          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#874fb3" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>
                      </a>
                  </td>
              <tr>';
            } 
            ?>
          </tbody>
      </table>
    </div>
    <div class=" col-12 text-center">
      <h4>Rechercher un stagiaire par initial </h4>
    </div>
    <div class="col-12 text-center">
      <!-- appel la fonction d'affichage des lettres alphabetique -->
      <?php afficheAlphabet(); ?>
    </div>
    <br/> <br/>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
