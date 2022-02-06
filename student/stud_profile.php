<?php

session_start();
$stud_id=$_SESSION['stud_id'];

include 'config.php';
$sql="SELECT * FROM tblstudent JOIN tblcourse WHERE tblstudent.stud_course = tblcourse.cid and tblstudent.stud_id='$stud_id'";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful......");
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<style type="text/css">
		tr:nth-child(odd){background-color: #f2f2f2}

	</style>
	<title>Student profile</title>
</head>
<body>
<?php include 'header.php'?>
	<div >
		<table align="center" border="10">
			<caption><h1><b>Profile</b></h1></caption>
			<tr>
				<th style="text-align: left; padding: 15px;">ID:</th>
				<td style="text-align: left; padding: 15px;"><?php echo $row['stud_id']?></td>
			</tr>
			<tr>
				<th style="text-align: left; padding: 15px;">Roll no:</th>
				<td style="text-align: left; padding: 15px;"><?php echo $row['stud_rollno']?></td>
			</tr>
			<tr>
				<th style="text-align: left; padding: 15px;">Name:</th>
				<td style="text-align: left; padding: 15px;"><?php echo $row['stud_name']?></td>
			</tr>
			<tr>
				<th style="text-align: left; padding: 15px;">Course:</th>
				<td style="text-align: left; padding: 15px;"><?php echo $row['cname']; ?></td>
			</tr>
			<tr>
				<th style="text-align: left; padding: 15px;">Email:</th>
				<td style="text-align: left; padding: 15px;"><?php echo $row['stud_email']; ?></td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php include 'footer.php'?>
</body>
</html>