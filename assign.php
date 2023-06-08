<?php
include("connection.php");
session_start();
if (isset($_SESSION['user_id'])) {
	$mail = $_SESSION['user_id'];
} else {
	echo "<script>
		alert('You Are Not Logged In !! Please Login to access this page');
		window.location = 'login.php';
	</script>";
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$FirstName = $row['FNAME'];
$middleName = $row['mNAME'];

$result1 = mysqli_query($conn, "SELECT * FROM block WHERE user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result1);
$block = $row['block_no'];
$norooms = $row['norooms'];
$sexcategory = $row['sexcategory'];
$batch = $row['batch'];
$faculty = $row['faculty'];

$result2 = mysqli_query($conn, "SELECT * FROM room WHERE block_no='$block'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result2);
$bed = $row['nobed'];

?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Debre Markos University Online Dormitory Management System</title>
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
				echo '<img src="img/people.png" width="40px" height="30px">&nbsp;' . '<font face="times new roman" color="white" size="3">' . $FirstName . "&nbsp;" . $middleName . " " . '</font>';
				?>
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
		<table align="center" id="insides" . <!--Content Area-->
			<tr>
				<td colspan="3">
					<!--Welcome Box-->
					<table width="680px" align="center">
						<tr>
							<td align="center">
								<h2>Welcome,
									<?php echo $FirstName . " " . $middleName; ?>!
								</h2>
							</td>
						</tr>
						<tr>
							<td align="center">
								<p>This is the online dormitory management system for Debre Markos University.</p>
								<p>Here, you can register rooms and manage dormitory-related activities.</p>
							</td>
						</tr>
					</table>
					<!--End of Welcome Box-->

					<!--Main Content-->
					<table width="680px" align="center">
						<tr>
							<td>
								<h3>Block Details</h3>
								<p><strong>Block Number:</strong>
									<?php echo $block; ?>
								</p>
								<p><strong>Number of Rooms:</strong>
									<?php echo $norooms; ?>
								</p>
								<p><strong>Sex Category:</strong>
									<?php echo $sexcategory; ?>
								</p>
								<p><strong>Batch:</strong>
									<?php echo $batch; ?>
								</p>
								<p><strong>Faculty:</strong>
									<?php echo $faculty; ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Room Details</h3>
								<p><strong>Number of Beds:</strong>
									<?php echo $bed; ?>
								</p>
							</td>
						</tr>
					</table>
					<!--End of Main Content-->
				</td>
			</tr>
			<!--End of Content Area-->

			<!--Footer-->
			<tr>
				<td colspan="3" id="footer">
					<p>Debre Markos University Online Dormitory Management System</p>
				</td>
			</tr>
			<!--End of Footer-->
		</table>
</body>

</html>