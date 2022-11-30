<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Exo 2 php</title>
</head>
<body>
   
            <?php

         /*---------------------------------------------------------------------------------------------------

		Exercice 2.1
		
            A) Créer un tableau php qui contient 5 chiffres.
            Afficher les 5 chiffres à la suite grace au parcours du tableau dans une boucle for.

            B) Essayer d’afficher ses 5 chiffres dans un tableau HTML que génère PHP

         ---------------------------------------------------------------------------------------------------*/


         $a=array(
            0 => 1,
            1 => 13,
            2 => 26,
            3 => 52,
            4 => 106,
            5 => 212,
          );
            for($i=0; $i< 5; $i++)
            {
               echo '['.$a[$i]."]";
            }
            ?>

            <?php
            
          /*---------------------------------------------------------------------------------------------------

		
		Exercice 2.2
			
            A) Créer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour indice de colonne: Nom, Prenom, MDP.

            Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect

         ---------------------------------------------------------------------------------------------------*/

            $tabStr = array(

               "Nom" => "HAUTEMANIERE",
               "Prénom" => "Edouard",
               "MDP" => "eXoaKalAs"

            );

            echo " <br> Nom = ".$tabStr["Nom"]. ", Prénom = ".$tabStr["Prénom"]. ", MDP = ".$tabStr["MDP"];

            ?>
   
</body>
</html>