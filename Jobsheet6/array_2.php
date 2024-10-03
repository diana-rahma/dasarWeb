<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Diana Rahmawati',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ]; 
        ?>
        <table border="1" height="100%" width="40%" >
            <tr>
                <td><b>Nama</b></td>
                <td><b>Domisili</b></td>
                <td><b>Jenis Kelamin</b></td>
            </tr>
            <tr>
                <td><?php echo " {$Dosen ['nama']} <br>"; ?></td>
                <td>
                    <?php 
                    echo " {$Dosen ['domisili']} <br>";
                    ?>
                </td>
                <td>
                    <?php 
                    echo " {$Dosen ['jenis_kelamin']} <br>";
                    ?>
                </td>
            </tr>
        </table>
</body>
</html>