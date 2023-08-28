<?php

include "connection.php";

$naame = $_POST['name'];
$phoneno = $_POST['phno'];
$dooorno = $_POST['doorno'];
$daate = $_POST['date'];


$sql = "insert into visitors(name,phno,date,dono) values('$naame','$phoneno','$daate','$dooorno')";

mysqli_query($con, $sql);
header("Location: visitorsinfo.php");





?>