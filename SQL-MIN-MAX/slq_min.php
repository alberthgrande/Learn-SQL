<?php
    include('../connection.php');
    
    $min = "SELECT MIN(`Price`) AS SmallestPrice FROM `products`";
    $result = $conn->query($min);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>SmallestPrice</th>
                
            </tr>
        </thead>
        ";
        foreach($result as $min_row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$min_row[SmallestPrice]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }
?>