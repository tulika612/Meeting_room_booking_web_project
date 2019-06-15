<?php
session_start();
$_SESSION['logged_in']='book';
 $username=$_SESSION['username'];
$host="127.0.0.1";
      $dbusername="root";
       $dbpassword="nimish999";
       $dbname="WTL";
 // connect to the database

       $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

       if(mysqli_connect_error())
        {
	     die('connect error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
         }
        else
        {
$errors = array();
          $username1=$username;
          $date=$_POST['date'];
          $timing=$_POST['timing'];
         $number=$_POST['number'];
          $checkbox=$_POST['check'];

if (empty($username1)) { array_push($errors, "first name is required"); }
  if (empty($date)) { array_push($errors, "last name is required"); }
  if (empty($timing)) { array_push($errors, "pnr is required"); }
  if (empty($number)) { array_push($errors, "Email is required"); }
  if (empty($checkbox)) { array_push($errors, "mobile is required"); }

          if($number=='hundred')
              {
                $hall='IT';
                /*echo '<script language="javascript">';
                 echo 'alert("IT seminar hall")';
                echo '</script>';*/

             }
              elseif($number=='twohundred')
              {
                  $hall='comp';
                /*echo '<script language="javascript">';
                 echo 'alert("Comp seminar hall")';
                echo '</script>';*/

             }
               elseif($number=='threehundred')
              {
                $hall='audi';
                /*echo '<script language="javascript">';
                 echo 'alert("Auditorium")';
                echo '</script>';*/

             }
             $flag=0;
             $query="select * from booked where date='$date'";
             $result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
          if($row["slot"]==$timing)
          {
            if($row["hallname"]==$hall)
                {
                  $flag=1;
                  if($hall=='IT')
                {

                     $query1="select * from booked where date='$date' and hallname='comp'";
             $result1=mysqli_query($conn,$query1);
if(mysqli_num_rows($result1)==0)
{
 $flag=0;
  $hall='comp';
}
elseif (mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1)) {
          if($row1["slot"]!=$timing)
              {
                     $flag=0;
                    $hall=$row1["hallname"];
                }

                  }
          }
        if($flag==1)
{
 $query3="select * from booked where date='$date' and hallname='audi'";
             $result3=mysqli_query($conn,$query3);
if(mysqli_num_rows($result3)==0)
{
 $flag=0;
  $hall='audi';
}
elseif (mysqli_num_rows($result3) > 0) {
    while($row3 = mysqli_fetch_assoc($result3)) {
          if($row3["slot"]!=$timing)
              {
                     $flag=0;
                    $hall=$row3["hallname"];
                }
}
    }
}
}
             elseif($hall=='comp')
                {

                     $query2="select * from booked where date='$date' and hallname='audi'";
             $result2=mysqli_query($conn,$query2);

if(mysqli_num_rows($result2)==0)
{
 $flag=0;
  $hall='audi';
}
elseif (mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
          if($row2["slot"]!=$timing)
              {
                     $flag=0;
                    $hall=$row2["hallname"];
                }

                  }
          }
    }
}
}
}
}
  if($flag==1)
{
 ?>
<script>
     alert('Meetin Room Not Available');
 window.location.href = 'index.php';
     </script>
<?php
}
 elseif($flag==0)
{
  $sql = "insert into booked values('$username','$date','$timing','$hall')";
?>
<script>
     alert('Meetin Room Booked');
 window.location.href = 'bookinginfo.php';
     </script>
<?php
}

if ($conn->query($sql) === TRUE) {


}
/*else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

	      $conn->close();

        }
?>
