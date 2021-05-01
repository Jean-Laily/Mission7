<!-- Page Content accueil -->
<div class="container">
    <div class="row">
      <!-- bloc A -->
      <div class="col-lg-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn" href="#">Call to Action &raquo;</a>
      </div>

      <!-- bloc B -->
      <?php 
        if($estConnecté){
          //debut echo grp
          echo '<div class="col-lg-4 mb-5 m-auto connection">';
            echo '<h2 class="text-center">Vous êtes connecté </h2>';
            echo '<hr>';
            echo '<p id="erreurMSG">';

              if(isset($_GET["er"])){
                messageErreurCtrl($_GET["er"]);
              } echo '</p>';
            echo '<div class="text-center mb-3">';
              echo ' <a class="btn" href="./index.php?act=dx" type="button">Déconnexion</a>';
            echo '</div>';
          echo '</div>';
        }else{
          echo '
          <div class="col-lg-4 mb-5 connection">
            <h2>Se connecter</h2>
            <hr>
            <p id="erreurMSG"> ';

            if(isset($_GET["er"])){
              messageErreurCtrl($_GET["er"]);
            }

          echo '
            </p>
            <form action="./index.php?act=cx" method="post" >
                <div>
                    <label for="nameUser">Nom utilisateur <br/>
                    <input type="email" name="email" id="nameUser placeholder="to@to.to" required ></label>
                </div>
                <div>
                    <label for="passWord">Mot de passe <br/>
                    <input type="password" name="pw" id="passWord placeholder="toto" required></label>
                </div>
                <button class="btn mt-3 font-weight-bold font-italic" type="submit">Se connecter</button>
            </form>
            <br/>
          </div>';    
        }
      ?>
    </div>
    
    <!-- *************** Parti Card + image ************** -->  
    <!-- /.row -->
    <div class="row">
        <!-- bloc C -->
      <div class="col-md-4 mb-5">
        <div class="card h-100 new">
          <img class="card-img-top" src="https://picsum.photos/id/237/300/200" alt="un chien">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <!-- bloc D -->
      <div class="col-md-4 mb-5">
        <div class="card h-100 new">
          <img class="card-img-top" src="https://picsum.photos/300/200 " alt="une image aléatoire">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
          
      <!-- bloc E -->
        <div class="col-md-4 mb-5">
          <div class="card h-100 new">
            <img class="card-img-top" src="https://picsum.photos/300/200" alt="une image aléatoire">
            <div class="card-body">
              <ul>
                <?php $arrNews;
                  foreach($arrNews as $news){
                  echo '<li>'.$news["dat"] .' : '.$news["lib"].'</li>';
                  }?>
              </ul>
            </div>
          </div>
      </div>
    </div>
    <!-- /.row -->
</div>
  <!-- /.container -->
