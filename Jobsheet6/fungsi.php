<?php

// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Diana <br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan();
// perkenalan();

// function perkenalan($nama, $salam){
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama." <br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan("Diana", "Halo");

// echo "<hr>";

// $saya = "Diana";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya, $ucapanSalam);

// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama." <br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan("Diana", "Haloo");

// echo "<hr>";

// $saya = "Diana";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya);

// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2024) . " tahun";


//  percobaan 5
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo " Perkenalkan, nama saya ".$nama." <br>";

    echo "Saya berusia ". hitungUmur(2004, 2024) . " tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Diana");

?>