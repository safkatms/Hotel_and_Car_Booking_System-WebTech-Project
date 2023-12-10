<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');

$hotel_info = getHotelInfo();
$booking_info = pendingBookings();
$confirmedbooking_info = confirmedBookings();
$cancelledbooking_info = cancelledBookings();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <title>Bookings</title>
     
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
        <?php
            if (!empty($hotel_info)) {
            ?>
            <fieldset style="width: 100%;">
                <H1>Manage Booking</H1>
                <fieldset>
                    <legend>Pending</legend>
                    <form>
                    <?php if (!empty($booking_info)) { ?>
                        <table border="1">
                            <tr>
                                <th>
                                    Booking ID
                                </th>

                                <th>
                                    Fullname
                                </th>
                                <th>
                                    RoomType
                                </th>

                                <th>
                                    CheckInDate
                                </th>
                                <th>
                                    CheckOutDate
                                </th>
                                <th>
                                    NumberOfRooms
                                </th>
                                <th>
                                    TotalPrice
                                </th>
                                <th>
                                    Select
                                </th>
                            </tr>
                            
                        <?php for ($i = 0; $i < count($booking_info); $i++) { ?>
                            <tr>
                                <td><?= $booking_info[$i]['BookingID'] ?></td>
                                <td><?= $booking_info[$i]['Fullname'] ?></td>
                                <td><?= $booking_info[$i]['RoomTypeName'] ?></td>
                                <td><?= $booking_info[$i]['CheckInDate'] ?></td>
                                <td><?= $booking_info[$i]['CheckOutDate'] ?></td>
                                <td><?= $booking_info[$i]['NumberOfRooms'] ?></td>
                                <td><?= $booking_info[$i]['TotalPrice'] ?></td>
                                <td><a href="editbookinghotel.php?id=<?=$booking_info[$i]['BookingID']?>"> Select </a></td>
                            </tr>
                            <?php } ?>
                    

                        </table>
                        <?php } else {
                        echo 'No Pending Bookings';
                    } ?>

                    </form>
                </fieldset>

                <fieldset>
                    <legend>Confirmed</legend>
                    <form>
                    <?php if (!empty($confirmedbooking_info)) { ?>
                        <table border="1">
                            <tr>
                                <th>
                                    Booking ID
                                </th>

                                <th>
                                    Fullname
                                </th>
                                <th>
                                    RoomType
                                </th>

                                <th>
                                    CheckInDate
                                </th>
                                <th>
                                    CheckOutDate
                                </th>
                                <th>
                                    NumberOfRooms
                                </th>
                                <th>
                                    TotalPrice
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                            
                        <?php for ($i = 0; $i < count($confirmedbooking_info); $i++) { ?>
                            <tr>
                                <td><?= $confirmedbooking_info[$i]['BookingID'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['Fullname'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['RoomTypeName'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['CheckInDate'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['CheckOutDate'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['NumberOfRooms'] ?></td>
                                <td><?= $confirmedbooking_info[$i]['TotalPrice'] ?></td>
                                <td><a href="editbookinghotel.php?id=<?=$confirmedbooking_info[$i]['BookingID']?>"> Select </a></td>
                            </tr>
                            <?php } ?>
                    

                        </table>
                        <?php } else {
                        echo 'No Bookings Yet.';
                    } ?>

                    </form>
                </fieldset>

                <fieldset>
                    <legend>Cancelled</legend>
                    <form>
                    <?php if (!empty($cancelledbooking_info)) { ?>
                        <table border="1">
                            <tr>
                                <th>
                                    Booking ID
                                </th>

                                <th>
                                    Fullname
                                </th>
                                <th>
                                    RoomType
                                </th>

                                <th>
                                    CheckInDate
                                </th>
                                <th>
                                    CheckOutDate
                                </th>
                                <th>
                                    NumberOfRooms
                                </th>
                                <th>
                                    TotalPrice
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                            
                        <?php for ($i = 0; $i < count($cancelledbooking_info); $i++) { ?>
                            <tr>
                                <td><?= $cancelledbooking_info[$i]['BookingID'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['Fullname'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['RoomTypeName'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['CheckInDate'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['CheckOutDate'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['NumberOfRooms'] ?></td>
                                <td><?= $cancelledbooking_info[$i]['TotalPrice'] ?></td>
                                <td><a href="editbookinghotel.php?id=<?=$cancelledbooking_info[$i]['BookingID']?>"> Select </a></td>
                            </tr>
                            <?php } ?>
                    

                        </table>
                        <?php } else {
                        echo 'No Bookings Yet.';
                    } ?>

                    </form>
                </fieldset>
            </fieldset>
            <?php } else {
                echo "Add Hotel First.";
            } ?>


        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>