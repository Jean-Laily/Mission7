<?php
    include './models/managerSections.php';

    //cas ou l'utilisateur à choisi de mémoriser la page trombi dans c'est favori
    //si la variable session[username] && session[pass] n'est pas existant alors on redirection vers index?act <= ac
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:./index.php?act=ac');
    }

    $compteur =0;
    $msgErreur = "";

    // parti traitement des données
    if($action == "tr"){
        //recupération des données transmit par la BDD en tableau
        $tabListeSec = getListeSection();
        $view = "vTrombi"; 
        
        //cas si le parametre erreur est reçus et qu'il vaut 1
        if(isset($_GET["err"]) && $_GET["err"] == 1){
            $msgErreur = '<h4> Erreur paramètre invalide </h4>';
            $_GET["err"] = $msgErreur;
            redirectionTimer("index.php?act=tr", 3);
        }
        
    }
    
    
?>