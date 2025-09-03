<?php
// Store numbers in an indexed array
$numbers = array(10, 20, 30, 40, 50);

// Calculate the sum of all numbers
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

// Display the array and sum
echo "Numbers in the array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br>Total Sum = " . $sum;
?>