<?php

    include('../connection.php');

    $not_in = "SELECT * FROM `customers` WHERE `Country` NOT IN ('Germany', 'France', 'UK')";
    $result = $conn->query($not_in);

    if($result->num_rows > 0) {
        // output data of each row
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CompanyName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>PostalCode</th>
                <th>Country</th>
                <td>Phone</td>
                <td>Fax</td>
            </tr>
        </thead>
        ";
        while($not_in_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$not_in_row[CustomerID]</td>
                    <td>$not_in_row[CompanyName]</td>
                    <td>$not_in_row[ContactName]</td>
                    <td>$not_in_row[Address]</td>
                    <td>$not_in_row[City]</td>
                    <td>$not_in_row[Region]</td>
                    <td>$not_in_row[PostalCode]</td>
                    <td>$not_in_row[Country]</td>
                    <td>$not_in_row[Phone]</td>
                    <td>$not_in_row[Fax]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>