<?php
include_once('../model/ownermodel.php');

$carID = $_POST['CarID']; 
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$location = $_POST['location'];
$dailyRate = $_POST['dailyRate'];
$availability = isset($_POST['availability']) ? 'Available' : 'Not Available';

$con = getConnection();

if ($con === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE car_info SET Brand = '$brand', Model = '$model', Year = '$year', Location = '$location', DailyRate = '$dailyRate', AvailabilityStatus = '$availability' WHERE CarID = $carID"; // Updated variable names

if (mysqli_query($con, $sql)) {
    header('Location: ../view/listofcars.php?msg=update_success');
} else {
    header('Location: ../view/listofcars.php?msg=update_failed');
}

mysqli_close($con);
?>
