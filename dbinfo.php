<?php
$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$db = "estore";

$mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>
