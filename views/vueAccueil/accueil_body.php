<!-- Page Content accueil -->
<div class="container">
    <div class="row">
      <!-- bloc A -->
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
      </div>

      <!-- bloc B -->
      <?php 
        if($estConnecté){
          echo '
          <div class="col-md-4 mb-5 connection">
              <h2>Vous êtes actuellement connecté </h2>
              <hr>
              <p id="erreurMSG"> ';

              if(isset($_GET["er"])){
                messageErreurCtrl($_GET["er"]);
              }
  
            echo '</p>
            <p >Compte :  '.$_SESSION["username"] .'
              <div class="mt-5">
                  <br/>
                  <div class="mt-2 ">
                      <a class="btn" href="./index.php?act=dx" type="button">Déconnection</a>
                    </div>
                  </p>
              </div>
          </div>';
        }else{
          echo '
          <div class="col-md-4 mb-5 connection">
            <h2>Se connecter</h2>
            <hr>
            <p id="erreurMSG"> ';

            if(isset($_GET["er"])){
              messageErreurCtrl($_GET["er"]);
            }

          echo '
            </p>
            <form action="./index.php?act=cx" method="post" >
                <div class="al">
                    <label for="nameUser">Nom utilisateur <br/>
                    <input type="email" name="email" id="nameUser" ></label>
                </div>
                <div>
                    <label for="passWord">Mot de passe <br/>
                    <input type="password" name="pw" id="passWord" ></label>
                </div>
                <button class="btn " type="submit">Se connecter</button>
            </form>
            <br/>
          </div>';    
        }
      ?>
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- bloc C -->
      <div class="col-md-4 mb-5">
        <div class="card h-100 new">
          <img class="card-img-top" src="https://picsum.photos/124/237/200/300" alt="">
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
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
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
            <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
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
