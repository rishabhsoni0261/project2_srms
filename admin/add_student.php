<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<title>Add Student</title>
</head>
<body>
	<?php include 'header.php'?>
	<form action="add_student_backend.php" method="post">
		<div class="container">
			<center><h2>Add New Student</h2></center>

    		<label for="rollno"><b>Student Roll no.:</b></label>
    		<input type="text" placeholder="Enter Roll No. Here" name="stud_rollno" required><br>

			<label for="sname"><b>Student Name:</b></label>
    		<input type="text" placeholder="Enter Student Name Here" name="stud_name" required><br>

    		<label for="email"><b>Student Email:</b></label>
    		<input type="email" placeholder="Enter Email Here" name="stud_email" required><br>

    		<label for="DOB"><b>Student DOB(ddmmyy):</b></label>
    		<input type="text" placeholder="Enter Date of Birth Here" name="stud_dob" required><br>

    		<label for="course"><b>Select Course:</b></label>
    		<select name="stud_course">
					<option value="" selected disabled>---Select Course---</option>
				<?php
                include 'config.php';

                $sql = "SELECT * FROM tblcourse";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> ></option>

              <?php } ?>
					
				</select>

			<input type="submit" name="Submit">
			<input type="reset" name="Cancel">
    		
		</div>
	</form>
	<?php include 'footer.php'?>
</body>
</html>