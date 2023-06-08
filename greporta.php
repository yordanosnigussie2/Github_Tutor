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
$result1 = mysqli_query($conn,"select * from block where user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result1);
$block = $row['block_no'];
$norooms = $row['norooms'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<script language="javascript">
		function Clickheretoprint() {
			var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
			disp_setting += "scrollbars=yes,widtd=900, height=400, left=100, top=25";
			var content_vlue = document.getElementById("print_content").innerHTML;

			var docprint = window.open("", "", disp_setting);
			docprint.document.open();
			docprint.document.write('<html><head><title>Lists</title>');
			docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');
			docprint.document.write(content_vlue);
			docprint.document.write('</body></html>');
			docprint.document.close();
			docprint.focus();
		}
	</script>
	<style>
		#print_content {
			width: 434px;
			margin: 0 auto;
		}
	</style>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="assign.php">Assign Student</a>
							</td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstu.php">View Student
									Info</a></td>
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
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword.php">Change
									Password</a></td>
						</tr>
						<tr>
							<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="greporta.php">Generate
									Report</a></td>
						</tr>
					</table>
					<br>
					<br>
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
												Which Type of report do you want?
												<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
													<option value="1">...</option>
													<option value="2">Registered Rooms</option>
													<option value="4">General Assignation</option>
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
														$sel = mysqli_query($conn,"SELECT * FROM room where block_no='$block' ");
														echo '<table align="center" style="width:100px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
														echo '<th bgcolor="#336699"><font color="white" size="2">Block No.</th><th bgcolor="#336699"><font color="white" size="2">Room No.</th><th bgcolor="#336699"><font color="white" size="2">Capacity</th></tr>';
														$rowcolor = 0;
														$intt = mysqli_num_rows($sel);
														echo "<br>";
														echo "<font color='blue'>There are &nbsp;</font><font color='red'>" . $intt . "&nbsp;</font>Rooms are registered in block-" . $block;
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
														Annual report:
														<select name="masterfile">
															<option value="">...</option>
															<option value="">Population</option>
															<option value="">House</option>
														</select>
													</form>
												</div>
											</div>
										</td>
									</tr>
								</table>
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
				<font face="Times New Roman" color="white" size="2">Copyright &copy 2014 Debre Berhan University ODMS.
					All rights reserved.</font>
			</p>
			<br><br>
			<div class="pull-right_foot" align="center">
				&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
					<a href="proctor.php">Home</a>&nbsp;|&nbsp;<a href="registerrooms.php">Register
						Rooms</a>&nbsp;|&nbsp;<a href="comments.php">Comment</a>
				</font>
			</div>

		</footer>
	</div>

	<!--End of Footer-->
</body>

</html>