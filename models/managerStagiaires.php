<?php

function getListeStagiaire(){
    global $pdo;

    $sql ='SELECT * 
            FROM stagiaires';

    $requetes = $pdo->prepare($sql);
    $requetes->execute();

    $data = $requetes->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}



?>