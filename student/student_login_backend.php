<?php
session_start();
include 'config.php';
$username=$_REQUEST['uname'];
$password=$_REQUEST['psw'];

	$check="select * from tblstudent where stud_email='$username' and stud_dob='$password'";
	$check1=mysqli_query($conn,$check);
	$check2=mysqli_fetch_array($check1);
	$no_row=mysqli_num_rows($check1);
	if($no_row==1)
	{
		$_SESSION['stud_username']=$username;
		$_SESSION['stud_id']=$check2['stud_id'];
		header("location:stud_home.php");
	}
	else
	{
		echo "Invalid";
	}

?>