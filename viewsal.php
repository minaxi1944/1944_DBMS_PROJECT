<?php
                        require_once ('dbh.php');
                        $id=$_POST['id'];
                        echo $id;
//$sql = "SELECT employee.empid,employee.empname,employee.lastnm,salary.deduction,salary.bonus,salary.totalsal from employee,`salary` where employee.empid=salary.empid";
$sql="select e.empid,e.empnm,e.salary,s.sal_date from employee e,salary_assign s where e.empid=".$id." and s.empid=e.empid order by s.sal_date asc";
//echo "$sql";
$result = $conn->query($sql);

                   

?>



<html>
<head>
	<title>Salary Table | ORZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="newcss01.css">
</head>
<body style="background: linear-gradient(to right, #c31432, #240b36);">
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	
	
	<table >
          
			<tr>
                           
                            <th align = "center">Date</th>
				<th align = "center">Base Salary</th>
				<th align = "center">Leave deduction</th>
				<th align = "center">TotalSalary</th>
                                <th></th>
				
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
                      echo'    <tr> <td>' . $row["sal_date"]. '</td><td>'.$row["salary"].'k</td>';
                      echo '<td>'.$da.'</td><td>'.$total.'k</td>';
                    
                     }
                        
                    mysqli_close($conn);
                   
			?>
                             
	</table>
</body>
</html>