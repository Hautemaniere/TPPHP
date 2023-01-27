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
			
            Ecrire une fonction qui calcul la moyenne d’un tableau qu’on passe en paramètre et qui
            retourne ce résultat dans une variable. Afficher le contenue de cette variable en bas de
            page. 

         ---------------------------------------------------------------------------------------------------*/
         include 'function.php';

         $i;
         $numbers = array(
            0 => 1,
            1 => 13,
            2 => 26,
            3 => 52,
            4 => 106,
          );
          ?>


          <table border = "2px">

          <caption style="border : 2px solid black;"> Chiffres du tableau</caption>

          <?php


         foreach($numbers as $number)
         {
            echo "<tr><td> Element " .($i+1). "=" .$numbers[$i]. "</td></tr>";
         }

         $average = tab3($numbers);

         echo $average;

            ?>

            </table>
            <p><a href="../indextd2.php">Retour</a></p>
    </body>
</html>