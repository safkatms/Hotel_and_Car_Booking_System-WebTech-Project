<?php
require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');


$roomid = $_GET['id'];
$room_info = getRoom($roomid);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <script src="../Asset/hotelScript.js"></script>
   <link rel="stylesheet" type="text/css" href="../Asset/home.css">
    <title>Edit Room</title>
</head>

<body>
    <?php include_once('header.php'); ?>

    <section style="display: flex; justify-content: center;">
    <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 100%; display: flex; height: auto;">

            <fieldset style="width: 100%;">
            <form action="../Controller/editroomcheck.php" method="post" onsubmit="return editroom();">
                    <table>
                        <tr>
                            <td>Room:</td>
                            <td>
                                <input type="hidden" name="id" value="<?= $room_info['RoomTypeID'] ?>" />


                                <select name="room" id="room">
                                    <option value="standard" <?= ($room_info['TypeName'] === 'standard') ? 'selected' : '' ?>>Standard Room</option>
                                    <option value="deluxe" <?= ($room_info['TypeName'] === 'deluxe') ? 'selected' : '' ?>>Deluxe Room</option>
                                    <option value="suite" <?= ($room_info['TypeName'] === 'suite') ? 'selected' : '' ?>>Suite</option>
                                    <option value="single" <?= ($room_info['TypeName'] === 'single') ? 'selected' : '' ?>>Single Room</option>
                                    <option value="double" <?= ($room_info['TypeName'] === 'double') ? 'selected' : '' ?>>Double Room</option>
                                    <option value="twin" <?= ($room_info['TypeName'] === 'twin') ? 'selected' : '' ?>>Twin Room</option>
                                    <option value="triple" <?= ($room_info['TypeName'] === 'triple') ? 'selected' : '' ?>>Triple Room</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>Price Per Night:</td>
                            <td><input type="number" name="PricePerNight" id="PricePerNight" value="<?= $room_info['PricePerNight'] ?>" min="1"/></td>
                        </tr>
                        <tr>
                            <td>Total Room:</td>
                            <td><input type="number" name="TotalRooms" id="TotalRooms" value="<?= $room_info['TotalRooms'] ?>" min="1"/></td>
                        </tr>
                        <tr>
                            <td>Available Room:</td>
                            <td><input type="number" name="AvailableRooms" id="AvailableRooms" value="<?= $room_info['AvailableRooms']  ?>" min="1" /></td>
                        </tr>
                    </table>
                    <input type="Submit" value="Save">
                </form>
            </fieldset>
        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>