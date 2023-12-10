<?php require_once('../Controller/sessioncheck.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Usermenu</title>
</head>

<body>
    <fieldset style="width: 100%;">
        <?php if ($_SESSION['usertype'] == 'User') { ?>
            <ul>
                <li><a href="userhome.php">Home</a></li>
                <li><a href="account.php">Account</a></li>
                <li><a href="notification.php">Notification</a></li>
                <li><a href="bookinghistory.php">History</a></li>
                <li><a href="../Controller/logout.php">Logout</a></li>
            </ul>
        <?php } else if ($_SESSION['usertype'] == 'Hotel') { ?>
            <ul>
                <li><a href="hotelownerhome.php">Home</a></li>
                <li><a href="managehotel.php">Manage Hotel</a></li>
                <li><a href="manageroom.php">Manage Room</a></li>
                <li><a href="hotelmanagebooking.php">Manage Booking</a></li>
                <li><a href="account.php">Account</a></li>

                <li><a href="notification.php">Notification</a></li>
                <li><a href="../Controller/logout.php">Logout</a></li>
            </ul>
        <?php } else if ($_SESSION['usertype'] == 'Admin') { ?>
            <ul>
                <li><a href="adminhome.php">Home</a></li>
                <li><a href="manageuser.php">Manage User</a></li>
                <li><a href="manageowner.php">Manage Owner</a></li>
                <li><a href="dealsandpromotion.php">Add Deals and Promotion</a></li>

                <li><a href="../Controller/logout.php">Logout</a></li>
            </ul>
        <?php } ?>
    </fieldset>
</body>

</html>