<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 4 php</title>
    </head>
    <body>
        <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 4 :
           Créer un petit programme php qui résout une équation du second degré de type Ax2 + Bx + C = 0
            
           Comme on ne maitrise pas pour le moment les entrées utilisateur les variables A, B et C seront rentré manuellement dans le programme.

		
         ---------------------------------------------------------------------------------------------------*/

         $a = 1; $b = 26; $c = -13;

         $delta = pow($b, 2) - (4*$a*$a);

         $x0 = -$b/(2*$a);

         $x1 = (-$b+sqrt($delta))/(2*$a);
         $x2 = (-$b-sqrt($delta))/(2*$a);

 
         echo "<br> On cherche à résoudre l'équation ax²+bx+c avec pour valeurs : <br>A=1 <br>B=26 <br>C=-13 <br> <br>";
 
         if ($delta > 0)
         {
             echo "L'équation admet deux solutions <strong>X1</strong> et <strong>X2</strong> qui sont : <br> X1= <strong>" .$x1. "</strong><br> X2 =<strong> ".$x2. "</strong>";
         }
         elseif ($delta == 0)
         {
             echo "L'équation n'admet qu'un solution X0 qui est :<br>".$x0;
         }
         elseif ($delta < 0)
         {
             echo "L'équation donnée n'admet pas de solution : ";
         }
 
 

         ?>
    </body>
</html>