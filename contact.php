<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: frontpage.html');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: frontpage.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#b2b3f6">
<br><br>
<div class="navbar">
  <div class="logo">
    <img src="logo.jpg">
  </div>
    <a href="index.php?logout='1'" style="float:right; margin-right: 15px;">logout</a>
    <a class="active" href="contact.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="second.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
    <a href="status.php" style="float:right; margin-right: 15px"> Status</a>
    <a href="index.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
    <div class="title">MEETING ROOM BOOKING</div>
  </div>
<div class="simple-form">
  <form id="registration">
    <h1 style="color:orange">Call us at:</h1><br>
     <h3>NUMBER: +91 2024371101</h3><br>
     <h3>24372479</h3><br><br>
     <h1 style="color:orange">Leave us Email at:</h1><br>
     <h3>principal@pict.edu</h3><br>
     <h3>registrar@pict.edu</h3><br><br>
</form>
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
