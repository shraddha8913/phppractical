<?php
// Store numbers in an array
$numbers = array(10, 20, 30, 40, 50);

// Value to check
$checkValue = 30;

echo "Array Elements: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Check if value exists
if (in_array($checkValue, $numbers)) {
    echo "<br><br>Yes, the value $checkValue exists in the array.";
} else {
    echo "<br><br>No, the value $checkValue does not exist in the array.";
}
?>