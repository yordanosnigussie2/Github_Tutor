<?php
include("connection.php");
session_start();
if (isset($_SESSION['user_id'])) {
  $mail = $_SESSION['user_id'];
} else {
  ?>

  <script>
    alert('You Are Not Logged In !! Please Login to access this page');
    window.location = 'login.php';
  </script>
  <?php
}
?>

<?php
$user_id = $_SESSION['user_id'];

$result = mysqli_query($connection, "SELECT * FROM users WHERE user_id='$user_id'") or die(mysqli_error($connection));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Room Registration...</title>
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
          <font face="Arial" size="2px">Change Password.......</font>
          <div
            style="width:420px; height:270px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

            <form id="form1" name="login" method="POST" action="changepassword.php" onsubmit="return validateForm()">
              <div
                style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;">
                <div style="float:left;"><strong>
                    <font color="white" size="2px">Change Password</font>
                  </strong></div>
                <div
                  style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
                  <a href="proctor.php" title="Close"><img src="img/close_icon.gif"></a>
                </div>
              </div>
              <?php
              if (isset($_POST['changepassword'])) {
                $oldpass = $_POST['old_password'];
                $newpass = $_POST['new_password'];
                $confirmpass = $_POST['confirm_password'];
                $connect = mysqli_connect("localhost", "root", "", "dbudms");
                if (!$connect) {
                  die("error connection to db server" . mysqli_connect_error());
                }
                $query = "select * from users where password='$oldpass'";
                $result = mysqli_query($connect, $query);
                if (!$result) {
                  die("query failed" . mysqli_error($connect));
                }
                if (mysqli_num_rows($result) == 1) {
                  if ($newpass != $confirmpass) {
                    echo '  <p class="wrong">New Password and Confirm Password do not match!</p>';
                    echo ' <meta content="5;changepassword.php" http-equiv="refresh" />';
                  } else {
                    $query = "update users set password='$newpass', confirmpassword='$confirmpass' where password='$oldpass'";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                      die("query failed" . mysqli_error($connect));
                    }
                    echo '  <p class="success"> Your password has been changed successfully!</p>';
                    echo ' <meta content="5;changepassword.php" http-equiv="refresh" />';
                  }
                } else {
                  echo '  <p class="wrong">Wrong Old password!</p>';
                  echo ' <meta content="5;changepassword.php" http-equiv="refresh" />';
                }
              }
              ?>


              <table width="350" align="center">
                <tr>
                  <td colspan="2">
                    <div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
                    </div>
                  </td>
                </tr>
                <br><br><br>
                <tr>
                  <td class='para1_text' width="220px">
                    <font color="red">*</font> Old Password:
                  </td>
                  <td><input type="password" name="old_password" required x-moz-errormessage="Enter Old password"></td>
                </tr>
                <tr>
                  <td class='para1_text' width="220px">
                    <font color="red">*</font> New Password:
                  </td>
                  <td><input type="password" name="new_password" required x-moz-errormessage="Enter New Password"></td>
                </tr>
                <tr>
                  <td class='para1_text' width="220px">
                    <font color="red">*</font> Confirm Password:
                  </td>
                  <td><input type="password" name="confirm_password" required
                      x-moz-errormessage="Re-type your Password"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <br>
                  <td><input type="submit" name="changepassword" value="Change Password" class="button_example" /></td>
                </tr>
              </table>
            </form>



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
        <a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>&nbsp;
      </div>
      <br>
      <p align="center"><a href="contact.php"><img src="img/contacts.png" width="50px" title="Contact Us"></a></p>
      <p align="center"><a href="aboutus.php"><img src="img/about.png" width="50px" title="About Us"></a></p>
      <br>
      <center>
        <p>&copy; 2023 <font face="century gothic" color="white" size="3px">DBU-DMS</font>
        </p>
      </center>
    </footer>
  </div>

  <!--End of Footer-->

</body>

</html>