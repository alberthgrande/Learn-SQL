<?php

    include_once '../connection.php';

    $sql = "SELECT `CompanyName` AS ID, `CompanyName` AS CUSTOMER FROM `customers`";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        // output data of each row
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID </th>
                <th>CompanyName</th>
            </tr>
        </thead>
        ";

        foreach($result as $row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[ID]</td>
                    <td>$row[CUSTOMER]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }    
    

?>