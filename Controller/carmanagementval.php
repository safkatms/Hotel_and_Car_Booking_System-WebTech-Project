<?php
include_once('../model/ownermodel.php');
session_start();
$username = $_SESSION['user']['username'] ?? '';

$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$location = $_POST['location'];
$dailyRate = $_POST['dailyRate'];
$availability = isset($_POST['availability']) ? 'Available' : 'Not Available';

if (validateFormInputs($brand, $model, $year, $location, $dailyRate)) {
    $con = getConnection();
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO car_info (OwnerUsername, Brand, Model, Year, Location, DailyRate, AvailabilityStatus) 
            VALUES ('$username', '$brand', '$model', '$year', '$location', $dailyRate, '$availability')";

    if (mysqli_query($con, $sql)) {
        $message = "Car rental listing added successfully.";
    } else {
        $message = "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);

    header("Location: ../view/carmanagement.php?message=" . $message);
} else {
    header("Location: ../view/carmanagement.php?error=invalid_input");
}

function validateFormInputs($brand, $model, $year, $location, $dailyRate) {
    return !empty($brand) && !empty($model) && !empty($year) && !empty($location) && !empty($dailyRate);
}
?>
