<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers = array(1,1,1,2,2,3,4,5,6,7,8,9,9);
$count = array_count_values($numbers);

foreach($count as $value => $count)
{
	echo "the number $value apperas $count times <br>";
}

?>    
</body>
</html>