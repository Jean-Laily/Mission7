/** appel la fonction après le chargement de la page */
afficherHeureLocal();



/**
 * M: Fonction servant à afficher l'heure du pc et l'heure du serveur au navigateur
 * O: return à la class "time" une chaîne de caractère et une heure
 * I: NULL
 */
function afficherHeureLocal(){

  var msg = document.querySelector(".msgAccueil");

    var date = new Date();
    var heure = date.getHours();
    var minute = date.getMinutes();

    //ajout du ZERO pour les minutes égale à 0 et inférieur à 10
    if(minute == 0 || minute <= 9){
      minute = "0"+ minute ;
    }
    //ajout du ZERO pour les heures égale à 0 et inférieur à 10
    if(heure == 0 || heure <= 9){
      heure = "0"+ heure ;
    }
    
    if(heure > 06 && heure <= 12){
      msg.innerHTML = '<strong>Bien le bonjour à vous!</strong>';
    }else if(heure >12 && heure <= 18){
      msg.innerHTML = '<strong>Bon après-midi à vous!</strong>';
    }else{
      msg.innerHTML = '<strong>Bien le bonsoir à vous!</strong>';
    }
    document.querySelector(".time").innerHTML = "<strong>Heure navigateur : </strong>"+heure +":"+minute;
}