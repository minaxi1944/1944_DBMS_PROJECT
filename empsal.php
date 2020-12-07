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
                <li><a class="homered" href="empsal.php">PROJECT</a></li>
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
                    <h2 class="title">Generate Salary</h2>
                    <form action="sal.php" method="POST" enctype="multipart/form-data">

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="BONUS" name="bonus" >
                             </div>
                        <div class="input-group">
                            <input class="input--style-1" type="date" placeholder="Start date" name="sdate" required="required" >
                        </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="DUE DATE" name="duedate" required="required">
                                   
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


