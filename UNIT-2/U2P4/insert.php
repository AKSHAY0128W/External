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

$p_id = $_POST['pid'];
$p_name = $_POST['pname'];
$p_price = $_POST['pprice'];
$p_qoh = $_POST['pqoh'];

$query = "INSERT INTO product(pro_id,pro_name,pro_price,qoh) VALUES ('$p_id','$p_name','$p_price','$p_qoh')";

if(mysqli_query($conn,$query))
{
	echo "record inserted";
}
else
{
	echo "record not inserted";
}

 ?>