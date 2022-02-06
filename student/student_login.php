<?php

session_start();
include("config.php");

if($_SESSION['stud_username']!='')
{
	header("location:stud_home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Student Login</title>
</head>
<body>
	
<center>
<form action="student_login_backend.php" method="post">
	<div class="container" style="background-color:#2c2e3a">
  <h1 style="color: black; background: yellow;">Student Login</h1>
</div>
<br>
<br>
<br>
  <div class="container">
    <label for="uname"><b>Student Email:</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required><br>

    <label for="psw">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <center><button type="submit">Login</button></center>
    <p><u>Note:- Use Date of Birth(ddmmyyyy) as your password</u></p>
  </div>
<br>
<br>
<br>
  <div class="container" style="background-color:#2c2e3a">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" class="cancelbtn">Cancel</button>
    <span class="psw" style="color: white;"> <a href="http://localhost/project_2/admin/admin_login.php" target="_blank">Admin Login?</a></span>
  </div>
</form></center>
</body>
</html>