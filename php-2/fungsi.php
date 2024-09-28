<?php

function perkenalan($nama, $salam){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama." <br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Diana", "Haloo");

echo "<br>";

$saya = "Diana";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);


?>