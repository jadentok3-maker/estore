<?php

$updatePrice = $_POST["updateprice"];
$name = $_POST["name"];
require_once("dbInfo.php");

$mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

// Check connection
if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
}

$sqlStatement = "UPDATE estore set price = '$updatePrice' where name= '$name' ";

$result = $mysqli -> query($sqlStatement); 


// Fatal error: Uncaught Error: Call to a member function free_result() on true in C:\wamp64\www\estore\updateprocess.php on line 19
// Error: Call to a member function free_result() on true in C:\wamp64\www\estore\updateprocess.php on line 19
$result->free_result();

$mysqli->close();
header("location: display.php");
?>

    
      