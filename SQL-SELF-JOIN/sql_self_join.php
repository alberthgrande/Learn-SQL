<?php
    include '../connection.php';

    $sql = "SELECT A.CompanyName AS CompanyName1, B.CompanyName AS CompanyName2, A.City
            FROM customers A, customers B
            WHERE A.CustomerID <> B.CustomerID
            AND A.City = B.City
            ORDER BY A.City";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CompanyName1</th>
                <th>CompanyName2</th>
                <th>City</th>
            </tr>
        </thead>
        ";
        foreach($result as $row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[CompanyName1]</td>
                    <td>$row[CompanyName2]</td>
                    <td>$row[City]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
