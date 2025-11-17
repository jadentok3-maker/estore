<?php
// Grabs the name sent from html
$name = $_POST['name'];
    
    require_once("process_dbinfo.php");

    $sql1 = "DELETE FROM estore WHERE name='$name'";

    $result1 = $mysqli->query($sql1);
    $mysqli->close();
    header("location: index.html?success=111111");
?>