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
    

<link rel="stylesheet" type="text/css" href="style.css">

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

        <font size="2" id="welcome_name" style="color: white; margin-left: 25px;">Welcome </font>
        <li class="nav-item active">
          <br><br>
          <a class="nav-link" href="index.php" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: whitesmoke; color: black;">
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

if(isset($_REQUEST['check']))
{
    

        $name = $_SESSION['username'];
        $sql = "SELECT id FROM registration WHERE regno = '$name' ";
        $result = mysqli_query($conn,$sql);

        $std = mysqli_fetch_assoc($result);

        $std_id = $std['id'];


     if (isset($_REQUEST['course'])) 
        foreach($_REQUEST['course'] as $course)
        {

            $query ="select distinct cid from course where cname = '$course' ";
        
             $rs =  mysqli_query($conn,$query);

            $r = mysqli_fetch_assoc($rs);

            $c_code = $r['cid'];

            $query = "insert into take set std_id = '$std_id', c_id = '$c_code' ";
            
             mysqli_query($conn,$query);

        }

    }


if(isset($_REQUEST['del_id']))
{
    //$del_query = "delete from student where sid = ".$_REQUEST['del_id'];
    // $rs =  mysqli_query($conn,$del_query);
    $del_query = "delete from take where c_id = ".$_REQUEST['del_id']." ";
     mysqli_query($conn,$del_query);
}


?>

<div class="border border-dark" style=" border-radius: 25px;">    

<form action="" method="post">
<input type="hidden" name="check" value="1">
<br />
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand">Select Your Courses:</div>
       </div>
     </div>
</nav>




      
<?php  
      $query = "select * from course";
     $rs =  mysqli_query($conn,$query);

    while($r = mysqli_fetch_assoc($rs))
    {

?>   
 <label class="container">

        <input type="checkbox" name="course[]" value="<?php echo $r['cname']; ?> "> <?php echo $r['cname']; ?> &nbsp;&nbsp;
        <span class="checkmark"></span>
        </label>
<?php        
    }

?>

    
<br>
<center>
<input type="submit" value="Submit" class="btn btn-primary" >
</center>

</form>
</div> 
 <div id="page-wrapper">
            <div class="row">
              
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">

<?php
    $query = "select * from course join take on cid = c_id";
     $result =  mysqli_query($conn,$query);
    ?>
    
 
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>

        <th>Course</th>
        <th>Delete</th>
    </tr>
    </thead>
                   
                  

    <?php
       if (mysqli_num_rows($result) > 0) {
         # code...
       
      while($row = mysqli_fetch_assoc($result)) {
          
          echo "<tr>
                    <td>".$row['cname']."</td>
                    <td><a href='course.php?del_id=".$row['c_id']."'>
                    Delete </a> </td>
          </tr>";
      }
          }
    ?>

</table>


          </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <!-- /.row -->
           
            
           
        </div>
        <!-- /#page-wrapper -->
















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
