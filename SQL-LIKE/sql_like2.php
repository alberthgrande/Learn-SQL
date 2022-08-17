<?php

    include('../connection.php');

    // SQL statement selects all customers with a CustomerName that have "or" in any position
    $like2 = "SELECT * FROM `customers` WHERE `CustomerName` LIKE '%or%'";
    $result = $conn->query($like2);

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

        while($like2_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like2_row[CustomerID]</td>
                    <td>$like2_row[CustomerName]</td>
                    <td>$like2_row[ContactName]</td>
                    <td>$like2_row[Address]</td>
                    <td>$like2_row[City]</td>
                    <td>$like2_row[PostalCode]</td>
                    <td>$like2_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>