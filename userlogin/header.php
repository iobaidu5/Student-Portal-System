
<?php
session_start();
      include_once "../connection/dbh.inc.php";
        


      ?>
      <?php

             
         if (isset($_POST['loginadmin'])) {
           # code...

          $uname = $_POST['username'];
          $pwd = $_POST['password'];
           $sql = "SELECT * from admin WHERE username = '".$uname."' AND password = '".$pwd."'";
           $result = mysqli_query($conn,$sql);
           if (mysqli_num_rows($result) > 0) {
             # code...
                header("Location: ../admin/index.php");
           }else{
               header("Location: index.php");
           }
         }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log-In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body background="img/bg.jpg">

    <?php
          

         if (isset($_POST['loginstudent'])) {
           # code...
          $uname = $_POST['username'];

          $pwd = $_POST['password'];
           $sql = "SELECT * from registration  WHERE regno = '".$uname."' AND password = '".$pwd."'";
           $result = mysqli_query($conn,$sql);
           if (mysqli_num_rows($result) > 0) {
             # code...
             $_SESSION['username'] = $_POST['username'];
                header("Location: ../dashboard/index.php");
           }else{
             $_SESSION['username'] = $_POST['username'];
               header("Location: index.php");
           }

         }
?>

  <header>

   <nav class = "navbar navbar-inverse">
    <font size="6" class="welcome">| Student &nbsp;Portal &nbsp;System |</font>
     <a href="#" class = "navbar-brand">
       
     </a>

        <div class="nav navbar-nav navbar-right" id="navbar">

        
            <form action="#" method="post" class="navbar-form navbar-left">
            <input type = "text" name="username" placeholder = "Username/E-mail..." class="form-control">&nbsp;&nbsp;

            <input type = "password" name="password" placeholder = "Password..." class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="loginstudent" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Log In</button>
             <button type="submit" name="loginadmin" class="btn btn-default" id="sign" style="margin-right:10px;"><span class="glyphicon glyphicon-user" ></span> Login Admin</button></div>

             <?php 
         // $_SESSION['username'] = $_POST['username'];
  ?>

            </form>
            <div class="navbar-form navbar-left">
           

           

      </div>

   </nav>
            
   <aside id="aside">
<img src = "img/avatar.png" height="200" width="200" class="avatar"/>
<hr>
<div class="intro" style="color: whitesmoke;"><center> <h2>Intro:</h2><hr>
  <font size="3">Name: Obaid-Khan
    <hr>Dept/Sec: CSE-15/B
    <hr>Reg#: 16MDSWE0642
    <hr>University Of Engineering & Technology,Mardan
  </font>
  </center>
</div>
</aside>

  </header>



     

</body>
</html>