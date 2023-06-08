<?php
include("connection.php");
session_start();
if (isset($_SESSION['user_id'])) {
	$mail = $_SESSION['user_id'];
} else {
	echo "<script>
            alert('You Are Not Logged In!! Please Login to access this page');
            window.location='login.php';
          </script>";
	exit; // Added exit to stop further execution
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query($connect, "SELECT * FROM users WHERE user_id='$user_id'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Debre Berhan University Online Dormitory Management System</title>
	<link rel="icon" type="image/png" href="img/dbuicon.png" />
	<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
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
		<!--End Of Header-->
		<!--Main menus-->
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
							<td>
								<br><br>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstudent.php">View
									Student</a>
							</td>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a>
							</td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="raccount.php">Edit User
									Account</a>
							</td>
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
					<table align="center"
						style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
						<tr>
							<td>
								<form action="viewstudent.php" onsubmit='return formValidator()' method='POST'>
									<table>
										<tr>
											<td class="search">Enter Student ID NO:</td>
											<td><input type="text" name="searchs" size="40px"
													placeholder="Provide Here..." required
													x-moz-errormessage="Please enter the student id No" /></td>
											<td><input type="submit" value="Search" name="search"
													style="cursor:pointer;" class="button_example" /></td>
										</tr>
									</table>
								</form>
								<?php
								if (isset($_POST['search'])) {
									$idno = $_POST['searchs'];
									$sql = "SELECT * FROM students where stud_id='$idno'";
									$result = mysqli_query($connect, $sql);
									$count = mysqli_num_rows($result);
									if ($count < 1) {
										echo ('<font color="red">This ID Number is not found</font>');
										echo ('<meta content="5;viewstudent.php" http-equiv="refresh" />');
									} else {
										echo "<center>";
										echo "<br><br><br><br>";
										echo "<table style='width:450px;height:50px;border-radius:10px;border-radius:10px;border:1px solid #336699' align='center'>
                                            <tr>
                                                <th background-color='#336699'><font color='white'>Name</th>
                                                <th background-color='#336699'><font color='white'>ID</th>
                                                <th background-color='#336699'><font color='white'>Sex</th>
                                                <th background-color='#336699'><font color='white'>Batch</th>
                                                <th background-color='#336699'><font color='white'>Faculty</th>
                                                <th background-color='#336699'><font color='white'>Block</th>
                                                <th background-color='#336699'><font color='white'>Room</th>
                                            </tr>";
										while ($row = mysqli_fetch_array($result)) {
											echo ("<tr>");
											echo ("<td>" . $row['fname'] . '&nbsp;' . $row['mname'] . "</td>");
											echo ("<td>" . $row['stud_id'] . "</td>");
											echo ("<td>" . $row['sex'] . "</td>");
											echo ("<td>" . $row['batch'] . "</td>");
											echo ("<td>" . $row['faculty'] . "</td>");
											echo ("<td>" . $row['block_no'] . "</td>");
											echo ("<td>" . $row['room_no'] . "</td>");
											echo ("</tr>");
										}
										echo ("</table>");
										echo "</center>";
									}
								}
								mysqli_close($connect);
								?>

							</td>
						</tr>
					</table>


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
				<font face="Times New Roman" color="white" size="2">Copyright &copy
					2014 Debre Berhan University ODMS. All rights reserved.</font>
			</p>
			<br><br>
			<div class="pull-right_foot" align="center">
				&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
					<a href="admin.php">Home</a>&nbsp;|&nbsp;<a href="viewcom.php">View Comment</a>&nbsp;|&nbsp;<a
						href="Postinfo.php">Post Info</a>&nbsp;
				</font>
			</div>

		</footer>
	</div>

	<!--End of Footer-->
</body>

</html>