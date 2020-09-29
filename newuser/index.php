<?php
    session_start();
    include_once '../connection/dbh.inc.php';
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
	body {
     background: url('balckground.jpg') fixed;
    background-size: cover;
    background-color:   #666699;
}
.panel-heading{
    color: white;
}
*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}


</style>
<div class="container-fluid">
     <h1 class="panel-heading">Registration Form</h1>

<form method="POST" action="upload.php"  enctype="multipart/form-data" >
    <div id="wrapper">
 <div id="page-wrapper">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
            <div class="row">
            <div class="col-lg-10">
            <div class="form-group">
            <div class="col-lg-4">
            <label>Select Program<span id="" style="font-size:11px;color:red">*</span>   </label>
            </div>
            <div class="col-lg-6">
<select class="form-control" name="program" id="program"  onchange="showSub(this.value)" required="required" >          
<option VALUE="">SELECT</option>
<option VALUE="">Computer Software Engineering</option>
<option VALUE="">Telecommunication Enginnering</option>
<option VALUE="">Electrical (Power) Engineering</option>
<option VALUE="">Electrical (Communication) Engineering</option>
<option VALUE="">Computer Science</option>
                
                  </select>
                                        </div>
                                            
                                        </div>  
                                        
                                <br><br>
                                
        <div class="form-group">
        <div class="col-lg-4">
        <label>Select Subject<span id="" style="font-size:11px;color:red">*</span></label>
        </div>
        <div class="col-lg-6">
 <input class="form-control" name="c-full"  id="c-full" >
       </select>
    </div>
     </div> 
                                        
     <br><br>                               
            
            <div class="form-group">
        <div class="col-lg-4">
        <label>Current  Session<span id="" style="font-size:11px;color:red">*</span></label>
        </div>
        <div class="col-lg-6">
        
       <select class="form-control" name="session" id="session">          
<option VALUE="">SELECT</option>
<option VALUE="">2012-2016</option>
<option VALUE="">2016-2020</option>
<option VALUE="">2020-2024</option>

                
                  </select>
     </div> 
                                        
     <br><br>                               
    
    </div>  
    <br><br>        
        
                                    
                                                    
                </div>

                    </div>
                                
           
                            
                        </div>
                        
                    </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading">Personal Informations</div>
            <div class="panel-body">
            <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
            <div class="col-lg-2">
            <label>First Name<span id="" style="font-size:11px;color:red">*</span>  </label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="fname" required="required" pattern="[A-Za-z]+$">
            </div>
             <div class="col-lg-2">
            <label>Last Name</label>
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="lname" pattern="[A-Za-z]+$">
            </div>
            <br><br>
                                
        <div class="form-group">
            <div class="col-lg-2">
            <label>Reg No.</label>
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="reg">
            </div>
             <div class="col-lg-2">
            <label>Gender</label>
            
            </div>
            <div class="col-lg-4">
         <input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
         <input type="radio" name="gender" id="female" value="female"> &nbsp; Female &nbsp;
         <input type="radio" name="gender" id="other" value="other"> &nbsp; Other &nbsp;
            </div>
            </div>  
    <br><br>        
             <div class="form-group">
             <div class="col-lg-2">
            <label>Guardian Name<span id="" style="font-size:11px;color:red">*</span>   </label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="gname" required="required" pattern="[A-Za-z]+$">
            </div>
             <div class="col-lg-2">
            <label>Occupation</label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="ocp" id="ocp">
            </div>
            </div>  
            <br><br>
 

             <div class="col-lg-2">
            <label>Nationality<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="nation" id="nation">
            </div>
            </div>  
            <br><br>
            </div>  
            <br><br>



 <div class="col-lg-2">
             <label for="image">Upload Image</label>
            
            </div>
            <div class="col-lg-4">
            <input type="file" id="file" name="file" class="form-control">
            </div>

            <div class="col-lg-2">
            <label>Password</label>
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="password" type="password" >
            </div>

            
            </div>  

 

            <br><br>
 
                      </div>
        </div>
        </div>
        </div>
            
        <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading">Contact Informations</div>
            <div class="panel-body">
            <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
            <div class="col-lg-2">
            <label>Mobile Number<span id="" style="font-size:11px;color:red">*</span>   </label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" type="number" name="mobno" required="required" maxlength="10">
            </div>
             <div class="col-lg-2">
            <label>Email Id</label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control"  type="email" name="email">
            </div>
            </div>  
            <br><br>
                                
        <div class="form-group">
            <div class="col-lg-2">
            <label>Country</label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="country" id="country" onchange="showState(this.value)" required="required" >         
<option VALUE="">Select Country</option>
<option VALUE="">Pakistan</option>
<option VALUE="">Afganistan</option>
<option VALUE="">India</option>
<option VALUE="">UAE</option>
<option VALUE="">Other</option>
                   </select>
            </div>
             <div class="form-group">
             <div class="col-lg-2">
            <label>City<span id="" style="font-size:11px;color:red">*</span>    </label>
            
            </div>
            <div class="col-lg-4">
           <select name="city" id="dist"  class="form-control" onchange="">
        <option value="">Select City</option>
        </select>
            </div>
            
    <br><br><br><br>        
             
             <div class="col-lg-2">
            <label>Permanent Address<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <textarea class="form-control" rows="3" name="padd" id="padd"></textarea>
            </div>
            </div>  
                    
 
            
            
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Correspondence Address<span id="" style="font-size:11px;color:red">*</span>
            
            </div>
            <div class="col-lg-4">
      <textarea class="form-control" rows="3" name="cadd"  id="cadd"></textarea>
            </div>
             <div class="col-lg-2">
            
            
            
            </div>
                      <div class="form-group">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-4"><br><br>
    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Register"></button>
    </div>
    </div>          
    </div>
            </div>
            </div>  
        
            
            </div>  
            
        </div>
        </div>
        </div>                  
       

                              
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>  
                            
          </div>    
            <br>
        
   
    </div><!--row!-->       
    </div>  
            </div>
        </div>
    </div>
</div> <!--fluid!-->
</form>



        </div> <!-- ./container -->
</body>
</html>