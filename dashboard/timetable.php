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


     <!-- Attendence Chart -->
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

<link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body id="page-top">
    <style type="text/css">
  
 
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400);

body{
      background-size: cover;
    background-color:   whitesmoke;
  background: #fafafa;
  font-family: sans-serif;

}


*, *:before, *:after {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

#overlay {
      background-color: rgba(46,204,113,0.94);
      z-index: 1006;
      position: absolute;
      right: 40px;
      top: 10px;
      width: 200px;
      height: inherit;
      display: none;
      margin: 0 auto;
      padding: 10px;
      color: #efefef;
      text-align: center;
      font-weight: 600;
      font-family: 'Open Sans', Helvetica;
}

.corVermelha{ background: #da2424 !important;}
.corVerde{    background: #bdff3b !important;}

.blue { background: #3498db; }

.purple { background: #9b59b6; }

.navy { background: #34495e; }

.green { background: #2ecc71; }

.red { background: #e74c3c; }

.orange { background: #f39c12; }

.cs335, .cs426, .md303, .md352, .md313, .cs240 {
  font-weight: 300;
  cursor: pointer;
}

table {
  font-family: 'Open Sans', Helvetica;
  color: #100f0f;
}
table tr:nth-child(2n) {
  background: #eff0f1;
}
table tr:nth-child(2n+3) {
  background: #fff;
}
table th, table td {
  padding: 1em;
  width: 10em;
}

.days, .time {
  background: #34495e;
  color: whitesmoke;
  text-transform: uppercase;
  font-size: 12px;
  text-align: center;
}

.time {
  width: 3em !important;
}

/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
  -moz-transition: ease 0.5s all;
  -o-transition: ease 0.5s all;
  -webkit-transition: ease 0.5s all;
  transition: ease 0.5s all;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  background-color: black;
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid black;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  bottom: 90%;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}

#main {
    min-height: 800px;
    margin: 0px;
    padding: 0px;
    display: flex;
    flex-flow: row;
}

#main > article {
    margin: 4px;
    padding: 5px;
    /*border: 1px solid #cccc33;*/
    /*border-radius: 7pt;*/
    /*background: #dddd88;*/
    flex: 3 1 60%;
    order: 2;
}

#main > nav {
    margin: 4px;
    padding: 5px;
    /*border: 1px solid #8888bb;
    border-radius: 7pt;
    background: #ccccff;*/
    flex: 1 6 20%;
    order: 1;
}

#main > aside {
    margin: 4px;
    padding: 5px;
    border: 1px solid #8888bb;
    border-radius: 7pt;
    background: #ccccff;
    flex: 1 6 20%;
    order: 3;
}

header, footer {
    display: block;
    margin: 4px;
    padding: 4em;
    min-height: 100px;
    /*border: 1px solid #eebb55;*/
    /*border-radius: 7pt;*/

    background-color: #17BEBB;
    border-bottom: 0.5em solid #2E282A;
    color: #2E282A;
    text-align: center;
    /*margin-bottom: 2em;*/
    /*padding: 4.5em 2em;*/
}
.hero {
  background-color: #17BEBB;
  border-bottom: 0.5em solid #2E282A;
  color: #2E282A;
  text-align: center;
  /*margin-bottom: 2em;*/
  padding: 4.5em 2em;
}

.hero p {
  margin-bottom: 0;
}
h1 {
  font-family: 'Roboto Slab';
  font-size: 100%;
  margin: 0 0 0.25em;
}

/*List*/

h1{
  color: #fff;
  text-align: center;
  font-size: 40px;
  font-weight: 100;
}

ul{
  list-style: none;
  margin: 0;
  padding: 0;
}



input[type=checkbox] {
  /*ocultar checkbox*/
  display: none;
}



label{
  background: #34495E;
  height: 69px;
  width: 100%;
  display: block;
  border-bottom: 1px solid #2C3E50;
  color: #fff;
  text-transform: capitalize;
  font-weight: 900;
  font-size: 11px;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.7s ease;
  position: relative;
  padding: 5px 5px 5px 70px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}


label h2 span{
  display: block;
  font-size: 5px;
  text-transform: capitalize;
  font-weight: normal;
  color: #bdc3c7;
}

label:before{
  content:"";
  width: 19px;
  height: 19px;
  border: 1px solid #416282;
  display: block;
  position: absolute;
  border-radius: 100%;
  left: 20px;
  top: 30%;
  transition: border 0.7s ease;
  z-index: 9999;
}
/*
label:after{
  content: "";
  width: 60px;
  height: 68px;
  background: #2C3E50;
  position: absolute;
  left: 0;
  top: 0;
}*/


#label-1:checked ~ label[for=label-1],
#label-2:checked ~ label[for=label-2],
#label-3:checked ~ label[for=label-3],
#label-4:checked ~ label[for=label-4],
#label-5:checked ~ label[for=label-5]{
  background: #2C3E50;
  border-bottom: 1px solid #34495E;
  color: #1ABC9C;
}

#label-1:checked ~ label[for=label-1] h2 span,
#label-2:checked ~ label[for=label-2] h2 span,
#label-3:checked ~ label[for=label-3] h2 span,
#label-4:checked ~ label[for=label-4] h2 span,
#label-5:checked ~ label[for=label-5] h2 span{
  color: #1ABC9C;
}



#label-1:checked ~ label[for=label-1]:before,
#label-2:checked ~ label[for=label-2]:before,
#label-3:checked ~ label[for=label-3]:before,
#label-4:checked ~ label[for=label-4]:before,
#label-5:checked ~ label[for=label-5]:before{
  /*background: url("https://designmodo.github.io/Flat-UI/images/todo/done.png") no-repeat center center;*/
  background-color: #f90;
  border: 1px solid #1abc9d;
}

