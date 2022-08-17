<?php

    include('../connection.php');

    // sql like statement where 'a%' finds letter starts with a
    $like = "SELECT * FROM `customers` WHERE `CustomerName` LIKE 'a%' ";
    $result = $conn->query($like);

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

        while($like_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$like_row[CustomerID]</td>
                    <td>$like_row[CustomerName]</td>
                    <td>$like_row[ContactName]</td>
                    <td>$like_row[Address]</td>
                    <td>$like_row[City]</td>
                    <td>$like_row[PostalCode]</td>
                    <td>$like_row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
    
?>