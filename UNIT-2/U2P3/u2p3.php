<?php


$host = "localhost";
$user = "root";
$password = "";
$db_name = "DB-12";
$conn = mysqli_connect($host,$user,$password,$db_name);
if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}

$query = "CREATE TABLE produuct(
pro_id int(6)primary key,
pro_name varchar(20),
pro_price decimal(6,2),
qoh int(6)
)";

if(mysqli_query($conn,$query))
{
	echo "Table created successfully";
}
else
{
	echo "table not created";
}
?>