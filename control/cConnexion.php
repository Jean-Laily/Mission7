<?php

    include 'models/managerUsers.php';

    // init et aff + contrôle des donnés par ex .... vérifie si l'email exist si oui retourne la valeur sinon chaîne caractère vide
    $mail = (isset($_POST["email"])) ? $_POST["email"] : "";
    $mdp = (isset($_POST["pw"])) ? $_POST["pw"] : "";

    if(userExiste($mail, $mdp)){ 
        //création d'un variable session <= la valeur @id envoyer en post
        $roleUser = getRole($mail);
        $nameTab = nameUserExiste($mail);

        foreach($nameTab as $value){
           $name = $value["username"];
        }

        $_SESSION["username"] = $name;
        $_SESSION["email"] = $mail;
        $_SESSION["pass"] = $mdp;
        $_SESSION["role"] = $roleUser;

        header('location:./index.php?act=tr');
        
    }else{
        header('location:./index.php?act=ac&er=1');
    }
