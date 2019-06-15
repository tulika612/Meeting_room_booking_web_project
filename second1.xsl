<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version = "1.0"
xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">

   <xsl:template match = "/">
      <html>
        <head>
          <link rel="stylesheet" type="text/css" href="loginstyle.css" />
        </head>
         <body background="PICT-Pune.jpg" bgcolor="black">
           <br></br><br></br>
           <div class="navbar">
             <div class="logo">
               <img src="logo.jpg"></img>
             </div>
               <a href="contact1.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
               <a class="active" href="second1.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
               <a href="login.php" style="float:right; margin-right: 15px"> Login</a>
               <a href="frontpage.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
               <div class="title">MEETING ROOM BOOKING</div>
             </div><br></br><br></br><br></br><br></br>
             <div class="simple-form">
                 <form id="registration">
            <font size="+1">
             <br></br>
            <h1>MEETING ROOM BOOKING</h1>
            <br></br>
            <center>
            <table border = "2"  width= "40%" height="100%" >
               <tr style="color: white; background: blue;">
                  <th>name</th>
                  <th>venue</th>
                  <th>capacity</th>
                  <th>room</th>
               </tr>

               <xsl:for-each select="class/meeting">
                  <tr>
                     <td><xsl:value-of select = "@booking"/></td>
			   <td><xsl:value-of select = "venue"/></td>
                     <td><xsl:value-of select = "capacity"/></td>
                     <td><xsl:value-of select = "room"/></td>
                  </tr>
               </xsl:for-each>

            </table>
             <br></br>
             <br></br>
             <br></br>
           </center>
           </font>
         </form>
       </div>
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
   </xsl:template>
</xsl:stylesheet>
