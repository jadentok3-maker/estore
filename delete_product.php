<?php
// Grabs the name sent from html
$name = $_POST['name'];
    
    require_once("dbinfo.php");

    $sqli = "DELETE FROM estore WHERE name='$name'";

    $mysqli->query($sqli);
    $mysqli->close();
    header("location: index.html?success=111111");
?>