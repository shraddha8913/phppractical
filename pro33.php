<?php
// Create an associative array
$students = array(
    "Rohan" => 85,
    "Priya" => 92,
    "Amit"  => 78,
    "Neha"  => 88
);

// Key to check
$key = "Priya";

// Check if the key exists in the array
if (array_key_exists($key, $students)) {
    echo "Key '$key' exists in the array with value: " . $students[$key];
} else {
    echo "Key '$key' does not exist in the array.";
}
?>