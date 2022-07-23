<?php
    
    // connection
    include('../connection.php');
    // input variable
    $id = $_POST['updateID'];
    $customerName = $_POST['customerName'];
    $contactName  = $_POST['contactName'];
    $address      = $_POST['address'];
    $city         = $_POST['city'];
    $postalCode   = $_POST['postalCode'];
    $country      = $_POST['country'];
   
    if(isset($_POST['submit'])) {
        // update query
        $update = "UPDATE `customers` 
        SET `CustomerID`='$id', `CustomerName`='$customerName',`ContactName`='$contactName',`Address`='$address',`City`='$city',`PostalCode`='$postalCode',`Country`='$country' 
        WHERE `CustomerID`='$id'";
        $retunUpdate = $conn->query($update);

        if($retunUpdate) {
        ?>
        <script>
            alert("Customer Details Successfully Updated.")
            window.location.assign("update_example.php");
        </script>
        <?php
        } else {
            die(mysql_error($conn));
        }
    }
    
?>