<?php

require_once ('dbh.php');
$id = $_POST['id'];

//$sql = "SELECT * from `employee_leave`";
$sql = "Select employee.empid, employee.empnm, emp_leave.start, emp_leave.end, emp_leave.reason,emp_leave.token, emp_leave.status From employee, emp_leave Where employee.empid=".$id." and employee.empid = emp_leave.empid order by emp_leave.token desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Leave | Admin Panel | XYZ Corporation</title>
        <link rel="stylesheet" type="text/css" href="newcss01.css">
</head>
<body style="background: linear-gradient(to right, #c31432, #240b36);">
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homered" href="Aempleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="Alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
        <div id="divimg" style="padding: 100px;">
		<table >
			<tr>
				
				<th>Token</th>
				
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
				
			</tr>

			<?php
                       
if( $result ){
// success! check results

				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					   echo "<td>".$employee['token']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
                                        echo "</tr>";
                                        
                                      
					
				}
}

			?>

		</table>
		
	</div>
</body>
</html>