<?php
include_once("getDbConnection.php");

//getting the request parameter product id
$prodid=$_GET['id'];

//creating sql
$sql="select * from products where id=$prodid";

//executing the query
$result=$conn->query($sql);

//check if there is any row,
//then iterate on the result set
?>
