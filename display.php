<?php
    $database = require_once("dbinfo.php");

    $sql = "SELECT name, price, qty FROM estore";
    $result = $conn->query($sql);

    echo "<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Product Display</title>
        </head>

        <body>
            <h1>All Products</h1>";

            if ($result->num_rows > 0) 
            {
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>";
            
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>$" . $row["price"] . "</td>
                            <td>" . $row["description"] . "</td>
                        </tr>";
                }
                    echo "</table>";
            } 
            else 
            {
                echo "No products found.";
            }
        
    $conn->close();

    echo "</body>
    </html>";
?>  