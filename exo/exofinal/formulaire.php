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

         ----------------------------------------------------------------------------------------------------------------------------------*/
    ?>

    <form action="#" method="post">

        <label>Veuillez saisir vontre nom d'utilisateur : </label>
        <input type="text" placeholder="User name" name="username">
        <input type="submit" value="Confirmer">

    </form> <br>

    <?php
    function renvoi($login);


    ?>

</body>

</html>