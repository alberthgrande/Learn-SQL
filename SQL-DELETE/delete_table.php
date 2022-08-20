<?php
    include('../connection.php');

    if(isset($_GET['deleteID'])) {
        $id = $_GET['deleteID'];

        $sqlDelete = "DELETE FROM `customers` WHERE `CustomerID`='$id' ";
        $resultDelete = $conn->query($sqlDelete);
        if($resultDelete == true) {
            header("Location: ../SQL-UPDATE/update_example.php");
        } else {
            // die(mysql_error($conn));
        }
    }
?>
