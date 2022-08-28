<?php
    include '../connection.php';

    $sql = "SELECT `CompanyName` AS 'Company Owner', `ContactName` AS 'Company Contact' FROM `customers`";
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
                    <td>".$row['Company Owner']."</td>
                    <td>".$row['Company Contact']."</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    } else {
        echo "No results";
    }
?>