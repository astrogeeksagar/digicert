<?php
include("header.php");

session_start();
$ofnum=$_SESSION["ofnum"];

echo "welcome.$ofnum";

?>
<html>
    <head>
        <title>Logged In Page</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <link rel="stylesheet" href="mystyle.css" />
    </head>
    <body>
    </br> </br> </br> </br>
        <!-- <div class="header">
            <h1>DIGICERT</h1>
            <h4>Digital Certificate And Marksheet</h4>
            <h5>Mob:8574921683</h5> -->
            </br>
    
            <div class="nav-bar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Solution</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Show Demo</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                  </div>
                  <h2>You Have Been Logged In Successfully Please Choose Desired Option Below!</h2>
            <?php
                  $_SESSION["ofnum"]=$ofnum;
                  ?>
                  <div class="list">
                      <ul2>
                          <li><a href="regstudent.php">Register Student</a></li>
                          <br/>
                          <li><a href="changepwd.php">Change Password</a></li>
                          <br/>
                          <li><a href="displaystdn.php">Issue Certificate</a></li>
                          <br/>
                          <li><a href="certdisplay.php">Get Certificate</a></li>
                          </br>               
                          <li><a href="logout.php">Logout</a></li>
                      </ul2>
                  </div>
            </div>





    </body>
</html>