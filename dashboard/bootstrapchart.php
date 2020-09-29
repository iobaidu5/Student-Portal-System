<?php
    include_once "../connection/dbh.inc.php";
  

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>How to Make Attendance Graph using Google Charts</title>
<style>
body {
    width: 660px;
    margin: 0 auto;
}
</style>

</head>
<body>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current',{'pakages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      	// body...
      	var data = google.visualization.arratToDataTable([
               ['Subject','Attend','Bunk']


              <?php
                   $sql = "SELECT * FROM attendance";
               $result = mysqli_query($conn,$sql);
               

                    while ($row = mysqli_fetch_array($result)) {
                      # code...

                      echo "['".$row['subject']."', '".$row['attend']."', '".$row['bunk']."'],";

               }
              ?>

      		]);

      	   var option = {
      	   	     title: 'Attendance Graph Sheet'
      	   };

      	       var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      	       chart.draw(data,options);
      }
    </script>


       <div id="chart_div" ></div>


         <?php
                   $sql = "SELECT * FROM attendance";
               $result = mysqli_query($conn,$sql);
               

                    while ($row = mysqli_fetch_assoc($result)) {
                      # code...

                      echo "'".$row['subject']."', '".$row['attend']."', '".$row['bunk']."'";

               }
              ?>
    
</body>
</html>