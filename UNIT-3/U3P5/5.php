<?php

if (isset($_POST['gender']))
{
    $gender = $_POST['gender'];
    
    echo "$gender<br>";
}
if (isset($_POST['check']))
{
    $check = $_POST['check'];
    
    foreach ($check as $ch)
    {
        echo "<br> $ch";
    }
}

?>