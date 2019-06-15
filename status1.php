<html>
<head>
<title>BookingStatus</title>
<style type="text/css">
table {
margin: 8px;
/*border: 1px solid #000;*/
margin-left:400px;
}
tr,th,td
{
padding:35px;
}
th {
font-size:10px;
background: #666;
color: #FFF;
padding: 2px 10px;
border-collapse: separate;
border: 1px solid #000;
}
input[type=submit]
{
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size:20px;
/*border: 1px solid #DDD;*/
}
</style>
</head>
<body>
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
echo "<table>";
echo "<tr>";
echo "<td>Date</td>";
echo  "<td>HallName</td>";
echo  "<td>Slot</td>";
echo "</tr>";
echo "</table>";
 while($row = mysqli_fetch_assoc($result))
{

 $Date=$row["date"];
  $HallName=$row["hallname"];
  $Slot=$row["slot"];

echo "<table>";
echo "<tr>";
echo "<td>".$Date."</td>";
echo  "<td>".$HallName."</td>";
echo  "<td>".$Slot."</td>";
echo '<td><form action="delete.php">';
echo  '<input type="submit" value="Cancel Booking"/>';
echo '</form></td>';
echo "</tr>";
echo "</table>";
}
}
else
{
 echo '<h2>No rooms booked<h2>';
}
         }
          $conn->close();

?>
