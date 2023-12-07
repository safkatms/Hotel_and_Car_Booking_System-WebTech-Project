<?php 
    
    require_once('../Controller/sessioncheck.php');
    require_once('../Model/usermodel.php');
    
    $usersinfo = getUserInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
   <script src="../Asset/profileScript.js"></script>
   <script src="../Asset/authScript.js"></script>
</head>
<body>
    <?php include_once('header.php');?>
    <section style="display: flex;justify-content: center;">
        <div style="width: 350px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../Controller/usereditcheck.php" method="post" enctype=""  onsubmit="return editProfile();">
            <table>
                    <tr>
                        <td>
                            Firstname:
                        </td>
                        <td>
                            <input type="text" name="Firstname" id="Firstname" value="<?php echo $usersinfo[0]['firstname']; ?>">
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id="fname"></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lastname:
                        </td>
                        <td>
                        <input type="text" name="Lastname" id="Lastname" value="<?php echo $usersinfo[0]['lastname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id="lname"></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                        <input type="text" name="Username" id="Username" value="<?php echo $usersinfo[0]['username']; ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id=""></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                        <input type="text" name="Email" id="Email" value="<?php echo $usersinfo[0]['email']; ?>" onblur="checkAvailability()">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id="eid"></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mobile:
                        </td>
                        <td>
                        <input type="text" name="Mobile" id="Mobile" value="<?php echo $usersinfo[0]['mobile']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id="mobile"></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                        <input type="date" name="" id="" value="<?php echo $usersinfo[0]['dob']; ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <h6 id="dob"></h6>
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
                        </td>
                        <td>
                            <h6 id="gender"></h6>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="Save">
                        
                    </td>
                    <td>
                    <a href="useraccount.php"><input type="button" value="Back"></a>
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
