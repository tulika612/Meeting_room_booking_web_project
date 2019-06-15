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
      <a class="active" href="#" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>StudentInfo</a>
      <a href="admin.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
      <div class="title">MEETING ROOM BOOKING</div>
    </div><br><br><br>
<div class="content">
  <br><br><br>
  <?php
 /*$servername = "localhost";
 $username = "root";
 $password = "nimish999";
 $dbname = "WTL";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT id,username, fname, lname,email,mobile FROM records";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "ID: " . $row["id"]. " PNR: " . $row["username"]. " NAME: " . $row["fname"]. " " . $row["lname"]." EMAIL: " .$row["email"]." MOBILE ".$row["mobile"]."<br>";
      }
  } else {
      echo "0 results";
  }

 $conn->close();
 ?>
 <?php*/

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
 $sql = "SELECT id,username, fname, lname,email,mobile FROM records";
 $result = $conn->query($sql);
echo "<table border='2' width=100%>
<tr>
<th>PNR</th>
<th>FNAME</th>
<th>LNAME</th>
<th>EMAIL</th>
<th>MOBILE</th>
</tr>";
while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
</div>

</body>
</html>
