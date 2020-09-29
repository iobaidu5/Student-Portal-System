<?php
     require "header.php";
?>
     <head><link rel="stylesheet" type="text/css" href="style.css"></head>
  <main>
  
    <section class = "section-default" align="right" style="margin-right:20px;">
    <?php
         if (isset($_SESSION['userId'])) {
              # code...
              echo '<p class = "login-status"><font size="5" class="status" >Current Status: </font>You Are Logged In!</p>';
         }
         else {
              # code...
              echo '<p  class = "login-status"><font size="5" class="status" >Current Status: </font>You Are Logged Out!</p>';
         }
    ?>
     
      </section>
    
  </main>

