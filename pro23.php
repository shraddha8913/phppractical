<?php
// Create an array
$fruits = array("Banana", "Apple", "Mango", "Orange", "Grapes");

echo "Original Array:<br>";
print_r($fruits);
echo "<br><br>";

// sort() - ascending
sort($fruits);
echo "sort() : ";
print_r($fruits);
echo "<br><br>";

// rsort() - descending
rsort($fruits);
echo "rsort() : ";
print_r($fruits);
echo "<br><br>";

// asort() - ascending (with keys)
$fruits = array("a"=>"Banana", "b"=>"Apple", "c"=>"Mango");
asort($fruits);
echo "asort() : ";
print_r($fruits);
echo "<br><br>";

// arsort() - descending (with keys)
arsort($fruits);
echo "arsort() : ";
print_r($fruits);
echo "<br><br>";

// ksort() - sort by keys ascending
ksort($fruits);
echo "ksort() : ";
print_r($fruits);
echo "<br><br>";

// krsort() - sort by keys descending
krsort($fruits);
echo "krsort() : ";
print_r($fruits);
?>