<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
   function validateForm() {
     var nam= /^[A-Za-z]{1,10}$/;
     var x = document.forms["myForm"]["fname"].value;
     var y = document.forms["myForm"]["lname"].value;
     var email = document.forms["myForm"]["email"].value;
     var x2 = document.forms["myForm"]["password_1"].value;
     var x3 = document.forms["myForm"]["password_2"].value;
     var y1 = document.forms["myForm"]["mobile"].value;
     var z = document.forms["myForm"]["username"].value;
   // first name
     if (x == "" || x==null) {
       alert("First Name must be filled out");
       return false;
     }
     else if(!nam.test(x))
   {
   alert("Invalid First Name");
    return false;
   }
     else if (y=="" || y==null) {
       alert("Last name must be filled out");
      return false;
     }
     else if(nam.test(y)==false)
   {
   alert("Invalid Last Name");
   return false;
   }
   //pnr validation
   else if (z.length != 11)
   {
     alert('Invalid pnr number');
     return false;
   }

   else if (y1.length != 10)
   {
     alert('Invalid mobile number');
     return false;
   }
   // password validation
           else if(x2.length < 6)
           {
                   alert("Error: Password must contain at least six characters!");
                   return false;
           }
              else if(x3 == null || x2 != x3)
           {
           	alert("Error: password must match!");
                   return false;
           }
   }
   </script>
</head>
<body background="PICT-Pune.jpg">
<br><br>
  <div class="navbar">
    <div class="logo">
			<img src="logo.jpg">
		</div>
    <a href="contact1.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="second1.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
    <a class="active" href="login.php" style="float:right; margin-right: 15px"> Login</a>
    <a href="frontpage.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
    <div class="title">MEETING ROOM BOOKING</div>
  </div><br>

<div class="simple-form1">
  <form name="myForm" id="registration" method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <h1 class="user__title">REGISTER</h1>
    <div>
      <div class="input-group">
    	<input type="text" required name="fname" id="button" placeholder="Enter your first name"><br><br>
      </div>
    </div>
      <div class="input-group">
    	<input type="text" required name="lname" id="button" placeholder="Enter your last name"><br><br>
    </div>
  	<div class="input-group">
  	 <input type="text" required name="username" id="button" placeholder="Enter your pnr"><br><br>
  	</div>
  	<div class="input-group">
  	  <input type="email" required name="email" id="button" placeholder="Enter your email"><br><br>
  	</div>
    <div>
     <select id="ph"><option>+91</option><option>+92</option><option>+93</option><option>+94</option><option>+95</option></select>
     <input type="number" required name="mobile" id="mobile" placeholder="Enter your mobile no." id="ph"><br><br>
    </div>
  	<div class="input-group">
  	  <input type="password" required name="password_1" id="button" placeholder="Enter your password"><br><br>
  	</div>
  	<div class="input-group">
  	  <input type="password" required name="password_2" id="button" placeholder="ReEnter your password"><br><br>
  	</div>
  	<div class="input-group">
  	  <input type="submit" value="Register" id="butt" name="reg_user" onclick="validateForm()">
  	</div>
  	<p>
      <a href="register.php" style="color: #ffffff">Reset values?</a><br><br>
      <a href="login.php" style="color: #f52f0f">Already login?</a>
  	</p>
  </form>
</div>
<div id="footer">
 <footer>
      <ul class="navigationF">
      <li><a href="contact1.html">Contact us</a></li>
      <br><br>
    </ul>
  <p>  Copyright pict.edu</p>
</footer>
</body>
</html>
