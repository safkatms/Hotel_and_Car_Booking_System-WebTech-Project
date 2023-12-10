<!DOCTYPE html>
<html lang="en">

<head>
     <title>Header</title>
     <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #f4f4f4;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); 
        }

        header section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:  white;
        }

        header h3 {
            font-family: 'Open Sans', sans-serif;
            font-size: 24px;
            margin: 0;
        }

        header div a {
            text-decoration: none;
            color: #007bff;
            margin: 0 10px;
        }

        header div a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <section style="display: flex;">
            <div style="width: 40%;">
                <h3 style="font-family: fantasy;">StayDriveGo.com</h3>
            </div>
            <div style="width: 60%; text-align: right;">
                <a href="home.php">Home</a>|
                <a href="signin.php">Sign in</a>|
                <a href="usersignup.php">Sign up</a>|
                <a href="ownersignup.php">Sign up as Partner</a>
            </div>
        
    </header>
</body>

</html>