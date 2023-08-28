<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow: hidden;
            /* Hide the horizontal scrollbar caused by animation */
            transition: background 2s ease;
            /* Smooth background color transition */
        }

        /* Container Styles */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Moving Images Styles */
        .moving-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: linear-gradient(to right, #ff9a9e, #fad0c4),
                linear-gradient(to right, #1db762, #d7b253),
                linear-gradient(to right, #6dd5fa, #2980b9);
            /* Add more gradients as needed */
            background-size: 200% 100%;
            background-repeat: no-repeat;
            animation: movingImagesAnimation 10s linear infinite;
            /* Image animation */
        }

        @keyframes movingImagesAnimation {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 200% 0;
            }
        }
    </style>
</head>

<body>
    <!-- Background Animation -->
    <script>
        const gradients = [
            ["#ff9a9e", "#fad0c4"], // Gradient 1
            ["#1db762", "#d7b253"], // Gradient 2
            ["#6dd5fa", "#2980b9"], // Gradient 3
            // Add more gradients as needed
        ];

        let currentIndex = 0;

        function updateBackgroundGradient() {
            const gradient = gradients[currentIndex];
            document.body.style.background = `linear-gradient(to right, ${gradient[0]}, ${gradient[1]})`;

            currentIndex = (currentIndex + 1) % gradients.length;
        }

        setInterval(updateBackgroundGradient, 5000); // Change every 5 seconds
    </script>

    <!-- Content -->
    <div class="moving-images"></div>

    <div class="container mt-4">
        <div class="form-container">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="users">Username:</label>
                    <input type="text" id="users" name="users" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>