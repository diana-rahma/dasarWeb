<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];  
    $jumlah = $_POST['jumlah'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $errors = array();

    echo '<h2>Data Pemesanan:</h2>';
    echo '<table>';
    echo '<tr>';
    echo '<th>Nama Barang</th>';
    echo '<th>Jumlah</th>';
    echo '<th>Ukuran</th>';
    echo '<th>Warna</th>';
    echo '</tr>';

    echo '<tr>';
    echo "<td> $nama_barang </td>";
    echo "<td> $jumlah </td>";
    echo "<td> $ukuran </td>";
    echo "<td> $warna </td>";
    echo '</tr>';
    echo '</table>';
    echo '<br><br>';

    echo 'Kembali ke halaman beranda?';
    echo '<a href="index.php" class="btn btn-primary">Klik disini</a>';
}
?>
