<?php
    include_once "../connection/dbh.inc.php";
  

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Portal System</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


     <!-- Printingt -->
          

<link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body id="page-top">
    <style type="text/css">
  
 


body{
      background-size: cover;
    background-color:   whitesmoke;
}
 .row{
     padding-left: 50px;
     padding-top: 20px;
     display: inline;
    

 }

 .radius{
   border: 2px solid black;
   padding: 20px;
   border-radius: 10px;
 }


 
    </style>  

    </nav>

    <div id="wrapper">


      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <img src="img/uetmlogo.png" height="150px" width="150px" align="text-center" style="margin-left: 30px;">

        <font size="2" id="welcome_name" style="color: white; margin-left: 25px;">Welcome </font>
        <li class="nav-item active">
          <br><br>
          <a class="nav-link" href="index.php" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="course.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Courses</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assignment.php" >
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Assignments</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="result.php" >
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Results</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calender.php" >
            <i class="fas fa-fw fa-table"></i>
            <span>Calender</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="timetable.php"  >
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Time Table</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="fee.php" style="background-color: whitesmoke; color: black;">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Fee</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

      
          
        <!-- /.container-fluid -->

         
         <div class="row">
        <div >
            <div class="row">

              <div class ="radius">
               
                    <img src="img/uetmlogo.png" height="50" width="50">
                   <font size="5"> University Of Engineering And Technology, Mardan</font>
            
            <div class="row">
                <div class="text-center">
                    <h1>Fee Slip</h1>
                </div>
                </span>
                <table class="table table-hover">
                   
                        <tr>
                            <th>Student Name: </th>
                            <th>Obaid-Khan</th>
                            <th >Registration No.</th>
                            <th>16MDSWE0642</th>
                        </tr>
                    
                    
                        <tr>
                             <th>Semester </th>
                            <th>5th</th>
                            <th >Program</th>
                            <th>Computer Software Engineering</th>
                        </tr>
                        <tr>
                            <th>Amount: </th>
                            <th>55855/-</th>
                            <th >Last Date Of Submission</th>
                            <th>11/02/2019</th>
                        </tr>
                        <tr>
                            
                        </tr>
                      
                       
                   
                </table>
              </div>
                <center>
                <button type="button" onclick="window.print();" class="btn btn-success">
                    Print Now!  <span class="glyphicon glyphicon-chevron-right"></span>
                </button></center>
            </div>
        </div>
  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>



  </body>

</html>
