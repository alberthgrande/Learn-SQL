<?php

    include('../connection.php');

    // sql like statement where '%a' finds letter ends with a
    $like1 = "SELECT * FROM `customers` WHERE `CustomerName` LIKE '%a'";
    $result = $conn->query($like1);

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

        while($like1_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like1_row[CustomerID]</td>
                    <td>$like1_row[CustomerName]</td>
                    <td>$like1_row[ContactName]</td>
                    <td>$like1_row[Address]</td>
                    <td>$like1_row[City]</td>
                    <td>$like1_row[PostalCode]</td>
                    <td>$like1_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }