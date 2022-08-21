<?php

    include('../connection.php');

    // SQL statement selects all products with a price BETWEEN 10 and 20. In addition; do not show products with a CategoryID of 1,2, or 3
    $between_in = "SELECT * FROM `products` WHERE `UnitPrice` BETWEEN 10 AND 20 AND NOT `CategoryID` IN (1,2,3) ";
    $result = $conn->query($between_in);

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
        while($between_in_row = $result->fetch_assoc()) {
          
         echo "
            
            <tbody>
                <tr>
                    <td>$between_in_row[ProductID]</td>
                    <td>$between_in_row[ProductName]</td>
                    <td>$between_in_row[SupplierID]</td>
                    <td>$between_in_row[CategoryID]</td>
                    <td>$between_in_row[QuantityPerUnit]</td>
                    <td>$between_in_row[UnitPrice]</td>
                    <td>$between_in_row[UnitsInStock]</td>
                    <td>$between_in_row[UnitsOnOrder]</td>
                    <td>$between_in_row[ReorderLevel]</td>
                    <td>$between_in_row[Discontinued]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>