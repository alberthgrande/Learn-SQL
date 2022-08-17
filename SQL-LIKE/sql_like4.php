<?php

    include('../connection.php');

    // SQL statement selects all customers with a CustomerName that starts with "a" and are at least 3 characters in length
    $like4 = "SELECT * FROM `customers` WHERE `CustomerName` LIKE 'a__%'";
    $result = $conn->query($like4);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
        </thead>
        ";

        while($like4_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like4_row[CustomerID]</td>
                    <td>$like4_row[CustomerName]</td>
                    <td>$like4_row[ContactName]</td>
                    <td>$like4_row[Address]</td>
                    <td>$like4_row[City]</td>
                    <td>$like4_row[PostalCode]</td>
                    <td>$like4_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>