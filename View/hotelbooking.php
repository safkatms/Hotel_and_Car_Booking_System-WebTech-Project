<?php
require_once '../controller/sessionCheck.php';
require_once '../Model/searchingmodel.php';
require_once '../Controller/hotelsearchcheck.php';

$hotels = [];
if (isset($_POST['city']) && isset($_POST['room'])) {
    $city = $_POST['city'];
    $room = $_POST['room'];
    $hotels = HotelSearch($city, $room, $checkin, $checkout);
}

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
                    <form action="../Controller/hotelsearchcheck.php" method="post" enctype="">
                        <fieldset>
                            <legend>BOOK HOTEL</legend>
                            <table>
                                <tr>
                                    <td>City:
                                        <select name="city">
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
                                        Check in: <input type="date" name="checkin" value="<?php if (isset($_COOKIE['checkin'])) {
                                                                                                echo $_COOKIE['checkin'];
                                                                                            } ?>">
                                    </td>
                                    <td>
                                        Check out: <input type="date" name="checkout" value="<?php if (isset($_COOKIE['checkout'])) {
                                                                                                    echo $_COOKIE['checkout'];
                                                                                                } ?>">
                                    </td>
                                    <td>Room:
                                        <select name="room">
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
                            <?php if (!empty($hotels)) : ?>
                                <table border="1">
                                    <tr>
                                        <th>Hotel ID</th>
                                        <th>Hotel Name</th>
                                        <th>City</th>
                                        <th>Room Type</th>
                                        <th>Available Rooms</th>
                                        <th>Price Per Night</th>
                                        <th>Actions</th>
                                    </tr>

                                    <?php foreach ($hotels as $hotel) : ?>
                                        <tr>
                                            <td><?= htmlspecialchars($hotel['HotelID']) ?></td>
                                            <td><?= htmlspecialchars($hotel['HotelName']) ?></td>
                                            <td><?= htmlspecialchars($hotel['City']) ?></td>
                                            <td><?= htmlspecialchars($hotel['TypeName']) ?></td>
                                            <td><?= htmlspecialchars($hotel['AvailableRooms']) ?></td>
                                            <td><?= htmlspecialchars($hotel['PricePerNight']) ?></td>
                                            <td>
                                                <a href="edit_user.php?id=<?= urlencode($hotel['HotelID']) ?>">EDIT</a> |
                                                <a href="delete_user.php?id=<?= urlencode($hotel['HotelID']) ?>" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php else : ?>
                                <p>No hotels found.</p>
                            <?php endif; ?>

                        </fieldset>
                    </form>
                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>