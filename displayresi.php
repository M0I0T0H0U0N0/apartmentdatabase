<!DOCTYPE html>
<html>

<head>
  <title>Display Data with Images</title>
  <style>
    /* Styling for the page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      /* Set your desired background color here */
      animation: backgroundAnimation 30s linear infinite;
    }

    @keyframes backgroundAnimation {
      0% {
        background-color: #f2f2f2;
      }

      25% {
        background-color: #1db762;
      }

      50% {
        background-color: #d7b253;
      }

      75% {
        background-color: #6dd5fa;
      }

      100% {
        background-color: #2980b9;
      }
    }

    /* Styling for the residents section */
    .residents-section {
      text-align: center;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    /* Styling for each box */
    .data-box {
      background-color: #fff;
      /* Set the background color for each box */
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
      width: calc(33.33% - 20px);
      /* Adjust the width as per your requirement */
      box-sizing: border-box;
      display: inline-block;
      vertical-align: top;
      margin-right: 20px;
      /* Add margin-right to create a gap between boxes */
    }

    /* Styling for the last box in each row */
    .data-box:last-child {
      margin-right: 0;
      /* Remove the margin-right for the last box in each row */
    }

    /* Styling for the image */
    .data-box img {
      max-width: 200px;
      margin-top: 10px;
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
  <div class="residents-section">
    <h2>RESIDENTS</h2>
  </div>

  <?php
  // Step 1: Connect to the database (Assuming you have a file named connection.php for this)
  include "connection.php";

  // Step 2: Fetch data from the database table
  $sql = "SELECT * FROM images";
  $result = mysqli_query($con, $sql);

  // Step 3: Display the records along with the images
  while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $phno = $row['phno'];
    $dono = $row['dono'];
    $imageURL = 'uploads/' . $row['image_url']; // Assuming images are stored in 'uploads' folder
  
    // Display the data and the image in a box
    echo "<div class='data-box'>";
    echo "<p>Name: $name</p>";
    echo "<p>Ph.No: $phno</p>";
    echo "<p>Door.No: $dono</p>";
    echo "<img src='$imageURL' alt='$name' height=200 width=400 ><br><br>";
    echo "</div>";
  }

  // Step 4: Close the database connection
  mysqli_close($con);
  ?>
</body>

</html>