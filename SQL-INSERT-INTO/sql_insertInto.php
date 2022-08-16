<?php
    // connection
    include('../connection.php');
    $submit = $_POST['submit'];
    $customerName = $_POST['customerName'];
    $contactName = $_POST['contactName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $message = "";

    if(isset($submit)) {

        if(empty($customerName) && empty($contactName) && empty($address) && empty($city) && empty($postalCode) && empty($country)) {
            
            $message .= "Please fill-out the form!";

        } else if (!empty($customerName) && !empty($contactName) && !empty($address) && !empty($city) && !empty($postalCode) && !empty($country)) {
            $sql = "INSERT INTO `customers`(`CustomerName`,`ContactName`,`Address`,`City`,`PostalCode`,`Country`) 
            VALUES ('$customerName','$contactName','$address','$city','$postalCode','$country')";
            
            if($insert = $conn->query($sql)) {
                $message .= "Successfully registered the customer ;-)";
            }
            
        
        }
    }
?>
 
        <!-- Start div continer -->
        <div class="container">
            <h1>Update Form</h1>
            <form action="" method="post">
                <table class="table">
                    <tbody>
                        
                        <div>
                            <?php 
                                if($message === NULL) {
                                    echo '<label for="updateform" style="margin-left: 50px; color: tomato;">'.$message.'</label>';
                                } else {
                                    echo '<label for="updateform" style="margin-left: 50px; color: green;">'.$message.'</label>';
                                }
                            ?>
                        </div>
                        
                        <tr>
                            <td><label for="updateform">CustomerName:</label></td>
                            <td><input type="text" name="customerName" value=""></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">ContactName:</label></td>
                            <td><input type="text" name="contactName" value=""></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">Address:</label></td>
                            <td><input type="text" name="address" value=""></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">City:</label></td>
                            <td><input type="text" name="city" value=""></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">PostalCode:</label></td>
                            <td><input type="text" name="postalCode" value="" ></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">Country:</label></td>
                            <td><input type="text" name="country" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="submit">Insert</button></td>
                        </tr>
                    </tbody>
                </table> 
            </form>
        </div>
        <!-- End div continer -->