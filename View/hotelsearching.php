<?php
require_once '../Model/searchingmodel.php'; // Make sure this contains the HotelSearch function.

// Check if the form is submitted via GET
if (isset($_GET['city'], $_GET['checkin'], $_GET['checkout'], $_GET['room'])) {
    // Capture the search criteria from the URL
    $city = $_GET['city'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $room = $_GET['room'];
    if ($checkin == $checkout) {
        $error_message="Insert different check-out date.";
    } else {
    // Perform the search
    $hotels = HotelSearch($city,$room,$checkin,$checkout);
    }
} else {
    // Redirect back to search form if criteria are missing
    header('Location: userhome.php');
    exit;
}
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

                <section>
                    <form action="" method="get" enctype="">
                        <fieldset>
                            <legend>MODIFY SEARCH</legend>
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
                    <?php if (!empty($hotels)) { ?>
                        <table border="1" style="width: 100%;">
                            <tr>
                                <th>Hotel Name</th>
                                <th>City</th>
                                <th>Room Type</th>
                                <th>Available Rooms</th>
                                <th>Price Per Night</th>
                                <th>Actions</th>
                            </tr>

                            <?php for ($i = 0; $i < count($hotels); $i++) { ?>
                                <tr>
                                    
                                    <td>
                                        <?= $hotels[$i]['HotelName'] ?>
                                    </td>
                                    <td>
                                        <?= $hotels[$i]['City'] ?>
                                    </td>
                                    <td>
                                        <?= $hotels[$i]['TypeName'] ?>
                                    </td>
                                    <td>
                                        <?= $hotels[$i]['AvailableRooms'] ?>
                                    </td>
                                    <td>
                                        <?= $hotels[$i]['PricePerNight'] ?>
                                    </td>
                                    <td>
                                    <a href="edit_user.php?id=<?=$hotels[$i]['HotelID']?>"> <input type="button" value="Select"> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } elseif ($checkin == $checkout) {
                        echo $error_message;
                    } else { ?>
                        <p>No hotels found.</p>
                    <?php } ?>

                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>