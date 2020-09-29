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

<center><h1> Add Course </h1></center>
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

<form method="POST" action="addcourse.php">
	<div class="col-xs-3" style="margin-left: 250px;">
<div class="form-group">
  <label for="id">Course Id: </label>
  <input type="text" class="form-control" name="cid">
</div>
<div class="form-group">
  <label for="name">Course Name: </label>
  <input type="text" class="form-control" name="cname">
</div>


   <input type="submit" name="submit" class="btn btn-success" value="Add Course">
</div>
</form>

</div>

<?php


             if (isset($_POST['submit'])) {
             	# code...

             $id = $_POST['cid'];
             $cname = $_POST['cname'];
             	  $query = "INSERT INTO course (cid,cname) VALUES ('$id','$cname')";
             	  $result = mysqli_query($conn,$query);
             	  if (!$result) {
             	  	# code...
             	  	   echo "Adding Failed";
             	  }else{
             	  echo "<div style='font-size: 20px; color: GREEN;'>";	echo "Add Successfully"; echo "</div>";
             	  }
             }


?>

</body>
</html>