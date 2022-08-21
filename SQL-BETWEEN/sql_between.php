<?php

    include('../connection.php');

    $between = "SELECT * FROM `products` WHERE `UnitPrice` BETWEEN 10 AND 20 ";
    $result = $conn->query($between);

    if($result->num_rows > 0) {
        // output data of each row
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>SupplierID</th>
                <th>CategoryID</th>
                <th>QuantityPerUnit</th>
                <th>UnitPrice</th>
                <th>UnitsInStock</th>
                <th>UnitsOnOrder</th>
                <td>ReorderLevel</td>
                <td>Discontinued</td>
            </tr>
        </thead>
        ";
        while($between_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$between_row[ProductID]</td>
                    <td>$between_row[ProductName]</td>
                    <td>$between_row[SupplierID]</td>
                    <td>$between_row[CategoryID]</td>
                    <td>$between_row[QuantityPerUnit]</td>
                    <td>$between_row[UnitPrice]</td>
                    <td>$between_row[UnitsInStock]</td>
                    <td>$between_row[UnitsOnOrder]</td>
                    <td>$between_row[ReorderLevel]</td>
                    <td>$between_row[Discontinued]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>