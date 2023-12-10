<!DOCTYPE html>
<html lang="en">

<head>
    <title>Footer</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            background-color: white;
            /* Matching the header's background */
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        footer section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
        }

        footer h6 {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            margin: 0;
            color: #333;
            /* Dark color for readability */
        }

        footer div a {
            text-decoration: none;
            color: #007bff;
            /* Standard link color */
            margin: 0 10px;
        }

        footer div a:hover {
            text-decoration: underline;
            color: #0056b3;
            /* Darker shade on hover for interactivity */
        }
    </style>
</head>

<body>
    <footer>
        <section style="display: flex;">
            <div style=" width: 40%;">
                <p>Copyright © 2023 StayDriveGo.com™. All rights reserved.
                </p>
            </div>

            <div style="text-align: right; width: 60%;">
                <a href="about.php">About</a>|
                <a href="terms&conditions.php">Terms & Conditions</a>|
                <a href="faq.php">FAQ</a>|
                <a href="ownersignup.php">Sign up as Partner</a>
            </div>
        </section>
    </footer>
</body>

</html>