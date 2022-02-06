<?php

session_start();
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
	<title>Select Semester</title>
</head>
<body>

<?php
include 'header.php';

if($row['stud_course']=="1")
{
	?>
<table align="center" cellspacing="20%" cellpadding="20%" width="70%">
	<tr>
		<caption><h2>Add BCA Result</h2></caption>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=1">
				<b><h1>Semester 1</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=2">
				<b><h1>Semester 2</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=3">
			<b><h1>Semester 3</h1></b>
			</a>
			</div>
		</th>
		
	</tr>
	<tr>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=4">
			<b><h1>Semester 4</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=5">
				<b><h1>Semester 5</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_student.php?sem=6">
			<b><h1>Semester 6</h1></b>
			</a>
			</div>
		</th>
	</tr>
</table>
	<?php
}
elseif($row['stud_course'] == "2")
{
	?>
<table align="center" cellspacing="20%" width="70%">
	<tr>
		<caption><h2>Add Msc-IT Result</h2></caption>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_student.php?sem=1">
				<b><h1>Semester 1</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_student.php?sem=2">
				<b><h1>Semester 2</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_student.php?sem=3">
			<b><h1>Semester 3</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_student.php?sem=4">
			<b><h1>Semester 4</h1></b>
			</a>
			</div>
		</th>
	</tr>
</table>
	<?php
}


include 'footer.php';
?>
</body>
</html>