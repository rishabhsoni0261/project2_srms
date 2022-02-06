<?php
include 'config.php';

$stud_id=$_POST['stud_id'];
$sem=$_REQUEST['sem'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];

//include 'config.php';
if($sem == "1")
{
	$sql="INSERT into tblresult_bca_sem1(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}
elseif ($sem == "2")
{
	$sql="INSERT into tblresult_bca_sem2(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}
elseif ($sem == "3")
{
	$sql="INSERT into tblresult_bca_sem3(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}
elseif ($sem == "4")
{
	$sql="INSERT into tblresult_bca_sem4(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}
elseif ($sem == "5")
{
	$sql="INSERT into tblresult_bca_sem5(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}
elseif ($sem == "6")
{
	$sql="INSERT into tblresult_bca_sem6(stud_id,paper1,paper2,paper3,paper4,paper5) VALUES ('$stud_id','$p1','$p2','$p3','$p4','$p5') ";
}

$result=mysqli_query($conn,$sql) or die("Query Unsuccessful........"); 
header("location:add_bca_result.php");
mysqli_close($conn);

?>