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
$user = "root";
$password = "";
$db_name = "DB-12";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btnid'])) {
    $pro_id = $_POST['pid'];
    $newqoh = $_POST['qoh'];
    
    $sql = "UPDATE product SET qoh = '$newqoh' WHERE pro_id = '$pro_id' ";
    $result = $conn->query($sql);
    
    
    if ($result) {
        echo "<table border=1>
        <tr>
            <th>Pro id</th>
            <th>Pro Name</th>
            <th>Pro Price</th>
            <th>Pro QOH</th>
        </tr>";

        $sql_select = "SELECT * FROM product WHERE pro_id = '$pro_id'";
        $result_select = $conn->query($sql_select);

        if ($result_select->num_rows > 0) {
            while ($row = $result_select->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["pro_id"] . "</td>
                    <td>" . $row["pro_name"] . "</td>
                    <td>" . $row["pro_price"] . "</td>
                    <td>" . $row["qoh"] . "</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        echo "</table>";

    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "No ID provided";
}

$conn->close();
?>
</body>
</html>
