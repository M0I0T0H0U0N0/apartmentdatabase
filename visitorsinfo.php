<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <style>
        /* Styling for the page */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #1db762, #d7b253, #6dd5fa, #2980b9, #f7a6c4, #e9c6be, #f1d1d0, #e6c1cc);
            /* Replace the color values with your desired gradient colors */
            background-size: 800% 100%;
            animation: backgroundAnimation 30s linear infinite;
            margin: 0;
            padding: 0;
        }

        @keyframes backgroundAnimation {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 800% 0;
            }
        }

        /* Styling for the navbar */
        .navbar {
            background-color: #494949;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
        }

        /* Styling for the navbar links */
        .navbar a {
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Styling when hovering over the navbar links */
        .navbar a:hover {
            background-color: #333;
        }

        /* Styling for the security navbar link */
        .navbar .security-link {
            margin-right: 20px;
        }

        /* Styling for the login form container */
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for the login form labels */
        form label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        /* Styling for the login form input fields */
        form input[type="text"],
        form input[type="file"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        /* Styling for the login form submit button */
        form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5%;
        }

        /* Styling when hovering over the login form submit button */
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="security-link">
            <a href="secuinputpage.html">Security</a>
        </div>
        <a href="login.php">Logout</a>
    </div>

    <!-- Login Form -->
    <form action="visiprocess.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />
        </p>
        <p>
            <label for="phno">Ph.No:</label>
            <input type="text" id="phno" name="phno" />
        </p>

        <p>
            <label for="doorno">Door.No:</label>
            <input type="text" id="doorno" name="doorno" />
        </p>

        <p>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date" />
        </p>
        <p>
            <input type="submit" id="btn" name="login" value="Submit">
        </p>
    </form>
</body>

</html>