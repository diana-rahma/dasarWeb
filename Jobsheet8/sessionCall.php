<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Favourite color is " . $_SESSION["favcolor"] . "<br>";
        echo "Favourite animal is " . $_SESSION["favanimal"] . ".";
    ?>
</body>
</html>