<?php
    // connectio database
    include("connection.php");

    // sql statement
    // SELECT * FROM `Customers`, select all data from `Customers` table from database
    // WHERE `Country`='Germany', selecting data from `Customers` table where searching all `Country`='Gemany' have a 'Germany' value
    // AND (`City`='Berlin' OR `City`='Munchen') is use to find if the `Country`='Germany' have the `City`='Berlin' OR `City`='Munchen' therefor if the `Country`='Gernmay' have one of this `City` it wil be generated and if the `Country`='Germany' does not have `City` either with these two statement it will not be generated

    $sql = "SELECT * FROM `Customers` WHERE `Country`='Germany' AND (`City`='Berlin' OR `City`='Munchen')";
    $return = $conn->query($sql);

    if($return->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
        </thead>
        ";
        while($row = $return->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$row[CustomerID]</td>
                    <td>$row[CustomerName]</td>
                    <td>$row[ContactName]</td>
                    <td>$row[Address]</td>
                    <td>$row[City]</td>
                    <td>$row[PostalCode]</td>
                    <td>$row[Country]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }

?>