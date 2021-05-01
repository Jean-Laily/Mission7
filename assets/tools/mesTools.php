<?php

/****************************************************************************************************
 *                                      PARTI TRAITEMENT
 *
 ***************************************************************************************************/


 /**
 * M: Permet une redirection temporisé 
 * O: @return NULL
 * I: @param url = le chemin qu'il faudra utilisé pour la redirection
 *    @param delai = le temps de rafraîchissement qu'il faudrait utilisé en seconde
*/
function redirectionTimer($url, $delai = 5) {
    header("refresh: $delai; url = $url");
}


/****************************************************************************************************
 *                                      PARTI AFFICHAGE
 *
 ***************************************************************************************************/


/**
 * M: Sert à afficher les 26 lettres d'alphabet dans une balise <a> de type=bouton  
 * O: @return NULL
 * I: @param NULL
 */
function afficheAlphabet(){
    //appel la fonction range() qui prend 2 paramètres
    foreach(range('A','Z') as $lettre){
        echo " "; 
        echo '<a class="btn" href=./index.php?act=it&ltr="'. $lettre .'" type="button"> '. $lettre .' </a>'; 
    }
   
}


/**
 * M: permet après contrôle de rediriger si la condition estOK ou retourne un message d'erreur si la condition estKO
 * O: @return NULL
 * I: @param NULL
 */
function messageErreurCtrl($valide){
    //init et défini la variable messageErreur
    $messageErreur = "identifiant ou mot de passe incorrecte";
    //ajout de la condition si les données du formulaire est existant et soit différent de null ALORS
    if($valide == 1){
        echo $messageErreur ;
    }
    
}


/**
 * M: C'est l'initialisation du time_zone en UTC+4 & d'afficher l'heure du serveur 
 * O: @return NULL
 * I: @param NULL
 */
function afficherHeures(){
    //affiche l'heure du serveur avec un réglage de localisation vers réunion
    date_default_timezone_set('Indian/Reunion');
    $infoH = getDate(); //une des méthode possible pour l'affiche de l'heure on peut aussi utilisé date(G:i)
    $hours = $infoH["hours"];
    $minute = $infoH["minutes"];

    //ajout du ZERO pour les minutes égale à 0 et inférieur à 10
    if($minute == 0 || $minute <= 9){
        $minute = "0".$minute ;
        // console.log(minute);
    }
    //ajout du ZERO pour les heures égale à 0 et inférieur à 10
    if($hours == 0 || $hours <= 9){
        $hours = "0".$hours ;
        // console.log(minute);
    }
    echo '<div><strong>Heure serveur</strong> : '. $hours .':'. $minute .'</div>';
}




?>