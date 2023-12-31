<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sign up</title>
   <script src="../Asset/authScript.js"></script>
   <link rel="stylesheet" href="../Asset/common.css">
</head>
<body>
    <?php include_once('headerpublic.php');?>
    <section style="display: flex;justify-content: center;">
    <form method="post" action="../Controller/ownersignupcheck.php" enctype="" onsubmit="return ownerSignUp();">
        <fieldset style="width: 450px; ">
            <Table>
                <tr>
                    <th colspan="2"><h2>Sign Up</h2><br></th>
                </tr>
                <tr>
                    <td>Service:</td>
                    <td>
                        <input type="radio" name="Service" value="Hotel" id="Hotel">Hotel<input type="radio" name="Service" value="Car" id="Car">Car
                    </td>
                </tr>
                <tr>
                    <td>
                        Firstname:
                    </td>
                    <td>
                        <input type="text" name="Firstname" value="" id="Firstname"><br>
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
                        <input type="text" name="Lastname" value="" id="Lastname"><br>
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
                        <h6 id="mobile"></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth:
                    </td>
                    <td>
                        <input type="date" name="DOB" value="" id="DOB"><br>
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
                        <input type="radio" name="Gender" value="Male" id="Male">Male<input type="radio" name="Gender" value="Female" id="Female">Female<input type="radio" name="Gender" value="Others" id="Others">Others
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
                        <input type="password" name="Password" value="" id="Password"><br>
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
                        <input type="password" name="ConPassword" value="" id="ConPassword"><br>
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
                    <td >
                        <input type="checkbox" name="ShowPassword" onclick="showPassword()">Show Password<br>
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
                    <td >
                        <input type="submit" value="Sign up">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <a href="SignUp.html">Sign up as a User</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td >
                        <a href="signin.php"><input type="button" value="Sign in" ></a>
                    </td>
                </tr>
                
            </Table>
        </fieldset>
    </form>
    </section>
    <?php include_once('footerpublic.php');?>
</body>
</html>