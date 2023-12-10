<?php
require_once '../Controller/sessioncheck.php';
?>


<html >

<head>
    <title>StayDriveGo Booking</title>
    <script src="../Asset/userScript.js"></script></script>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">

</head>

<body>
    <?php include_once 'header.php'; ?>
    <section style="display: flex;">
        <div class="menu" style="width: 20%; display: flex; height: auto;">
            <?php include_once 'menu.php'; ?>
        </div>
        <div class="content" style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <section>
                    <h1>Welcome to StayDriveGo</h1>
                </section>
                <section>
                    <form action="hotelsearching.php" method="get" enctype="" onsubmit="return hotelSearch();">
                        <fieldset>
                            <legend>BOOK HOTEL</legend>
                            <table>
                                <tr>
                                    <td>City:
                                        <select name="city" id="city">
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
                                        Check in: <input type="date" name="checkin" id="checkin" min="<?= date('Y-m-d'); ?>" value="" >
                                    </td>
                                    <td>
                                        Check out: <input type="date" name="checkout" id="checkout" min="<?= date('Y-m-d'); ?>" value="" >
                                    </td>
                                    <td>Room:
                                        <select name="room" id="room">
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
                                        <input type="submit" value="Search" id="button">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </section>
                <!-- Car Booking Form -->
                <section>
                    <form action="carsearching.php" method="get" enctype="" onsubmit="return carSearch();">
                        <fieldset>
                            <legend>BOOK CAR</legend>
                            <table>
                                <tr>
                                    <td>Pick-up location:
                                        <select name="pickup_location" id="pickup_location">
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
                                        Pick-up date: <input type="date" name="pickup_date" id="pickup_date" min="<?= date('Y-m-d'); ?>" value="" >
                                    </td>
                                    <td>
                                        Drop-off date: <input type="date" name="dropoff_date" id="dropoff_date" min="<?= date('Y-m-d'); ?>" value="" >
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
