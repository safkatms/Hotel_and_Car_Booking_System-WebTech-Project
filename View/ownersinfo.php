<?php

require_once('../Model/adminmodel.php');

$uname = $_GET['uname'];
$data = getOwnerInfo($uname);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Manage Owner</title>
    <script src="../Asset/adminScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">

</head>

<body>

    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">



            <fieldset>


                <form action="../Controller/ownerbancheck.php" method="post" enctype="" onsubmit="return validateBan()">

                    <h1> Owner Information</h1>

                    <table border="1">
                        <tr>


                        <tr>
                            <td>
                                First Name: <?php echo $data[0]['firstname']; ?>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Last Name:<?php echo $data[0]['firstname']; ?>
                            </td>


                        </tr>

                        <tr>
                            <td>
                                Username:<?php echo $data[0]['username']; ?>

                        <tr>

                            <td>E-mail:<?php echo $data[0]['email']; ?>
                        </tr>
                        <tr>
                            <td>Mobile:<?php echo $data[0]['mobile']; ?>
                        </tr>
                        <tr>
                            <td>Date Of Birth:<?php echo $data[0]['dob']; ?>
                        </tr>
                        <tr>
                            <td> Gender:<?php echo $data[0]['gender']; ?>
                        </tr>
                        <tr>
                            <td>Service:<?php echo $data[0]['usertype']; ?>
                        </tr>
                    </table>
                    <h1>Status</h1>
                    <ul>
                        <input type="hidden" name="username" id="username" value="<?=$data[0]['username']; ?>">
                        <input type="radio" name="banstatus" id="ban" value="1" <?php if (isset($data[0]['banstatus']) && $data[0]['banstatus'] == 1) echo 'checked'; ?>> Ban
                        <input type="radio" name="banstatus" id="unban" value="0" <?php if (isset($data[0]['banstatus']) && $data[0]['banstatus'] == 0) echo 'checked'; ?>> Unban
                    </ul>

                    </ul>
                    <input type="submit" value="Submit">

                </form>

            </fieldset>






        </div>








    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>