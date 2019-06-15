<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <head>
      <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
<body bgcolor="#b2b3f6">
  <br></br><br></br>
  <div class="navbar">
    <div class="logo">
      <img src="logo.jpg"></img>
    </div>
      <a href="contact1.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
      <a class="active" href="second1.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
      <a href="#" style="float:right; margin-right: 15px"> Login</a>
      <a href="frontpage.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
      <div class="title">MEETING ROOM BOOKING</div>
    </div><br></br><br></br><br></br><br></br>
<font size="+1">
<h1>MEETING ROOM INFO</h1>
<xsl:for-each select="meeting_room/room">
  <div style="background-color:#2d2e9a;color:white;padding:4px">
    <span style="font-weight:bold"><xsl:value-of select="name"/> - </span>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <p>
    <xsl:value-of select="description"/>
    <span style="font-style:italic"> (<xsl:value-of select="capacity"/> capacity per room)</span>
    </p>
  </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <span style="font-style:italic"> venue: <xsl:value-of select="venue"/></span>
  </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <span style="font-style:italic"> room no: <xsl:value-of select="room_no"/></span>
  </div>
</xsl:for-each><br></br>
<h4><a href="second1.xml">Go Back?</a></h4>
</font>
<div id="footer">
 <footer>
      <ul class="navigationF">
      <li><a href="contact1.html">Contact us</a></li>
      <br></br>
    </ul>
  <p>  Copyright pict.edu</p>
</footer>
</div>
</body>

</html>
