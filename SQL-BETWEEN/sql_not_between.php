<?php

    include('../connection.php');

    $not_between = "SELECT * FROM `products` WHERE `UnitPrice` NOT BETWEEN 10 AND 20 ";
    $result = $conn->query($not_between);

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
        while($not_between_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$not_between_row[ProductID]</td>
                    <td>$not_between_row[ProductName]</td>
                    <td>$not_between_row[SupplierID]</td>
                    <td>$not_between_row[CategoryID]</td>
                    <td>$not_between_row[QuantityPerUnit]</td>
                    <td>$not_between_row[UnitPrice]</td>
                    <td>$not_between_row[UnitsInStock]</td>
                    <td>$not_between_row[UnitsOnOrder]</td>
                    <td>$not_between_row[ReorderLevel]</td>
                    <td>$not_between_row[Discontinued]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>