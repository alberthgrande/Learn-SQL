<?php

    include('../connection.php');

    $sql = "SELECT * FROM `Customers` WHERE NOT `Country`='Mexico' ";
    $return = $conn->query($sql);

    if($return->num_rows > 0) {
         // output data of each row
         echo "
         <table border=1>
         <thead>
             <tr>
                 <th>CustomerID</th>
                 <th>CompanyName</th>
                 <th>ContactName</th>
                 <th>Address</th>
                 <th>City</th>
                 <th>Region</th>
                 <th>PostalCode</th>
                 <th>Country</th>
                 <td>Phone</td>
                 <td>Fax</td>
             </tr>
         </thead>
         ";
        while($row = $return->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[CustomerID]</td>
                    <td>$row[CompanyName]</td>
                    <td>$row[ContactName]</td>
                    <td>$row[Address]</td>
                    <td>$row[City]</td>
                    <td>$row[Region]</td>
                    <td>$row[PostalCode]</td>
                    <td>$row[Country]</td>
                    <td>$row[Phone]</td>
                    <td>$row[Fax]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>