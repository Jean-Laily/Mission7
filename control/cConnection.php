<?php

    include 'models/managerUsers.php';

    // init et aff + controle des donnés par ex .... verifie si post email exist si oui retourne la valeur sinon chaine carratère vide
    $id = (isset($_POST["email"])) ? $_POST["email"] : "";
    $mdp = (isset($_POST["pw"])) ? $_POST["pw"] : "";

    if(userExiste($id, $mdp)){ 
        //création d'un variable session <= la valeur @id envoyer en post
        $_SESSION["username"] = $id;
        $_SESSION["pass"] = $mdp;

        header('location:./index.php?act=tr');
        
    }else{
        header('location:./index.php?act=ac&er=1');
        
    }

    

    

    

?>