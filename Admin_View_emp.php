<?php

require_once ('dbh.php');
$id=$_POST['id'];

$sql = "SELECT * from `employee` e where e.empid= ".$id;

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | ORZ Corporation</title>
	 <link rel="stylesheet" type="text/css" href="newcss01.css">
         <style>
             table, th, td {
  border: 2px solid black;
}
         </style>
</head>
<body style="background: linear-gradient(to right, #c31432, #240b36);">
 	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="menu1">
				<li><a class="homeblack" href="aloginwel.php">BACK</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
        <div class="d1" style="padding:200px; padding-top: 50px">		
            <table >
			
                
                   
                
                         	<?php 
				while ($employee = mysqli_fetch_assoc($result)) {
                                  			echo '<tr><th align = "center">Emp. ID</th>';
					echo "<td>".$employee['empid']."</td></tr>";
                                       echo' <input type="hidden" name="id" value="'.$employee["empid"].'">';
                                        echo '<tr><th align = "center">Emp.Name</th>';
					echo "<td>".$employee['empnm']."  ".$employee['lastnm']."</td></tr>";
                                          echo '<tr><th align = "center">Address</th>';
                                    			echo "<td>".$employee['address']."</td>";
		  echo '<tr><th align = "center">Email</th>';	
					echo "<td>".$employee['email']."</td></tr>";
                                      echo '<tr><th align = "center">date of birth</th>';	
					echo "<td>".$employee['dob']."</td></tr>";
                                         echo '<tr><th align = "center">Gender</th>';	
                                       echo "<td>".$employee['gender']."</td></tr>";
                                       echo '<tr><th align = "center">contact</th>';
                                        echo "<td>".$employee['contact']."</td></tr>";
                                       //form field
                                        echo '<tr><th align = "center">Department</th>';	
                                       echo "<td>".$employee['dept']."</td></tr>";
                                        
                                        echo '<tr><th align = "center">Degree</th>';	
                                     echo "<td>".$employee['degree']."</td></tr>";
                                      echo '<tr><th align = "center">Salary</th>';	
                                       echo "<td>".$employee['salary']."</td></tr>";
                                      echo '<tr><th align = "center">project id</th>';	
                                       echo "<td>".$employee['pid']."</td></tr>";
                                     		}


			?>

		</table>
           
        
        </div>
		
	
</body>
</html>