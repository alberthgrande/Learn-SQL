<?php

    // connection
    include('../connection.php');

    // globla variable
    $countID = 1;

    // select query
    $sqlSelect = "SELECT * FROM `customers`";
    $returnSelect = $conn->query($sqlSelect);

    if($returnSelect->num_rows > 0) {
        // output data of each row
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>ComanyName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>PostalCode</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Fax</th>
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
                    <td>$row[CompanyName]</td>
                    <td>$row[ContactName]</td>
                    <td>$row[Address]</td>
                    <td>$row[City]</td>
                    <td>$row[Region]</td>
                    <td>$row[PostalCode]</td>
                    <td>$row[Country]</td>
                    <td>$row[Phone]</td>
                    <td>$row[Fax]</td>
                    <td>
                        <button><a style='color: blue;'
                            href='update_multiple.php?updateID=$id'>
                            Update
                        </a></button> " ?>
                        <button style="color: red;"
                            onclick="deleteConfirmation('<?=$id?>');">
                            Delete
                        </button>
                    <?php "</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>

<script >
    function deleteConfirmation(id) {
    if (confirm("Are you sure you want to delete this data?")) {
        window.location.href = '../SQL-DELETE/delete_table.php?deleteID=' + id;
    } else {
        return false;
    }
}
</script>