<?php

$login=$_POST['login']; 
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);


$conn = new mysqli('localhost','root','','register-bd');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT login, password FROM users where login='$login'  and password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows <1) 
{
    echo "<br>";
	echo "<center><h1>Your passwords or login is incorrect.Try again!</h1></center>";
    exit();
}$conn->close();

//===================================================================================================

mysql_connect('localhost','root','');
mysql_select_db('register-bd');
$q = mysql_query("SELECT id as user,name as username, email as em ,hobbie as hobby FROM users where login='$login' and password='$password'");
while($result=mysql_fetch_array($q)){
    $userId = $result['user'];
    $username = $result['username'];
    $email = $result['em'];
    $hobby = $result['hobby'];
}

//====================================================================================================

session_start();
$_SESSION['user_id'] = $userId;
$_SESSION['name'] = $username;
$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;
$_SESSION['hobbies'] = $hobby;

header('Location:../index.php');

?>

