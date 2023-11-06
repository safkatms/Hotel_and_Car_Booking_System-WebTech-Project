<?php
require_once '../Controller/sessioncheck.php';
?>

</html>

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
                <section>
                    <h1>Welcome to StayDriveGo</h1>
                </section>
                <section>
                    <form action="hotelsearching.php" method="get" enctype="">
                        <fieldset>
                            <legend>BOOK HOTEL</legend>
                            <table>
                                <tr>
                                    <td>City:
                                        <select name="city" required>
                                            <option value="" selected >Select a Location</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Mymanshingh">Mymanshingh</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </td>
                                    <td>
                                        Check in: <input type="date" name="checkin" min="<?= date('Y-m-d'); ?>" value="" required>
                                    </td>
                                    <td>
                                        Check out: <input type="date" name="checkout" min="<?= date('Y-m-d'); ?>" value="" required>
                                    </td>
                                    <td>Room:
                                        <select name="room" required>
                                            <option value="" selected >Select a Room</option>
                                            <option value="standard">Standard Room</option>
                                            <option value="deluxe">Deluxe Room</option>
                                            <option value="suite">Suite</option>
                                            <option value="single">Single Room</option>
                                            <option value="double">Double Room</option>
                                            <option value="twin">Twin Room</option>
                                            <option value="triple">Triple Room</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" value="Search">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </section>
                <!-- Car Booking Form -->
                <section>
                    <form action="carsearching.php" method="get" enctype="">
                        <fieldset>
                            <legend>BOOK CAR</legend>
                            <table>
                                <tr>
                                    <td>Pick-up location:
                                        <select name="pickup_location" required>
                                            <option value="" selected>Select a location</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Mymanshingh">Mymanshingh</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </td>
                                    <td>
                                        Pick-up date: <input type="date" name="pickup_date" min="<?= date('Y-m-d'); ?>" value="" required>
                                    </td>
                                    <td>
                                        Drop-off date: <input type="date" name="dropoff_date" min="<?= date('Y-m-d'); ?>" value="" required>
                                    </td>
                                    <td>
                                        <input type="submit" value="Search">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </section>
                <!-- Bus Booking Form -->
                <section>
                    <form action="path_to_bus_booking_script.php" method="post">
                        <fieldset>
                            <legend>BOOK BUS TICKET</legend>
                            <table>
                                <tr>
                                    <td>Departure Location:
                                        <select name="departure_location">
                                            <option value="Dhaka">Dhaka</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Mymanshingh">Mymanshingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </td>
                                    <td>Arrival Location:
                                        <select name="arrival_location">
                                        <option value="Dhaka">Dhaka</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Mymanshingh">Mymanshingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </td>
                                    <td>
                                        Journey date: <input type="date" name="journey_date">
                                    </td>
                                    <td>
                                        <input type="submit" value="Search">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>
