<?php
    include './models/managerNews.php';
    // si le param act vaut ac alors on affiche la view accueil 
    if(isset($action) && $action == "ac" ){
        $estConnecté= true;        
        $arrNews = getNews(5);

         //condition pour le message erreur
        
         //cas ou l'utilisateur à choisi de mémoriser la page trombi dans c'est favori
        //si la variable session[username] && session[pass] n'est pas existant alors on redirection vers index?act <= ac
        if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
            $estConnecté = false;
            
           
        }

        $view = "vAccueil";
    }


?>