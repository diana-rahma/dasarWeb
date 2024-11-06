<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");

            });
        });
    </script>
    <style> 
        #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: skyblue;
        border: solid 2px #c3c3c3;
        }

        #panel {
        padding: 50px;
        display: none;
        }

        table {
        /* font-family: arial, sans-serif; */
        border-collapse: collapse;
        width: 100%;

        }

        td, th {
        border: 1px solid gray;
        text-align: left;
        padding: 10px;
        }

        th{
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <div id="flip">Click to Show Database</div>
    <div id="panel">
    <table>
        <tr>
            <th><b>Nama</b></th>
            <th><b>Umur</b></th>
            <th><b>Kelas</b></th>
            <th><b>Alamat</b></th>
        </tr>
        <?php
        $dataSiswa = [
            ['Diana', 20, 'TI-2F', 'Malang'],
            ['Dewita', 19, 'TI-2F', 'Blitar'],
            ['Ica', 20, 'TI-2F', 'Malang'],
            ['Sarah', 19, 'TI-2F', 'Pasuruan'],
        ];
        $umur = 0;
        $jumlah = count($dataSiswa);
        $rata_rata = $umur / $jumlah;

        foreach ($dataSiswa as $siswa) {
            echo "<tr>";
                echo "<td>" . $siswa[0] . "</td>";
                echo "<td>" . $siswa[1] . "</td>";
                echo "<td>" . $siswa[2] . "</td>";
                echo "<td>" . $siswa[3] . "</td>";
            echo "</tr>";
            $umur += $siswa[1];
        }
        $rata_rata = $umur / $jumlah;
        ?>
        
    </table>
    <h2>Rata-rata Umur Siswa: <?php echo $rata_rata; ?></h2>
    </div>
   
</body>
</html>