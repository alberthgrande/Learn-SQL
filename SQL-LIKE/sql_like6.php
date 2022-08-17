<?php

    include('../connection.php');
    // SQL statement selects all customers with a CustomerName that does NOT start with "a"
    $like6 = "SELECT * FROM `customers` WHERE `CustomerName` NOT LIKE 'a%'";
    $result = $conn->query($like6);

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

        while($like6_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like6_row[CustomerID]</td>
                    <td>$like6_row[CustomerName]</td>
                    <td>$like6_row[ContactName]</td>
                    <td>$like6_row[Address]</td>
                    <td>$like6_row[City]</td>
                    <td>$like6_row[PostalCode]</td>
                    <td>$like6_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>