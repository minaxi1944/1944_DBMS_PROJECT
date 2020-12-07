<?php
//including the database connection file
require_once ('dbh.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];

$sql = "INSERT INTO `emp_leave`(`empid`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id','','$start','$end','$reason','pending')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('sucess to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
 //   header("Location: viewemp.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
//redirecting to the display page (index.php in our case)
//header("Location:..//eloginwel.php?id=$id");
?>

