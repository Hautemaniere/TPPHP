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

        <form action='' method="get">
            <label>Saisir un User : </label>
            <input type="text" name="texte">
            <input type="submit" value="Confirmer">
        </form>
        
        <?php

        if (!empty($_GET)) {
            if (!empty($_SESSION)) {
                if (empty($_GET['texte'])) {
                    echo "<div>Il n'y a pas d'user saisie !</div>";
                } 

                else {
                    echo "<div>La variable actuelle est : <span id='violet'>".$_GET['texte']."</span></div>";
                    $_SESSION["mem"] = "" . $_GET['texte'];
                }
            }

            else{
                if (empty($_GET['texte'])){
                    echo "<div>Il n'y a pas de texte !</div>";
                } 

                else {
                    echo "<div>La variable actuelle est :".$_GET['texte']."</div>";
                }
            }
        }
            
        ?>
            <p><a href="../index.php">Retour</a></p>
    </body>
</html>