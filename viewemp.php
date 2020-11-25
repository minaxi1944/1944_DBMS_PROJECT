<?php

require_once ('dbh.php');
$sql = "SELECT * from `employee` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | ORZ Corporation</title>
	 <link rel="stylesheet" type="text/css" href="newcss1.css">
</head>
<body>
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="menu1">
				<li><a class="homeblack" href="aloginwel.php">BACK</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
        <div class="d1"></div>		
        <table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
                            
				<th align = "center">Adress</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Department</th>
				<th align = "center">Salary</th>
                                
                                
                                <th align = "center">Degree</th>
                                <th align = "center">Project</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['empid']."</td>";
					echo "<td>".$employee['empnm'].$employee['lastnm']."</td>";
					echo "<td>".$employee['address']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['dob']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['salary']."</td>";
					echo "<td>".$employee['degree']."</td>";
                                                                                    echo "<td>".$employee['pid']."</td>";
					
					//echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[empid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>