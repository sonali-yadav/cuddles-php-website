<?php
session_start();

//getting the db connection
include_once("getDbConnection.php");

//getting the request parameters
$loginid = $_POST['loginid'];
$password = $_POST['pass'];
$error = "";

//creating the sql
$sql = "select first_name,username,password,address from users where username='" . $loginid . "' and password='" . md5($password) . "';";

echo $sql;
//executing the query
$result = $conn->query($sql);

//check if there are any rows, then iterate on the result set
if ($result->num_rows > 0) {

    //getting the data into a row variable
    $row = $result->fetch_assoc();

    //set it as a session variable
    $_SESSION["loginid"] = $loginid;
    $_SESSION["firstname"] = $row['first_name'];
    $_SESSION["address"] = $row['address'];

    //take the user to the homepage
    header('Location: /cuddles/home.php');

} else {
    //generate error
    $error = "Invalid Login ID or Password! Please Retry.";
    $_SESSION['error'] = $error;

    //take user back to the index page
    header('Location: /cuddles/');
}
