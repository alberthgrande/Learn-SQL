<?php

    include '../connection.php';

    $sql = "SELECT orders.OrderID, employees.LastName, employees.FirstName
            FROM orders RIGHT JOIN employees ON orders.EmployeeID = employees.EmployeeID
            ORDER BY orders.OrderID";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                echo "
                <table border=1>
                <thead> 
                    <tr>
                        <th>OrderID</th>
                        <th>LastName</th>
                        <th>FirstName</th>
                    </tr>
                </thead>
                ";
                foreach($result as $row) {
                    echo "
                    <tbody>
                        <tr>
                            <td>$row[OrderID]</td>
                            <td>$row[LastName]</td>
                            <td>$row[FirstName]</td>
                        </tr>
                    </tbody>
                  
                    ";
                }
                echo "</table>";
              
            }
?>