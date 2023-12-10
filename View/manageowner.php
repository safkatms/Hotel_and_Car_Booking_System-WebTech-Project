<?php

require_once('../Model/adminmodel.php');

$hotelownersinfo = gethotelOwnerInfo();
$carownersinfo = getcarOwnerInfo();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Asset/adminScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../Asset/home.css">
    <title>Manage Owner</title>
</head>

<body>

    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">



            <?php
            if (!empty($hotelownersinfo)) {
            ?>
                <fieldset style="width: 100%;">
                    <H1>Manage Owners</H1>
                    <fieldset style="width: 90%;">
                        <legend>Hotel Owner</legend>
                        <?php if (!empty($hotelownersinfo)) { ?>
                            <table border="1">
                                <tr>


                                    <th>
                                        First Name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>

                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Mobile
                                    </th>
                                    <th>
                                        Date Of Birth
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Service
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>

                                <?php for ($i = 0; $i < count($hotelownersinfo); $i++) { ?>
                                    <tr>
                                        <td><?= $hotelownersinfo[$i]['firstname'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['lastname'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['username'] ?> <input type="hidden" id="uname" value="<?= $hotelownersinfo[$i]['username'] ?>"> </td>
                                        <td><?= $hotelownersinfo[$i]['email'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['mobile'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['dob'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['gender'] ?></td>
                                        <td><?= $hotelownersinfo[$i]['usertype'] ?></td>
                                        <td> <?php
                                                if ($hotelownersinfo[$i]['banstatus'] == 0) {
                                                    echo "Not Banned";
                                                } else {
                                                    echo "Banned";
                                                }
                                                ?>
                                        <td>
                                            <a href="ownersinfo.php?uname=<?= $hotelownersinfo[$i]['username']  ?>"> <input type="button" value="Select"> </a>
                                        </td>
                                    </tr>
                                <?php } ?>


                            </table>
                    <?php } else {
                            echo 'No Hotel Owners';
                        }
                    } ?>
                    </fieldset>


                    <fieldset style="width: 90%">


                        <?php
                        if (!empty($carownersinfo)) {
                        ?>



                            <legend>Car Owner</legend>
                            <?php if (!empty($carownersinfo)) { ?>
                                <table border="1">
                                    <tr>


                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>

                                        <th>
                                            Username
                                        </th>
                                        <th>
                                            E-mail
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Date Of Birth
                                        </th>
                                        <th>
                                            Gender
                                        </th>
                                        <th>
                                            Service
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>

                                    <?php for ($i = 0; $i < count($carownersinfo); $i++) { ?>
                                        <tr>
                                            <td><?= $carownersinfo[$i]['firstname'] ?></td>
                                            <td><?= $carownersinfo[$i]['lastname'] ?></td>
                                            <td><?= $carownersinfo[$i]['username'] ?></td>
                                            <td><?= $carownersinfo[$i]['email'] ?></td>
                                            <td><?= $carownersinfo[$i]['mobile'] ?></td>
                                            <td><?= $carownersinfo[$i]['dob'] ?></td>
                                            <td><?= $carownersinfo[$i]['gender'] ?></td>
                                            <td><?= $carownersinfo[$i]['usertype'] ?></td>
                                            <td> <?php
                                                    if ($carownersinfo[$i]['banstatus'] == 0) {
                                                        echo "Not Banned";
                                                    } else {
                                                        echo "Banned";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                            <a href="ownersinfo.php?uname=<?= $carownersinfo[$i]['username']  ?>"> <input type="button" value="Select"> </a>
                                            </td>
                                        </tr>
                                    <?php } ?>


                                </table>
                        <?php } else {
                                echo 'No Car Owners';
                            }
                        } ?>
                    </fieldset>


                </fieldset>


        </div>


        </div>





    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>