<?php
// Associative array of countries and their capitals
$countries = array(
    "India"   => "New Delhi",
    "France"  => "Paris",
    "Japan"   => "Tokyo",
    "Germany" => "Berlin",
    "USA"     => "Washington D.C."
);

// Value to search (capital city)
$capital = "Tokyo";

// Search for the value in the array
$country = array_search($capital, $countries);

if ($country !== false) {
    echo "The capital city '$capital' belongs to country: $country";
} else {
    echo "The capital city '$capital' was not found in the array.";
}
?>