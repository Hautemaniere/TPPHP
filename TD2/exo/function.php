<?php
function tab1()
{
?>
        <table style="border: 2px solid black;">
    <tr>
    <th>chatgpt</th>
    <th>ia</th>
    <th>Fromage</th>
  </tr>
  <tr>
    <td>Pomme</td>
    <td>Carotte</td>
    <td>plouf</td>
  </tr>
  <tr>
    <td>Banane</td>
    <td>Aubergine</td>
    <td>toto</td>
  </tr>
  </table>
  <?php
}
?>

<?php
function tab2($colone1,$colone2,$colone3)
{
?>
        <table style="border: 2px solid black;">
    <tr>
    <th><?=$colone1?></th>
    <th><?=$colone2?></th>
    <th><?=$colone3?></th>
  </tr>
  <tr>
    <td>tartine</td>
    <td>violon</td>
    <td>Greg</td>
  </tr>
  <tr>
    <td>frite</td>
    <td>titi</td>
    <td>Fefe</td>
  </tr>
  </table>
  <?php
}
?>

<?php

function tab3($array) {
  
    $sum = array_sum($array);
    $count = count($array);
    $average = $sum / $count;

    return $average;
}

?>


<?php

function Mafonction($mdp)
{
    if(isset($_POST["Deconnexion"]))
    {   
        //Si on appuie sur le bouton "Deconnexion", on supprime les données de la session et on la détruit.
        session_unset();
        session_destroy();
    }
    if(isset($_POST["Valider"]) && $_POST["password"]==$mdp)
    {
            /*Si on a appuyé sur le bouton valider, que le mot de passe est "1234", 
            alors nous somme identifiés. On le met dans la variable "EtatConnexion" qu'on met à "true", soit vraie. */
            $_SESSION["EtatConnexion"] = true ; 
    }
    if(isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)
    {
        //Si on est connecté, alors on affiche "Bienvenue sur le site", avec un bouton de déconnexion.
    ?>       
        <p>Bienvenue sur le site</p>
        <form action="" method="post" class="form-example">
            <div class="form-example">
                <input type="submit" value="Deconnexion" name="Deconnexion" >
            </div>
        </form>

    <?php
          $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
          highlight_string($code);
    }
    else 
    {   //Sinon, on n'est pas encore connecté, alors on affiche le formulaire de connexion.
    ?>
        <form action="" method="post">
            <fieldset>
                <legend>Identifiant</legend>
                <p>
                    <label for="password">Mot de passe :</label> 
                    <input type="password" name="password" id="password" value="" /> 
                    <input type="submit" name="Valider" value="Valider" />
                </p>
            </fieldset>
        </form>
    <?php 
    }
    if(isset($_POST["Valider"])) //Si on appuie sur le bouton "Valider", et que soit le l'identifiant, soit le mot de passe est faux, on affiche les messages d'erreur.
    {
            if($_POST["password"]!=$mdp)
            {
                echo "<p>Ce n'est pas le bon mot de passe !</p>";
            }       
    }
}
