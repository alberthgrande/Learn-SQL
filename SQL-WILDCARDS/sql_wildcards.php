<?php

    include('../connection.php');
    // SQK Statement Finds any values that starts with "a" and ends with "o"
    $wild = "SELECT * FROM `customers` WHERE `City` LIKE 'a%o' ";
    $result = $conn->query($wild);

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
        while($wild_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$wild_row[CustomerID]</td>
                    <td>$wild_row[CustomerName]</td>
                    <td>$wild_row[ContactName]</td>
                    <td>$wild_row[Address]</td>
                    <td>$wild_row[City]</td>
                    <td>$wild_row[PostalCode]</td>
                    <td>$wild_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>