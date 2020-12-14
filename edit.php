<?php

require_once ('dbh.php');
$id=$_POST['id'];
$contact = $_POST['cont'];
$address = $_POST['addr'];
$degree = $_POST['deg'];

$sql="update employee set contact=$contact, address='$address',degree='$degree' where empid=".$id;
$result = mysqli_query($conn, $sql);
if(($result) == 1){
    
    $sql="commit";
   
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('unSuccesfully Registered')
   
    </SCRIPT>");
}




?>