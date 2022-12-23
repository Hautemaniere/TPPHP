<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset='utf-8'>
        <title>Exo final php</title>
    </head>

    <body>
    <?php

    /*----------------------------------------------------------------------------------------------------------------------------------

   		   Exercice final
		
           Créer une appli web avec un bouton de connexion qui demande un login et un mot de pass. 
           
           Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien » « 1234 »

           -Si le login n’est pas bon afficher toujours le formulaire avec le message le login est inconnu.

           -Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de pass est incorrect.

           -Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.

           Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur le reste lorsque on actualise la page.

           Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite.

    -------------------------------------------------------------------------------------------------------------------------------------*/


    session_start();


    if  (isset($_POST["connecter"]))
    {

            if ($_POST["ndu"] == "Julien" and $_POST["mdp"] == "1234")
            {

                $_SESSION["ndu"] = $_POST["ndu"]; 

                $_SESSION["mdp"] = $_POST["mdp"]; 

                $_SESSION["cr"] = true;

            }
            elseif ($_POST["ndu"] != "Julien"){
                echo "le nom d'utilisateur est incorrect";

            }
            elseif ($_POST["mdp"] != "1234"){
                echo "le mot de passe est incorrect";

            }
    }
    else if (isset($_POST["deconnecter"]))
    { 

                session_unset();
                session_destroy();

    }
            if (isset($_SESSION["cr"]) == true)
            {

                echo "<p>Vous êtes connecté sur le compte de : ".$_SESSION["ndu"]."</p>";
                
                ?>
                    <form action="#" method="post">

                        <input type="submit" name="deconnecter" value="Vous deconnectez">

                    </form>
                <?php 
            }
            else{

                ?>     
                    <form action="#" method="post">

                        <p><label>Nom d'utilisateur :</label>
                        <input type="text" placeholder="Nom d'utilisateur" name="ndu"></p>

                        <p><label>Mot de passe :</label>
                        <input type="text" placeholder="Mot de passe" name="mdp"></p>

                        <input type="submit" value="Se connecter" name="connecter">

                    </form>
                    
                <?php
            }
    ?>
        <p><a href="../index.php">Retour</a></p>
</body>
</html>