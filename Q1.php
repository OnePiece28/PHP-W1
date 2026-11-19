<?php
// Q1. foreach loop over an associative array (car model => brand)

$cars = [
    "Corolla" => "Toyota",
    "Mustang" => "Ford",
    "Model 3" => "Tesla",
    "Civic"   => "Honda",
    "Swift"   => "Suzuki"
];

foreach ($cars as $model => $brand) {
    echo "Car model: $model | Brand: $brand <br>";
}
?>