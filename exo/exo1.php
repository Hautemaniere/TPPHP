<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 1 php</title>
    </head>
    <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 1
		
            Réaliser une page php qui affiche un cadre bleu si un nombre est impair et en rouge si il est paire : vous aurait besoin de la fonction

            $NombreAleatoire = rand ( 0 , 100 );

            le nombre est pair dans le cas suivant :

         ---------------------------------------------------------------------------------------------------*/


            $LaVarRandom = rand(0,1000);

            if($LaVarRandom%2==1){

                echo "<div style='background-color: red;'>".$LaVarRandom." est impaire ";

            }else{

                echo "<div style='background-color: blue;'>".$LaVarRandom." est paire ";

            }


            ?>


    </body>
</html>