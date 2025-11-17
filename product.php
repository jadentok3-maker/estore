<?php
$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "estore";

$conn = mysqli_connect($servername, $username, $password, $dbname);



if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO products (name, price, qty)
            VALUES ('$name', '$price', '$qty')";

    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully!";
        header("display.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}

