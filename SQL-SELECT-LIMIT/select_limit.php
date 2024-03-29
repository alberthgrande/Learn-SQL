<?php

    // connection
    include('../connection.php');

    // globla variable
    $countID = 1;

    // select query
    $sqlSelect = "SELECT * FROM `customers` WHERE `country`='Germany' LIMIT 3";
    $returnSelect = $conn->query($sqlSelect);

    if($returnSelect->num_rows > 0) {
        // output data of each row
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
                <th colspan='2'>Action</th>
            </tr>
        </thead>
        ";
        while($row = $returnSelect->fetch_assoc()) {
            $id = $row['CustomerID'];
            echo "
            
            <tbody>
                <tr>
                    <td>".$countID++."</td>
                    <td>$row[CustomerName]</td>
                    <td>$row[ContactName]</td>
                    <td>$row[Address]</td>
                    <td>$row[City]</td>
                    <td>$row[PostalCode]</td>
                    <td>$row[Country]</td>
                    <td>
                        <button><a style='color: blue;'
                            href='../SQL-UPDATE/update_multiple.php?updateID=$id'>
                            Update
                        </a></button>
                        <button style='color: red;'
                            
                            onclick='deleteConfirmation($id)'>
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>

<script>
    function deleteConfirmation(id){
        if(confirm("Are you sure you want to delete this data?")) {
            window.location.href='../SQL-DELETE/delete_table.php?deleteID=' + id;
        } else {
            return false;
        }
    }
</script>