<?php
if (isset($_POST['username']))    	 {$login = $_POST['username'];    		  if ($login == '') {unset($login);}}
if (isset($_POST['name']))    	   	 {$name = $_POST['name']; 				  if ($name == '')  {unset($name);}}
if (isset($_POST['password']))     	 {$pass = $_POST['password'];   		  if ($pass == '')  {unset($pass);}}
if (isset($_POST['passwordRepeat'])) {$passRepeat = $_POST['passwordRepeat']; if ($passRepeat == '') {unset($passRepeat);}}
if (isset($_POST['passwordRepeat'])) {$passRepeat = $_POST['passwordRepeat']; if ($passRepeat == '') {unset($passRepeat);}}
if (isset($_POST['email']))		     {$email = $_POST['email']; 			  if ($email == '') {unset($email);}}
if (isset($_POST['quest']))		     {$quest = $_POST['quest']; 			  if ($quest == '') {unset($quest);}}
if (isset($_POST['answer']))		 {$answer = $_POST['answer']; 			  if ($answer == '') {unset($answer);}}

 
//sa scap de spatii inutile
if (isset($login) ) {
$login=stripslashes($login);
$login=htmlspecialchars($login);
}
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}

if (isset($pass) ) {
$pass=stripslashes($pass);
$pass=htmlspecialchars($pass);
}

if (isset($passRepeat) ) {
$passRepeat=stripslashes($passRepeat);
$passRepeat=htmlspecialchars($passRepeat);
}

if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}

if (isset($quest) ) {
$quest=stripslashes($quest);
$quest=htmlspecialchars($quest);
}

if (isset($answer) ) {
$answer=stripslashes($answer);
$answer=htmlspecialchars($answer);
}



if(mb_strlen($login) < 5 || mb_strlen($login)>30)
{
	echo "<center><h1>You need a login with lenght between(6 and 30)</h1></center>";
	exit();
}
if(mb_strlen($name) < 5 || mb_strlen($name)>30)
{
	echo "<center><h1>You need a name with lenght between(6 and 30)</h1></center>";
	exit();
}
if(mb_strlen($pass) < 2 || mb_strlen($pass)>12)
{
	echo "<center><h1>You need a password with lenght between(2 and 12)</h1></center>";
	exit();
}

$lenght1=mb_strlen($pass);
$lenght2=mb_strlen($passRepeat);

//===================================================================
//check the passwords
if($lenght1 < $lenght2 || $lenght1 > $lenght2  )
{
	echo "<br>";
	echo "<center><h1>Your passwords does not match.Try again!</h1></center>";
	exit();
}else if( $lenght1 == $lenght2 && $pass!==$passwordRepeat){
//do anything;
}
else{
	echo "<br>";
	echo "<center><h1>Your passwords does not match. Try again!</h1></center>";
	exit();
}
//=====================================================================
//check the email
mysql_connect('localhost','root','');
mysql_select_db('register-bd');

$emailIsNew = mysql_query("SELECT email as emaill FROM users ");
while($result=mysql_fetch_array($emailIsNew)){
    $em = $result['emaill'];
    if($email===$em)
    {
    	echo "<br>";
    	echo "<center><h1>This email adress alredy exist. Try again OR use another email adress !</h1></center>";
    	exit();
    }
}
//=====================================================================
//finally, registration!!!

$mysql= new mysqli('localhost','root','','register-bd');
$mysql->query( "INSERT INTO `users` (`login`, `password`,`name`,`email`,`controlQuest`,`answer`) 
	VALUES('$login','$pass','$name','$email','$quest','$answer')" );
$mysql->close();

header('Location:login.html');


?>

