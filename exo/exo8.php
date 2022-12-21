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

            <?php
                session_start();
                if (isset($_POST["delete"])) {
                    unset($_SESSION['nom']);
                }
            
                if (isset($_SESSION["nom"])) {
                    echo "vous etes connecté";
                ?>
                    <form action="" method="post">
                        <input type="submit" name="delete" value="deconnexion">
                    </form>
                    <?php
                } else {
            
                    if (isset($_POST["nom"])) {
            
                        $_SESSION["nom"] = $_POST["nom"];
                        echo "ton nom es : " . $_SESSION["nom"];
                    } else {
                        echo "saisis ton nom";
                    }}
                    ?>
                        <form action="" method="post">
                            <label name="nom">Quel est ton prénom ? :</label>
                            <input type="text" name="nom">
                            <input type="submit" name="send" value="envoyer">
            
                        </form>

        
        <p><a href="../index.php">Retour</a></p>
    </body>
</html>