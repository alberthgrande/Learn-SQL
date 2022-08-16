<?php
    
    // connection database
    include('../connection.php');

    // sql statement order by ascending and descending
    // The order by from country is in ascending order
    // while the customername is descending order
    $sql = "SELECT * FROM `Customers` ORDER BY `Country` ASC, `CustomerName` DESC ";
    $return = $conn->query($sql);

    // condition check
    if($return->num_rows > 0) {
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
        // loop
        while($row = $return->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[CustomerID]</td>
                    <td>$row[CustomerName]</td>
                    <td>$row[ContactName]</td>
                    <td>$row[Address]</td>
                    <td>$row[City]</td>
                    <td>$row[PostalCode]</td>
                    <td>$row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>