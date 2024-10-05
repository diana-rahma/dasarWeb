<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Diana Rahmawati',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ]; 
        ?>
        <table border="1" height="100%" width="40%" style="background-color: lightblue;" >
            <tr>
                <th><b>Nama</b></th>
                <th><b>Domisili</b></th>
                <th><b>Jenis Kelamin</b></th>
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