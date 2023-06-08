<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DBU-DMS Contact Us</title>
    <link rel="icon" type="image/png" href="img/dbuicon.png" />
    <link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="aa.js" type="text/javascript"></script>
</head>

<body>
    <table border="0" align="center" width="750px">
        <!--Header-->
        <tr>
            <td width="100%"></td>
            <td id="loginlink" align="center"><a href="login.php" id="log">Login</a></td>
        </tr>
        <tr>
            <td width="700px" colspan="3" height="120px">
                <p><a href="index.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a>
                    <img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/dbudms.png" align="center"
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
                        </ul>
                    </div>
                </div>

            </td>
        </tr>
        <!--End of main menus-->
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
                            <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="http://www.dbu.edu.et">DBU
                                    Site</a></td>
                        </tr>
                        <tr>
                            <td><img src="img/Picture2.png" width="10px">&nbsp;<a href="site.php">Site Map</a></td>
                        </tr>
                        <tr>
                            <td><img src="img/Picture2.png" width="10px">&nbsp;<a
                                    href="https://mail.google.com/a/dbu/edu.et">Web Mail</a></td>
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
                    <center>
                        <font face="arial" color="#336699" size="3px">contact Us</font>
                    </center>
                    <br>
                    <center>
                        <h1>Debre Berhan University Dormitory Management System</h1>
                    </center>
                    <p style="font-size:13px">Web Site:www.dbu.edu.et</p>
                    <p>Tel:-</p>
                    <ul type="circle">
                        <li>
                            <p style="font-size:13px">Proctor Office:0116816293</p>
                        </li>
                        <li>
                            <p style="font-size:13px">Student Dean:0116812167</p>
                        </li>
                        <li>
                            <p style="font-size:13px">Registrar:0116813418</p>
                        </li>
                    </ul>
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
                <font face="Times New Roman" color="white" size="2">Copyright &copy 2014 Debre Berhan University ODMS.
                    All rights reserved.</font>
            </p>
            <br><br>
            <div class="pull-right_foot" align="center">
                &nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
                    <a href="index.php">Home</a>&nbsp;|&nbsp;<a href="about.php">About Us</a>&nbsp;|&nbsp;<a
                        href="contact.php">Contact Us</a>&nbsp;|&nbsp;<a href="dev.php">Developers</a>&nbsp;|&nbsp;<a
                        href="comment.php">Comment</a>
                </font>
            </div>

        </footer>
    </div>

    <!--End of Footer-->
</body>

</html>