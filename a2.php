<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eno'];
$subdate = $_POST['duedate'];

$sql = "INSERT INTO `project` VALUES ('$eid' , '$pname' ,'12')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('sucess to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    //header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>