<?php

//  function afficherSection(){
//     include '../data/data.php';
//     $s = 0;
//     //lecture de l'ensemble du tableau par paire
//     foreach($listeSection as $nbSect){
//         $codSect = $listeSection[$s]["codSec"];
//         echo '<tr>';
//             echo'<td>'.$codSect.'</td>';
//             echo'<td><img src="../assets/media/sect'.$codSect.'_icons.png" /></td>';
//             // echo'<td>'.$value[2 "datDebSec"].'</td>';
//             echo'<td>'.$codSect.'</td>';
//             echo'<td>'.$codSect.'</td>';
//             echo $listeSection[$s]["datDebSec"];
            
//             //2eme lecture du tableau pour afficher les valeurs correspondant à la clé
//             foreach($nbSect as $values){
//                 echo'<td>'.$values.'</td>';
//             }
//             //icone permettant le passage de paramètre vers une page spécifique
//             echo '<td><a href="./section.php?coSec='. $codSect .'">
//                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
//                 <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
//                 <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
//                 </svg>
//             </a></td>';
//         echo '</tr>';
//         $s++;
//     }
// }


// autre version à paufiné
// foreach($listeStagiaire as $key => $values){
//     if($_GET["nbSect"] == $values[0]){
        
//         echo '<tr>';
//             echo'<td>'.$values .'</td>';
//         echo '</tr>';  
//     }
//    ["codSec"=>"1","codStag"=>"DWWM_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"1","codStag"=>"DWWM_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"1","codStag"=>"DWWM_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"1","codStag"=>"DWWM_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"2","codStag"=>"DC_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"2","codStag"=>"DC_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"2","codStag"=>"DC_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"3","codStag"=>"DS_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"3","codStag"=>"DS_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ],
//    ["codSec"=>"3","codStag"=>"DS_","nomStag"=>"numerique","preStag"=>"pole","datNaisSta"=>"01/01/1748","villeStag"=>"saint-adda", "interSta"=>"false","gmsSta"=>"0695141415","mailSta"=>"toto@to.to", "obsvSta"=>"NA" ]


//test unitaire de $nbSect
    // echo $nbSect; // affiche ce qu'il retourne
    // echo $listeSection[$nbSect]["codSec"]; 


// /**
//  * M: Selectionner selon le paramètre passer dans l'url, tous les elements correspondant 
//  * O: @param NULL
//  * I: @return NULL
//  */
// function listeStagiaire(){
//     $tabListeStag = getListeStagiaire();
//     $numSta = 0;
//     //on récupère toutes les informations utiles listés dans la fonction list()
//     foreach($tabListeStag as list($codSect, $codStag, $nomStag, $preStag)){
//         //si le paramètre passé est égal au code section du tableau alors
//         if($_GET["coSec"] == $codSect){
//             $numSta ++; // vaut toujours 1 à la première itération
//             $codeStagiaire = $codStag.$numSta; //codeStagiaire vaut par ex: DWWM_1
//             //fait appel à la fonction procédural pour afficher un ensemble de code HTML
//             afficheListeStagiaire($codSect, $codeStagiaire, $nomStag, $preStag);
//         }
//     }
//       //dans le cas que nbStag vaut 0 alors on affiche une erreur
//     //   if($_GET["nbSta"] <= 0){
//     //     echo '<td> Pas de stagiaire encore enregistré pour cette section</td>';
//     // }
// }

// /**
//  * M:
//  * O:
//  * I:
//  */
// function listeStagiaireParInitial(){
//     $tabListeStagInit = getListeStagiaire();
//     $numSta = 0;
//     $param1 = $_GET["ltr"];
//     //on récupère toutes les informations utiles listés dans la fonction list()
//     foreach($tabListeStagInit as list($codSect, $codStag, $nomStag, $preStag)){
//          //récupère la première lettre de chaque nom de stagiaire
//         $firstLetter = substr($nomStag,0,1); // retourne la 1ère lettre mais sans guillemet
//         $firstLetter = '"'.$firstLetter.'"'; // ajout des guillemets à la 1ère lettre
//         $numSta ++; // vaut toujours 1 à la première itération
//         $codeStagiaire = $codStag.$numSta; //codeStagiaire vaut par ex: DWWM_1
//         if($param1 == $firstLetter){
//             afficheListeStagiaire($codSect, $codeStagiaire, $nomStag, $preStag);
//         }
//     }
//     // echo('valeur de param 1 '.$param1);
//     // echo('<br/>valeur de firstLetter '.$firstLetter);
//     // if($param1 != $firstLetter){
//     //     echo '<h4>Erreur, pas de nom correspondant à cette initial</h4>';
//     // }  
// }

