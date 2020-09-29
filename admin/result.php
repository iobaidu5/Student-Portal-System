<?php
    include_once "../connection/dbh.inc.php";
  
?>

<html>
<head>
<title>Course</title>
!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">

<center><h1> Result Section </h1></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="../newuser/index.php" target="_blank">Register</a></li>
	<li><a href="addcourse.php">Add Course</a></li>
	<li><a href="assignment.php" target="_blank">Upload Assignment</a></li>
	<li><a href="result.php" target="_blank">Update Result</a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<form class="md-form"  method="POST"   enctype="multipart/form-data">
  <div class="col-xs-3" style="margin-left: 250px;">
 <div class="form-group">
    <label for="Course Code">Student Id</label>
    <input type="text" class="form-control" name="ssid">
  </div>
  <div class="form-group">
    <label for="c_name">Subject</label>
    <input type="text" class="form-control" name="subject">
  </div>

 

<div class="form-group">
    <label for="upload">GPA</label>
    <input type="text" name="gpa" class="form-control" id="">
  </div>
<div class="form-group">
    <label for="upload">Grade</label>
    <input type="text" name="grade" class="form-control" >
  </div>

<div class="form-group">
    <label for="upload">Semester</label>
    <input type="text" name="semester" class="form-control" >
  </div>

  <div class="form-group">
   <center> <button type="submit" name="submit" class="btn btn-primary" >Upload</button></center>
  </div>
</div>
</div>

</form>


      <?php

             if (isset($_POST['submit'])) {
              # code...
             
             $sid = $_POST['ssid'];
             $subject = $_POST['subject'];
             $gpa = $_POST['gpa'];
             $grade = $_POST['grade'];
             $semester = $_POST['semester'];
              

                $query = "INSERT INTO result (std_id,subject,gpa,grade,semester) VALUES ('$sid','$subject','$gpa','$grade','$semester')";
                $result = mysqli_query($conn,$query);
                if (!$result) {
                  # code...
                     echo "Adding Failed";
                }else{
                echo "<div style='font-size: 20px; color: GREEN;'>";  echo "Add Successfully"; echo "</div>";
                }
                
             }


?>

</div>

<?php



?>

</body>
</html>