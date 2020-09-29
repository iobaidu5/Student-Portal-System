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

<center><h1> Add Assignment </h1></center>
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
    <label for="Course Code">Course Code</label>
    <input type="text" class="form-control" name="c_code">
  </div>
  <div class="form-group">
    <label for="c_name">Course Name</label>
    <input type="text" class="form-control" name="c_name">
  </div>

 

<div class="form-group">
    <label for="upload">Upload Assignment</label>
    <input type="file" name="file" class="form-control" id="assignment">
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
             
             $ccode = $_POST['c_code'];
             $cname = $_POST['c_name'];
              $file = $_FILES['file']['name'];
               $target = "uploads/".basename($_FILES['file']['name']);

                $query = "INSERT INTO assignment (coursecode,coursename,assignment) VALUES ('$ccode','$cname','$file')";
                $result = mysqli_query($conn,$query);
                if (!$result) {
                  # code...
                     echo "Uploading Failed Failed";
                }else{
                echo "<div style='font-size: 20px; color: GREEN;'>";  echo "Upload Successfully"; echo "</div>";
                }
                move_uploaded_file($_FILES['file']['tmp_name'],$target);
             }


?>

</div>

<?php



?>

</body>
</html>