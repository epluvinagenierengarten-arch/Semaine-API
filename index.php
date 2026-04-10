<?php
    // creation  d'une fonction permetant de recuperer les notes d'un élève dans un tableau
    function CalculerMoyenne($notes){
        $somme=0;
        foreach ($notes as $note){
            $somme+=$note;
        }
        $nombreDeNotes= count($notes);
        $moyenne = $somme / $nombreDeNotes;
        return $moyenne;
    }

    // creation  d'une fonction permetant de savoir si la moyenne des notes de l'élève permet d'avoir une moyenne suffisante (<10) ou non (>10)
    function afficherResultat($nom,$moyenne){
        if($moyenne >=10){
            echo $nom." a une moyenne suffisante: ".round($moyenne,2);
        }else{
             echo $nom." a une moyenne insuffisante: ".round($moyenne,2);
        } }


    // tableau comprennant les notes de tous les élèves
    $notesAlice = [15, 12, 14, 5, 19, 7, 18, 20];
    $notesGuillaume = [15, 9, 12];
    $notesVeronique = [4, 8, 1, 2];

    // calcul de la moyenne d'Alice, indique si sa moyenne est suffisante
    $moyenneAlice = calculerMoyenne($notesAlice);
    afficherResultat("Alice", $moyenneAlice);
    echo "<br>";

    // calcul de la moyenne d'Alice, indique si sa moyenne est suffisante
    $moyenneGuillaume = calculerMoyenne($notesGuillaume);
    afficherResultat("Guillaume", $moyenneGuillaume);
    echo "<br>";

    // calcul de la moyenne d'Alice, indique si sa moyenne est suffisante
    $moyenneVeronique = calculerMoyenne($notesVeronique);
    afficherResultat("Veronique", $moyenneVeronique);
?>
