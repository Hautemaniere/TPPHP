<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 php</title>
</head>

<body>

    <?php

    /*---------------------------------------------------------------------------------------------------

		    Exercice final
            
		Ecrire une fonction qui affiche un formulaire de connexion à une page et qui prend en paramètre 
        un mot de pass.
        Cette fonction vérifie que le mot de pass saisie dans le formulaire est le même que celui passé en
        paramètre avec la méthode POST.

        Appeler cette fonction dans votre code puis :
        - si elle retourne ok afficher que vous avez le bon mot de pass et afficher un lien secret vers 
        une page secret.
        - sinon afficher que le mot de pass n’est pas bon et ré-appeler la fonction. 


         ---------------------------------------------------------------------------------------------------*/


    include 'function.php';

    $jaaaj = "Clément";
    Mafonction($jaaaj);

    ?>



    <p><a href="../indextd2.php">Retour</a></p>
</body>

</html>