li:first-child label{
  height: 50px;
  text-transform: uppercase;
  /*font-size: 12px;*/
  border-right: 8px solid #f87c85;
  padding-top: 5%;
  padding-bottom: 5%;
}


li:first-child label:before{
  top: 40%;
}

li:first-child label:after{
  height: 149px;
}

li:nth-child(2) label{
  border-right: 8px solid #feb47f;
}

li:nth-child(3) label{
  border-right: 8px solid #3498db;
}

li:nth-child(4) label{
  border-right: 8px solid #b985ea;
}

li:last-child label{
  border-right: 8px solid #43d6b0;
}


.list-header{
  background: #8BC34A;
  padding: 5%;
  font-size: 14px;
}

/* Too narrow to support three columns */
@media screen and (max-width: 680px){
    #main, #page {
        flex-direction: column;
    }

    #main > article, #main > nav, #main > aside {
    /* Return them to document order */
        order: 0;
    }

    #main > nav, #main > aside, header, footer {
        min-height: 50px;
        max-height: 50px;
    }
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
          <a class="nav-link" href="timetable.php"  style="background-color: whitesmoke; color: black;">
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

         
         <div id="overlay"></div>
    <h2>Time Table</h2><br>

    <!-- <header>

            <h1>Grid : Flex</h1>
            <p><strong>A bare-bones 12-column grid</strong></p>

    </header> -->
    <div id='main'>
        <article>

            <!-- / College Timetable -->
            <div class='tab'>
                <table border='0' cellpadding='0' cellspacing='0'>
                    <tr class='days'>
                        <th></th>
                        <th>08:00-09:00</th>
                        <th>09:00-10:00</th>
                        <th>10:00-11:00</th>
                        <th>11:00-12:00</th>
                        <th>12:00-01:00</th>
                        <th>01:00-02:00</th>
                        <th>02:00-03:00</th>
                        <th>03:00-04:00</th>
                    </tr>
                    <tr>
                        <td class='time'>MONDAY</td>
                       <center><td colspan="3">Web Engineering Lab</td></center> 
                        
                        <td id='c4'>Software Requirment Enginnering</td>
                        <td id='c5'>Operating System Lab</td>
                        <td id='c5'>Break</td>
                        <td colspan="2" id='c5'>Operating System Lab</td>
                    </tr>
                    <tr>
                        <td class='time'>TUESDAY</td>
                        <td colspan="3"id='c1'>Probability & Statstics</td>
                        
                        <td id='c4'>Software Requirment Enginnering</td>

                        <td id='c5'></td>
                        <td id='c5'>Break</td>
                        <td colspan="2" id='c5'>Web Engineering</td>
                    </tr>
                    <tr>
                        <td class='time'>WEDNESDAY</td>
                         <td id='c1'></td>
                         <td id='c4'></td>
                         <td id='c4'></td>
                        
                        <td id='c4'>Web Engineering</td>
                        <td id='c4'>Operating System</td>
                        <td id='c5'>Break</td>
                        <td id='c5'></td>
                        <td id='c5'></td>
                    </tr>
                    <tr>
                        <td class='time'>THURSDAY</td>
                        <td id='c4'></td>
                        <td id='c4'></td>
                        <td id='c4'>Software Requirment Engineering</td>
                          <td colspan="2"id='c4'>Operating System</td>
                        <td id='c5'>Break</td>
                        <td id='c5'></td>
                        <td id='c5'></td>
                    </tr>
                    <tr>
                        <td class='time'>FRIDAY</td>
                        <td id='c21'></td>
                        <td colspan="3" id='c22'>Technical Writing</td>
                        <td id='c23'></td>
                        <td id='c24'>Break</td>
                        <td id='c25'>-</td>
                    </tr>
                    
                    
                </table>
            </div>

        </article>
       
        <!-- <aside>aside</aside> -->
    </div>

    <script src='main.js'></script>



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
