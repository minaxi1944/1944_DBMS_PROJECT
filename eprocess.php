<?php

require_once ('dbh.php');

$eid = $_POST['uid'];
$password =$_POST['pwd'];
//$p=$password-$eid;
//echo $p;
echo $p=str_replace($eid, "",$password);
$sql = "SELECT * from `employee` WHERE empid = '$eid' AND empnm = '$p'";
//echo $sql;
//$sqlid = "SELECT id from `employee` WHERE empid = '$email' AND empnm = '$password'";

$result = mysqli_query($conn, $sql);
//$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){
	
	$employee = mysqli_fetch_array($result);
	$empid = ($employee["empid"]);
	

	echo ("window.alert('logged in')");
	//echo ("$empid");
	
	header("Location: eloginwell.php?id=$empid");
}
else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>