<?php
// on inclut les fichiers necessaires pour appeler les fonctions necessaires au programme
include('./exercice1.php'); 
include('./exercice2.php');

menuGeneral(); // appel de la fonction menuGeneral pour lancer le programme

function menuGeneral(){ // declaration de la fonction 

    while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
            $saisie = readline("Bonjour et bienvenue, quel exercice souhaitez-vous éxecuter (tapez : 1 ou 2 ) ? "); // valeur saisie par l'utilisateur

    //vérification de la saisie des informations de l'utilisateur

            if($saisie == 1){
                menuExercice1();
                break;
            }
        
            elseif($saisie == 2){
                menuExercice2();
                break;
            }
            elseif($saisie !== 1 || $reponse !== 2) {
                echo "Erreur de saisie ! Merci de recommencer \n";
            }
        
 }

}

?>