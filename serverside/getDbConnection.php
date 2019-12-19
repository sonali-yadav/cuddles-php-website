<?php

$host = "localhost";
$uname = "root";
$pass = "";
$dbname = "cuddles_db";

$conn = new mysqli($host, $uname, $pass,$dbname);

if ($conn->connect_error)
    die("connection failed->" . $conn->connect_error);
//echo "success!";

?>
