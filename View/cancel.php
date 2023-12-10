<?php
include_once('../view/header.php');
include_once('../model/ownermodel.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cancelstyle.css">
    <title>Cancel Car</title>
</head>


<body>
    <fieldset>
        <legend>Car Details</legend>
        <?php
        $carId = $_GET['id'] ?? '';
        if (!$carId) {
            echo "<p>No car selected.</p>";
        } else {
            $con = getConnection();
            if ($con === false) {
                die("Error: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM carbooking WHERE CarID = '$carId'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<p><strong>Username:</strong> " . $row['Username'] . "</p>";
                echo "<p><strong>Fullname:</strong> " . $row['Fullname'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['Email'] . "</p>";
                echo "<p><strong>Mobile:</strong> " . $row['Mobile'] . "</p>";
                echo "<p><strong>OwnerUsername:</strong> " . $row['OwnerUsername'] . "</p>";
                echo "<p><strong>CarID:</strong> " . $row['CarID'] . "</p>";
                echo "<p><strong>Brand:</strong> " . $row['Brand'] . "</p>";
                echo "<p><strong>Model:</strong> " . $row['Model'] . "</p>";
                echo "<p><strong>StartDate:</strong> " . $row['StartDate'] . "</p>";
                echo "<p><strong>EndDate:</strong> " . $row['EndDate'] . "</p>";
                echo "<p><strong>Location:</strong> " . $row['Location'] . "</p>";
                echo "<p><strong>TotalPrice:</strong> " . $row['TotalPrice'] . "</p>";
                echo "<p><strong>Status:</strong> " . $row['Status'] . "</p>";

                if ($row['Status'] === 'Confirmed') {
                    echo "<form action='../controller/cancelval.php' method='post'>";
                    echo "<input type='hidden' name='carid' value='" . $row['CarID'] . "'>";
                    echo "<input type='submit' name='cancel' value='Yes'>";
                    echo "</form>";
                    echo "<a href='../view/carbooking.php'>No</a>";
                } else {
                    echo "<p>Sorry, the booking cannot be canceled as it is not confirmed.</p>";
                    echo "<a href='../view/carbooking.php'>Back</a>";
                }
            } else {
                echo "<p>No car booking found.</p>";
                echo "<a href='../view/carbooking.php'>Back</a>";
            }

            mysqli_close($con);
        }
        ?>
    </fieldset>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>
