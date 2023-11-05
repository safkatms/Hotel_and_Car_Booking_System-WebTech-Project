<?php 
    
    require_once('../Controller/sessioncheck.php');
    require_once('../Model/usermodel.php');
    
    $usersinfo = getUserInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('header.php');?>
    <section style="display: flex;justify-content: center;">
        <div style="width: 350px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../Controller/usereditcheck.php" method="post" enctype="">
            <table>
                    <tr>
                        <td>
                            Firstname:
                        </td>
                        <td>
                            <input type="text" name="Firstname" value="<?php echo $usersinfo[0]['firstname']; ?>">
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lastname:
                        </td>
                        <td>
                        <input type="text" name="Lastname" value="<?php echo $usersinfo[0]['lastname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                        <input type="text" name="Username" value="<?php echo $usersinfo[0]['username']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                        <input type="text" name="Email" value="<?php echo $usersinfo[0]['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mobile:
                        </td>
                        <td>
                        <input type="text" name="Mobile" value="<?php echo $usersinfo[0]['mobile']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                        <?php echo $usersinfo[0]['dob']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender:
                        </td>
                        <td>
                        <?php echo $usersinfo[0]['gender']; ?>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="Save">
                        <a href="useraccount.php"><input type="button" value="Back"></a>
                    </td>
                    <td>
                     
                    </td>
                </tr>
                </table>
            </form>
                
                
            </fieldset>
            
        </div>
    </section>
    <?php include_once('footerpublic.php');?>
</body>
</html>
