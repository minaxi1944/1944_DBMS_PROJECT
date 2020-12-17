<?php

require_once ('dbh.php');
$sql = "SELECT * from `employee` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="newcss01.css">
  <style>
      .w3a-ul.w3a-hoverable li:hover{background-color:lightyellow}
  </style>
  
<body style="background-image: url('images/abstract-black-and-blue-color-background-vector-25807434.jpg'); opacity:0.9">
    <header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="menu1">
				<li><a class="homeblack" href="aloginwel.php">BACK</a></li>
				<li><a class="homeblack" href="Alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
    <div class="divider"></div>

    <div class="w3-container" style="width: 1000px;position: absolute;padding-left: 400px ">
 
  <ul class="w3-ul w3-card-4 w3a-ul w3a-hoverable">
      <?php 
				while ($employee = mysqli_fetch_assoc($result)) {
                                    echo '<form action="Admin_View_emp.php" method="POST">
                                        <div style="background:darkblue;height:10px;"></div>
<div style="background:white">                                        
<li class="w3-bar">
                                        
                                        <button type="submit" style="background-color:green" <span  class="w3-bar-item w3-button  w3-xlarge w3-right">></span></button>
      <img src="images/avatar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item" >
        <span class="w3-large">'.$employee['empnm'].'  '.$employee['lastnm'].'</span><br>
        <span>'.$employee['dept'].'
             <input type="hidden" name="id" value="'.$employee["empid"].'">
    
         </span>
      </div>
    </li></div>
     </form>';
                                }
					
?>

  </ul>
</div>

</body>
</html>
