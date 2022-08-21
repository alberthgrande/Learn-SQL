<?php

    include('../connection.php');

    $not_between_text_value = "SELECT * FROM `products`
                               WHERE `ProductName` NOT BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni' 
                               ORDER BY `ProductName` ";
    $result = $conn->query($not_between_text_value);

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
                 <th>ReorderLevel</th>
                 <th>Discontinued</th>
             </tr>
         </thead>
         ";
        while($not_between_text_value_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$not_between_text_value_row[ProductID]</td>
                    <td>$not_between_text_value_row[ProductName]</td>
                    <td>$not_between_text_value_row[SupplierID]</td>
                    <td>$not_between_text_value_row[CategoryID]</td>
                    <td>$not_between_text_value_row[QuantityPerUnit]</td>
                    <td>$not_between_text_value_row[UnitPrice]</td>
                    <td>$not_between_text_value_row[UnitsInStock]</td>
                    <td>$not_between_text_value_row[UnitsOnOrder]</td>
                    <td>$not_between_text_value_row[ReorderLevel]</td>
                    <td>$not_between_text_value_row[Discontinued]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>