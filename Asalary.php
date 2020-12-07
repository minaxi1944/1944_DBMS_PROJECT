<html>
<head>
<title>PHP Program To find the gross salary of an Employee</title>
</head>
<body>
    <?php
                        require_once ('dbh.php');
                       
                          //  $emp = $_POST['empid'];
                       
                        $sql="select * from employee where empid=1";
                       $result = $conn->query($sql);
                       if ($result->num_rows > 0) {
                            // output data of each row
                     while($row = $result->fetch_assoc()) {
                     echo  $row["empid"]. '   ' . $row["empnm"]. '   ' . $row["salary"];
                    echo '  <form action="sal.php" method="POST" enctype="multipart/form-data">
                         <input type="number" name="salary" value="' . $row["salary"]. '" placeholder='.$row["salary"].'>
                    
                     <input type="number" name="leavee" value="sal2" placeholder="bonus">
                     <input type="number" name="bonus" value="sal1" placeholder="leave "> 
                    <input type="submit" name="submit" value="Submit"/>
                    </form>';
                               //  echo "id: " . $row["empid"]. " - Name: " . $row["empnm"]. "<br>";
                         }
                    }
                      
                    
                    mysqli_close($conn);

?>

</body>
</html>