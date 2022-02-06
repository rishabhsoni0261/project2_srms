<?php 

include 'config.php';

$sem=$_REQUEST['sem'];

$sql="SELECT * FROM tblstudent JOIN tblcourse WHERE tblstudent.stud_course = tblcourse.cid and tblstudent.stud_course=1";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful......");

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<style type="text/css">
		tr:nth-child(odd){background-color: #f2f2f2}

	</style>
	<title></title>
</head>
<body>
	<?php include 'header.php'?>
	<div >
	<?php
		if(mysqli_num_rows($result) > 0)
		{
	?>
	<table style="border-collapse: collapse;width: 100%;">
		<center><caption><h1>Add Msc-IT Result</h1></caption></center>
	 	<tr>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">ID</th>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">Roll no.</th>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">Student Name</th>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">Student Email</th>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">Student DOB</th>
			<th style="text-align: left; padding: 15px; background-color: #04AA6D; color: white;">Action</th>
		</tr>
		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td style="text-align: left; padding: 15px;"><?php echo $row['stud_id']; ?></td>
			<td style="text-align: left; padding: 15px;"><?php echo $row['stud_rollno']; ?></td>
			<td style="text-align: left; padding: 15px;"><?php echo $row['stud_name']; ?></td>
			<td style="text-align: left; padding: 15px;"><?php echo $row['stud_email']; ?></td>
			<td style="text-align: left; padding: 15px;"><?php echo $row['stud_dob']; ?></td>
			<td style="text-align: left; padding: 15px;"><a href="insert_bca_result.php?id=<?php echo $row['stud_id'];?>&&sem=<?php echo $sem?>" class="editbtn" style="width: auto; padding: 10px 18px; background-color: #66b3ff;" onclick="return confirm('Are you Sure to Add Sem- <?php echo $sem; ?> result')"><b>Add Sem <?php echo $sem?> result</b></a></td>
		</tr>
		<?php }?>
	</table>
	<?php
		}else
		{
			echo "<h2>No Record Found</h2>";
		}
		mysqli_close($conn);
	?>
	</div>
	<div>&nbsp<br></div>
	<?php include 'footer.php'?>
</body>
</html>