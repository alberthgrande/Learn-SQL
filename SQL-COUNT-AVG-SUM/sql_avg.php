<?php
    include('../connection.php');

    $avg = "SELECT AVG(`ProductID`) AS AvgPrice FROM `products`";
    $result = $conn->query($avg);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>AVG(Price)</th>
            </tr>
        </thead>
        ";
        foreach($result as $avg_row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$avg_row[AvgPrice]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>