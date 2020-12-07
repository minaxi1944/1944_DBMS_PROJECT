<?php
                        require_once ('dbh.php');
//$sql = "SELECT employee.empid,employee.empname,employee.lastnm,salary.deduction,salary.bonus,salary.totalsal from employee,`salary` where employee.empid=salary.empid";
$sql="select e.empid,e.empnm,e.salary from employee e";
//echo "$sql";
$result = $conn->query($sql);

                   

?>



<html>
<head>
	<title>Salary Table | ORZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="newcss1.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homered" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				<th align = "center">Base Salary</th>
				<th align = "center">Leave deduction</th>
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
//   if($pro['due_date']<($a=date("yy-m-d")))
                            // output data of each row
                      //  echo date("yy-m-d");
                          while($row = $result->fetch_assoc()) {
                           $sql2="select l.empid,l.start,l.end,l.status from emp_leave l where l.empid=".$row["empid"];
                            $da=0;
                       //     echo 
                         $result2 = $conn->query($sql2);
                           
                           while($row2 = $result2->fetch_assoc()) {
                           $date1 = new DateTime($row2['start']);
                          if( $date1->format('m')==date("m")&& $row2['status']=="Approved"){
	          $date2 = new DateTime($row2['end']);
	          $interval = $date1->diff($date2);
                               $da=$interval->days+$da;
                               }
                           }
                             
                           $total=$row["salary"]-($da*(10));
                      echo'    <tr> <td>' . $row["empid"]. '</td> <td>' . $row["empnm"]. '</td><td>'.$row["salary"].'</td>';
                      echo '<td>'.$da.'</td><td>'.$total.'</td>';
                     echo' <td><form action="sal.php" method="POST" enctype="multipart/form-data">
<div class="p-t-280">
<input type="hidden" name="empid" value="'.$row["empid"].'">
<input type="hidden" name="deduction" value="'.$da.'">
<input type="hidden" name="sal" value="'.$row["salary"].'">';

         echo' <button class="p-t-280 btn--green" type="submit" >CREDIT </button>
                       </div>
                    </form></td>';
                       
	   	
                     }
                    mysqli_close($conn);
                   
			?>
                             
	</table>
</body>
</html>