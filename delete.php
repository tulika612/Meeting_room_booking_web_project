<?php
session_start();
$_SESSION['logged_in']='bookform';
 $username=$_SESSION['username'];
$host="127.0.0.1";
      $dbusername="root";
       $dbpassword="nimish999";
       $dbname="WTL";
 // connect to the database
        //$username','$date','$timing','$hall
       $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

       if(mysqli_connect_error())
        {
	     die('connect error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
         }
else
{
 $query="delete from booked where uname='$username'";
 mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body bgcolor="#b2b3f6"><br><br>

  <div class="navbar">
    <div class="logo">
      <img src="logo.jpg">
    </div>
      <a href="index.php?logout='1'" style="float:right; margin-right: 15px;">logout</a>
      <a href="contact.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
      <a href="second.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
      <a href="status.php" style="float:right; margin-right: 15px"> Status</a>
      <a href="index.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
      <div class="title">MEETING ROOM BOOKING</div>
    </div><br><br><br>
<div id="content">
	 		Booking is canceled!!!
	 	</div>
    <div id="footer">
     <footer>
          <ul class="navigationF">
          <li><a href="contact.php">Contact us</a></li>
          <br><br>
        </ul>
      <p>  Copyright pict.edu</p>
    </footer>
    </div>
</body>
</html>
