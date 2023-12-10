<?php
session_start();

if (!isset($_SESSION['user']['username'])) {
    header('Location: ../view/signin.php');
    exit();
}

if (isset($_POST['approve']) && $_POST['approve'] === 'Yes') {
    require_once('../model/db.php');

    $carId = $_POST['carid'] ?? '';

    if ($carId) {
        $con = getConnection();
        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $sqlUpdateCarBooking = "UPDATE carbooking SET Status = 'Cancelled' WHERE CarID = '$carId'";
        $updateResult = mysqli_query($con, $sqlUpdateCarBooking);

        if ($updateResult) {
            header('Location: ../view/carbooking.php?msg=cancellation_approved');
            exit();
        } else {
            header('Location: ../view/carbooking.php?message=cancellation_approval_failed');
            exit();
        }

    } else {
        header('Location: ../view/carbooking.php?message=invalid_car_id');
        exit();
    }
} else {
    $carId = $_POST['carid'] ?? '';
    header('Location: ../view/carbooking.php');
    exit();
}
?>
