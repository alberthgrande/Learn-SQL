<?php

    include '../connection.php';

    $sql = "SELECT o.OrderID, o.OrderDate, c.CompanyName 
            FROM customers AS c, orders AS o 
            WHERE c.CompanyName='Around the Horn' AND c.CustomerID=o.CustomerID";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>OrdersID</th>
                <th>OrdersData</th>
                <th>CompanyName</th>

            </tr>
        </thead>
        ";

        foreach($result as $row) {
            echo "
            <tbody>
                <tr>
                    <td>$row[OrderID]</td>
                    <td>$row[OrderDate]</td>
                    <td>$row[CompanyName]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>