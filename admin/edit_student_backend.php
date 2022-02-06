<?php
$stud_id= $_POST['stud_id'];
$stud_rollno= $_POST['stud_rollno'];
$stud_name= $_POST['stud_name'];
$stud_email= $_POST['stud_email'];
$stud_dob= $_POST['stud_dob'];
$stud_course= $_POST['stud_course'];

include 'config.php';

$sql = "UPDATE tblstudent SET stud_rollno = '{$stud_rollno}',stud_name = '{$stud_name}', stud_email = '{$stud_email}',stud_dob = '{$stud_dob}', stud_course = '{$stud_course}' WHERE stud_id = {$stud_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:view_student.php");

mysqli_close($conn);

?>