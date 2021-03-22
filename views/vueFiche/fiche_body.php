<!-- contenu body trombi -->
<div class="container">
  <div class="row">
    <div class="col-12">
          <!-- affichage des données  -->
          <?php 
          // lecture du tableau avec la fonction list() 
          foreach($tabDetailStag as $keys => $values){
            //si le param "coSta" est existant et est égal à codStag alors
            if($_GET["coSec"] == $values["codSec"] && $_GET["coSta"] == $values["codSta"]){
              echo '<img class="float-right" src=" models/assets/'.$values["codSec"].'_'.$values["codSta"].'.png"  alt="une image">';  
              echo'
                <h4> Nom : </h4> <p>' .$values["nomSta"].'</p>
                <h4> Prénom : </h4> <p>' .$values["preSta"].'</p>
                <h4> Date Naissance : </h4> <p>' .$values["datNaisSta"].'</p>
                <h4> Ville : </h4> <p>' .$values["villeSta"].'</p>
                <h4> Interne : </h4> <p>' .$values["interneSta"].'</p>
                <h4> N° Portable : </h4> <p>' .$values["gsmSta"].'</p>
                <h4> Email : </h4> <p>' .$values["mailSta"].'</p>
                <h4> Info complémentaire : </h4> <p>' .$values["obsvSta"].'</p>';
             }
          }
          
        ?>
    </div>
   
    </div>
  <!-- /.row -->
</div>
<!-- /.container -->
