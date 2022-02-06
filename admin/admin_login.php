<?php

session_start();
include("config.php");

if($_SESSION['admin_username']!='')
{
	header("location:home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Admin Login</title>
</head>
<body>
	
<center>
<form action="backend_admin_login.php" method="post">
	<div class="container" style="background-color:#2c2e3a">
  <h1 style="color: white; background: #00cc66;">Admin Login</h1>
</div>
<br>
<br>
<br>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <center><button type="submit">Login</button></center>
    
  </div>
<br>
<br>
<br>
  <div class="container" style="background-color:#2c2e3a">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" class="cancelbtn">Cancel</button>
    <span class="psw" style="color: white;"> <a href="http://localhost/project_2/student/student_login.php" target="_blank">Student Login?</a></span>
  </div>
</form></center>
</body>
</html>