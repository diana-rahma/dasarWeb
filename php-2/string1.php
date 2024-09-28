<?php
$loremIpsum = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum delectus ipsa accusamus sapiente optio quam et laudantium nisi magni labore commodi suscipit, itaque quisquam.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: ".strlen($loremIpsum). "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) ."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>".strtoupper($loremIpsum)."</p>";
?>