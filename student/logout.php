<?php
	session_start();
	unset($_SESSION['stud_username']);
	header("location:student_login.php");
?>