<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';

$bookingID = $_GET['id'];
$bookingInfo = ViewHotelBooking($bookingID);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>StayDriveGo Booking</title>
    <script src="../Asset/userScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">
</head>

<body>
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once 'menu.php'; ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <form action="../Controller/hotelbookingcheck.php" method="post" enctype="">
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
                            <td><input type="text" name="HotelName" id="" value="<?= $bookingInfo['HotelName'] ?>" readonly></td>
                            <td>Name:</td>
                            <td><input type="text" name="UserFullName" id="" value="<?= $bookingInfo['Fullname'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Room Type:</td>
                            <td><input type="hidden" name="RoomTypeID" value="<?= $bookingInfo['RoomTypeID'] ?>"><input type="text" name="RoomType" id="" value="<?= $bookingInfo['RoomTypeName'] ?>" readonly></td>
                            <td>Email:</td>
                            <td><input type="email" name="UserEmail" id="" value="<?= $bookingInfo['Email'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="HotelAddress" value="<?= $bookingInfo['HotelAddress'] ?>" readonly></td>
                            <td>Mobile:</td>
                            <td><input type="text" name="UserMobile" id="" value="<?= $bookingInfo['Mobile'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <h1>Booking Information</h1>
                            </td>
                        </tr>
                        <tr>
                            <td>Check-in Date:</td>
                            <td><input type="date" name="CheckinDate" id="" value="<?= $bookingInfo['CheckInDate'] ?>" readonly></td>
                            <td>Check-out Date:</td>
                            <td><input type="date" name="CheckoutDate" id="" value="<?= $bookingInfo['CheckOutDate'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Number of Room:</td>
                            <td><input type="number" name="NumberofRoom" id="" value="<?= $bookingInfo['NumberOfRooms'] ?>" readonly></td>
                            <td>Total Price:</td>
                            <td><input type="text" name="TotalPrice" id="" value="<?= $bookingInfo['TotalPrice'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td> <input type="text" name="Status" value="<?= $bookingInfo['Status'] ?>" readonly> </td>
                            <td><input type="hidden" name="bookingID" id="bookingID" value="<?= $bookingInfo['BookingID'] ?>"></td>
                            <td></td>
                        </tr>
                    </table>
                    <?php if ($bookingInfo['Status'] == "Confirmed") { ?>
                        <hr>
                        <a href="hotelinvoice.php?id=<?= $bookingInfo['BookingID'] ?>"> <input type="button" value="Print Invoice"> </a>
                    <?php } else if ($bookingInfo['Status'] == "Pending") { ?>
                        <hr>
                        <a href="../Controller/hotelbookingcancel.php?id=<?= $bookingInfo['BookingID'] ?>"> <input type="button" value="Cancel Booking" onclick="cancelHotelBooking()"> </a>
                    <?php } else { ?>

                    <?php } ?>
                </form>


            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>


</body>

</html>