<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$host = "localhost";
$user= "root";
$password = "";
$db_name = "DB-12";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}

if(isset($_POST['btnid'])) {
    $proid = $_POST['pid'];
    
    // Query to delete the record with the provided ID
    $sql = "DELETE FROM product WHERE pro_id = '$proid'";
    $result = $conn->query($sql);
    
    // Check if any rows were affected by the delete operation
    if($conn->affected_rows > 0) {
        echo "Record deleted";
    } else {
        echo "Record with ID '$proid' does not exist";
    }
}

$conn->close();

?>
</body>
</html>
