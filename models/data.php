<?php
$pdo = getPDO();

function getPDO(){

    //initialisation et affectation des variables et de leur valeur par défaut 
    $url = "localhost";         //@ip.... par ex : polenumérique.re ou 172.20.1.101
    $port = '';                     //port ip ... par ex : "3306"
    $char = 'UTF8';                 //charset ... défini le type d'encodage souhaité
    $bdd = 'trombi';                // nom de la data base
    $login = "root";                
    $pass = "";

    //try catch permet de capturer l'erreur et d'en afficher son contenu avec un echo personnalisé 
    try{
        //création de la connection vers un SGBD avec le module php PDO 

        $serveur = 'mysql:host=' .  $url  .';dbname='. $bdd;
        if($port != '') $serveur .= ';port='. $port;
        if($char != '') $serveur .= ';charset='. $char;

        //paramétrage de la connection
        $pdo = new PDO($serveur, $login, $pass); 
        // $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ?? appel de l'attribut ERRMODE ?
        // $connection -> exec();
        // echo 'un texte';


    }catch(PDOException $e){
        // echo 'Échec de la connection : ' .$e->getMessage();
        $pdo == null;
    }
    
    return $pdo;
}

















?>