<?php
include('connection.php');
$username = $_POST['users'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT id, passwords, username FROM user where username='$username' ";
$result = $con->query($sql);
$row = $result->fetch_assoc();
if ($result !== false && $result->num_rows > 0) { // output data of each row
  if ($row["username"] == $username && $row["passwords"] == $password) {

    if ($row["id"] == '1') {

      include('secuinputpage.html');
    }
    if ($row["id"] == '2') {
      include('maninputpage.html');
    }
  }
} else {
  echo "mithun";
}

$con->close();
?>