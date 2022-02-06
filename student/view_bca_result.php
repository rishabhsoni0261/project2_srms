<?php

session_start();
$sem=$_REQUEST['sem'];
$stud_id=$_SESSION['stud_id'];

include 'config.php';
if($sem == "1")
{
	$sql="SELECT * FROM tblresult_bca_sem1 JOIN tblstudent WHERE tblresult_bca_sem1.stud_id = tblstudent.stud_id AND tblresult_bca_sem1.stud_id='$stud_id'";
}
elseif ($sem == "2")
{
	$sql="SELECT * FROM tblresult_bca_sem2 JOIN tblstudent WHERE tblresult_bca_sem2.stud_id = tblstudent.stud_id AND tblresult_bca_sem2.stud_id='$stud_id'";
}
elseif ($sem == "3")
{
	$sql="SELECT * FROM tblresult_bca_sem3 JOIN tblstudent WHERE tblresult_bca_sem3.stud_id = tblstudent.stud_id AND tblresult_bca_sem3.stud_id='$stud_id'";
}
elseif ($sem == "4")
{
	$sql="SELECT * FROM tblresult_bca_sem4 JOIN tblstudent WHERE tblresult_bca_sem4.stud_id = tblstudent.stud_id AND tblresult_bca_sem4.stud_id='$stud_id'";
}
elseif ($sem == "5")
{
	$sql="SELECT * FROM tblresult_bca_sem5 JOIN tblstudent WHERE tblresult_bca_sem5.stud_id = tblstudent.stud_id AND tblresult_bca_sem5.stud_id='$stud_id'";
}
elseif ($sem == "6")
{
	$sql="SELECT * FROM tblresult_bca_sem6 JOIN tblstudent WHERE tblresult_bca_sem6.stud_id = tblstudent.stud_id AND tblresult_bca_sem6.stud_id='$stud_id'";
}
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful......");
$row = mysqli_fetch_array($result);

//Fpr student details
session_start();
$stud_id=$_SESSION['stud_id'];

include 'config.php';
$sql1="SELECT * FROM tblstudent JOIN tblcourse WHERE tblstudent.stud_course = tblcourse.cid and tblstudent.stud_id='$stud_id'";
$result1=mysqli_query($conn,$sql1) or die("Query Unsuccessful......");
$row1= mysqli_fetch_array($result1);

$p1=$row['paper1'];
$p2=$row['paper2'];
$p3=$row['paper3'];
$p4=$row['paper4'];
$p5=$row['paper5'];

$count=$p1+$p2+$p3+$p4+$p5;
$per=$count*100/500;

if ($per > 35) 
{
	$grade="Pass";
}
else
{
	$grade="Fail";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		th,td{ text-align: left; padding: 15px;"}
	</style>
</head>
<body>
	<div>
		<table align="center" style="border-style: double;" border="4" width="50%">
			<tr>
				<th colspan="2">S_ID:<?php echo $row1['stud_id']?></th>
			</tr>
			<tr>
				<td >Name: <?php echo $row1['stud_name']?></td>
				<td >Roll no.: <?php echo $row1['stud_rollno']?></td>
			</tr>
			<tr>
				<td >Course: <?php echo $row1['cname']?></td>
				<td >Semester: <?php echo $sem?></td>
			</tr>
			<tr>
				<th colspan="2" ><center>Marks</center></th>
			</tr>
			<tr>
				<th>Paper 1</th>
				<td><?php echo $p1?></td>
			</tr>
			<tr>
				<th>Paper 2</th>
				<td><?php echo $p2?></td>
			</tr>
			<tr>
				<th>Paper 3</th>
				<td><?php echo $p3?></td>
			</tr>
			<tr>
				<th>Paper 4</th>
				<td><?php echo $p4?></td>
			</tr>
			<tr>
				<th>Paper 5</th>
				<td><?php echo $p5?></td>
			</tr>
			<tr>
				<th>Percentage</th>
				<td><?php echo $per?>%</td>
			</tr>
			<tr>
				<th>Grade</th>
				<td><?php echo $grade?></td>
			</tr>
		</table>

	</div><br>
	<br>
	<div align="center">
            <button onclick="window.print()">Print Result</button>
        </div>
</body>
</html>