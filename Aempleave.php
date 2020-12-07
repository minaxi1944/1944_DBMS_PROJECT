<?php

require_once ('dbh.php');

//$sql = "SELECT * from `employee_leave`";
$sql = "Select employee.empid, employee.empnm, emp_leave.start, emp_leave.end, emp_leave.reason,emp_leave.token, emp_leave.status From employee, emp_leave Where employee.empid = emp_leave.empid ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Leave | Admin Panel | XYZ Corporation</title>
        <link rel="stylesheet" type="text/css" href="newcss1.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homered" href="Aempleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<table>
			<tr>
				<th>Emp. ID</th>
				<th>Token</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
				<th>Options</th>
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
					echo "<td>".$employee['empid']."</td>";
                                                                                        echo "<td>".$employee['token']."</td>";
					echo "<td>".$employee['empnm']."</td>";

					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
                                        if($employee['status']=='pending'){
                                            echo "<td><a href=\"approve.php?empid=$employee[empid]&token=$employee[token]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"cancel.php?empid=$employee[empid]&token=$employee[token]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></td>";

                                        }
					
				}
}

			?>

		</table>
		
	</div>
</body>
</html>