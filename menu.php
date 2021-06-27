<?php
include('./exercice1.php');
include('./exercice2.php');

menuGeneral();

function menuGeneral(){

    while(true){
            $saisie = readline("Bonjour et bienvenue, quel exercice souhaitez-vous éxecuter (tapez : 1 ou 2 ) ? ");

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