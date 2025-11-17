<?php
    require_once("dbinfo.php");

    $sql = "SELECT name, price, qty FROM estore";

    // Fatal error: Uncaught Error: Call to a member function query() on int in C:\wamp64\www\estore\display.php on line 5
    // Error: Call to a member function query() on int in C:\wamp64\www\estore\display.php on line 5
    $result = $mysqli->query($sql);

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
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>";
            
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["name"]) . "</td>
                            <td>$" . number_format($row["price"], 2) . "</td>
                            <td>" . $row["qty"] . "</td>
                        </tr>";
                }
                    echo "</table>";
            } 
            else 
            {
                echo "No products found.";
            }
        
    $mysqli->close();

    echo "</body>
    </html>";
?>  