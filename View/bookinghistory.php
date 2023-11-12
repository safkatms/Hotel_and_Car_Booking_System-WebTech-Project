<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/bookingmodel.php';
$hotelbookinghistory = HotelBookingHistory(); 
$carbookinghistory = CarBookingHistory();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayDriveGo Booking</title>
</head>

<body>
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once 'usermenu.php'; ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <h1>Booking History</h1>
                <section>

                    <fieldset>
                        <legend>HOTEL</legend>
                        
                            <table border="1" style="width: 100%;">
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>Room Type</th>
                                    <th>Check-in Date</th>
                                    <th>Check-out Date</th>
                                    <th>Number of Rooms</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>

                                <?php for ($i = 0; $i < count($hotelbookinghistory); $i++) { ?>
                                    <tr>

                                        <td>
                                            <?= $hotelbookinghistory[$i]['HotelName'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['RoomTypeName'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['CheckInDate'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['CheckOutDate'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['NumberOfRooms'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['TotalPrice'] ?>
                                        </td>
                                        <td>
                                            <?= $hotelbookinghistory[$i]['Status'] ?>
                                        </td>
                                        <td>
                                            <a href="hotelbooking.php?id=<?= $hotelbookinghistory[$i]['RoomTypeID']  ?>"> <input type="button" value="Select"> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                      

                    </fieldset>

                    <fieldset>
                        <legend>CAR</legend>
                        
                            <table border="1" style="width: 100%;">
                                <tr>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Location</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>

                                <?php for ($i = 0; $i < count($carbookinghistory); $i++) { ?>
                                    <tr>

                                        <td>
                                            <?= $carbookinghistory[$i]['Brand'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['Model'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['StartDate'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['EndDate'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['Location'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['TotalPrice'] ?>
                                        </td>
                                        <td>
                                            <?= $carbookinghistory[$i]['Status'] ?>
                                        </td>
                                        <td>
                                            <a href="carbooking.php?id=<?= $carbookinghistory[$i]['CarID']  ?>"> <input type="button" value="Select"> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                      

                    </fieldset>


                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>