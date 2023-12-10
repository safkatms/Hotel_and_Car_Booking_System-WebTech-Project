<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';

$roomID=$_GET['id'];
$bookingInfo = HotelBooking( $roomID );
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Asset/userScript.js"></script>
     <title>StayDriveGo Booking</title>
</head>

<body onload="hotelBooking()">
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once 'menu.php'; ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../Controller/hotelbookingcheck.php" method="post" enctype=""  onsubmit="return hotelBooking();">
                <table style="width:100%">
                    <tr>
                        <td colspan="2">
                            <h1>Hotel Information</h1>
                        </td>
                        <td colspan="2">
                            <h1>Your Information</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>
                            <input type="hidden" name="HotelID" value="<?=$bookingInfo['HotelID']?>">
                            <input type="text" name="HotelName" id="" value="<?=$bookingInfo['HotelName']?>" readonly>
                        </td>
                        <td>Name:</td>
                        <td><input type="text" name="UserFullName" id="" value="<?php  if(isset($_SESSION['firstname'])) {echo $_SESSION['firstname'];  }?> <?php  if(isset($_SESSION['lastname'])) {echo $_SESSION['lastname'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Room Type:</td>
                        <td><input type="hidden" name="RoomTypeID" value="<?=$bookingInfo['RoomTypeID']?>"><input type="text" name="RoomType" id="" value="<?=$bookingInfo['TypeName']?>" readonly></td>
                        <td>Email:</td>
                        <td><input type="email" name="UserEmail" id="" value="<?php  if(isset($_SESSION['email'])) {echo $_SESSION['email'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Price per Night:</td>
                        <td><input type="text" name="PricePerNight" id="PricePerNight" value="<?=$bookingInfo['PricePerNight']?>" readonly></td>
                        <td>Mobile:</td>
                        <td><input type="text" name="UserMobile" id="" value="<?php  if(isset($_SESSION['mobile'])) {echo $_SESSION['mobile'];  }?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h1>Booking Information</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Check-in Date:</td>
                        <td><input type="date" name="CheckinDate" id="CheckinDate" min="<?= date('Y-m-d'); ?>" value="<?php  if(isset($_SESSION['checkin'])) {echo $_SESSION['checkin'];  }?>" onblur="hotelBooking()"></td>
                        <td>Check-out Date:</td>
                        <td><input type="date" name="CheckoutDate" id="CheckoutDate" min="<?= date('Y-m-d'); ?>" value="<?php  if(isset($_SESSION['checkout'])) {echo $_SESSION['checkout'];  }?>" onblur="hotelBooking()"></td>
                    </tr>
                    <tr>
                        <td>Number of Room:</td>
                        <td><input type="number" name="NumberofRoom" id="NumberofRoom" min="1" onblur="hotelBooking()"></td>
                        <td>Total Price:</td>
                        <td><input type="text" name="TotalPrice" id="TotalPrice" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Available:</td>
                        <td> <input type="number" name="Available" id="Available" value="<?=$bookingInfo['AvailableRooms']?>" readonly> </td>
                        <td><input type="hidden" name="HotelAddress" value="<?=$bookingInfo['Address']?>"></td>
                        <td></td>
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