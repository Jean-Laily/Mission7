<?php

    session_start();
    // appel des outils universel pour le site a revoir ici l'appel des functions
    include 'models/data.php';
    include 'tools/mesTools.php';
    
    if($pdo == null){
        header('location:./index.php?act=403');
    }


    //init var
    $view = "";

    //filtre des paramètres GET
    // on affecte la valeur de get[act] dans une variable
    $action = $_GET["act"];
    
    //cas blindage de s'il y a manipulation du parametre er = erreur 
    //alors redirection vers l'accueil
    if(isset($_GET["er"])){
        if($_GET["er"] != 1){
            header('location:./index.php?act=ac');
        } 
    }
   
    //si le param "act" n'EXISTE pas et est forcement NULL alors
    if(!isset($_GET["act"])){
       //redirection avec le parametre act créer
       header('location:./index.php?act=ac');
    }else{
        //Création d'un switch qui selon le cas nous envoi vers le controleur demander
        switch ($action){
            case "ac":
                include './control/cAccueil.php';
            break;
            case "tr":
                include './control/cTrombi.php';
            break;
            case "cx":
                include './control/cConnection.php';
            break;
            case "dx":
                include './control/cDeconnection.php';
            break;
            case "se":
                include './control/cSection.php';
            break;
            case "it":
                include './control/cInitial.php';
            break;
            case "fi":
                include './control/cFiche.php';
            break;
            case "404":
                include './control/cErreur.php';
            break;
            case "403":
                include './control/cErreur.php';
            break;
            default :
                header('location:./index.php?act=404');
        }
    }

include './views/'.$view.'.php';
    
 

?>