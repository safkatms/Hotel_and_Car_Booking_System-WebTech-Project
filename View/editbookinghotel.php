<?php
require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');


$id = $_GET['id'];
$info = viewBookingInfo($id);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <H1>Manage Booking</H1>
                <fieldset>
                    <h1>User Information</h1>
                    <ul>
                        <li>Username: <?= $info['Username'] ?></li>
                        <li>Fullname: <?= $info['Fullname'] ?></li>
                        <li>Email: <?= $info['Email'] ?></li>
                        <li>Phone: <?= $info['Mobile'] ?></li>


                    </ul>
                    <h1>Booking Information</h1>
                    <ul>
                        <li>Room Type: <?= $info['RoomTypeName'] ?></li>
                        <li>Number of Room: <?= $info['NumberOfRooms'] ?></li>
                        <li>Check-in Date: <?= $info['CheckInDate'] ?></li>
                        <li>Check-out Date: <?= $info['CheckOutDate'] ?></li>
                        <li>Total Price: <?= $info['TotalPrice'] ?></li>
                        <li>Booking Status: <?= $info['Status'] ?></li>
                    </ul>
                    <form action="../Controller/changestatuscheck.php" method="post" enctype="" onsubmit="validateBookingStatus()">

                        <input type="hidden" name="BookingID" value="<?= $info['BookingID'] ?>">
                        <input type="hidden" name="RoomTypeID" value="<?= $info['RoomTypeID'] ?>">
                        <input type="hidden" name="NumberOfRooms" value="<?= $info['NumberOfRooms'] ?>">
                        <?php if (isset($info['Status']) && $info['Status'] == 'Pending') { ?>
                            
                    <h1>Confirm/Cancel Booking</h1>
                            <input type="radio" name="Status" id="Confirmed" value="Confirmed">Confirm
                            <input type="radio" name="Status" id="Cancelled" value="Cancelled">Cancel
                            <hr>
                            <input type="submit" value="Confirm">
                        <?php } ?>
                    </form>

                </fieldset>

        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>


    <script>
        function validateBookingStatus() {
            let pending = document.getElementById('Pending').checked;
            let confirmed = document.getElementById('Confirmed').checked;
            let cancelled = document.getElementById('Cancelled').checked;

            if (pending) {
                alert('Booking Pending');
            } else if (confirmed) {
                alert('Booking Confirmed.');
            } else if (cancelled) {
                alert('Booking Cancelled.');
            }

            return true;
        }
    </script>

</body>

</html>