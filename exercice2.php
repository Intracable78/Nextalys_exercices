<?php

function menuExercice2(){

    while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
    
    echo "Bienvenue dans l'exercice 2 ! 
    Le but de celui-ci est d'estimer le nombre d'aller/retour que devra faire le monte-charge selon le nombre de carton et le poid.
    2 informations vous seront demandées :
    - Le nombre de carton
    - le poid d'un carton
    ";
    
    $lancement = readline('Voulez-vous lancer le programme ? (oui = lancer, non = quitter) : '); // valeur renseignée par l'utilisateur
    
//vérification de la saisie des informations de l'utilisateur

    if($lancement === "oui"){
        exercice2();
        break;
    }
    
    elseif($lancement === "non"){
        echo "Vous avez choisi de ne pas lancer le programme, celui-ci s'est arrêté, à bientôt !";
        break;
    }
    
    else{
        echo "Erreur : veuillez réessayer !";
        continue;
            }
    
        }
    
    }


function exercice2(){

//déclaration des variables qui seront utilisées dans le programme

    $nbCarton; // nombre de carton saisie par l'utilisateur
    $poidCarton; // poid du carton saisie par l'utilisateur
    $poidMaxCartonKg = 100; // poid maximum d'un carton en Kg
    $poidMinCartonKg = 1; // poid minimum d'un carton en Kg
    $nbMaxCarton = 1000; // nombre maximum de carton sur la plateforme
    $nbMinCarton = 1; // nombre minimum de carton sur la plateforme
    $poidMaxMachine = 100; // poid maximum en Kg que la plateforme support
    $nbAllerRetour; // nombre d'aller/retours qui seront effectués
    

    while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
        $nbCarton = readline('Première étape : saisissez le nombre de cartons à monter (comprit entre 1 et 1000) : '); // valeur renseignée par l'utilisateur

        //vérification de la saisie des informations de l'utilisateur

        if($nbCarton >= $nbMinCarton && $nbCarton <= $nbMaxCarton){
            echo "Le nombre de cartons à bien été enregistré ! \n";
            break;
        }

        elseif($nbCarton < $nbMinCarton){
            echo "Erreur : le nombre saisi doit être supérieur ou égal à 1 ! \n";
            continue;
        }

        elseif($nbCarton > $nbMaxCarton){
            echo "Erreur : le nombre saisi doit être inférieur ou égal à 1000 ! \n";
            continue;
        }

        else{
            echo "Erreur de saisie, veuillez saisir un nombre entre 1 et 1000";
            continue;
        }
    }

    while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
        $poidCarton = readline('Deuxième étape : saisissez le poid d\'un carton (comprit entre 1 et 100) : '); // valeur renseignée par l'utilisateur

        //vérification de la saisie des informations de l'utilisateur

        if($poidCarton >= $poidMinCartonKg && $poidCarton <= $poidMaxCartonKg){
            echo "Le poid d'un carton a été enregistré ! \n";
            break;
        }

        elseif($poidCarton > $poidMaxCartonKg){
            echo "Erreur :  le poid du carton doit être inférieur ou égal à 100 ! \n";
            continue;
        }

        elseif($poidCarton < $poidMinCartonKg){
            echo "Erreur : le poid d'un carton doit être supérieur ou égal à 1 ! \n";
            continue;
        }
        else{
            echo "Erreur : veuillez saisir un nombre entre 1 et 100 ! \n";
            continue;
        }

    }

    // calcul final pour le nombre d'aller/retours à effectuer

    $nbAllerRetour = $poidCarton * ($nbCarton + 1 )/ $poidMaxMachine;

    //affichage du nombre nombre d'aller/retours à effectuer

    echo "Le nombre d'aller/retours pour " . $nbCarton . " cartons qui font " . $poidCarton . " chacun s'élève à " . ceil($nbAllerRetour) . "\n";

    // appel de la fonction menuExitExercice2 afin de demander à l'utilisateur l'action qu'il souhaite réaliser

    menuExitExercice2();

    }

    function menuExitExercice2(){
        while(true){  // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
            $saisie = readline('Le programme est terminé (q = quitter, r = relancer exercice, m = retourner au menu général) : '); // valeur renseignée par l'utilisateur

            //vérification de la saisie des informations de l'utilisateur
    
            if($saisie === "q"){
                echo "Vous avez choisi de quitter le programme, à bientôt ! \n";
                break;
            }
    
            elseif($saisie === "r"){
                echo "Vous avez choisi de relancer l'exercice  ! \n";
                exercice2();
                break;
            }
    
            elseif($saisie === "m"){
                echo "Vous avez choisi de retourner au menu principal  ! \n";
                menuGeneral();
                break;
            }
    
            else{
                echo "Erreur : veuillez réessayer !";
                continue;
            }
        }
        
    }
?>