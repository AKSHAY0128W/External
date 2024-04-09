<!-- 9.Write a program in PHP to sort the array of given 5 numbers in ascending and descending order. -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
// Creating an array
$cars = array("Volvo", "BMW", "Toyota");

// Sorting the array in ascending order
sort($cars);
echo "Ascending order: ";
foreach ($cars as $car) {
    echo $car . " ";
}
echo "<br>";

// Sorting the array in descending order
rsort($cars);
echo "Descending order: ";
foreach ($cars as $car) {
    echo $car . " ";
}
echo "<br>";
?>
</body>
</html>