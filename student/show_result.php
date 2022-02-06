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
	<br>

<br>
<br>
<br>
<table align="center" cellspacing="20%" cellpadding="20%" width="70%">
	<tr>
		<caption><h2>Select Semester for Result</h2></caption>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=1">
				<b><h1>Semester 1</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=2">
				<b><h1>Semester 2</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=3">
			<b><h1>Semester 3</h1></b>
			</a>
			</div>
		</th>
		
	</tr>
	<tr>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=4">
			<b><h1>Semester 4</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=5">
				<b><h1>Semester 5</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_bca_result.php?sem=6">
			<b><h1>Semester 6</h1></b>
			</a>
			</div>
		</th>
	</tr>
</table>
<br>
<br>
<br>
<br>
	<?php
}
elseif($row['stud_course'] == "2")
{
	?>
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table align="center" cellspacing="20%" width="70%">
	<tr>
		<caption><h2>Select Semester for Result</h2></caption>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_result.php?sem=1">
				<b><h1>Semester 1</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_result.php?sem=2">
				<b><h1>Semester 2</h1></b>
			</a>
			</div>
		</th>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_result.php?sem=3">
			<b><h1>Semester 3</h1></b>
			</a>
			</div>
		</th>
		<th><div style="height: 150; width: 100;">
			<a href="view_msc_result.php?sem=4">
			<b><h1>Semester 4</h1></b>
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
	<?php
}


include 'footer.php';
?>
</body>
</html>