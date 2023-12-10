<?php
include_once('../model/db.php');

$carIdToApprove = $_POST['approve'];

$con = getConnection();

$queryCarBooking = "UPDATE carbooking SET Status = 'Confirmed' WHERE CarID = '$carIdToApprove' AND Status = 'pending'";
$resultCarBooking = mysqli_query($con, $queryCarBooking);

$queryUpdateAvailability = "UPDATE car_info SET AvailabilityStatus = 'Not Available' WHERE CarID = '$carIdToApprove'";
$resultUpdateAvailability = mysqli_query($con, $queryUpdateAvailability);

mysqli_close($con);

if ($resultCarBooking && $resultUpdateAvailability) {
    header('Location: ../view/carbooking.php?message=Car booking request approved successfully.');
    exit();
} else {
    header('Location: ../view/carbooking.php?message=Failed to approve car booking request.');
    exit();
}
?>
