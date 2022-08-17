<?php
    include('../connection.php'); 

    $count = "SELECT COUNT(`ProductID`) AS CountProductID FROM `products`";
    $result = $conn->query($count);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>COUNT(ProductID)</th>
            </tr>
        </thead>
        ";

        foreach($result as $count_row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$count_row[CountProductID]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>