<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/recover.css">
	 	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">

</head>
<body>
<center >
	<p><i class="ion-help"></i> <?php echo $_SESSION['questionControl']; ?></p>
</center>
<div class="container">
	<form action="recover.php" method="post"><br><br>
		<div class="dws-input">
			<input type="text" name="answer" placeholder="Answer">
		</div>
			<button class="dws-submit" type="submit" ><i class="ion-unlocked"></i> Recover</button>
		</div>
	</form>
</div>

</body>
</html>