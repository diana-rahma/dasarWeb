<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(216, 210, 194);
        }
    </style>

  </head>
  <body>
    <div class="container-sm" style="margin-top: 10px;" id="jQuery_accordion">
        <h2>Selamat Datang</h2><br>
        <a href="katalog.html" class="btn btn-primary">Lihat Katalog</a><br><br>
        <a href="tambah_data.php" class="btn btn-primary">Tambah Pesanan</a>
    </div>

    <div class="container-sm" style="text-align:center; margin-top: 50px;">
        <h2>Data Pemesanan</h2>           
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Warna</th>
            </tr>
            
            </thead>
            <tbody>
            <?php 
            $dataJastip = [
                ['Blouse', 1, 'L', 'Biru'],
                ['Vest', 2, 'L', 'Sage'],
                ['Mini SKirt', 1, 'L', 'Merah Maroon'],
                ['Blazer', 1, 'L', 'Coklat'],
            ];

            foreach ($dataJastip as $jastip) {
                echo "<tr>";
                    echo "<td>" . $jastip[0] . "</td>";
                    echo "<td>" . $jastip[1] . "</td>";
                    echo "<td>" . $jastip[2] . "</td>";
                    echo "<td>" . $jastip[3] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>