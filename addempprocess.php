<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
//echo "$birthday";
//$sql = "INSERT INTO `employee`(`empid`, `empnm`, `lastnm`, `email`,  `gender`, `contact`,  `address`, `dept`, `degree`,'salary','pid') VALUES ('','$firstname','$lastName','$email','$gender','$contact','$address','$dept','$degree','$salary','9')";
//$sql = "INSERT INTO `employee` values ('109','$firstname','$address')";

$sql="INSERT INTO `employee` values ('','$firstname','$lastName','$dept','$email','$birthday','$contact','$gender','$address','$salary','$degree','0')";
$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

if(($result) == 1){
    
    $sql="commit";
    $a= mysqli_query($conn, $sql);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('unSuccesfully Registered')
    window.location.href='viewemp.php';
    </SCRIPT>");
}




?>