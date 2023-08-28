<!DOCTYPE html>
<html>

<head>
  <title>Display Data with Images</title>
  <style>
    /* Your CSS styles */
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 20px;
    }

    .navbar {
      background-color: #494949;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      margin-bottom: 20px;
    }

    .navbar a {
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #333;
    }

    h2 {
      text-transform: uppercase;
      font-size: 24px;
    }

    table {
      width: 80%;
      margin: 0 auto;
      border-collapse: collapse;
      border: 1px solid #ccc;
      background-color: #fff;
    }

    th,
    td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    /* Background animation */
    body {
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
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="manager-link">
      <a href="maninputpage.html">Manager</a>
    </div>
    <a href="login.php">Logout</a>
  </div>



  <!-- Maintenance Table -->
  <?php
  include "connection.php";

  $sql = "SELECT * FROM maintance";
  $result = mysqli_query($con, $sql);

  if ($result->num_rows > 0) {
    echo "<h2>MAINTENANCE RECORDS</h2>";
    echo "<table border='1'>
            <tr>
              <th>NAME</th>
              <th>DOORNO</th>
              <th>ELECTRICITY BILL</th>
              <th>WATER BILL</th>
              <th>DATE OF PAYMENT</th>
              <!-- Add more table headers for other columns if needed -->
            </tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["dono"] . "</td>
                <td>" . $row["electricity bill"] . "</td>
                <td>" . $row["water bill"] . "</td>
                <td>" . $row["dateofpayment"] . "</td>
                <!-- Add more table data for other columns if needed -->
              </tr>";
    }
    echo "</table>";
  } else {
    echo "<h2>No records found.</h2>";
  }
  ?>
</body>

</html>