<?php 
               include_once '../connection/dbh.inc.php';
               include 'index.php';
        
     
                  $fname = $_POST['fname'];
                  $lname = $_POST['lname'];
                  $regno = $_POST['reg'];
                  $gender = $_POST['gender'];
                  $program = $_POST['program'];
                  $session = $_POST['session'];
                  $email = $_POST['email'];
                  $pass = $_POST['password'];
  
                 if (isset($_POST['submit'])) {
                      # code...

                      $target = "uploads/".basename($_FILES['file']['name']);

                      $image = $_FILES['file']['name'];


                    $sql = "INSERT INTO registration (firstname,lastname,regno,gender,program,session,email,image,password) VALUES ('$fname','$lname','$regno','$gender','$program','$session','$email','$image','$pass')";
                         $result = mysqli_query($conn,$sql);
                        
                             move_uploaded_file($_FILES['file']['tmp_name'],$target);
                        
                         	}
 
         
     




// if(isset($_POST['image_submit'])){
//     $file = $_FILES['file'];
//     $fileName = $_FILES['file']['name'];
//     $fileTmp = $_FILES['file']['tmp_name'];
//     $fileSize = $_FILES['file']['size'];
//     $filesError = $_FILES['file']['error'];
//     $fileType = $_FILES['file']['type'];
    
//     $fileExt = explode('.',$_FILES['file']['name']);
//     $fileActualExt = strtolower(end($fileExt));
//     $allowed = array('jpg','jpeg','png','pdf');
//     if(in_array($fileActualExt,$allowed)){
//         if($_FILES['file']['error'] ===  0){
//             if($_FILES['file']['size'] < 1000000){            
//                 $fileNameNew = "profile".$id.".".$fileActualExt;
//                 $fileDestination = 'uploads/'.$fileNameNew;
//                 move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
//                // $sql = "UPDATE profileimg SET status = 0 WHERE userid ='$id';";
//                // $result = mysqli_query($conn, $sql);
//                 header("Location: index.php?uploadsucess");
//             }else{
//                 echo "Your file is too big!";
//             }
//         }else{
//             echo "You have an error uploading your file!";
//         }
//     }else{
//         echo "You cannot upload files of this type!";
//     }

// }


 // <!-- $filename = $_FILES['file']['name'];
 //                     $tmp = $_FILES['file']['tmp_name'];
 //                     $folder = "uploads/".$filename;
 //                     move_uploaded_file($tmp, $folder);
 //                  }else{
 //                     echo "Failed";
 //                  } -->