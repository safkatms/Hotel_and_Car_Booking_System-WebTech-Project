<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');

$hotel_info = getHotelInfo();
$room_info = getroomInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Asset/hotelScript.js"></script>
    <title>Manage Room</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>



        <div style="width: 80%; display: flex; height: auto;">

            <?php
            if (!empty($hotel_info)) {
            ?>


                <fieldset style="width:100%">
                    <form action="" method="post" enctype="" onsubmit="return validateroom();">
                        <h4>ADD ROOMS</h4>
                        <td>Room:
                            <select name="room" id="room">
                                <option value="standard">Standard Room</option>
                                <option value="deluxe">Deluxe Room</option>
                                <option value="suite">Suite</option>
                                <option value="single">Single Room</option>
                                <option value="double">Double Room</option>
                                <option value="twin">Twin Room</option>
                                <option value="triple">Triple Room</option>
                            </select>

                            <h5>Price Per Night</h5>

                            <input type="number" name="PricePerNight" id="PricePerNight" value="" min="1">


                            <h4>Total Rooms</h4>
                            <input type="number" name="TotalRooms" id="TotalRooms" value="" min="1">
                            <br><br><br>


                            <h4>Available Rooms</h4>
                            <input type="number" name="AvailableRooms" id="AvailableRooms" value="" min="1">
                            <br><br><br>
                            <input type="submit" value="Submit">
                    </form>
                </fieldset>
                <fieldset style="width:100%" id="results">
                    <?php if (!empty($room_info)) { ?>
                        <?php for ($i = 0; $i < count($room_info); $i++) { ?>
                            <fieldset>
                                <ul>
                                    <li>Room: <?= $room_info[$i]['TypeName'] ?></li>
                                    <li>Price Per Night: <?= $room_info[$i]['PricePerNight'] ?></li>
                                    <li>Total Rooms: <?= $room_info[$i]['TotalRooms'] ?></li>
                                    <li>Available Rooms: <?= $room_info[$i]['AvailableRooms'] ?></li>
                                    <!-- <li>ID: <?= $room_info[$i]['RoomTypeID'] ?></li> -->

                                    <a href="editroom.php?id=<?= $room_info[$i]['RoomTypeID'] ?>"> EDIT </a>
                                </ul>
                            </fieldset>
                        <?php } ?>
                    <?php } else {
                        echo 'No Room Added Yet.';
                    } ?>
                </fieldset>

            <?php } else {
                echo "Add Hotel First.";
            } ?>

        </div>


    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>