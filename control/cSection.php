<?php
    include 'models/managerStagiaires.php';

    //cas ou l'utilisateur à choisi de mémoriser la page trombi dans c'est favori
    //si la variable session[username] && session[pass] n'est pas existant alors on redirection vers index?act <= ac
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:./index.php?act=ac');
    }

    //condition ici ou on demande si le param (coSec = codeSection) existe et est pas null 
    //si condition sont respecté alors on fait nos affichages en appellant la view 
    //sinon redirection vers le trombi avec un param Err
    if(isset($_GET["coSec"])){
        
        //init var
        $msgStagVide = "";
        $pCodeSection = $_GET["coSec"];
        $tabListeStag = getListeStagiaire();
        $view = "vSection";
        

    }else {
        header("location:./index.php?act=tr&err=1");
        
    }

    

?>