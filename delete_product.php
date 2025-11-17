<?php
// Grabs the name sent from html
$name = $_POST['name'];
    
    require_once("dbinfo.php");

    $sqli = "DELETE FROM estore WHERE name='$name'";

    $result1 = $mysqli->query($sql1);
    $mysqli->close();
    header("location: index.html?success=111111");
?>