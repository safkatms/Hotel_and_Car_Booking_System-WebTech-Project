<?php include_once('../Model/usermodel.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <header>
        <section style="display: flex;">
            <div style="width: 40%;">
                <h3 style="font-family: fantasy;">StayDriveGo.com</h3>
            </div>
            <div style="width: 60%; text-align: right;">
                <a href="userhome.php">Home</a>|
                Logged in as <a href="useraccount.php"><?php  if(isset($_COOKIE['firstname'])) {echo $_COOKIE['firstname'];  }?></a> |
                <a href="../Controller/logout.php">Logout</a>
            </div>
        </section>
    </header>
</body>

</html>