<?php
$msg = $_GET['msg'] ?? '';

if ($msg === 'update_success') {
    echo "<p>Car info edited successfully.</p>";
} else if ($msg === 'update_failed') {
    echo "<p>Car info edit failed.</p>";
}

$message = $_GET['message'] ?? '';

if ($message === 'delete_success') {
    echo "<p>Car info deleted successfully.</p>";
} else if ($message === 'deletion_failed') {
    echo "<p>Car info deletion failed.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listofcarsstyle.css">
    <title>List of Cars</title>
</head>
<?php include_once('../view/header.php'); ?>

<body>
    <fieldset>
        <legend>Your Car Rentals</legend>
        <ul>
            <?php
            $con = getConnection(); 
            if ($con === false) {
                die("Error: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM car_info"; 
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>Username:</strong> " . $row['OwnerUsername'] . "<br>";
                echo "<strong>Car Brand:</strong> " . $row['Brand'] . "<br>";
                echo "<strong>Car Model:</strong> " . $row['Model'] . "<br>";
                echo "<strong>Year:</strong> " . $row['Year'] . "<br>";
                echo "<strong>Location:</strong> " . $row['Location'] . "<br>";
                echo "<strong>Price per Day:</strong> $" . $row['DailyRate'] . "<br>";
                echo "<strong>Availability:</strong> " . ($row['AvailabilityStatus'] === 'Available' ? "Available" : "Not Available") . "<br>";
                echo "<a href='../view/edit_car.php?id=" . $row['CarID'] . "'>Edit</a> | ";
                echo "<a href='../controller/delete_car.php?id=" . $row['CarID'] . "'>Delete</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>
