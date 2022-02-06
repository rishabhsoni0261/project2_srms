<?php
include 'config.php';

$stud_id=$_GET['id'];

$sql="SELECT * FROM tblstudent WHERE stud_id=$stud_id";
$result=mysqli_query($conn,$sql) or die('Query Unsuccessful.....');

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<title>Edit Student</title>
</head>
<body>
<?include 'header.php'?>
<?php
	if(mysqli_num_rows($result) > 0)  
 	{
      while($row = mysqli_fetch_assoc($result))
      {
?>
	<form action="edit_student_backend.php" method="post">
		<div class="container">
			<center><h2>Update Student</h2></center>

    		<label for="rollno"><b>Student Roll no.:</b></label>
    		<input type="hidden" name="stud_id" value="<?php echo $row['stud_id']?>">
    		<input type="text" placeholder="Enter Roll No. Here" name="stud_rollno" value="<?php echo $row['stud_rollno']?>" required><br>

			<label for="sname"><b>Student Name:</b></label>
    		<input type="text" placeholder="Enter Student Name Here" name="stud_name" value="<?php echo $row['stud_name']?>" required><br>

    		<label for="email"><b>Student Email:</b></label>
    		<input type="email" placeholder="Enter Email Here" name="stud_email" value="<?php echo $row['stud_email']?>" required><br>

    		<label for="DOB"><b>Student DOB(ddmmyy):</b></label>
    		<input type="text" placeholder="Enter Date of Birth Here" name="stud_dob" value="<?php echo $row['stud_dob']?>" required><br>

    		<label for="course"><b>Select Course:</b></label>
    		<?php
            $sql1 = "SELECT * FROM tblcourse";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="stud_course">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['stud_course'] == $row1['cid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?>

			<input type="submit" name="Update" value="Update">
			<input type="reset" src="view_student.php" name="Cancel">
    		
		</div>
	</form>
	<?php 

	} 
		}?>
<?php include 'footer.php'?>
</body>
</html>