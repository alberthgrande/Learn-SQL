<?php

    include '../connection.php';

    $sql = "SELECT orders.OrderID, customers.CompanyName
            FROM `orders` INNER JOIN `customers`
            ON orders.CustomerID=customers.CustomerID";

            $result =$conn->query($sql);
    
    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CompanyName</th>
          

            </tr>
        </thead>
        ";
        foreach($result as $row) {
            echo "
            <tbody>
                <tr>
                    <td>$row[OrderID]</td>
                    <td>$row[CompanyName]</td>
                  
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }