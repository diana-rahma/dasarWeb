<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara 1</title>
</head>
<body>
    <p>Tanggal Hari ini : <?php echo date ("d M Y") ?> </p>

    <?php
    echo '<html>';
    echo '<head><title>Cara 2</title></head> ';
    echo '<body>';
    echo '<p>Tanggal Hari ini : '.date ('d M Y').'</p>';
    echo '</body>';
    echo '</html>';
    ?>
</body>
</html>