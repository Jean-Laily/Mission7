<?php

function getListeStagiaire(){
    //liste stagiaire
    $listeStagiaire = array (
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E1",
          "nomStag"=>"PICARD",
          "prenomStag"=>"Sylvain",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E2",
          "nomStag"=>"YAN-SIN",
          "prenomStag"=>"Laily",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E3",
          "nomStag"=>"BOB",
          "prenomStag"=>"Lee",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E4",
          "nomStag"=>"DAMOUR",
          "prenomStag"=>"Iris",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E5",
          "nomStag"=>"BREDE",
          "prenomStag"=>"Jeanblon",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"Dwwm", 
          "codStag"=>"E6",
          "nomStag"=>"SOUCE",
          "prenomStag"=>"Douitre",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigCod", 
          "codStag"=>"E1",
          "nomStag"=>"CHECCHI",
          "prenomStag"=>"Sébastien",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigCod", 
          "codStag"=>"E2",
          "nomStag"=>"CONV",
          "prenomStag"=>"AVA",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigCod", 
          "codStag"=>"E3",
          "nomStag"=>"DAMOUR",
          "prenomStag"=>"Celiane",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigCod", 
          "codStag"=>"E4",
          "nomStag"=>"CAZAL",
          "prenomStag"=>"Océane",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigSta", 
          "codStag"=>"E1",
          "nomStag"=>"LEFRANC",
          "prenomStag"=>"Romain",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
       array(
          "codSec"=>"DigSta", 
          "codStag"=>"E2",
          "nomStag"=>"MATINE",
          "prenomStag"=>"Bruno",
          "datNaiStag"=>"01/01/1982",
          "villeStag"=>"saint-adda",
          "interneStag"=>"non",
          "numStag"=>"06951477415",
          "emailStag"=>"toto@to.to",
          "observStag"=>"NA"
       ),
    
    );
    return $listeStagiaire;
 }


 function getListeSection(){
    //tableau pour definir les sections
    $listeSection = array (
       array(
          "codSec" => "Dwwm",
          "libSec" => "Developpeur web et web mobile",
          "datDebSec" => "03/04/2020",
          "nbStag" => "14"
       ),
       array(
          "codSec" => "DigCod",
          "libSec" => "Digital Codeur",
          "datDebSec" => "22/05/2019",
          "nbStag" => "14"
       ),
       array(
          "codSec" => "DigSta",
          "libSec" => "Digital Stater",
          "datDebSec" => "01/08/2019",
          "nbStag" => "14"
       ),
       array(
          "codSec" => "Dw",
          "libSec" => "Designer web",
          "datDebSec" => "12/10/2020",
          "nbStag" => "0"
       )
    
    );
 
    return $listeSection;
 }
 

 function getUser(){

    //tableau pour definir les utilisateurs
    $tabUsers = array (
       'jean.yansin@gmail.com' => 'azerty123',
       'to@to.to' => 'toto',
       'a@a.a' => 'a'
    );
 
    return $tabUsers;
 }


?>