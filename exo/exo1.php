<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo 1 php</title>
    </head>
    <body>
            <?php

        // Conditon


            $LaVarRandom = rand(0,1000);

            if($LaVarRandom%2==1){

                echo "<div style='background-color: red;'>".$LaVarRandom." est paire ";

            }else{

                echo "<div style='background-color: blue;'>".$LaVarRandom." est impaire ";

            }


            ?>


    </body>
</html>