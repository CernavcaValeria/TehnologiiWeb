<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sorry</title>
	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/upss.css">
</head>
<body>
	<br><br><br><br><br><br><br><br>
<center><h1>Dear <?php echo $_SESSION['name'];?> You've already passed this test !</h1></center>

<center><h1>Check your progress to see the score on this test. </h1></center><br>
		<center>
			<a href="../_checkProgres/progres.php" class="adws-submit"><i class="ion-ios-undo"></i> Your Progress</a>
		</center>
		<br><br>
		<center>
			<a href="../index.php" class="adws-submit1"><i class="ion-ios-home"></i> Home Page</a>
		</center>
<br><br><br>
</body>
</html>