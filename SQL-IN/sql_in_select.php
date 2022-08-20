<?php
    include('../connection.php');

    $select = "SELECT * FROM `customers` WHERE `Country` IN (SELECT `Country` FROM `Suppliers`)";
    $result = $conn->query($select);
    
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
        while($select_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$select_row[CustomerID]</td>
                    <td>$select_row[CompanyName]</td>
                    <td>$select_row[ContactName]</td>
                    <td>$select_row[Address]</td>
                    <td>$select_row[City]</td>
                    <td>$select_row[Region]</td>
                    <td>$select_row[PostalCode]</td>
                    <td>$select_row[Country]</td>
                    <td>$select_row[Phone]</td>
                    <td>$select_row[Fax]</td>
                </tr>
            </tbody>
          
            ";

        }
        echo "</table>";
    } 
?>