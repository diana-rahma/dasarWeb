<?php
// percobaan 1
// $pattern = '/[a-z]/';
// $text = 'This is a Sample Text.';

// if (preg_match($pattern, $text)) {
//     echo "Huruf kecil ditemukan!";
// } else {
//     echo "Tidak ada huruf kecil";
// }

// echo "<br><br>";

// percobaan 2
// $pattern = '/[0-9]/';
// $text = 'There are 123 apples.';

// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada yang cocok";
// }

echo "<br><br>";
// percobaan 3
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'I like apple pie.';
// $new_text = preg_replace($pattern, $replacement, $text);
// echo $new_text; //output : "i like banana pie

echo "<br><br>";
// percobaan 4
// $pattern = '/go*d/'; //cocokkan "god", "good", "gooood, dll.
// $text = 'god is good';

// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada yang cocok!";
// }

// echo "<br><br>";

//     $pattern = '/go?d/';
//     $text = 'god is good';
//    if (preg_match($pattern, $text, $matches)) {
//    echo "Cocokkan: " . $matches[0];
//     } else {
//     echo "Tidak ada yang cocok";
//     }
$pattern = '/go{n,m}d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}




?>