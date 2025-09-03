<?php
// Store numbers in an indexed array
$numbers = array(45, 12, 89, 33, 67, 5, 99, 23);

// Find the largest and smallest number
$largest = max($numbers);
$smallest = min($numbers);

// Display the array
echo "Numbers in the array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Display results
echo "<br>Largest Number = " . $largest;
echo "<br>Smallest Number = " . $smallest;
?>