<?php
    include('../connection.php');

    $in = "SELECT * FROM `customers` WHERE `Country` IN ('Germany', 'France', 'UK')";
    $result = $conn->query($in);

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
        while($in_row = $result->fetch_assoc()){
            echo "
            
            <tbody>
                <tr>
                    <td>$in_row[CustomerID]</td>
                    <td>$in_row[CompanyName]</td>
                    <td>$in_row[ContactName]</td>
                    <td>$in_row[Address]</td>
                    <td>$in_row[City]</td>
                    <td>$in_row[Region]</td>
                    <td>$in_row[PostalCode]</td>
                    <td>$in_row[Country]</td>
                    <td>$in_row[Phone]</td>
                    <td>$in_row[Fax]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>