<?php

    include '../connection.php';

    $sql = "SELECT orders.CustomerID, customers.CompanyName, orders.OrderDate
            FROM `orders` INNER JOIN `customers` 
            ON orders.CustomerID=customers.CustomerID";

            $result = $conn->query($sql);
    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CompanyName</th>
                <th>OrderDate</th>

            </tr>
        </thead>
        ";
        foreach($result as $row) {
            echo "
            <tbody>
                <tr>
                    <td>$row[CustomerID]</td>
                    <td>$row[CompanyName]</td>
                    <td>$row[OrderDate]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>