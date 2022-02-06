<?php

session_start();
include("config.php");


if($_SESSION['stud_username']=='')
{
	header("location:student_login.php");
}

//for student name
$stud_id=$_SESSION['stud_id'];

include 'config.php';
$sql="SELECT * FROM tblstudent WHERE stud_id='$stud_id'";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful......");
$row = mysqli_fetch_array($result);

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
	<p>Welcome, <?php echo $row['stud_name'] ?><br>
		To our Student result management system.
		You will find some use full links below:-
	</p>
	<a href="show_result.php">Results</a>
	<a href="stud_profile.php">Profile</a>
	<a href="#">Latest News</a>
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
			
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			
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