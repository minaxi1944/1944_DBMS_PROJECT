<?php 
	require_once ('dbh.php');
	$sql = "SELECT * FROM `project` ";
        $da="select to_char (sysdate,'YYYY-MM-DD' from dual";
        $a=mysqli_query($conn, $da);
        
	$result = mysqli_query($conn, $sql);
	
?>



<html>
<head>
	<title>ORZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="newcss1.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homeblack" href="Elogin.php">Employee Login</a></li>
				<li><a class="homered" href="Alogin.php">Admin Login</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">


		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Status</th>
			</tr>

			<?php
				while ($pro = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$pro['pid']."</td>";
					echo "<td>".$pro['pname']."</td>";
					echo "<td>".$pro['due_date']."</td>";
                                        
                                                                                    if($pro['due_date']<($a=date("yy-m-d")))
                                                                                        echo "<td>completed</td>";
                                                                                    else {
                                                                                    echo "<td>pending</td>";    
                                                                                    }
                                                                                    

					// echo "<td><a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Submit</a>";

				}


			?>

		</table>
            
             <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body"><br><br>
                    <h2 class="title">Create new project</h2>
                    <form action="projectasssign.php" method="POST" enctype="multipart/form-data">
<div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" >add </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

		</body>
</html>