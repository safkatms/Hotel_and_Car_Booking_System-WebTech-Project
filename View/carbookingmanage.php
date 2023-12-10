<?php
include('../view/header.php');
require_once('../model/db.php');

if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carbookingstyle.css">
    <title>Document</title>
</head>

<body>
    <h1>Booking Management</h1>

    <fieldset>
        <legend>Car Booking Requests</legend>
        <form action="../controller/approvecar.php" method="POST">
            <ul>
                <?php
                $con = getConnection();

                if (!$con) {
                    die("Database connection failed: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM carbooking WHERE status = 'pending'";

                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<strong>Username:</strong> " . $row['Username'] . "<br>";
                    echo "<strong>Fullname:</strong> " . $row['Fullname'] . "<br>";
                    echo "<strong>Email:</strong> " . $row['Email'] . "<br>";
                    echo "<strong>Mobile:</strong> " . $row['Mobile'] . "<br>";
                    echo "<strong>OwnerUsername:</strong> " . $row['OwnerUsername'] . "<br>";
                    echo "<strong>CarID:</strong> " . $row['CarID'] . "<br>";
                    echo "<strong>Brand:</strong> " . $row['Brand'] . "<br>";
                    echo "<strong>Model:</strong> " . $row['Model'] . "<br>";
                    echo "<strong>StartDate:</strong> " . $row['StartDate'] . "<br>";
                    echo "<strong>EndDate:</strong> " . $row['EndDate'] . "<br>";
                    echo "<strong>Location:</strong> " . $row['Location'] . "<br>";
                    echo "<strong>TotalPrice:</strong> " . $row['TotalPrice'] . "<br>";
                    echo "<strong>Status:</strong> " . $row['Status'] . "<br>";
                    echo "<button type='submit' name='approve' value='" . $row['CarID'] . "'>Approve</button>";
                    echo "</li>";
                }

                mysqli_close($con);
                ?>
            </ul>
        </form>
    </fieldset><br><br>


    <fieldset>
        <legend>Confirmed Car Bookings</legend>
        <ul>
            <?php
            $con = getConnection();

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM carbooking WHERE Status = 'confirmed'";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>Username:</strong> " . $row['Username'] . "<br>";
                echo "<strong>Fullname:</strong> " . $row['Fullname'] . "<br>";
                echo "<strong>Email:</strong> " . $row['Email'] . "<br>";
                echo "<strong>Mobile:</strong> " . $row['Mobile'] . "<br>";
                echo "<strong>OwnerUsername:</strong> " . $row['OwnerUsername'] . "<br>";
                echo "<strong>CarID:</strong> " . $row['CarID'] . "<br>";
                echo "<strong>Brand:</strong> " . $row['Brand'] . "<br>";
                echo "<strong>Model:</strong> " . $row['Model'] . "<br>";
                echo "<strong>StartDate:</strong> " . $row['StartDate'] . "<br>";
                echo "<strong>EndDate:</strong> " . $row['EndDate'] . "<br>";
                echo "<strong>Location:</strong> " . $row['Location'] . "<br>";
                echo "<strong>TotalPrice:</strong> " . $row['TotalPrice'] . "<br>";
                echo "<strong>Status:</strong> " . $row['Status'] . "<br>";
                echo "<a href='cancel.php?id=" . $row['CarID'] . "'>Cancel Booking</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset><br><br>

    <fieldset>
        <legend>Cancellation Requests</legend>
        <ul>
            <?php
            $con = getConnection();

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM carbooking WHERE Status = 'cancel?'";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>Username:</strong> " . $row['Username'] . "<br>";
                echo "<strong>Fullname:</strong> " . $row['Fullname'] . "<br>";
                echo "<strong>Email:</strong> " . $row['Email'] . "<br>";
                echo "<strong>Mobile:</strong> " . $row['Mobile'] . "<br>";
                echo "<strong>OwnerUsername:</strong> " . $row['OwnerUsername'] . "<br>";
                echo "<strong>CarID:</strong> " . $row['CarID'] . "<br>";
                echo "<strong>Brand:</strong> " . $row['Brand'] . "<br>";
                echo "<strong>Model:</strong> " . $row['Model'] . "<br>";
                echo "<strong>StartDate:</strong> " . $row['StartDate'] . "<br>";
                echo "<strong>EndDate:</strong> " . $row['EndDate'] . "<br>";
                echo "<strong>Location:</strong> " . $row['Location'] . "<br>";
                echo "<strong>TotalPrice:</strong> " . $row['TotalPrice'] . "<br>";
                echo "<strong>Status:</strong> " . $row['Status'] . "<br>";
                echo "<a href='aprvcncl.php?id=" . $row['CarID'] . "'>Approve Cancellation</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset>


    <?php
    if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    }
    ?>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>
