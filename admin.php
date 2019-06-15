<?php
  session_start();

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body><br><br>

  <div class="navbar">
  		<div class="logo">
  			<img src="logo.jpg">
  		</div>
      <a href="index.php?logout='1'" style="float:right; margin-right: 15px;">logout</a>
      <a href="student_info.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>StudentInfo</a>
      <a class="active" href="#" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
      <div class="title">MEETING ROOM BOOKING</div>
    </div><br><br><br>
<div class="content">


    <!-- logged in user information -->
    	<p>Welcome Admin<strong></strong></p><br>
<?php

$servername = "localhost";
$username = "root";
$password = "nimish999";
$dbname = "WTL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM booked";
$result = $conn->query($sql);
echo "<table border='2' width=100%>
<tr>
<th>PNR</th>
<th>DATE</th>
<th>SLOT</th>
<th>HALLNAME</th>
</tr>";
while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['uname'] . "</td>";
 echo "<td>" . $row['date'] . "</td>";
 echo "<td>" . $row['slot'] . "</td>";
 echo "<td>" . $row['hallname'] . "</td>";
 echo "</tr>";
 }
echo "</table>";
mysql_close($con);
 ?>
</div>

</body>
</html>
