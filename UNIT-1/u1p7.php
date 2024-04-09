<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function nonparameterized(){
	$str1 = "Hello";
	$str2 = "world";
	return $str1 . $str2;
}    


function parameterized($str1,$str2){
	return $str1 . $str2;
}

echo parameterized("hello","world") . "<br>";
?>
</body>
</html>