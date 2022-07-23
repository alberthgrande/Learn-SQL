<?php
    // connection
    include('../connection.php');

    // global variable
    $id = $_GET['updateID'];

    $selectUpdate = "SELECT * FROM `customers` WHERE `CustomerID`='$id'";
    $selectReturn = $conn->query($selectUpdate);

    if($selectReturn->num_rows > 0) {
        while($row = $selectReturn->fetch_assoc()) {
            $customerName = $row['CustomerName'];
            $contactName = $row['ContactName'];
            $address = $row['Address'];
            $city = $row['City'];
            $postalCode = $row['PostalCode'];
            $country = $row['Country'];

?>
        <!-- Start div continer -->
        <div class="container">
            <h1>Update Form</h1>
            <form action="update_table.php" method="post">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><input type="hidden" name="updateID" value="<?=$id; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">CustomerName:</label></td>
                            <td><input type="text" name="customerName" value="<?=$customerName; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">ContactName:</label></td>
                            <td><input type="text" name="contactName" value="<?=$contactName; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">Address:</label></td>
                            <td><input type="text" name="address" value="<?=$address; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">City:</label></td>
                            <td><input type="text" name="city" value="<?=$city; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">PostalCode:</label></td>
                            <td><input type="text" name="postalCode" value="<?=$postalCode; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="updateform">Country:</label></td>
                            <td><input type="text" name="country" value="<?=$country; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="submit">Update</button></td>
                        </tr>
                    </tbody>
                </table> 
            </form>
        </div>
        <!-- End div continer -->
        
<?php
        }
    }

?> 


