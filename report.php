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

$result = mysqli_query($conn,"select * from users where user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>DBU-DMS</title>
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
				<p><a href="pro_manager.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a>
					<img src="img/promanager.png" align="center" width="490px" height="120px">
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
							<li><a href="pro_manager.php">Home</a></li>
							<li><a href="rblock.php">Register Block</a></li>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Viewstudent info</a></td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewroom.php">View Rooms</a>
							</td>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="pmchangepassword.php">Change
									Password</a></td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewcoms.php">View Comment</a>
							</td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="report.php">Generate Report</a>
							</td>
						</tr>
					</table>
				</td>
				<!--End Of Sub menus-->
				<!--Body section-->
				<td valign="top">
					<table border="0" cellspacing="0">
						<tr>

							<td width="800" height="600" valign="top"><br><br>
								<script type="text/javascript">
									function showDiv(prefix, chooser) {
										for (var i = 0; i < chooser.options.length; i++) {
											var div = document.getElementById(prefix + chooser.options[i].value);
											div.style.display = 'none';
										}

										var selectedOption = (chooser.options[chooser.selectedIndex].value);
										if (selectedOption == "1") {
											displayDiv(prefix, "1");
										}
										if (selectedOption == "2") {
											displayDiv(prefix, "2");
										}
										if (selectedOption == "3") {
											displayDiv(prefix, "3");
										}
										if (selectedOption == "4") {
											displayDiv(prefix, "4");
										}
										if (selectedOption == "5") {
											displayDiv(prefix, "5");
										}
									}
									function displayDiv(prefix, suffix) {
										var div = document.getElementById(prefix + suffix);
										div.style.display = 'block';
									}
								</script>
								<table id="contentbox">
									<tr>
										<td id="content">
											<div id="report">
												Select category:
												<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
													<option value="1">...</option>
													<option value="2">Registered Rooms</option>
													<option value="4">General Assignation</option>
													<option value="5">Assigned Students</option>
												</select>
												<br /><br />

												<div id="div1" style="display:none;"></div>
												<div id="div2" style="display:none;">
													<form action="" method="post">
														<center>
															<h3>Rooms:</h3>
														</center>
														<?php
														echo '<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
														$sel = mysqli_query($conn,"SELECT * FROM room ");
														echo '<table align="center" style="width:100px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
														echo '<th bgcolor="#336699"><font color="white" size="2">Block No.</th><th bgcolor="#336699"><font color="white" size="2">Room No.</th><th bgcolor="#336699"><font color="white" size="2">Capacity</th></tr>';
														$rowcolor = 0;
														$intt = mysqli_num_rows($sel);
														echo "<br>";
														echo "<font color='blue'>There are &nbsp;</font><font color='red'>" . $intt . "&nbsp;</font>Rooms are registered";
														echo "<br><br>";
														while ($row = mysqli_fetch_array($sel)) {
															print("<tr>");
															print("<td><font size='2'>" . $row['block_no'] . "</td>");
															print("<td><font size='2'>" . $row['room_no'] . "</td>");
															print("<td><font size='2'>" . $row['nobed'] . "</td>");
															print("</tr>");
														}
														print("</table>");



														?>
													</form>
												</div>
												<div id="div4" style="display:none;">
													<form action="" method="post">
														<u>
															<center>
																<h2>General Assignation</h2s>
															</center>
														</u>
														<?php
														echo '<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
														$sel = mysqli_query($conn,"SELECT * FROM block");
														echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
														echo '<th bgcolor="#336699"><font color="white" size="2">Block No.</th><th bgcolor="#336699" ><font color="white" size="2">Sex</th>
			<th bgcolor="#336699" ><font color="white" size="2">Faculty</th>
			
			</tr>';
														$rowcolor = 0;
														$intt = mysqli_num_rows($sel);
														echo "<br><br>";
														while ($row = mysqli_fetch_array($sel)) {
															print("<tr>");
															print("<td><font size='2'>" . $row['block_no'] . "</td>");
															print("<td><font size='2'>" . $row['sexcategory'] . "</td>");
															print("<td><font size='2'>" . $row['faculty'] . "</td>");
															print("</tr>");
														}
														print("</table>");



														?>
													</form>
												</div>
												<div id="div5" style="display:none;">
													<form action="" method="post">
														<u>
															<center>
																<h2>Assigned Students</h2>
															</center>
														</u>
														<?php
														echo '<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
														$sel = mysqli_query($conn,"SELECT * FROM students");
														echo '<table style="border-radius:10px;" border="1"><tr>';
														echo '<th bgcolor="#336699"><font color="white" size="2">Names.</th><th bgcolor="#336699" ><font color="white" size="2">ID NO</th>
			<th bgcolor="#336699" ><font color="white" size="2">Sex</th><th bgcolor="#336699" ><font color="white" size="2">Batch</th>
			<th bgcolor="#336699" ><font color="white" size="2">Faculty</th><th bgcolor="#336699" ><font color="white" size="2">Block No</th>
            <th bgcolor="#336699" ><font color="white" size="2">Room No</th>			
			</tr>';
														$rowcolor = 0;
														$intt = mysqli_num_rows($sel);
														echo "<br><br>";
														while ($row = mysqli_fetch_array($sel)) {
															print("<tr>");
															print("<td><font size='2'>" . $row['fname'] . "&nbsp;" . $row['mname'] . "&nbsp;" . $row['lname'] . "</td>");
															print("<td><font size='2'>" . $row['stud_id'] . "</td>");
															print("<td><font size='2'>" . $row['sex'] . "</td>");
															print("<td><font size='2'>" . $row['batch'] . "</td>");
															print("<td><font size='2'>" . $row['faculty'] . "</td>");
															print("<td><font size='2'>" . $row['block_no'] . "</td>");
															print("<td><font size='2'>" . $row['room_no'] . "</td>");
															print("</tr>");
														}
														print("</table>");



														?>
													</form>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>


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
					<a href="pro_manager.php">Home</a>&nbsp;|&nbsp;<a href="registerrooms.php">Register Rooms</a>&nbsp;
				</font>
			</div>

		</footer>
	</div>

	<!--End of Footer-->
</body>

</html>