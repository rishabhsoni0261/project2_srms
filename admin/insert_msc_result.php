<?php
include 'config.php';

$stud_id=$_GET['id'];
$sem=$_GET['sem'];

$sql="SELECT * FROM tblstudent WHERE stud_id=$stud_id";
$result=mysqli_query($conn,$sql) or die('Query Unsuccessful.....');

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<title>Add Result</title>
</head>
<body>
<?include 'header.php'?>
<?php
	if(mysqli_num_rows($result) > 0)  
 	{
      while($row = mysqli_fetch_assoc($result))
      {
?>
	<form action="insert_msc_result_backend.php?sem=<?php echo $sem?>" method="post">
		<div class="container">
			<center><h2>Add Result of Msc-IT(Semester-<?php echo $sem?>)</h2></center>
        <input type="hidden" name="stud_id" value="<?php echo $row['stud_id']?>">
        <label for="rollno"><b>Student Roll no.:</b></label>
    		<input type="text" name="stud_rollno" value="<?php echo $row['stud_rollno']?>" disabled><br>

			<label for="sname"><b>Student Name:</b></label>
    		<input type="text" name="stud_name" value="<?php echo $row['stud_name']?>" disabled><br>
      <label for="sname"><b>Course:</b></label>
        <input type="text" value="Msc(IT)" disabled><br>
        

    		<label for="p1"><b>Paper 1</b></label>
        <input type="text" placeholder="Enter Marks of Paper 1" name="p1" required>
        <label for="p2"><b>Paper 2</b></label>
        <input type="text" placeholder="Enter Marks of Paper 2" name="p2" required>
        <label for="p3"><b>Paper 3</b></label>
        <input type="text" placeholder="Enter Marks of Paper 3" name="p3" required>
        <label for="p1"><b>Paper 4</b></label>
        <input type="text" placeholder="Enter Marks of Paper 4" name="p4" required>
        <label for="p1"><b>Paper 5</b></label>
        <input type="text" placeholder="Enter Marks of Paper 5" name="p5" required>

			<input type="submit" name="addresult" value="Add Result">
			<input type="reset" src="home.php" name="Cancel">
    		
		</div>
	</form>
	<?php 

	} 
		}?>
<?php include 'footer.php'?>
</body>
</html>