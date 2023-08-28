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
      text-align: center;
      padding-top: 20px;
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

    /* Styling for the heading */
    h2 {
      text-transform: uppercase;
      font-size: 24px;
    }

    /* Styling for the table */
    table {
      width: 80%;
      margin: 0 auto;
      border-collapse: collapse;
      border: 1px solid #ccc;
      background-color: #fff;
      /* Change the table background color to white */
    }

    th,
    td {
      padding: 10px;
      border: 1px solid #ccc;
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

    /* Styling for the manager navbar link */
    .navbar .manager-link {
      margin-right: 20px;
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

  <h2>VISITORS VISITED</h2>

  <?php
  // Step 1: Connect to the database (Assuming you have a file named connection.php for this)
  include "connection.php";

  // Step 2: Fetch data from the database table
  $sql = "SELECT * FROM visitors LIMIT 10";
  $result = mysqli_query($con, $sql);

  // Step 3: Fetch and display the rows
  if ($result->num_rows > 0) {
    echo "<table>
            <tr>
              <th>NAME</th>
              <th>PHONENO</th>
              <th>DOORNO</th>
              <th>DATE</th>
              <!-- Add more table headers for other columns if needed -->
            </tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["phno"] . "</td>
                <td>" . $row["dono"] . "</td>
                <td>" . $row["date"] . "</td>
                <!-- Add more table data for other columns if needed -->
              </tr>";
    }
    echo "</table>";
  } else {
    echo "No records found.";
  }

  // Step 4: Close the database connection
  mysqli_close($con);
  ?>
</body>

</html>