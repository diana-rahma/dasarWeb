<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";
echo "<br>";
$benar = true;
$salah = false;
echo "Variabel benar:  $benar, Variabel salah:  $salah";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIDIKAN", 2024);
echo "<br>";
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIDIKAN . ","; 
?>