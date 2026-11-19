<?php
// Q2. A function that returns the perimeter of a rectangle

function CalculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

echo "Length = 8, Width = 5 <br>";
echo "Perimeter of the rectangle = " . CalculatePerimeter(8, 5) . "<br>";
echo "Length = 12, Width = 3 <br>";
echo "Perimeter of the rectangle = " . CalculatePerimeter(12, 3);
?>