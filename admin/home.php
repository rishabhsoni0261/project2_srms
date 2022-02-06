<?php

session_start();
include("config.php");

//total students
$user="select * from tblstudent";
$user1=mysqli_query($conn,$user);
$user2=mysqli_num_rows($user1);

if($_SESSION['admin_username']=='')
{
	header("location:admin_login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<title>Home</title>
</head>
<body>
<?php include 'header.php'?>
<div>
	
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table align="center" cellspacing="20%" width="70%">
	<tr>
		<th><div style="height: 150; width: 100;">
			<a href="view_student.php">
				<b><h1>Total Users</h1>
				<p><?php echo $user2?></p></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="#">
				<b><h1>Total Course</h1>
				<p>  </p></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="#">
			<b><h1>Total Result</h1>
				<p>  </p></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="#">
			<b><h1>Total Admin</h1>
				<p>  </p></b>
			</a>
			</div>
		</th>
	</tr>
</table>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'?>
</body>
</html>