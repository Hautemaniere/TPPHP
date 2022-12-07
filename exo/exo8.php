<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 8 php</title>
    </head>
        <body>
            <?php

         /*---------------------------------------------------------------------------------------------------

   		   Exercice 8
		
           Reprenez l’exercice 7 et rajouter un bouton qui permet lorsque l’on clique dessus de

           vider la session.

         ---------------------------------------------------------------------------------------------------*/
         ?>

        <form action="#" method="post">
                <label>Veuillez saisir un user :</label>
                <input type="text" placeholder="eXo aKa l'As" name="username">
                <input type="submit" value="Confirmer">  
                <input type="reset" value="Reset">          
            </form> <br>

            <?php

                $_SESSION["User"] = $_POST["username"];

                if ($_SESSION["User"] == '')
                {
                    echo "<font color='purple'> Impossible de trouver l'user saisi, veuillez saisir un nouvelle user</font>";
                }
                else{
                    echo "L'user enregistré est le : <font color='red'>".$_SESSION["User"]."</font>";
                }

            ?>
        <br>
        <a href="../index.php">Retour</a>
    </body>
</html>