<?php

$host = "localhost";
$username ="root";
$password = "root@123";
$database = "";

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con){
    header("location: ../errors/db.php");
}
else{
    echo "Database Connected";
}
?>