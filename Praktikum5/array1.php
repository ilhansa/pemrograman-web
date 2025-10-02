<!DOCTYPE html>
<html>
    <head>
        <body>
            <h2>
                Array terindeks
            </h2>
            <?php
            $ListDosen = ["elok nur hamdana", "unggul pamenang", "bagas nugraha"];
            // echo $ListDosen[2] . "<br>";
            // echo $ListDosen[0] . "<br>";
            // echo $ListDosen[1] . "<br>";
            for ($i=0; $i < 3; $i++) { 
                echo $ListDosen[$i] . "<br>"; 
            }
            ?>
        </body>
    </head>
</html>