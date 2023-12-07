<!DOCTYPE html>
<html lang="en">

<head>
   <title>Sign up</title>
   <script src="../Asset/authScript.js"></script>
</head>

<body>
    <?php include_once('headerpublic.php');?>
    <section style="display: flex;justify-content: center;">
    <form method="post" action="../Controller/usersignupcheck.php" enctype="" onsubmit="return userSignUp();">
        
        <fieldset style="width: 350px; ">
            <Table>
                <tr>
                    <th colspan="2">
                        <h2>Sign Up</h2><br>
                    </th>
                </tr>
                <tr>
                    <td>
                        Firstname:
                    </td>
                    <td>
                        <input type="text" name="Firstname" value="" id="Firstname">
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
                        <input type="text" name="Lastname" value="" id="Lastname">
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
                        <input type="text" name="Username" value="" id="Username" onblur="checkAvailability()">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <h6 id="uid"></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="Email" value="" id="Email" onblur="checkAvailability()">
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
                        <input type="text" name="Mobile" value="" id="Mobile">
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <h6 id="m"></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth:
                    </td>
                    <td>
                        <input type="date" name="DOB" value="" id="DOB">
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
                        <input type="radio" name="Gender" value="Male" id="Male">Male
                        <input type="radio" name="Gender" value="Female" id="Female">Female
                        <input type="radio" name="Gender" value="Others" id="Others">Others

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
                        Password:
                    </td>
                    <td>
                        <input type="password" name="Password" value="" id="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <h6 id="pass"></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name="ConPassword" value="" id="ConPassword">
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <h6 id="cpass"></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="ShowPassword" value="" id="ShowPassword" onclick="showPassword()">Show Password
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="Terms&Condition" id="Terms&Condition"> I agree with the <a href="Terms&Conditions.html">terms and conditions</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="reset" value="Clear">
                    </td>
                    <td>
                        <input type="submit" value="Sign up" >
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <a href="SignUpAsPartner.html">Sign up as a Partner</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="signin.php"><input type="button" value="Sign in"></a>
                    </td>
                </tr>

            </Table>
            
        </fieldset>
    </form>
        </section>
        
    <?php include_once('footerpublic.php');?>
</body>

</html>