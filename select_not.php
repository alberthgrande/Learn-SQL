<?php

    include('connection.php');

    $sql = "SELECT * FROM `Customers` WHERE NOT `Country`='Mexico' ";
    $return = $conn->query($sql);

    if($return->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
        </thead>
        ";
        while($row = $return->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[CustomerID]</td>
                    <td>$row[CustomerName]</td>
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