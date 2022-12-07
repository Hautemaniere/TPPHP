<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 6 php</title>
    </head>
    <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 6
		
           Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur

           le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’]


         ---------------------------------------------------------------------------------------------------*/
        
        
        ?>

         <form action="#" method="get">

         <label>Veuillez saisir vontre nom d'utilisateur : </label>
         <input type="text" placeholder="User name" name="username">
         <input type="submit" value="Confirmer">  

     </form> <br>

     <?php

     echo "Le numéro de téléphone enregistré est le : <font color='purple'>".($_GET["username"])."</font>";



            ?>


    </body>
=======
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 6 php</title>
    </head>
    <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 6
		
           Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur

           le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’]


         ---------------------------------------------------------------------------------------------------*/
        
        
        ?>

         <form action="#" method="get">

         <label>Veuillez saisir vontre nom d'utilisateur : </label>
         <input type="text" placeholder="User name" name="username">
         <input type="submit" value="Confirmer">  

     </form> <br>

     <?php

     echo "Le user enregistré est le : <font color='purple'>".($_GET["username"])."</font>";



            ?>

        <a href="index.php">Retour</a>
    </body>
>>>>>>> 988844d (fin exo 6+ debut exo 7)
</html>