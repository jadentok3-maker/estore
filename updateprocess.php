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

$result->free_result();

$mysqli->close();
header("location: display.php");
?>

    
      