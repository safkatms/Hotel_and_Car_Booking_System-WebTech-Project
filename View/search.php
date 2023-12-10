<!DOCTYPE html>
<html>
<head>
    <title>Search Username</title>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/searchstyle.css">
</head>
<?php include_once('../view/header.php'); ?>
<body>
<table border="1" align="center">
        <tr>
            <td>
        <form id="usernameForm">
            <label for="username">Enter Username:</label><br>
            </td>
            </tr>
            <tr>
                <td>
            <input type="text" id="username" name="username"><br><br>
            </td>
            </tr>
            <tr>
                <td>
            <button type="button" id="submit" onclick="fetchAndDisplayUsername()">Search</button><br>
            <a class="link" href="../controller/logout.php">Logout</a>
        </form>
        <div id="results"></div>
        <a href="../view/bannedusers.php">Banned Users List</a>
        </td>
        </tr>
        </table>
        <?php include_once('../view/footerpublic.php'); ?>
        <?php if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    }
    ?>
</body>
</html>
