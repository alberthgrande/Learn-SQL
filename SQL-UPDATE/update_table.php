<?php
    
    // connection
    include('../connection.php');
    // input variable
    $id = $_POST['updateID'];
    $companyName = $_POST['companyName'];
    $contactName  = $_POST['contactName'];
    $address      = $_POST['address'];
    $city         = $_POST['city'];
    $region         = $_POST['region'];
    $postalCode   = $_POST['postalCode'];
    $country      = $_POST['country'];
    $phone      = $_POST['phone'];
    $fax      = $_POST['fax'];
   
    if(isset($_POST['submit'])) {
        // update query
        $update = "UPDATE `customers` 
        SET `CustomerID`='$id', `CompanyName`='$companyName',`ContactName`='$contactName',`Address`='$address',`City`='$city', `Region`='$region',`PostalCode`='$postalCode',`Country`='$country', `Phone`='$phone', `Fax`='$fax' 
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