<?php
    include('../connection.php');

    $sum = "SELECT SUM(`Price`) as SumPrice FROM `products`";
    $result = $conn->query($sum);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>SUM(Price)</th>
            </tr>
        </thead>
        ";

        while($sum_row = $result->fetch_assoc()) {
            echo "
            
            <tbody>
                <tr>
                    <td>$sum_row[SumPrice]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>