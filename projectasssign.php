<?php 
     require_once ('dbh.php'); 
$day= date("yy-m-d");
$pid1=0;
//echo $day;
//$sql = "update employee set pid='$pid1' where pid in(select pid from project where due_date < ". $day. ")";

//$result = mysqli_query($conn, $sql);

   // $sql="update 'employee' set pid=0";
$sql="select * from project ";
  if( $result = $conn->query($sql))
   {   
      while($row = $result->fetch_assoc()) {
          if( $row["due_date"]<$day){
              $sql2 = "update employee set pid='$pid1' where pid=".$row["pid"];
              $result2 = mysqli_query($conn, $sql2);
          }
      }
   }
   else{
       echo 'no';
   }

?>



<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Assign Project | Admin Panel</title>

    <link href="newcss1.css" rel="stylesheet" media="all">
    <link href="newcss2.css" rel="stylesheet" media="all">
     <link href="try1.css" rel="stylesheet" media="all">
   

</head>

<body>
    <header>
        <nav>
                <h1>ORZ Corp.</h1>
            <ul id="navli">
                <li><a class="homered" href="projectasssign.php">PROJECT</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>



    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Project Info</h2>
                    <form action="proj.php" method="POST" enctype="multipart/form-data">

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                             </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="PROJECT ID" name="pid" required="required" >
                        </div>
                        <p>due date</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="DUE DATE" name="duedate" required="required">
                                   
                                </div>
                            </div>
                           
                        </div>
                        
                        
                         <div >  <table border="1">  
                                  <tr>  
      <td colspan="3">Select employees from avaliable list</td>  
   </tr>  
                        <?php
                      
                        $sql="select * from employee";
                       $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                            // output data of each row
                     while($row = $result->fetch_assoc()) {
                         if($row["pid"]==0)
                     echo'    <tr> <td>' . $row["empid"]. '</td> <td>' . $row["empnm"]. '</td> <td><input type="checkbox" name="empid[]" value="' . $row["empid"]. '"></td> </tr> ';
                               //  echo "id: " . $row["empid"]. " - Name: " . $row["empnm"]. "<br>";
                         }
                    }
                    
                    mysqli_close($conn);
                    ?>
                      
</table> 
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


