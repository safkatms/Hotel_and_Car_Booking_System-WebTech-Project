<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';

$bookingID=$_GET['id'];
$bookingInfo = ViewCarBooking( $bookingID );
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>StayDriveGo Booking</title>
    <script src="../Asset/userScript.js"></script>
</head>

<body>
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once 'menu.php'; ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../Controller/carbookingcheck.php" method="post" enctype="">
                <table style="width:100%">
                    <tr>
                        <td colspan="2">
                            <h1>Car Information</h1>
                        </td>
                        <td colspan="2">
                            <h1>Your Information</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td><input type="text" name="Brand" id="" value="<?=$bookingInfo['Brand']?>" readonly></td>
                        <td>Name:</td>
                        <td><input type="text" name="UserFullName" id="" value="<?=$bookingInfo['Fullname']?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><input type="text" name="Model" id="" value="<?=$bookingInfo['Model']?>" readonly></td>
                        <td>Email:</td>
                        <td><input type="email" name="UserEmail" id="" value="<?=$bookingInfo['Email']?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td><input type="text" name="Location" value="<?=$bookingInfo['Location']?>" readonly></td>
                        <td>Mobile:</td>
                        <td><input type="text" name="UserMobile" id="" value="<?=$bookingInfo['Mobile']?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h1>Booking Information</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Start Date:</td>
                        <td><input type="date" name="PickupDate" id="" value="<?=$bookingInfo['StartDate']?>" readonly></td>
                        <td>End Date:</td>
                        <td><input type="date" name="DropoffDate" id="" value="<?=$bookingInfo['EndDate']?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><input type="text" name="Status" value="<?=$bookingInfo['Status']?>" readonly></td>
                        <td>Total Price:</td>
                        <td><input type="text" name="TotalPrice"  value="<?=$bookingInfo['TotalPrice']?>" readonly></td>
                    </tr>
                    <input type="hidden" name="bookingID" id="bookingID" value="<?= $bookingInfo['BookingID']?>">
                </table>
                <?php if($bookingInfo['Status']=="Confirmed"){?>
                    <hr>
                    <a href="carinvoice.php?id=<?= $bookingInfo['BookingID']?>"> <input type="button" value="Print Invoice"> </a>
                <?php }else if($bookingInfo['Status']=="Pending"){?>
                    <hr>
                    <a href="../Controller/carbookingcancel.php?id=<?= $bookingInfo['BookingID']?>"> <input type="button" value="Cancel Booking" onclick="cancelCarBooking()"> </a>
                <?php }else{?>
                    
                <?php }?>
            </form>

                
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>