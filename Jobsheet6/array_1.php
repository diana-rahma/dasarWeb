<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $ListDosen=["Diana Rahmawati", "Rania Delina", "Aqila Bintang"];

        for ($i = 0; $i < count($ListDosen); $i++) { 
            echo $ListDosen[$i] . "<br>";
        }

        // echo $ListDosen[2] . "<br>";
        // echo $ListDosen[0] . "<br>";
        // echo $ListDosen[1] . "<br>";
    ?>
</body>
</html>