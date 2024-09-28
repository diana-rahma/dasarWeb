<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif($nilaiNumerik  < 70) {
    echo "Nilai huruf : D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br>";
echo "Jumlah buah yang akan dipanaen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "<br>";
echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<br>";
echo "<br>";
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";


$produk = 120000;
echo "Harga awal = $produk <br>";
if ($produk > 100000) {
    echo "Selamat anda mendapatkan diskon sebesar 20% <br>";
    $diskon = ($produk * 20) / 100;
    $totalBayar = $produk - $diskon;
    echo "Total bayar menjadi = $totalBayar";
}

echo "<br><br>";
$poin = 504;
echo "Total skor pemain adalah : $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? (YA?TIDAK) :  ";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
if($poin > 500){
    echo "$hadiah <br>";
    echo "Selamat anda mendapatkan hadiah tambahan";
}

?>