// /**
//  * M:Permet selon 2 paramètre passer dans l'url, une affichage plus complet des donnèes existant sur 1 stagiaire précis
//  * O: @return NULL
//  * I: @param NULL
// */
// function detailStagiaire(){
//     $tabDetailStag = getListeStagiaire();
//     $numSta = 0;
//     // lecture du tableau avec la fonction list() 
//     foreach($tabDetailStag as list($codSect, $codStag, $nomStag, $preStag, $datNaisSta, $villeStag,  $interSta, $gmsSta, $mailSta,$obsvSta)){
//         if($_GET["coSec"] == $codSect){
//             $numSta ++;
//             $codeStagiaire = $codStag.$numSta; //codeStagiaire vaut par ex: DWWM_1
//             if($_GET["coSta"] == $codeStagiaire){
//                 afficheDetailStagiaire($nomStag, $preStag, $datNaisSta, $villeStag,  $interSta, $gmsSta, $mailSta,$obsvSta);
//             }
//         }
//     }
// }


// /**
//  * M: Récupérer les clés et valeurs du tableau listeSection et d'en afficher sont contenues
//  * O: @return NULL
//  * I: @param NULL
//  */
// function afficherSection(){

//     $tabListeSec = getListeSection();
//     //lecture de l'ensemble du tableau par paire ?!? $nbSect correspond à l'intération du forEach 
//     foreach($tabListeSec as $nbSect => $value){
        
//         echo '<tr>';
//             echo'<td>'.$value["codSec"].'</td>';
//             echo'<td><img src="./assets/media/'.$value["libSec"].'_icons.png" /></td>';
//             echo'<td>'.$value["datDebSec"].'</td>';
//             echo'<td>'.$value["nbStag"].'</td>';
//             //icone permettant le passage de paramètre vers une page spécifique
//             echo '<td><a href="./index.php?act=se&coSec='.$value["codSec"].'&nbSta='.$value["nbStag"].'">
//                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
//                 <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
//                 <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
//                 </svg>
//             </a></td>';
            
//         echo '</tr>';
//     }
    
// }


// /**
//  * M: Permet l'affichage de la liste des stagaire existant dans une section précise
//  * O: @return du code HTML
//  * I: @param codSect = code de la section
//  *    @param nomStag = nom du stagiaire
//  *    @param preStag = prénom du stagiaire
//  *    @param codeStagiaire = une concaténation du codStag = dwwm_ et numéro auto-incrément 
// */
// function afficheListeStagiaire($codSect, $codeStagiaire, $nomStag, $preStag){
//     echo '<tr>';
//         echo'<td>'.$codSect .'</td>';
//         echo'<td>'.$codeStagiaire .'</td>';
//         echo'<td>'.$nomStag .'</td>';
//         echo'<td>'.$preStag .'</td>';
//         echo '<td><a href="./index.php?act=fi&coSec='.$codSect.'&coSta='.$codeStagiaire.'">
//             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
//             <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755S12 12 8 12s-5 1.755-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
//             </svg>
//         </a></td>';
//     echo '</tr>';  
// }


// /**
//  * M: Permet l'affichage de detail d'un stagiaire,
//  * O: @return un ensemble de code HTML
//  * I: @param nomStag = nom du stagiaire
//  *    @param preStag = prénom du stagiaire
// */
// function afficheDetailStagiaire($nomStag, $preStag, $datNaisSta, $villeStag,  $interSta, $gmsSta, $mailSta,$obsvSta){
    
//     if(isset($nomStag) && isset($preStag)){
//         echo '<h4> Nom : </h4> <p>' .$nomStag .'</p>';
//         echo '<h4> Prénom : </h4> <p>' .$preStag .'</p>';
//         echo '<h4> Date Naissance : </h4> <p>' .$datNaisSta .'</p>';
//         echo '<h4> Ville : </h4> <p>' .$villeStag .'</p>';
//         echo '<h4> Interne : </h4> <p>' .$interSta .'</p>';
//         echo '<h4> N° Portable : </h4> <p>' .$gmsSta .'</p>';
//         echo '<h4> Email : </h4> <p>' .$mailSta .'</p>';
//         echo '<h4> Info complémentaire : </h4> <p>' .$obsvSta .'</p>';
//     }else{
//         echo "h4> ERREUR : </h4> <p> Aucun Stagiaire pour ce section </p>";
//     }
// }


// /**
//  * M: Fonction permettant de créé le tableau des userAutorisés 
//  * mais aussi de controler les paramètres qui sont transmis depuis le formulaire 
//  * O: @return boolean avec la variable @estValide
//  * I: @param id = $_POST["nomUser"]
//  *    @param mdp = $_POST["pass"]
// */
// function controleIdentite($id, $mdp){

//     $tabUser = getUser();

//     //boolean de controle ? vrai = valide : faux = non valide
//     $estValide = false;     
//     //fait la lecture de l'ensemble des clés => valeurs du @tableauConnexion
//     foreach($tabUser as $ctrlLogin => $ctrlMDP){
//         //condition si @username est égal à ctrlLogin=clé && si @pass est égal à ctrlMDP=valeur Alors bool vrai
//         if($id == $ctrlLogin && $mdp == $ctrlMDP){
//             //création d'un variable session <= la valeur @id envoyer en post
//             $_SESSION["username"] = $ctrlLogin;
//             //création de la variable session @pass <= la valeur @mdp envoyer en post
//             $_SESSION["pass"] = $ctrlMDP;
//             $estValide = true; //defini la variable à vrai
//         }
//     }
//     return $estValide;   
// }
?>