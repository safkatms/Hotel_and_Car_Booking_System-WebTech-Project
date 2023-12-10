<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bannedusersstyle.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include_once('../model/ownermodel.php');
$con = getConnection();
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM signin_info WHERE banstatus = 1";
$result = mysqli_query($con, $query);
include_once('../view/headerban.php');

if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>List of Banned Users:</h2>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>";
        echo "<form action='../controller/unbanuserval.php' method='post'>";
        echo "<input type='hidden' name='unban_user' value='" . $row['username'] . "'>";
        echo "<button type='submit'>Unban</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p align='center'>No banned users found</p>";
}

echo "<a href='../view/search.php'> Back</a>"; 
include_once('../view/footerpublic.php');
mysqli_close($con);
?>
