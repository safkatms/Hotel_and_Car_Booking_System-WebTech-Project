<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/usermodel.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex; justify-content: center;">
        <div style="width: 450px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <table>
                    <tr>
                        <td>
                            Current Password:
                        </td>
                        <td>
                            <input type="text" name="" value="">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            New Password:
                        </td>
                        <td>
                            <input type="text" name="" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm New Password:
                        </td>
                        <td>
                            <input type="text" name="" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="useraccount.php"><input type="submit" value="Save"></a>
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>

            </fieldset>

        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>