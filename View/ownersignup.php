<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <?php include_once('headerpublic.php');?>
    <section style="display: flex;justify-content: center;">
    <form method="post" action="../Controller/ownersignupcheck.php" enctype="">
        <fieldset style="width: 350px; ">
            <Table>
                <tr>
                    <th colspan="2"><h2>Sign Up</h2><br></th>
                </tr>
                <tr>
                    <td>Service:</td>
                    <td>
                        <input type="radio" name="Service" value="hotel">Hotel<input type="radio" name="Service" value="car">Car<input type="radio" name="Service" value="bus">Bus 
                    </td>
                </tr>
                <tr>
                    <td>
                        Firstname:
                    </td>
                    <td>
                        <input type="text" name="Firstname" value=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lastname:
                    </td>
                    <td>
                        <input type="text" name="Lastname" value=""><br>
                    </td>
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
                        Email:
                    </td>
                    <td>
                        <input type="email" name="Email" value=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile:
                    </td>
                    <td>
                        
                        <input type="number" name="Mobile" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth:
                    </td>
                    <td>
                        <input type="date" name="DOB" value=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <input type="radio" name="Gender" value="Male">Male<input type="radio" name="Gender" value="Female">Female<input type="radio" name="Gender" value="Others">Others
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
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name="ConPassword" value=""><br>
                    </td>
                </tr>
                <tr>
                    <td >
                        <input type="checkbox" name="ShowPassword" value="">Show Password<br>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                       <input type="checkbox" name="Terms&Condition" id=""> I agree with the <a href="Terms&Conditions.html">terms and conditions</a>
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
                        <a href="SignIn.html"><input type="button" value="Sign in"></a>
                    </td>
                </tr>
                
            </Table>
        </fieldset>
    </form>
    </section>
    <?php include_once('footerpublic.php');?>
</body>
</html>