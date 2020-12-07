<?php 
require_once ('dbh.php');
/*$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);*/
?>


<html>
<head>
    <title >Admin Panel | XYZ Corporation</title>
        <link rel="stylesheet" type="text/css" href="newcss2.css">
        <link rel="stylesheet" type="text/css" href="newcss1.css">
</head>
<body style="background-color:#5D6D7E">
	
    <header>
			<h1  >ADMIN MENU</h1>
          </header>
    <div class="divider"></div>
    <div class="list-type1">
<ol>
       
          	
                            <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="ProDisp.php"> Project</a></li>
				<li><a class="homeblack" href="sal1.php">Salary Table</a></li>
				<li><a class="homeblack" href="Aempleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
                                
	
</ol>
	 
	
	
</body>
</html>