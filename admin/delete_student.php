<?php

$stud_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM tblstudent WHERE stud_id = {$stud_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: view_student.php");

mysqli_close($conn);

?>
