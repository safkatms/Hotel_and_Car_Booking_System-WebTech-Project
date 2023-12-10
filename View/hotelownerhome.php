<?php 
    require_once('../Controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../Asset/home.css">
<title>Document</title>
</head>
<body>
    <?php include_once('header.php');?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php')?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <H1>Welcome to StayDriveGo</H1>
            </fieldset>
            
        </div>
    </section>
    <?php include_once('footerpublic.php');?>
</body>
</html>