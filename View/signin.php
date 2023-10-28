<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>
    <?php include_once('headerpublic.php');?>

    <section style="display: flex; justify-content: center;">

            <form method="post" action="../Controller/signincheck.php" enctype="">
                <fieldset>
                <Table>
                    <tr>
                        <th colspan="2"><h2>Sign in</h2><br></th>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="text" name="Username" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="Password" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td >
                            <input type="checkbox" name="ShowPassword" value="">Show Password<br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td >
                            <input type="submit" value="Sign in">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td >
                            <a href="usersignup.php"><input type="button" value="Sign up"></a>
                        </td>
                    </tr>
                </Table>
                </fieldset>

            </form>
        
    </section>
    <?php include_once('footerpublic.php');?>
 
</body>
</html>