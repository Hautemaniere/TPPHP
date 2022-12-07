<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Exo 3 php</title>
</head>
<body>
   
    <?php

         /*---------------------------------------------------------------------------------------------------

		Exercice 3
		
        A) Créer un tableau php qui contient en indice les colonnes ‘nom’ , ‘prenom’ et ‘motDePass’. Remplir ce tableau avec 3 personnes. Afficher se tableau avec une boucle for.

        B) Essayer d’agrandir votre variable $tableau avec plusieurs nom prénom et MDP , afficher ce tableau en HTML généré par le PHP.

         ---------------------------------------------------------------------------------------------------*/

        $a; $b;
        $user = array(

            0 => array("nom" => "Hautemaniere", "prenom" => "Edouard" , "motDePass" => "eXoaKalas"),
            1 => array("nom" => "Hautemaniere1", "prenom" => "Edouard1" , "motDePass" => "eXoaKalas1"),
            2 => array("nom" => "Hautemaniere2", "prenom" => "Edouard2" , "motDePass" => "eXoaKalas2"),

        );
    ?>
        <table border = "2px">

        <caption style="border : 2px solid black;"> Id</caption>


        <?php

        for($a = 0 ; $a < 3; $a++ )
        {

            echo "<tr><td>" .$user[$a]['nom']. " - " .$user[$a]['prenom']. " - " .$user[$a]['motDePass']."</td></tr>";

        }
    ?>
        </table>
   
</body>
</html>