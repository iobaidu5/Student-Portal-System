<?php
    session_start();

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


     <!-- Attendence Chart -->
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    



  </head>

  <body id="page-top">
    <style type="text/css">
  body {
    background-size: cover;
    background-color:   whitesmoke;
}
  #imgdiv{
    width: 100%;
  
  }
</style>

    <!-- TOp Line <nav class="navbar navbar-expand navbar-dark bg-dark static-top"></nav>  -->

      <!-- Navbar Search 
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      -->

 
      

    </nav>

    <div id="wrapper">


      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <img src="img/uetmlogo.png" height="150px" width="150px" align="text-center" style="margin-left: 30px;">
        <font size="2" id="welcome_name" style="color: white; margin-left: 60px; font-size: 20px;"> <?php 
       echo "Welcome " ?> </font>
        <li class="nav-item active">
          <br><br>
          <a class="nav-link" href="index.php" style="background-color: whitesmoke; color: black;">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="course.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Courses</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assignment.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Assignments</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="result.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Results</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calender.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Calender</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="timetable.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Time Table</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="fee.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>
            Fee</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

      
          
        <!-- /.container-fluid -->







      <?php

$name = $_SESSION['username'];
$sql = "SELECT * FROM registration WHERE regno = '$name' ";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  # code...

     echo "<div id ='imgdiv' style='margin-left: 25px;'>";

    
echo "<table border='1'  class='table table-striped'>";

echo "<tr>";
echo "<td rowspan='5'>";
     echo "<img src='../newuser/uploads/".$row['image']."' height='150px' width='150px' style=' margin-left: 5px; '>";
   echo "</td>";
    echo "</tr>";







 echo "<tr>";
      echo "<td>Name: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ".$row['firstname']." ".$row['lastname']." &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>";
      echo "<td>Registration Number: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ".$row['regno']."</td>";
   echo "</tr>";

    echo "<tr>";
      echo "<td>Gender: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ".$row['gender']."&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>";
      echo "<td>Email: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ".$row['email']."</td>";
   echo "</tr>";

    echo "<tr>";
      echo "<td>Program: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;".$row['program']."&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>";
      echo "<td>Session: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ".$row['session']."</td>";
   echo "</tr>";

    echo "<tr>";
      echo "<td>Current Section: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; B &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>";
      echo "<td>Course Insrtuctor: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Engr. Hamayoon Khan</td>";
   echo "</tr>";

echo "</table>"; 
  echo "</section>";

echo "</div>";

  

}
     
?>

         <hr><hr>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Subject', 'Attend', 'Bunk'],
          
          <?php

               $sql = "SELECT * FROM attendance";
               $result = mysqli_query($conn,$sql);
               

                    while ($row = mysqli_fetch_array($result)) {
                      # code...

                      echo "['".$row['subject']."', '".$row['attend']."', '".$row['bunk']."']";

               }
          ?>
        ]);

        var materialOptions = {
          width: 1000,
          chart: {
         
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
         
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>



   
    <div id="chart_div"></div>

</div>
</div>

        </div>





        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Obaid-Khan 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

  

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
