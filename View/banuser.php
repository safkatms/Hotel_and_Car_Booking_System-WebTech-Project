<?php
require_once "../model/db.php";

$conn = getConnection();
$fetchUsersQuery = "SELECT * FROM usersinfo";
$usersResult = mysqli_query($conn, $fetchUsersQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($usersResult)) : ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td>
                        <form action="../controller/banuserval.php" method="post">
                            <input type="hidden" name="ban_user" value="<?php echo $row['username']; ?>">
                            <button type="submit">Ban</button>
                        </form>

                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>