
<?php
require_once 'dbh.php';

$empid = $_POST['empid'];
$le=$_POST['deduction'];
$sal=$_POST['sal'];
//$dd= date();
$d="2020-".date("m")."-31";
//echo $dd;
echo $d;

$total=$sal-$le*50;

$sql = "INSERT INTO `salary_assign`(`empid`,`deduction`, `sal_date`, `total`) VALUES ('$empid','$le','$d','$total')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
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





?>