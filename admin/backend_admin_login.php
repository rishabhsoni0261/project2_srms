<?php
session_start();
include 'config.php';
$username=$_REQUEST['uname'];
$password=$_REQUEST['psw'];

	$check="select * from tbladmin where admin_name='$username' and admin_password='$password'";
	$check1=mysqli_query($conn,$check);
	$check2=mysqli_fetch_array($check1);
	$no_row=mysqli_num_rows($check1);
	if($no_row==1)
	{
		$_SESSION['admin_username']=$username;
		$_SESSION['admin_id']=$check2['admin_id'];
		header("location:home.php");
	}
	else
	{
		echo "Invalid";
	}

?>