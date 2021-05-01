<!-- contenu body trombi -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <table class="table table-bordered align-baseline">
          <thead>
            <tr>
              <th colspan="5"><h4>Liste des stagiaires</h4></th>
            </tr>
            <tr class="font-weight-bold ">
              <td>Code stagiaire</td>
              <td>Nom stagiaire</td>
              <td>Prénom stagiaire</td>
              <td>photo stagiaire</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
              <!-- affichage des données  -->
              <?php 
              $aucunStag = true;
              //on récupère toutes les informations utiles listés dans la fonction list()
              foreach($tabListeStag as $keys => $values){
              //si le paramètre passé est égal au code section du tableau alors
                if($_GET["coSec"] == $values["codSec"]){
                    //prépare une variable à qui on concatène une ensemble de code html et de variable
                    echo '  
                        <tr>
                            <td>'.$values["codSta"].'</td>
                            <td>'.$values["nomSta"].'</td>
                            <td>'.$values["preSta"].'</td>
                            <td><img src="models/portrait/'.$_GET["coSec"].'_'.$values["codSta"].'.png" width=70px; height=70px; alt="photo"></td>
                            <td class="align-baseline">
                              <a href="./index.php?act=fi&coSec='.$values["codSec"].'&coSta='.$values["codSta"].'">
                                <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-file-earmark-person-fill" fill="#874fb3" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755S12 12 8 12s-5 1.755-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                                </svg>
                              </a>
                            </td>
                        </tr>'; 
                    $aucunStag = false;
                }
              }if($aucunStag){
                    echo ' <td colspan="5"><strong>Pas de stagiaire dans cette section </strong></td>';
                } ?>
          </tbody>
      </table>
      </div >
    </div>
  <!-- /.row -->
</div>
<!-- /.container -->
