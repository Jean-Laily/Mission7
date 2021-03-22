<?php
    include 'models/managerStagiaires.php';
    //cas ou l'utilisateur à choisi de mémoriser la page trombi dans c'est favori
    //si la variable session[username] && session[pass] n'est pas existant alors on redirection vers index?act <= ac
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:./index.php?act=ac');
    }
    
    //init var
    if(isset($_GET["ltr"]) && !is_numeric($_GET["ltr"])){
        $lettreChoisi = (isset($_GET["ltr"])) ? $_GET["ltr"] : "";
        $tabListeStagInit = getListeStagiaire();
    
        $view ="vInitial";
    }else{
        header("location:./index.php?act=tr&err=1");
    }
    
?>