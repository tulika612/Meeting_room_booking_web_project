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
  <script>
   function validateForm() {
  var x = document.forms["bookingform"]["date"].value;
  var today=new Date();
  var inputdate=new Date(x);

 inputdate.setHours(today.getHours());
inputdate.setMinutes(today.getMinutes());
inputdate.setSeconds(today.getSeconds());
inputdate.setMilliseconds(today.getMilliseconds());

today = Date.parse(today);
inputdate = Date.parse(inputdate);

 if (inputdate < today) {
    alert('Date is invalid.');
  return false;
}

 if (x == "") {
    alert("Date is required");
    return false;
  }
 if(bookingform.timing.selectedIndex == 0)
  {
       alert("Please select timing");
     return false;
  }
  if(bookingform.number.selectedIndex == 0)
  {
       alert("Please select number of pepople");
     return false;
  }
 if (!(bookingform.check.checked)) {
    alert("Please check the terms and conditions");
    return false;
  }


   var matches = w.match(/\d+/g);
if (matches != null) {
    alert('purpose should contain letters only.');
  return false;
}

}
  function resetvalues()
{
 var array = document.getElementsByTagName("input");
   for (var i = 0; i < array.length; i++) {
       var currentIn = array[i];
       if (currentIn.type == "text"||currentIn.type=="date"||currentIn.type=="time"||currentIn.type=="checkbox")
          currentIn.value = currentIn.defaultValue;
   }
    var elements = document.getElementsByTagName('select');
for (var i = 0; i < elements.length; i++)
{
    elements[i].selectedIndex = 0;
}


}
   </script>
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
      <a class="active" href="#" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
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

<div class="forms">
 <form name="bookingform" action="mysql.php" onreset="return resetvalues(this)" method="post">
<?php include('errors.php'); ?>
     <div class="content3">
<h2>BOOK A MEETING ROOM</h2>
  </div>
          <table id="mytable" cellspacing="13px">
            <tr>
           <td><label id="label">Date of meeting</label></td><td><input type="date" name="date"></td><td style="text-align:right" required></td>
           </tr>
           <br>
          <tr><td><label  id="label">Timing from</label></td>
     <td><select id="select" name="timing" required>
      <option value="option" align="center">Please select your choice</option>
      <option value="8-10" align="center">8-10 </option>
      <option value="10-12" align="center"> 10 -12</option>
      <option value="1-3" align="center"> 1 - 3 </option>
<option value="300" align="center"> 3 - 5 </option>
     </select></td><td style="text-align:right"></td></tr>
          <br>
           <tr><td><label  id="label">No of people expected</label></td>
     <td><select id="select" name="number" required>
      <option value="option" align="center">Please select your choice</option>
      <option value="hundred" align="center"> 0 - 100 </option>
      <option value="twohundred" align="center"> 100 - 200 </option>
      <option value="threehundred" align="center"> 200 - 300 </option>
     </select></td><td style="text-align:right"></td></tr>
     <br>
       <tr><td><label  id="label">Purpose of meeting<label></td>
    <td> <input align="center" type="text" placeholder="Example sports meet" size="20" name="purpose" required></td><td style="text-align:right"></td></tr>
     <table>
        <div class="checkbox">
 <input type="checkbox" value="agreement" name="check" required> I have read terms and conditions and agree to it.
<span class="checkmark"></span>
</div>
   <br>

   <div class="submit"><input type="submit" value="search for room" name="bookform" onclick="validateForm()"></div>
<div class="reset">
<input type="reset" value="Reset values">
</div><br>
 </form>
</div>
<div id="footer">
 <footer>
      <ul class="navigationF">
      <li><a href="contact.html">Contact us</a></li>
      <br><br>
    </ul>
</footer>
</body>
</html>
