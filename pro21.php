<?php
// Create an empty array
$arr = array();

// Fill array with values using for loop
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i + 1;  // storing values 1 to 10
}

// Print array elements
echo "Indexed Array Elements:<br>";
for ($i = 0; $i < 10; $i++) {
    echo "Element [$i] = " . $arr[$i] . "<br>";
}
?>