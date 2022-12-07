<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 5 php</title>
    </head>
    <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 5

		    Créer un petit formulaire avec une zone de text et un bouton. Lorsque vous cliquer sur le bouton la 
        
            page doit afficher ce que vous avez saisie en rouge. Utilisez $_POST[‘champ1’]

         ---------------------------------------------------------------------------------------------------*/
            ?>
        <form action="#" method="post">
            
            <label>Veuillez saisir vontre nom d'utilisateur : </label>
            <input type="text" placeholder="User name" name="username">
            <input type="submit" value="Confirmer">  

        </form> <br>

        <?php

        echo "Le numéro de téléphone enregistré est le : <font color='red'>".$_POST["username"]."</font>";

        ?>

    </body>
</html>