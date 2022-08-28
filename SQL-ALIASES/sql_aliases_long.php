<?php
    include '../connection.php';

    $sql = "SELECT Orders.OrderID, Orders.OrderDate, Customers.CompanyName 
            FROM Customers, Orders 
            WHERE Customers.CompanyName = 'Around the Horn' AND Customers.CustomerID=Orders.CustomerID";

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