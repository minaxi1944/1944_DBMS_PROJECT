<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('dbh.php');
	$sql = "SELECT * FROM `employee` where empid =8";
	$result = mysqli_query($conn, $sql);
    //    $id=8;       // value of id here..\///////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $employee = mysqli_fetch_array($result);
	$empName = ($employee['empnm']);
	//echo "$id";
        
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['empnm']);
	//echo "$id";
?>

<html>
<head>
	<title>Apply Leave | Employee Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="newcss1.css">
        <link href="newcss2.css" rel="stylesheet" media="all">
     <link href="try1.css" rel="stylesheet" media="all">
   
</head>
<body >
	
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<!--<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul> -->
		</nav>
	</header>
	 
	<div class="divider"></div>
       <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <h2 class="title">Apply Leave Form</h2>
                    <form action="applyleaveprocess.php?id=<?php echo $id?>" method="POST">


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reason" name="reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="start" name="start">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>End Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="end" name="end">
                                   
                                </div>
                            </div>
                        </div>
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		



	




</body>
</html>