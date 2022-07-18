<?php
    error_reporting(0);
    include('connection.php');

    // select where data from customers table
    $objSql = "SELECT `CustomerName`,`Address` FROM `Customers` WHERE `Country`='Mexico'";

    // return objSql from the selected column on database
    $returnSql = $conn->query($objSql);
    
    if($returnSql->num_rows > 0) {
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
        while($sqlRow = $returnSql->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$sqlRow[CustomerID]</td>
                    <td>$sqlRow[CustomerName]</td>
                    <td>$sqlRow[Address]</td>
                    <td>$sqlRow[City]</td>
                    <td>$sqlRow[PostalCode]</td>
                    <td>$sqlRow[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>