<?php

//récupère les 5 dernière news depuis la BDD
function getNews($nb){
    global $pdo;
 
    $sql  = 'SELECT dat, lib';              //selectionne les colonnes à afficher
    $sql .= '   FROM news';                 //depuis la table news
    $sql .= '   ORDER BY dat DESC';         //par ordre décroissant sur la colonne dat
    $sql .= '   LIMIT '.$nb;                //avec une limite d'affichage de 5
 
    $requete = $pdo->prepare($sql);         //la var @requete se voit affecter de la varGlob @pdo et d'une fonction prepare() prenant un param
    $requete->execute();                    //la var @requete est execute
 
    $data = $requete->fetchAll(PDO::FETCH_ASSOC);   //retourne un tableau associatif par ex: $key => $value
    
    return $data;
 }

?>