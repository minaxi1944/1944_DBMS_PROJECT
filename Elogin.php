<!DOCTYPE html>
<html>
<head>
	<title>Log In | XYZ Corporation</title>
        <link rel="stylesheet" type="text/css" href="newcss01.css">
        <style>
            body{
                  background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
  background-size: cover;
  height: 100vh;

            } 

        </style>
</head>
<body id="b1">
	<header>
		<nav>
			<h1>ORZ Corp.</h1>
			<ul id="menu1">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homered" href="Elogin.php">Employee Login</a></li>
				<li><a class="homeblack" href="Alogin.php">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
            <img src="images/avatar.png" class="avatar">
        <h1>Employee Login</h1>
        <form action="eprocess.php" method="POST">
            <p>Email</p>
            <input type="text" name="uid" placeholder="Enter id" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
           
        </form>
        
    </div>
			
			
</body>
</html>