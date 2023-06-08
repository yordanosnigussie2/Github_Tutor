<?php
include("connection.php");
session_start();
if (isset($_SESSION['user_id'])) {
  $mail = $_SESSION['user_id'];
} else {
  ?>

  <script>
    alert('You Are Not Logged In !! Please Login to access this page');
    alert(window.location = 'login.php');
  </script>
  <?php
}
?>

<?php

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "select * from users where user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Debre Berhan University Online Dormitory managent system</title>
  <link rel="icon" type="image/png" href="img/dbuicon.png" />
  <link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
  <script src="aa.js" type="text/javascript"></script>
</head>

<body>
  <table border="0" align="center" width="750px">
    <!--Header-->
    <tr>
      <td width="600px"></td>
      <td>
        <?php
        echo '<img src="img/people.png" width="40px" height="30px">&nbsp;' . '<font face="times new roman" color="white" size="3">' . $FirstName . "&nbsp;" . $middleName . " " . '</font>'; ?>
      </td>
      <td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
    </tr>
    <tr>
      <td width="750px" colspan="3" height="100px">
        <p><a href="proctor.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a>
          <img src="img/proctor.png" align="center" width="490px" height="120px">
        </p>
      </td>
    </tr>
    <!--End Of Header-->
    <!--Main menus-->
    <tr>
      <td colspan="3">
        <div id="sse2">
          <div id="sses2">
            <ul>
              <li><a href="proctor.php">Home</a></li>
              <li><a href="registerrooms.php">Register Rooms</a></li>
            </ul>
          </div>
        </div>

      </td>
    </tr>
    <!--End of main menus-->
    <!--Slide shows-->
    <!--End of Slide shows-->
    <table align="center" id="insides" width="850px">
      <tr>
        <!--Sub menus-->
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
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="assign.php">Assign Student</a></td>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstu.php">View Student Info</a></td>
            </tr>
          </table>
          <br>
          <br>
          <table border="0">
            <tr>
              <th align="center" width="300px" bgcolor="#336699" height="25px">
                <font face="arial" color="white" size="2">Related Links</font>
              </th>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword.php">Change Password</a></td>
            </tr>
            <tr>
              <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="greporta.php">Generate Report</a></td>
            </tr>
          </table>
          <br>
          <br>
        </td>
        <!--End Of Sub menus-->
        <!--Body section-->
        <td valign="top">
          <br>
          <br>
          <font face="Arial" size="2px">proctor page......</font>



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
          <a href="proctor.php">Home</a>&nbsp;|&nbsp;<a href="registerrooms.php">Register Rooms</a>&nbsp;|&nbsp;<a
            href="comments.php">Comment</a>
        </font>
      </div>

    </footer>
  </div>

  <!--End of Footer-->
</body>

</html>