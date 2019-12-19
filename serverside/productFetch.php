<?php 
    require("getDbConnection.php");

    //creating a query statement
    $query="select * from products";

    //executing the query and getting the result in a result set
    $result=$conn->query($query);

    // if ($resultset->num_rows > 0) {
    //     // output data of each row
    //     while($row = $resultset->fetch_assoc()) {
    //         echo "id: " . $row["pk"]. " - Name: " . $row["name"]. " " . $row["price"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
?>