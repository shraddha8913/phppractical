<?php
// Store numbers in an array
$numbers = array(45, 12, 89, 33, 67, 5, 99, 23);

echo "Original Array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// ---- Sort in Ascending Order using sort() ----
$ascArray = $numbers; // copy of array
sort($ascArray);

echo "<br><br>Array in Ascending Order: ";
foreach ($ascArray as $num) {
    echo $num . " ";
}

// ---- Sort in Descending Order using rsort() ----
$descArray = $numbers; // copy of array
rsort($descArray);

echo "<br><br>Array in Descending Order: ";
foreach ($descArray as $num) {
    echo $num . " ";
}
?>