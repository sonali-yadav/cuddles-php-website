<?php
include_once("getDbConnection.php");

//creating sql
$sql="select * from categories";

//executing the query
$result=$conn->query($sql);

//check if there are any rows,
//then iterate on the result set

//echo "hello";
?>
