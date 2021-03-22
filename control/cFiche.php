<?php
    include 'models/managerStagiaires.php';

    //cas ou l'utilisateur à choisi de mémoriser la page trombi dans c'est favori
    //si la variable session[username] && session[pass] n'est pas existant alors on redirection vers index?act <= ac
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:./index.php?act=ac');
    }

    //Condition ici ou on demande si le param (coSec = codeSection) && (codSta = codeStagiaire) existe et est pas null 
    //si toutes ces conditions sont respectés alors on prépare l'affichage et on appel la view 
    //sinon redirection vers le trombi avec un param Err
    if(isset($_GET["coSec"]) && isset($_GET["coSta"])){
       
        //init var
        $afficherDetail = "";
        $tabDetailStag = getListeStagiaire();
        
        $view = "vFiche";
    }else {
        header("location:./index.php?act=tr&err=1");
    }

    

?>