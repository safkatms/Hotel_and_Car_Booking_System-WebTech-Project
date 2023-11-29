<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';

$bookingID = $_GET['id'];
$bookingInfo = ViewHotelBooking($bookingID);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.invoice-container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 20px;
}

.invoice-header {
    text-align: left;
    color: #0275d8;
    padding: 10px 0;
}

.invoice-header h1, .hotel-info h1{
    margin: 0;
    font-size: 40px;
}
.invoice-title h1{
    margin: 0;
    font-size: 40px;
    text-align: center;
    color: black;
    border-bottom: 5px solid #ddd;
}
.hotel-info, .booking-info {
    padding: 20px 0;
    border-bottom: 1px solid #ddd;
}

.hotel-info h2,.hotel-info h1, .booking-info h2 {
    margin-top: 0;
    color: black;
}


    </style>
    <title>StayDriveGo Invoice</title>
</head>
<body onload="window.print();">
    <div class="invoice-container">
        <section class="invoice-header">
            <h1>StayDriveGo.com</h1>
            "Stay, Drive, Go – Your Way"
        </section>
        <section class="invoice-title">
            <h1>INVOICE</h1>
        </section>
        <section class="hotel-info">
            <h2>Hotel Information</h2>
            Hotel Name:<?=$bookingInfo['HotelName']?><br><br>
            Hotel Address:<?=$bookingInfo['HotelAddress']?>
        </section>
        <section class="booking-info">
            <h2>Booking Information</h2>
            <p>Guest Name: <?=$bookingInfo['Fullname']?></p>
            <p>Email: <?=$bookingInfo['Email']?></p>
            <p>Mobile: <?=$bookingInfo['Mobile']?></p>
            <p>Room Type: <?=$bookingInfo['RoomTypeName']?></p>
            <p>Number Of Room: <?=$bookingInfo['NumberOfRooms']?></p>
            <p>Check In: <?=$bookingInfo['CheckInDate']?></p>
            <p>Check Out: <?=$bookingInfo['CheckOutDate']?></p>
            <p>Total Bill: <?=$bookingInfo['TotalPrice']?> TK</p>
        </section>
    </div>
</body>
</html>
