<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/searchingmodel.php';

$error_message = '';
if (isset($_GET['city'], $_GET['checkin'], $_GET['checkout'], $_GET['room'])) {
    $city = $_GET['city'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $room = $_GET['room'];

    if ($checkin == $checkout) {
        $error_message = "Insert different check-out date.";
    } else {
        $sortOrder = isset($_GET['sort']) ? $_GET['sort'] : '';
        $hotels = HotelSearch($city, $room, $checkin, $checkout, $sortOrder);
    }
} else {
    header('Location: userhome.php');
    exit;
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>StayDriveGo Booking</title>
    <script src="../Asset/userScript.js"></script>
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
                    <form action="" method="get" enctype=""  onsubmit="return hotelSearch();">
                        <fieldset>
                            <legend>MODIFY SEARCH</legend>
                            <table>
                                <tr>
                                    <td>City:
                                        <select name="city" id="city">
                                            <option value="" <?php if (!isset($_SESSION['city']) || $_SESSION['city'] == "") echo " selected"; ?>>Select a Location</option>
                                            <option value="Dhaka" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Dhaka") echo " selected"; ?>>Dhaka</option>
                                            <option value="Chittagong" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Chittagong") echo " selected"; ?>>Chittagong</option>
                                            <option value="Sylhet" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Sylhet") echo " selected"; ?>>Sylhet</option>
                                            <option value="Barisal" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Barisal") echo " selected"; ?>>Barisal</option>
                                            <option value="Khulna" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Khulna") echo " selected"; ?>>Khulna</option>
                                            <option value="Mymensingh" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Mymensingh") echo " selected"; ?>>Mymensingh</option>
                                            <option value="Rajshahi" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Rajshahi") echo " selected"; ?>>Rajshahi</option>
                                            <option value="Rangpur" <?php if (isset($_SESSION['city']) && $_SESSION['city'] == "Rangpur") echo " selected"; ?>>Rangpur</option>
                                        </select>

                                    </td>
                                    <td>
                                        Check in: <input type="date" name="checkin" id="checkin" min="<?= date('Y-m-d'); ?>" value="<?php if (isset($_SESSION['checkin'])) {
                                                                                                                                        echo $_SESSION['checkin'];
                                                                                                                                    } ?>">
                                    </td>
                                    <td>
                                        Check out: <input type="date" name="checkout" id="checkout" min="<?= date('Y-m-d'); ?>" value="<?php if (isset($_SESSION['checkout'])) {
                                                                                                                                            echo $_SESSION['checkout'];
                                                                                                                                        } ?>">
                                    </td>
                                    <td>Room:
                                        <select name="room" id="room">
                                            <option value="" <?php if (!isset($_SESSION['room']) || $_SESSION['room'] == "") echo " selected"; ?>>Select a Room</option>
                                            <option value="standard" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "standard") echo " selected"; ?>>Standard Room</option>
                                            <option value="deluxe" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "deluxe") echo " selected"; ?>>Deluxe Room</option>
                                            <option value="suite" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "suite") echo " selected"; ?>>Suite</option>
                                            <option value="single" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "single") echo " selected"; ?>>Single Room</option>
                                            <option value="double" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "double") echo " selected"; ?>>Double Room</option>
                                            <option value="twin" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "twin") echo " selected"; ?>>Twin Room</option>
                                            <option value="triple" <?php if (isset($_SESSION['room']) && $_SESSION['room'] == "triple") echo " selected"; ?>>Triple Room</option>
                                        </select>

                                    </td>
                                    <td>
                                        <input type="submit" value="Search">
                                    </td>
                                </tr>
                            </table>

                        </fieldset>
                    </form>
                    <fieldset>
                        Sort By: <select name="sort" id="sort" onchange="sortHotels()">
                            <option value="" selected>Default</option>
                            <option value="price_high_to_low">Price: High to Low</option>
                            <option value="price_low_to_high">Price: Low to High</option>
                        </select>
                    </fieldset>
                    <fieldset id="results">
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
                                            <a href="hotelbooking.php?id=<?= $hotels[$i]['RoomTypeID']  ?>"> <input type="button" value="Select"> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } elseif ($checkin == $checkout) {
                            echo $error_message;
                        } else { ?>
                            <p>No hotels found.</p>
                        <?php } ?>
                    </fieldset>


                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>