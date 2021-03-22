<?php

function userExiste($login, $pwd){
    global $pdo;

    $sql  = 'SELECT log ';
    $sql .= '   FROM users ';
    $sql .= '   WHERE log = :login AND pwd = :pwd ';

    // var_dump($sql) ;

    $param = [ 'login'=>    $login,
                'pwd'=>     $pwd        ];  //tableau associatif key => value

    // var_dump($param) ;

    $requetes = $pdo->prepare($sql);
    $requetes->execute($param) ;        //execute la requete avec les 2 parametre demandé

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);      //recupère 0 ou 1 ligne en tableau ass

    // var_dump($data) ;

    // exit(); 

    return (count($data) == 1) ;        //vrai si trouvé (count vaut 1) sinon false si pas trouvé (count vaut 0)
}

/**
 *M: A pour but de récupérer les roles de utilisateurs connecté et orienté selon les droit l'access à certaine option 
 *O: return True or False si l'utilisateur est admin ou non 
 *I: NULL
 */
function getRole(){ // à faire
    global $pdo;

    $sql  = 'SELECT rol
                FROM users 
                WHERE rol="A"';

    // var_dump($sql) ;

    $requetes = $pdo->prepare($sql);
    $requetes->execute() ;        //execute la requete avec les 2 parametre demandé

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);      //recupère 0 ou 1 ligne en tableau ass

    // var_dump($data) ;

    // exit(); 

    return $data ;        //vrai si trouvé (count vaut 1) sinon false si pas trouvé (count vaut 0)
}



?>