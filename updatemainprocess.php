<?php

include "connection.php";
$naame = $_POST['name'];
$donoo = $_POST['dono'];
$wabi = $_POST['wabi'];
$mabi = $_POST['mabi'];
$daate = $_POST['date'];


$sql = "insert into maintance values('$naame','$donoo','$wabi','$mabi','$daate')";
mysqli_query($con, $sql);
header("Location: updatemain.php");





?>