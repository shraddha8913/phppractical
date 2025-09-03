<?php
// Create an indexed array of size 10
$numbers = array();

for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = $i + 1; // storing values 1 to 10
}

// Print array elements using foreach loop
echo "Indexed Array Elements:<br>";
foreach ($numbers as $index => $value) {
    echo "Index $index => $value <br>";
}
?>