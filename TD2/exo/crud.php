<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo CRUD</title>

</head>

<body>

    <h1>Ajout de medic</h1>
    <?php

try {
         $ipserver = "192.168.64.140";
         $nomBase = "medecin";
         $loginPrivilege = "root";
         $passPrivilege = "root";
 
         $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
 
 
        } catch (Exception  $error) {
            echo "error est : " . $error->getMessage();
        }

    ?>

    <form action="" method="post" class="add">
        <div>
            <label for="MedecinNom">Nom :</label>
        </div>


</body>

</html>

