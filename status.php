<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<br><br>
<div class="navbar">
  <div class="logo">
    <img src="logo.jpg">
  </div>
    <a href="index.php?logout='1'" style="float:right; margin-right: 15px;">logout</a>
    <a href="contact.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="second.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
    <a class="active" href="status" style="float:right; margin-right: 15px"> Status</a>
    <a href="index.php" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
    <div class="title">MEETING ROOM BOOKING</div>
  </div><br><br><br>
  <?php

  session_start();
  $_SESSION['logged_in']='bookform';
   $username=$_SESSION['username'];
  $host="127.0.0.1";
        $dbusername="root";
         $dbpassword="nimish999";
         $dbname="WTL";
   // connect to the database1

         $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

         if(mysqli_connect_error())
          {
  	     die('connect error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
           }
          else
          {
             $query="select * from booked where uname='$username'";
            $result=mysqli_query($conn,$query);

  if (mysqli_num_rows($result) > 0)
  {
    echo "<table width=35%>
    <tr>
    <th>DATE</th>
    <th>HALLNAME</th>
    <th>SLOT</th>
    </tr>";
   while($row = mysqli_fetch_assoc($result))
  {

   $Date=$row["date"];
    $HallName=$row["hallname"];
    $Slot=$row["slot"];

    echo "<tr>";
       echo "<td>" .$Date. "</td>";
       echo "<td>" . $HallName . "</td>";
       echo "<td>" . $Slot . "</td>";

  echo '<td><form action="delete.php">';
  echo  '<input type="submit" value=" Cancel Booking"/>';
  echo '</form></td>';
  echo "</tr>";

  }
    echo "</table>";
  }
  else
  {
   echo '<h2>No rooms booked<h2>';
  }
           }
            $conn->close();

  ?>

<div id="footer">
 <footer>
      <ul class="navigationF">
      <li><a href="contact.php">Contact us</a></li>
      <br><br>
    </ul>
  <p>  Copyright pict.edu</p>
</footer>
</body>
</html>
