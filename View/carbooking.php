<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';

$CarID=$_GET['id'];
$bookingInfo = CarBooking( $CarID );
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Asset/userScript.js"></script>
    <title>StayDriveGo Booking</title>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">
</head>

<body onload="carBooking()">
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once 'menu.php'; ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../Controller/carbookingcheck.php" method="post" enctype="" onsubmit="return carBooking();">
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
                    <input type="hidden" name="Ownername" value="<?=$bookingInfo['OwnerUsername']?>">
                        <td>Brand:</td>
                        <td><input type="hidden" name="CarID" value="<?=$bookingInfo['CarID']?>"><input type="text" name="Brand" id="" value="<?=$bookingInfo['Barnd']?>" readonly></td>
                        <td>Name:</td>
                        <td><input type="text" name="UserFullName" id="" value="<?php  if(isset($_SESSION['firstname'])) {echo $_SESSION['firstname'];  }?> <?php  if(isset($_SESSION['lastname'])) {echo $_SESSION['lastname'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><input type="text" name="Model" id="" value="<?=$bookingInfo['Model']?>" readonly></td>
                        <td>Email:</td>
                        <td><input type="email" name="UserEmail" id="" value="<?php  if(isset($_SESSION['email'])) {echo $_SESSION['email'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Daily Rate:</td>
                        <td><input type="text" name="DailyRate" id="DailyRate" value="<?=$bookingInfo['DailyRate']?>" readonly></td>
                        <td>Mobile:</td>
                        <td><input type="text" name="UserMobile" id="" value="<?php  if(isset($_SESSION['mobile'])) {echo $_SESSION['mobile'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h1>Booking Information</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Start Date:</td>
                        <td><input type="date" name="PickupDate" id="PickupDate" min="<?= date('Y-m-d'); ?>" value="<?php  if(isset($_SESSION['pickup'])) {echo $_SESSION['pickup'];  }?>" onblur="carBooking()"></td>
                        <td>End Date:</td>
                        <td><input type="date" name="DropoffDate" id="DropoffDate" min="<?= date('Y-m-d'); ?>" value="<?php  if(isset($_SESSION['dropoff'])) {echo $_SESSION['dropoff'];  }?>" onblur="carBooking()"></td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td><input type="text" name="Location" value="<?=$bookingInfo['Location']?>" readonly></td>
                        <td>Total Price:</td>
                        <td><input type="text" name="TotalPrice" id="TotalPrice" value="" readonly></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" value="Book Now">
            </form>

                
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>