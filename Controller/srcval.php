<?php
include_once('../model/ownermodel.php');
$con = getConnection();
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "SELECT * FROM usersinfo WHERE username = '$username'";
    $result = mysqli_query($con, $query);
    echo "<h2>User Details:</h2>";
    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        echo "<p>Username: " . $userData['username'] . "</p>";
        echo "<p>Email: " . $userData['email'] . "</p>";
        echo "<p>First Name: " . $userData['firstname'] . "</p>";
        
        echo "<form action='../controller/banuserval.php' method='post'>";
        echo "<input type='hidden' name='ban_user' value='" . $userData['username'] . "'>";
        echo "<button type='submit'>Ban User</button>";
        echo "</form>";
    } else {
        echo "<p>No user found with the username '$username'</p>";
    }
}

mysqli_close($con);
?>
