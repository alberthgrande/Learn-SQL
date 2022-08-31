<?php

    include '../connection.php';

    $sql = "SELECT customers.CompanyName, orders.OrderID FROM `customers` 
            LEFT JOIN orders ON customers.CustomerID = orders.CustomerID
            ORDER BY customers.CompanyName";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                echo "
                <table border=1>
                <thead> 
                    <tr>
                        <th>CompanyName</th>
                        <th>OrderID</th>
                    </tr>
                </thead>
                ";
                foreach($result as $row) {
                    echo "
                    <tbody>
                        <tr>
                            <td>$row[CompanyName]</td>
                            <td>$row[OrderID]</td>
                        </tr>
                    </tbody>
                  
                    ";
                }
                echo "</table>";
            }

?>