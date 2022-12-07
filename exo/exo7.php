<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 7 php</title>
    </head>
    <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 7
		
            Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur

            le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de

            session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est

            mémorisée et le site affiche toujours la valeur saisie.

         ---------------------------------------------------------------------------------------------------*/

            ?>

        <form action="#" method="post">

            <label>Veuillez saisir vontre nom d'utilisateur : </label>
            <input type="text" placeholder="User name" name="username">
            <input type="submit" value="Confirmer">  

        </form> <br>

        <?php

        $_SESSION["User"] = $_POST["username"];

        if($_SESSION["User"]== '')
        {
            echo "<font color='red'> Impossible de trouver l'user saisi, veuillez à nouveau saisir un numéro</font>";
        }
        else{
            echo "Le user enregistré est le : ".$_SESSION["User"]."</font>";
        }

    ?>
        <a href="index.php">Retour</a>
    </body>
</html>