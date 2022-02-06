<?php

$stud_rollno= $_POST['stud_rollno'];
$stud_name= $_POST['stud_name'];
$stud_email= $_POST['stud_email'];
$stud_dob= $_POST['stud_dob'];
$stud_course= $_POST['stud_course'];

include 'config.php';

$sql="INSERT INTO tblstudent(stud_rollno,stud_name,stud_email,stud_dob,stud_course) VALUES ('$stud_rollno','$stud_name','$stud_email','$stud_dob','$stud_course') ";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful........"); 

header("location:view_student.php");
mysqli_close($conn);
?>