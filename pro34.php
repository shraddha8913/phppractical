<?php
// Create an associative array of fruits and their prices
$fruits = array(
    "Apple"  => 120,
    "Banana" => 40,
    "Mango"  => 100,
    "Orange" => 80,
    "Grapes" => 60
);

// Sort array by values (ascending order)
echo "Sorting by values (asort): <br>";
asort($fruits);
print_r($fruits);

echo "<br><br>";

// Sort array by keys (ascending order)
echo "Sorting by keys (ksort): <br>";
ksort($fruits);
print_r($fruits);
?>