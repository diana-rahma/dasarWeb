<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah $a dengan $b = $hasilTambah <br>";
echo "Hasil Kurang $a dengan $b = $hasilKurang <br>";
echo "Hasil Kali $a dengan $b = $hasilKali <br>";
echo "Hasil Bagi $a dengan $b = $hasilBagi <br>";
echo "Sisa Bagi $a dengan $b = $sisaBagi <br>";
echo "Hasil Pangkat $a dengan $b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil Sama = $hasilSama <br>";
echo "Hasil Tidak Sama = $hasilTidakSama <br>";
echo "Hasil Lebih Kecil = $hasilLebihKecil <br>";
echo "Hasil Lebih Besar = $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama = $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama  = $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil AND = $hasilAnd <br>";
echo "Hasil OR = $hasilOr <br>";
echo "Hasil NOT A = $hasilNotA <br>";
echo "Hasil NOT B = $hasilNotB <br>";
// var_dump($hasilNotA);

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;


echo "<br>";
echo "Penugasan dengan penjumlahan = $a += $b <br>";
echo "Penugasan dengan pengurangan = $a -= $b <br>";
echo "Penugasan dengan perkalian = $a *= $b <br>";
echo "Penugasan dengan pembagian = $a /= $b <br>";
echo "Penugasan dengan sisa bagi = $a %= $b <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik = $hasilIdentik <br>";
echo "Hasil Identik = $hasilTidakIdentik <br>";


?>