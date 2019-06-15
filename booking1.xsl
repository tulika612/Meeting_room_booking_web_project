<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<style>

body,html
{
 height:100%;
 /*background-image:url('contactus.jpg');*/
 /*background-repeat:no-repeat;*/
 /*background-color:blue;*/
}
.navigation
{
	float:right;
	list-style:none;
	margin-right:30px;

}
.navigation li
{
	display:inline-block;
}
.navigation a
{
	color:black;
	text-decoration:none;
	padding:5px 20px;
	font-family:Roboto;
	font-size:20px;

}
.navigation li.active a
{
	border:1.5px solid black;
}
.navigation li a:hover
{
	border:1.5px solid black;
}
.logo img
{
	width:80px;
	height:auto;
	float:left;
}
.footer
{
	background-color:black;
	height:100px;
	position:absolute;
	width:100%;
	left:0px;
	bottom:0px;
	margin-top:20px;
}
.footer h4
{
	color:white;
	margin-left:10px;
}
.holder
{
	 /*background-color:lightgreen;*/
  padding: 5px 20px 15px 20px;
  margin-left:20px;
  margin-top: 10px;
  margin-right: 20px;
 opacity:0.8;
}
.navigationF
{
	float:left;
	list-style:none;
}
.navigationF li
{
	display:inline-block;
}
.navigationF a
{
	color:white;
	text-decoration:none;
	padding:5px 20px;
	font-family:Roboto;
	font-size:20px;

}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}
.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top:10px;
  margin-left: 30px;
}
#wrapper
{
 min-height:100%;
 position:relative;
 background-image:url(booking.jpg);
 background-repeat:no-repeat;
}
*
{
	margin:0;
	padding:0;
}
</style>
<div class="logo">
          <img src="logo.jpg"/>
        </div>
        <ul class="navigation">
        <li class="active"><a href="frontpage.html">Home</a></li>
          <li><a href="">Sign Out</a></li>
        </ul>

        <div class="holder">
<div style="color:black;padding:20px;font-size:40px;text-align:center;">
 <xsl:value-of select="Contact/Title/title"/>
</div>

<xsl:for-each select="Contact/contact">
  <div style="background-color:black;color:white;padding:20px;width:500px;text-align:center;font-size:20px;margin-left:100px;margin-top:20px;">
    <div style="padding:10px;"><xsl:value-of select="name"/></div>
    <div style="padding:10px;"><xsl:value-of select="number"/></div>
    <div style="padding:10px;"><xsl:value-of select="mail"/></div>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:20px">
    <p>
    <xsl:value-of select="description"/>
    </p>
  </div>
</xsl:for-each>
</div>
<div class="footer">
          <ul class="navigationF">
          <li><a href="">About Us</a></li>
        </ul>
<br></br><br></br>
       <h4>Copyright pict.edu</h4>
  </div>
</body>
</html>
