<?php
    include("connection.php");

    // create select from database
    $objSql = "SELECT * FROM `customers`";
    // return data from database
    $returnObjSql = $conn->query($objSql);

    
    if($returnObjSql->num_rows > 0) {
        // output data of each row
       echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
        </thead>
    
    ";
        while($rowSql = $returnObjSql->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$rowSql[CustomerID]</td>
                    <td>$rowSql[CustomerName]</td>
                    <td>$rowSql[Address]</td>
                    <td>$rowSql[City]</td>
                    <td>$rowSql[PostalCode]</td>
                    <td>$rowSql[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>



