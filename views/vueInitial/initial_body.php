<!-- contenu body trombi -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th colspan="5"><h4>Liste des stagiaires commençant par l'initial <?php echo $lettreChoisi; ?></h4></th>
            </tr>
            <tr class="font-weight-bold ">
              <td>Code section</td>
              <td>Code stagiaire</td>
              <td>Nom stagiaire</td>
              <td>Prénom stagiaire</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <!-- affichage des données  -->
            <?php
            $aucunStag = true; 
            //on récupère toutes les informations utiles listés dans la fonction list()
            foreach($tabListeStagInit as $keys => $values){
              
              //récupère la première lettre de chaque nom de stagiaire
              $firstLetter = substr($values["nomSta"],0,1); // retourne la 1ère lettre mais sans guillemet
              $firstLetter = '"'.$firstLetter.'"'; // ajout des guillemets à la 1ère lettre

              if($lettreChoisi == $firstLetter){
                echo'
                <tr>
                    <td>'.$values["codSec"].'</td>
                    <td>'.$values["codSta"].'</td>
                    <td>'.$values["nomSta"].'</td>
                    <td>'.$values["preSta"].'</td>
                    <td>
                      <a href="./index.php?act=fi&coSec='.$values["codSec"].'&coSta='.$values["codSta"].'">
                          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-file-earmark-person-fill" fill="#874fb3" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755S12 12 8 12s-5 1.755-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                          </svg>
                      </a>
                    </td>
                </tr>';
                $aucunStag = false; 
              } //fin if
              
            }//fin foreach

            if($aucunStag){
              echo '<td colspan="5"><strong>Erreur, pas de nom correspondant à cette initial</strong></td>' ;
            }?>
            
          </tbody>   
      </table>
    </div>
    </div>
  <!-- /.row -->
</div>
<!-- /.container -->
