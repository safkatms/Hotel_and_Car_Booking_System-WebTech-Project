<?php
include_once('../model/ownermodel.php');
if (isset($_GET['id'])) {
    $carID = $_GET['id'];

    $con = getConnection();

    if ($con === false) {
        die("Error: Could not connect. " . mysqli_connect_error());
    }

    $sql = "DELETE FROM car_info WHERE CarID = $carID";

    if (mysqli_query($con, $sql)) {
        header('Location: ../view/listofcars.php?message=delete_success');
    } else {
        header('Location: ../view/listofcars.php?message=deletion_failed');
    }

    mysqli_close($con);
} else {
    echo "Invalid car ID";
}
?>
