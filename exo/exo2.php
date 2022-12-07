<<<<<<< HEAD
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


          $i;
         $tab=array(
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
            for($i=0; $i < sizeof($tab)-1; $i++)
            {
               echo "<tr><td> Element " .($i+1). "=" .$tab[$i]. "</td></tr>";
            }
            ?>
            </table>
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

            echo " <br> Nom = ".$tabStr["Nom"]. ",<br> Prénom = ".$tabStr["Prénom"]. ",<br> MDP = ".$tabStr["MDP"];

            ?>
            </table>
   
</body>
=======
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


          $i;
         $tab=array(
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
            for($i=0; $i < sizeof($tab)-1; $i++)
            {
               echo "<tr><td> Element " .($i+1). "=" .$tab[$i]. "</td></tr>";
            }
            ?>
            </table>
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

            echo " <br> Nom = ".$tabStr["Nom"]. ",<br> Prénom = ".$tabStr["Prénom"]. ",<br> MDP = ".$tabStr["MDP"];

            ?>
            </table>
            <a href="index.php">Retour</a>
   </body>
>>>>>>> 988844d (fin exo 6+ debut exo 7)
</html>