<?php
session_start();

//getting the db connection
include_once("getDbConnection.php");

//getting the request parameters
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$loginid = $_POST['loginid'];
$password = $_POST['pass'];
$email = $_POST['email'];
$error = "";

//creating the sql
$sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `username`, `password`, `email`)"
    . " VALUES (default, '$fname', '$lname', NULL, '$loginid', '" . md5($password) . "','$email');";

//executing the query
$result = $conn->query($sql);

//check if the query executed or not
if ($result === TRUE) {
    
    //generate success message
    $success = "Registration Successful! Please login to continue..";
    $_SESSION['success'] = $success;

} else {

    //generate error
    $error = "Registration Failed! Please Retry.";
    $_SESSION['error'] = $error;
}

//take user back to the index page
header('Location: /cuddles/');

?>