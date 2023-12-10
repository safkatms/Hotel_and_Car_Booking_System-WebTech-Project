<?php

require_once('../Controller/sessioncheck.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Asset/common.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex; justify-content: center;">
        <div style="width: 200px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <form action="../Controller/userchangepasswordcheck.php" method="post" enctype="">
                    <img src="../Asset/profilePic.jpg" alt="" height="150px" width="150px"><br>
                    <input type="file" name="" value=""><br><hr>
                    

                    <table>
                        <tr>
                            <td>
                                <input type="submit" value="Save">
                                <a href="account.php"><input type="button" value="Back"></a>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </form>


            </fieldset>

        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>