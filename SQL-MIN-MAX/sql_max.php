<?php

    include('../connection.php');

    $max = "SELECT `ProductID`, MAX(`Price`) AS LargestPrice FROM `products`";
    $result = $conn->query($max);

    if($result->num_rows > 0) {
        echo "
        <table border=1>
        <thead>
            <tr>
                <th>LargestPrice</th>
            </tr>
        </thead>
        ";

        foreach($result as $max_row) {
            echo "
            
            <tbody>
                <tr>
                    <td>$max_row[LargestPrice]</td>
                </tr>
            </tbody>
          
            ";
        }
        echo "</table>";
    }