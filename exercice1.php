<?php


//fonction menu de l'exercice 1
function menuExercice1(){

while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes

echo "Bienvenue dans l'exercice 1 ! 
Le but de celui-ci est d'estimer le montant de vos ventes en fonctions du prix par personne que vous allez choisir ainsi que le nombre de tables.
3 informations vous seront demandées :
- Le prix par personne
- le nombre de table servies
- le nombre de personne présente à une table
";

$lancement = readline('Voulez-vous lancer le programme ? (oui = lancer, non = quitter) : '); // valeur renseignée par l'utilisateur

//vérification de la saisie des informations de l'utilisateur

if($lancement === "oui"){
    exercice1();
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

//fonction de l'exercice 1

function exercice1(){

//déclaration des variables qui seront utilisées dans le programme

$prixParPersonne; // prix entré par l'utilisateur
$nbPersonnesParTable; // nombre de personne entrée par l'utilisateur
$nbTablesServies; // nombre de table entrée par l'utilisateur
$montantDesVentes; // montant des ventes qui ont été réalisées
$maxPrixParPersonne = 40; // prix maximum d'un menu par personne
$minPrixParPersonne = 20; // prix minimum d'un menu par personne
$maxNbTable = 50; // nombre maximum de table disponible
$minNbTable = 5; // nombre minimum de table disponible
$minNbPersonneParTable = 2; // nombre minimum de personne par table
$maxNbPersonneParTable = 15; // nombre maximum de personne par table


while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
    $prixParPersonne = readline('Première étape : Saisissez un prix par personne compris entre 20 et 40 : '); // valeur renseignée par l'utilisateur

    //vérification de la saisie des informations de l'utilisateur

     if($prixParPersonne < $minPrixParPersonne){
         echo "Le prix saisi doit être supérieur à 20 ! \n";
         continue;
     }

     elseif($prixParPersonne > $maxPrixParPersonne){
         echo "Le prix saisi doit être supérieur à 20 et inférieur à 40 \n";
         continue;
         }

     elseif($prixParPersonne >= $minPrixParPersonne && $prixParPersonne <= $maxPrixParPersonne){
         echo "Le prix par personne a été enregistré ! \n";
         break;
     }

}


while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
    $nbTablesServies = readline('Deuxième étape : Saisissez le nombre de tables qui seront servies compris entre 5 et 15 : '); // valeur renseignée par l'utilisateur

    //vérification de la saisie des informations de l'utilisateur

    if($nbTablesServies < $minNbTable){
        echo "Le nombre de tables servies doit être supérieur à 5 ! \n";
        continue;
    }

    elseif($nbTablesServies > $maxNbTable){
        echo "Le nombre de tables servies doivent être supérieures à 5 et inférieures à 50 \n";
        continue;
        }

    elseif($nbTablesServies >= $minNbTable && $nbTablesServies <= $maxNbTable){
        echo "Le nombre de tables servies ont été enregistrées ! \n";
        break;
    }

}

while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
    $nbPersonnesParTable = readline('Troisième étape : Saisissez le nombre de personne par table compris entre 2 et 15 : '); // valeur renseignée par l'utilisateur

    //vérification de la saisie des informations de l'utilisateur

    if($nbPersonnesParTable < $minNbPersonneParTable){
        echo "Le nombre de personnes par table doit être supérieures à 2 ! \n";
        continue;
    }

    elseif($nbPersonnesParTable > $maxNbPersonneParTable){
        echo "Le nombre de personnes par tables doit être inférieures à 15 ! \n";
        continue;
        }

    elseif($nbPersonnesParTable >= $minNbPersonneParTable && $nbPersonnesParTable <= $maxNbPersonneParTable){
        echo "Le nombre de personnes par table a été enregistré ! \n";
        break;
    }
}

//calcul de la réduction appliquée selon le nombre de personne saisie par l'uitlisateur

$reductionGroup = 1; // par default 1 car 1 = pas de réduction

if($nbPersonnesParTable >= 4 && $nbPersonnesParTable < 6){  
   $reductionGroup = 0.9;  
}

if($nbPersonnesParTable >= 6 && $nbPersonnesParTable < 10){
    $reductionGroup = 0.8;
}

if($nbPersonnesParTable >= 10){
    $reductionGroup = 0.7;
} 

//calcul du chiffre d'affaire qui sera effectué

$montantDesVentes = $prixParPersonne * $nbPersonnesParTable * ($nbTablesServies + 2);
$montantDesVentesReduction = $montantDesVentes *  $reductionGroup;

// affichage final du chiffre d'affaire

echo  " Le montant des ventes pour " . $prixParPersonne . " euros par personnes, " . $nbTablesServies . " tables servies et " . $nbPersonnesParTable . " clients par tables s'élève à " .  ceil($montantDesVentesReduction) ." euros."  .  "\n";

// appel de la fonction menuExitExercice1 afin de demander à l'utilisateur l'action qu'il souhaite réaliser

menuExitExercice1();

}

function menuExitExercice1(){ 
    while(true){ // boucle de sécurisation pour redemander les informations en cas de valeurs saisies incorrectes
        $saisie = readline('Le programme est terminé (q = quitter, r = relancer exercice, m = retourner au menu général) : '); // valeur renseignée par l'utilisateur

        //vérification de la saisie des informations de l'utilisateur et action réalisée en fonction de cela

        if($saisie === "q"){
            echo "Vous avez choisi de quitter le programme, à bientôt ! \n";
            break;
        }

        elseif($saisie === "r"){
            echo "Vous avez choisi de relancer l'exercice  ! \n";
            exercice1();
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