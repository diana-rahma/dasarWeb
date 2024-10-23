<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(216, 210, 194);
        }
    </style>
  </head>
  <body>
    <div class="container-sm" style="margin-top: 50px; width: 800px;" >
        <div class="card text-center">
            <div class="card-header">Tambah Data Pesanan</div>
            <div class="card-body" style="text-align: left;">
                <form id="tambahData" method="POST" action="proses_tambah.php">
                    <div class="mb-3 mt-3">
                        <label for="text" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan nama barang" name="nama_barang">
                        <span id="nama-error" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Masukkan jumlah barang" name="jumlah">
                        <span id="jumlah-error" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Ukuran</label>
                        <select class="form-select" aria-label="Default select example" id="ukuran" name="ukuran">
                            <option selected>Pilih Ukuran</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                        <span id="ukuran-error" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Warna</label>
                        <input type="text" class="form-control" id="warna" placeholder="Masukkan warna barang" name="warna">
                        <span id="warna-error" style="color: red;"></span>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="alert('Apakah anda ingin menyimpan data ini?')">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>