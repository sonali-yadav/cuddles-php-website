<?php

session_start();

//unset all the session variables
$_SESSION=array();

//destroy session
session_destroy();

//redirect to loging page
header("Location: /cuddles/");

?>