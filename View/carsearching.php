<?php
require_once '../Model/searchingmodel.php'; // Make sure this contains the CarSearch function.

// Check if the form is submitted via GET
if (isset($_GET['pickup_location'], $_GET['pickup_date'], $_GET['dropoff_date'])) {
    // Capture the search criteria from the URL
    $pickup_location = $_GET['pickup_location'];
    $pickup_date = $_GET['pickup_date'];
    $dropoff_date = $_GET['dropoff_date'];

    // Check for same day or invalid dates
    if ($pickup_date == $dropoff_date) {
        $error_message = "Pick-up and drop-off dates cannot be the same.";
    } else {
        // Perform the search
        $cars = CarSearch($pickup_location, $pickup_date, $dropoff_date);
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
                    <?php if (!empty($cars)) { ?>
                        <table border="1">
                            <tr>
                                <th>Brand Name</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Location</th>
                                <th>Price Per Day</th>
                                <th>Actions</th>
                            </tr>

                            <?php for ($i = 0; $i < count($cars); $i++) { ?>
                                <tr>

                                    <td>
                                        <?= $cars[$i]['Barnd'] ?>
                                    </td>
                                    <td>
                                        <?= $cars[$i]['Model'] ?>
                                    </td>
                                    <td>
                                        <?= $cars[$i]['Year'] ?>
                                    </td>
                                    <td>
                                        <?= $cars[$i]['Location'] ?>
                                    </td>
                                    <td>
                                        <?= $cars[$i]['DailyRate'] ?>
                                    </td>
                                    <td>
                                        <a href="edit_user.php?id=<?= $cars[$i]['CarID'] ?>"> <input type="button" value="Select"> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } elseif ($pickup_date == $dropoff_date) {
                        echo $error_message;
                    } else { ?>
                        <p>No Car found.</p>
                    <?php } ?>

                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once 'footerpublic.php'; ?>
</body>

</html>