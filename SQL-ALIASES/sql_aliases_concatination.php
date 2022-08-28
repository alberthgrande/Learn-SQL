<?php

    include '../connection.php';

    $sql = "SELECT CompanyName, CONCAT(Address,', ',PostalCode,', ',City,', ',Country) AS Address
    FROM Customers";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CompanyName</th>
                <th>Address</th>
            </tr>
        </thead>
        ";

        foreach($result as $row) {
            echo "
            
            <tbody>
                <tr>
                    <td>".$row['CompanyName']."</td>
                    <td>".$row['Address']."</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
