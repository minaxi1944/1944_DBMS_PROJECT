<?php

require_once ('dbh.php');
$id=10;
$sql = "call proc2('.$id.') ";

//$records = mysqli_query( $conn,$a="CALL proc2(".$id.")" );
//$records=mysqli_query( $conn,"CALL proc1()");
//echo "$sql";
($result = mysqli_query($conn, $sql));
 //  echo $a;
if($result)
    
while($row = $result->fetch_assoc()) {
    echo $row['empid'];
     echo $row['reason'];
    echo 'records found';
}
else {
echo 'no records found';
}


//}
//else{
  //  echo 'no data found';
//}

?>