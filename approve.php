<?php
//including the database connection file
include("dbh.php");

//getting id of the data from url
$id = $_GET['empid'];
$token = $_GET['token'];
//deleting the row from table
$result = mysqli_query($conn, "UPDATE `emp_leave` SET `status`='Approved' WHERE `empid`=$id and `token` = $token");

//redirecting to the display page (index.php in our case)
header("Location:Aempleave.php");
?>

