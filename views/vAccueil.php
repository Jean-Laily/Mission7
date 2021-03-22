<?php
    //création du squelette haut de la page HTML
    include './structurePage/hautHTML.php';
    
    //interieur de la balise body 
    include 'vueAccueil/accueil_navigation.php';
    include 'vueAccueil/accueil_header.php';
    include 'vueAccueil/accueil_body.php';

    //création du squelette bas de la page HTML
    include './structurePage/footer.php';
    include './structurePage/basHTML.php';

?>