<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('dbh.php');
       // $id=12;
	 $sql1 = "SELECT * FROM `employee` where empid = '$id'";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
	 $empName = ($employeen['empnm']);

         
         $sql="select * from employee where empid=".$id;
	//

	$sql2 = "Select * From employee, emp_leave Where employee.empid = $id and emp_leave.empid = $id order by emp_leave.token limit 1";

	$sql3 = "SELECT * FROM `salary_assign` WHERE empid = $id order by sal_date limit 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
//
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
?>



<html>
<head>
	<title>Employee Panel | XYZ Corporation</title>
        <link rel="stylesheet" type="text/css" href="newcss01.css">
          <link rel="stylesheet" type="text/css" href="try6.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
        <style>
             body{
                  background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
  background-size: cover;
  height: 100vh;

        </style>
</head>
<body>
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
                                    <li><a class="homeblack" href="applyleave.php">Apply for leave</a></li>
				<li><a class="homeblack" href="Elogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
           
            
            <ul class="tilesWrap">
	<li>
		<h2>salary</h2>
                <br>
		<p>
			<?php
				while ($employee = mysqli_fetch_assoc($result3)) {
					echo '<h3>';
					echo $employee['sal_date'];
					echo '<br>';
					echo 'Rs.'.$employee['total'].'  thousand';
                                                                                    echo '</h3>';
					
                                                                        
				

			
                    echo '
                <form action="viewsal.php" method="POST">
			<div class="p-t-20" style="padding-left: 20px">
                            <input type="hidden" name="id" value="'.$employee["empid"].'">
                            <button class="btn btn--radius btn--green" type="submit"  >more details</button>
                        </div>
                </form>';
                                }
                   ?>
		</p>
		
	</li>
	
	<li>
		<h2>Leave</h2>
                 <br>
               
		<p>
			<?php
				while ($employee = mysqli_fetch_assoc($result2)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					
					
					 echo'<h3>';
					echo $employee['start']." to <br>";
					echo $employee['end']."<br>";
					//echo $interval->days;
					//echo $employee['reason'];
					echo $employee['status'];
                                        
				echo '<form action="viewleave.php" method="POST">
			<div class="p-t-20" style="padding-left: 20px">
                            <input type="hidden" name="id" value="'.$employee["empid"].'">
                            <button class="btn btn--radius btn--green" type="submit"  >more details</button>
                        </div>
                </form>';

		 echo'</h3>';		}

			?>
                   
                
                </p>
		
	</li>
        <li>
		<h2>Projects</h2>
		 <br>
		<p>
			<?php
                        if($employeen>0){
                            echo '<h3>';
				//while ($employee1 = mysqli_fetch_assoc($result1)) {
					
					if( $employeen['pid']!=0)
					{
                                            echo 'project id= '.$employeen['pid'].'<br>';
                                            $sql11 = "SELECT * FROM project WHERE pid = ".$employeen['pid'] ;
                                            $result11 = mysqli_query($conn, $sql11);
                                            $employee11 = mysqli_fetch_assoc($result11);
                                            
                                            echo 'Due date : '.$employee11['due_date'];
                                        }
					
                                         else {
     echo '<h3>NO PROJECTS</h3>';
 }

				}
                                echo '</h3>';
                     //   }


			?>
		</p>
		
	</li>
	<li>
		<h2>Profile</h2>
                <img src="images/avatar.png" alt="alt" width="100px" height="100px" >
		<p>
                     <?php
				
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<h3>";
					echo "<td>".$employee['empnm']." ".$employee['lastnm']."</td>";
					echo "</h3>";
                                        echo '<form action="viewemp1.php" method="POST">
			<div class="p-t-20" style="padding-left: 20px">
                            <input type="hidden" name="id" value="'.$employee["empid"].'">
                            <button class="btn btn--radius btn--green" type="submit"  >Edit</button>
                        </div>
                </form>';
				}


			?>
               
		</p>
		
	</li>
</ul>
            

   
<br>
<br>
<br>
<br>
<br>

</body>
</html>