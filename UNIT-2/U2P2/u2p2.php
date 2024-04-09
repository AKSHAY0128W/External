<?php

$host = "localhost";
$user = "root";
$password = "";
$db_query = "CREATE DATABASE IF NOT EXISTS `DB-12`";
$conn = mysqli_connect($host,$user,$password);
if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}

if(mysqli_query($conn,$db_query))
{
	echo "Created Sucessfully";
}
else
{
	echo "the database is not created";
}


?>