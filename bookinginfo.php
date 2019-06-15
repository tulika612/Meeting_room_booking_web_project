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
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></p>
    <?php endif ?>
</div>
<br><br><br>
<div id="content">
	 		Room is booked!!!
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
