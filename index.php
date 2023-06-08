<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> DMU Dormitory managent system</title>
  <link rel="icon" type="image/png" href="img/dbuicon.png" />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="slideshow/imageslider.css" rel="stylesheet" type="text/css" />
  <script src="slideshow/imageslider.js" type="text/javascript"></script>
  <link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
  <script src="aa.js" type="text/javascript"></script>
  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>
</head>

<body>
  <table border="0" align="center" width="750px">
    <!--Header-->
    <tr>
      <td width="650px"></td>
      <td id="loginlink" align="center"><a href="login.php" id="log">Login</a></td>
    </tr>
    <tr>
      <td width="700px" colspan="3" height="120px">
        <p><a href="index.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a>
          <img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/dbudm.png" align="center"
            width="470px" height="120px">
        </p>
      </td>
    </tr>
    <!--End Of Header-->
    <!--Main menus-->
    <tr>
      <td colspan="3" width="750px">
        <div id="sse2">
          <div id="sses2">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="viewdorm.php">View Dorm</a></li>
              <li><a href="admin.php">Admin Login</a></li>
            </ul>
          </div>
        </div>

      </td>
    </tr>
    <!--End of main menus-->
    <!--Slide shows-->
    <tr>
      <td colspan="2" valign="top" height="200px">
        <div id="sliderFrame">
          <div id="slider">
            <img src="slideshow/images/image-slider-1.jpg" alt="Building One" />
            <img src="slideshow/images/image-slider-2.jpg" alt="Photo Two" />
            <img src="slideshow/images/image-slider-3.jpg" alt="Photo Three" />
            <img src="slideshow/images/image-slider-4.jpg" alt="Photo Four" />
            <img src="slideshow/images/image-slider-5.jpg" alt="Photo Five" />
          </div>
        </div>
      </td>
    </tr>
    <!--End of Slide shows-->
    <table align="center" id="insides" width="850px">
      <tr>
        <!--Sub menus-->
        <td width="25%" height="500px" valign="top" id="insides">
          <table>
            <tr>
              <th align="center" width="250px" height="25px" bgcolor="#336699">
                <font face="arial" color="white" size="2">DBU-DMS</font>
              </th>
            </tr>
            <tr>
              <td><br><br>
                <center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <br>
          <table border="0">
            <tr>
              <th width="250px" bgcolor="#336699" height="25px">
                <font face="arial" color="white" size="2">Related Links</font>
              </th>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="http://www.dmu.edu.et">DBU Site</a></td>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="site.php">Site Map</a></td>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="https://mail.google.com/a/dbu/edu.et">Web
                  Mail</a></td>
            </tr>
          </table>
          <br>
          <br>
          <br>


        </td>
        <!--End Of Sub menus-->
        <!--Body section-->
        <td valign="top">
          <br>
          <br>
          <p align="center">
            <font face="arial" size="3px" color="#336699">Debre Markos University</font>
          </p>
          <p>
            <font size="2px">&nbsp;&nbsp;&nbsp;DEBRE Markos UNIVERSITY (DMU) is one of the thirteen new Universities
              which was established in the year 1997 E.C by the Ethiopian government (MOE).DBU is located in the Northern part of Ethiopia, in
              Amhara Region, North Showa Zone, in
              Debre Markos town which is 130 kms far from Addis Ababa to the North – East. The foundation of the
              University was laid down in May 1997 E.C.
              DBU started the teaching, learning Process on January 28, 1999 E.C (2008 G.C) with enrollment of 725
              students in the faculty of education with
              two streams, namely Businesses Education and natural science. After four consecutive year’s i.e. 2003 E.C
              enrollment of DBU was 5387 Students.
              Currently the University runs over 31 departments in first degree and 5 postgraduate studies by the total
              of 10,000 students. In addition to
              the academic service the university provides dining, health care, dormitory, community service and other
              services for the students and Debre
              Berhan town communities.
            </font>
          </p>
          <br>
          <br>
          <p>
            <font face="arial" size="3px" color="#336699">Announcements</font>
          </p>
          <p>
            <font size="3px">Dear Regular Students of Debre Markos University</font>
          </p>
          <font size="2px">You can view your dormitory information by clicking <a href="viewdorm.php"> Here</a></font>
        </td>
      </tr>
    </table>
    <!--End Body of section-->
  </table>
  <!--Footer-->

  <div id="sample">
    <footer>
      <br>
      <div align="right">
        <a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
      </div>
      <p align="center">
        <font face="Times New Roman" color="white" size="2">Copyright &copy 2014 Debre Berhan University ODMS. All
          rights reserved.</font>
      </p>
      <br><br>
      <div class="pull-right_foot" align="center">
        &nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
          <a href="index.php">Home</a>&nbsp;|&nbsp;<a href="about.php">About Us</a>&nbsp;|&nbsp;<a
            href="contact.php">Contact Us</a>&nbsp;
        </font>
      </div>

    </footer>
  </div>

  <!--End of Footer-->
</body>

</html>