<?php
    
    // connection database 
    include('connection.php');

    // sql statement
    $sql = "INSERT INTO `customers`(`CustomerName`,`ContactName`,`Address`,`City`,`PostalCode`,`Country`) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21', 'Stavanger', '4006', 'Norway')";
    $return = $conn->query($sql);

    if($return) {
        echo "Successfully inserted query";
    } else {
        echo "An error occur inserting query";
    }

?>