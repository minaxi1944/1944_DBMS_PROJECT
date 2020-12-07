<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$pid = $_POST['pid'];
$subdate = $_POST['duedate'];
$ch=$_POST['empid'];
//$c=101;


$sql="insert into project values('$pid','$pname','$subdate')";

$result = mysqli_query($conn, $sql);

foreach ($ch as $c){
    $sql = "update employee set pid='$pid' where empid='$c' ";
$result = mysqli_query($conn, $sql);

}



if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('sucess to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: viewemp.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>