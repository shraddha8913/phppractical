<?php
// Create an indexed array with 6 elements
$numbers = array(10, 20, 30, 40, 50, 60);

echo "Original Array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// ---- Reverse without using array_reverse() ----
echo "<br><br>Array in Reverse Order (Without array_reverse): ";
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

// ---- Reverse using array_reverse() ----
echo "<br><br>Array in Reverse Order (With array_reverse): ";
$reversed = array_reverse($numbers);
foreach ($reversed as $num) {
    echo $num . " ";
}
?>