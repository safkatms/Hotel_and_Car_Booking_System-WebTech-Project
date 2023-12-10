<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/editcarstyle.css">
    <title>Edit Car</title>
</head>

<?php include_once('../view/header.php'); ?>

<body>
    <fieldset>
        <legend>Edit Car Details</legend>

        <?php
        $CarID = $_GET['id'];
        $con = getConnection();

        if ($con === false) {
            die("Error: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM car_info WHERE CarID = $CarID";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $car = mysqli_fetch_assoc($result);
        ?>

            <form action="../controller/update_car.php" method="POST">
                <input type="hidden" name="CarID" value="<?php echo $car['CarID']; ?>">
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" value="<?php echo $car['Brand']; ?>"><br><br>

                <label for="model">Model:</label>
                <input type="text" id="model" name="model" value="<?php echo $car['Model']; ?>"><br><br>

                <label for="year">Year:</label>
                <input type="text" id="year" name="year" value="<?php echo $car['Year']; ?>"><br><br>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" value="<?php echo $car['Location']; ?>"><br><br>

                <label for="dailyRate">Price per Day:</label>
                <input type="text" id="dailyRate" name="dailyRate" value="<?php echo $car['DailyRate']; ?>"><br><br>

                <label for="availability">Availability:</label>
                <input type="checkbox" id="availability" name="availability" <?php if ($car['AvailabilityStatus']) echo "checked"; ?>><br><br>

                <input type="submit" value="Submit">
            </form>

        <?php
        } else {
            echo "Car details not found.";
        }

        mysqli_close($con);
        ?>

    </fieldset>

    <?php include_once('../view/footerpublic.php'); ?>

</body>

</html>
