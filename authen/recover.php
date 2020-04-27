<?php
session_start();

if (isset($_POST['answer']))		 {$answer = $_POST['answer']; 			  if ($answer == '') {unset($answer);}}

if (isset($answer) ) {
$answer=stripslashes($answer);
$answer=htmlspecialchars($answer);
}

//===========================================================================================================
if( $answer===$_SESSION['answerControl'])
{
	echo "<br><br><br><hr>";
    echo "<center><h1>Congratulations, you just recovered your password: ".$_SESSION['password']."  <br>Now you can log in!</h1></center>";
    echo '<br><center><h3><a href="login.html" style="padding: 13px 135px;
            margin: 5px 0 20px 0;
			font-size: 19px;
			color:#fff;
			background-color: #0000FF;
			border:none;
			border-bottom:4px solid #00008B;
			cursor: pointer;
			border-radius: 20px;
			text-decoration:none;">
			Go Login</a></h3></center><br><hr>';
    unset($_SESSION['answerControl']);
    unset($_SESSION['questionControl']);
    unset($_SESSION['questionControl']);
    exit();
}
else
{
  if( isset($_SESSION['answerControl']))
  {
	echo "<br><br><br><hr>";
    echo "<center><h1>You did not answer the question correctly. Try again !</h1></center>";
    echo "<br><hr>";
    exit();
   }
   else
   {
   	echo "<br><br><br><hr>";
    echo "<center><h1>Congratulations, you just recovered your password! <br>Now you can log in!</h1></center>";
        echo '<br><center><h3><a href="login.html" style="padding: 13px 135px;
            margin: 5px 0 20px 0;
			font-size: 19px;
			color:#fff;
			background-color: #0000FF;
			border:none;
			border-bottom:4px solid #00008B;
			cursor: pointer;
			border-radius: 20px;
			text-decoration:none;">
			Go Login</a></h3></center>';
	echo "<br><hr>";		
   }
}

?>

