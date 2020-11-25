<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Employee | Admin Panel</title>

    <!-- Icons font CSS-->
     <!-- Main CSS-->
    <link href="try1.css" rel="stylesheet" media="all">
    <link href="newcss1.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>ORZ Corp.</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">BACK</a></li>
                <li><a class="homered" href="addemp.php">Add Employee</a></li>
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="addempprocess.php" method="POST" enctype="multipart/form-data">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>
                        <p>Birthday</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                        </div>

                       
                        
                         <div class="input-group">
                          Address  <input class="input--style-1" type="text"  name="address" required="required">
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                  Department:      <select name="dept">
                                            <option disabled="disabled" selected="selected">Department</option>
                                            
                                            <option value="1">executive</option>
                                            <option value="2">finance</option>
                                            <option value="3">hr</option>
                                           
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                               </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Degree" name="degree" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salary" name="salary">
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
<!-- end document-->
