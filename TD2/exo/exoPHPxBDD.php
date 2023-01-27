<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo PHP x BDD</title>

</head>

<body>

    <?php

    try {

        $ipserver = "192.168.64.140";
        $nomBase = "medecin";
        $loginPrivilege = "root";
        $passPrivilege = "root";

        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);


        $requete = "select * from Medecin";
        $resultat = $GLOBALS["pdo"]->query($requete);

        $tabMedecins = $resultat->fetchALL();

        $requete = "select * from Patient";
        $resultat = $GLOBALS["pdo"]->query($requete);

        $tabPatients = $resultat->fetchALL();


    ?>
        <form action="" method="post">
            <select name="idMedecin">
                <?php
                foreach ($tabMedecins as $Medecin) {
                ?>
                    <option value="<?= $Medecin["id"] ?>"><?= $Medecin["nom"] . " " . $Medecin["prenom"] ?>s</option>
                <?php
                }
                ?>
            </select>
            <select name="idPatient">
                <?php
                foreach ($tabPatients as $Patient) {
                ?>
                    <option value="<?= $Patient["id"] ?>"><?= $Patient["nom"] . " " . $Patient["prenom"] ?>s</option>
                <?php
                }
                ?>
            </select>
            <input type="datetime-local" name="laDate">
            <input type="submit" value="Saisir une consultation" name="Valider">
        </form>

    <?php
        if (isset($_POST["Valider"])) {
            echo "Id medecin = " . $_POST["idMedecin"] . " id patient = " . $_POST["idPatient"] . " date = " . $_POST["laDate"];
            
          
            $requeteConsult="INSERT INTO `Consultation`(`Dateheure`, `idMedecin`, `idPatient`) VALUES ('". $_POST["laDate"]. "' , '". $_POST["idMedecin"] ."','". $_POST["idPatient"] ."')";
            $resultconsult = $GLOBALS["pdo"]->query($requeteConsult);
        }

    } catch (Exception  $error) {
        echo "error est : " . $error->getMessage();
    }
    ?>
</body>

</html>

