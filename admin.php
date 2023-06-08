<?php
include("connection.php");
session_start();
if (isset($_SESSION['user_id'])) {
  $mail = $_SESSION['user_id'];
} else {
  echo '<script>
			alert("You Are Not Logged In !! Please Login to access this page");
			window.location = "login.php";
		</script>';
  exit();
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query($connection, "SELECT * FROM users WHERE user_id='$user_id'") or die(mysqli_error($connection));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" charset="utf-8" content="text/html; " />
  <title>Debre Markos University Online Dormitory Management System</title>
  <link rel="icon" type="image/png" href="img/dbuicon.png" />
  <link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
  <script src="aa.js" type="text/javascript"></script>
</head>

<body>
  <table border="0" align="center" width="750px">
    <!-- Header -->
    <tr>
      <td width="600px"></td>
      <td>
        <?php
        echo '<img src="img/people.png" width="40px" height="30px">&nbsp;' . '<font face="times new roman" color="white" size="3">' . $FirstName . "&nbsp;" . $middleName . " " . '</font>';
        ?>
      </td>
      <td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
    </tr>
    <tr>
      <td width="750px" colspan="3" height="100px">
        <p>
          <a href="admin.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a>
          <img src="img/admin.png" align="center" width="490px" height="120px">
        </p>
      </td>
    </tr>
    <!-- End of Header -->
    <!-- Main menus -->
    <tr>
      <td colspan="3">
        <div id="sse2">
          <div id="sses2">
            <ul>
              <li><a href="admin.php">Home</a></li>
              <li><a href="viewcom.php">View Comment</a></li>
            </ul>
          </div>
        </div>
      </td>
    </tr>
    <!-- End of main menus -->
    <!-- Slide shows -->
    <!-- End of Slide shows -->
    <table align="center" id="insides" width="850px">
      <tr>
        <!-- Sub menus -->
        <td width="25%" height="400px" valign="top" id="insides">
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
          <table>
            <tr>
              <th align="center" width="450px" height="25px" bgcolor="#336699">
                <font face="arial" color="white" size="2">Manage Record</font>
              </th>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstudent.php">View Student</a></td>
            </tr>
          </table>
          <br>
          <br>
          <table border="0">
            <tr>
              <th width="300px" bgcolor="#336699" height="25px">
                <font face="arial" color="white" size="2">Manage Account</font>
              </th>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a></td>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="raccount.php">Edit User Account</a></td>
            </tr>
          </table>
          <br>
          <br>
        </td>
        <!-- End Of Sub menus -->
        <!-- Body section -->
        <td valign="top">
          <br>
          <br>
            Our Home page...... 
        </td>
      </tr>
    </table>
    <!-- End Body of section -->
  </table>
  <!-- Footer -->
  <div id="sample">
    <footer>
      <br>
      <div style="justify-content:right; font-size:3; font:Times New Roman; color:white;">
        <a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
      </div>
      <p style="justify-content:center; font-size:3; font:Times New Roman; color:white;">
        Copyright &copy 2014 Debre Berhan University ODMS.
          All rights reserved.
      </p>
      <br><br>
      <div class="pull-right_foot" style="justify-content:center; font-size:3; font:Times New Roman; color:white;">
        &nbsp;&nbsp;&nbsp;
          <a href="admin.php">Home</a>&nbsp;|&nbsp;<a href="viewcom.php">View Comment</a>&nbsp;|&nbsp;<a
            href="Postinfo.php">Post Info</a>&nbsp;
        
      </div>
    </footer>
  </div>
  <!-- End of Footer -->
</body>

</html>