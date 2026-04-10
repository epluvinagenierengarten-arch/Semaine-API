<?php
    function CalculerMoyenne($notes){
        $somme=0;
        foreach ($notes as $note){
            $somme+=$note;
        }
        $nombreDeNotes= count($notes);
        $moyenne = $somme / $nombreDeNotes;
        return $moyenne;
    }
    function afficherResultat($nom,$moyenne){
        if($moyenne >=10){
            echo $nom." a une moyenne suffisante: ".round($moyenne,2);
        }else{
             echo $nom." a une moyenne insuffisante: ".round($moyenne,2);
        } }


    $notesAlice = [15, 12, 14, 5, 19, 7, 18, 20];
    $notesGuillaume = [15, 9, 12];
    $notesVeronique = [4, 8, 1, 2];

    $moyenneAlice = calculerMoyenne($notesAlice);
    afficherResultat("Alice", $moyenneAlice);
    echo "<br>";

    $moyenneGuillaume = calculerMoyenne($notesGuillaume);
    afficherResultat("Guillaume", $moyenneGuillaume);
    echo "<br>";

    $moyenneVeronique = calculerMoyenne($notesVeronique);
    afficherResultat("Veronique", $moyenneVeronique);
?>
