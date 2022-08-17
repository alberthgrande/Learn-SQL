<?php

    include('../connection.php');

    // SQL statement selects all customers with a ContactName that starts with "a" and ends with "o"
    $like5 = "SELECT * FROM `customers` WHERE `CustomerName` LIKE 'a%o'";
    $result = $conn->query($like5);

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

        while($like5_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like5_row[CustomerID]</td>
                    <td>$like5_row[CustomerName]</td>
                    <td>$like5_row[ContactName]</td>
                    <td>$like5_row[Address]</td>
                    <td>$like5_row[City]</td>
                    <td>$like5_row[PostalCode]</td>
                    <td>$like5_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>