<?php
    include('../connection.php');

    // SQL statement selects all customers with a CustomerName that have "r" in the second position
    $like3 = "SELECT * FROM `customers` WHERE `CustomerNAME` LIKE '_r%'";
    $result = $conn->query($like3);

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

        while($like3_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like3_row[CustomerID]</td>
                    <td>$like3_row[CustomerName]</td>
                    <td>$like3_row[ContactName]</td>
                    <td>$like3_row[Address]</td>
                    <td>$like3_row[City]</td>
                    <td>$like3_row[PostalCode]</td>
                    <td>$like3_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>