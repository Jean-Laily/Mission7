<?php

/**
 * M; Récupérer le nom de l'utilisateur via son email
 * O: @return array associatif
 * I: @param email
 */
function nameUserExiste($email){
    global $pdo;

    $sql  = 'SELECT username
                FROM users  
                WHERE log = :email';

    $param = [ 'email' => $email ];

    $requetes = $pdo->prepare($sql); //appel la méthode prepare() de l'objet PDO avec la requête sql en paramètre
    $requetes->execute($param);

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

/**
 * M: Fonction qui à pour but de comparer les id & pw entré par l'utilisateur a celui contenue dans la BDD
 * O: @return un boolean ( 0 = false & 1 = true )
 * I: @param login qui fourni l'id entrée par le user
 *    @param pw qui fourni le pw entrée par le user
 * */
function userExiste($mail, $pwd){
    global $pdo;

    $sql  = 'SELECT log ';
    $sql .= '   FROM users ';
    $sql .= '   WHERE log = :email AND pwd = :pwd ';

    $param = [ 'email'  =>  $mail,
                'pwd'   =>  $pwd  ];  //tableau associatif key => value

    $requetes = $pdo->prepare($sql);
    $requetes->execute($param) ;        //execute la requête avec les 2 paramètres demandés

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);      //récupère 0 ou 1 ligne en tableau ass

    return (count($data) == 1) ;        //vrai si trouvé (count vaut 1) sinon false si pas trouvé (count vaut 0)
}

/**
 *M: A pour but de récupérer les roles de utilisateurs connecté et orienté selon les droits, l'access à certaine options 
 *O: return  la valeur contenue dans la variable $data
 *I: NULL
 */
function getRole($mail){ 
    global $pdo;

    $sql  = 'SELECT rol
                FROM users 
                WHERE log = :email ';

    $param = [ 'email'  =>  $mail];
    $requetes = $pdo->prepare($sql);
    $requetes->execute($param) ;        //execute la requête

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);      //récupère 0 ou 1 ligne en tableau ass
    
    foreach($data as $value){
        $role= $value["rol"] ;
    } 
    // print_r($role);
    // exit(); 
    return $role ;  
}



?>