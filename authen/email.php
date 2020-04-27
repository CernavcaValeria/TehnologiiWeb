<?php
session_start();
if (isset($_POST['email']))		     {$email = $_POST['email']; 			  if ($email == '') {unset($email);}}

//scap de spatii inutile
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}

//=========================================================================================================

//check the email
  $conn = new mysqli('localhost','root','','register-bd');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }

  $sql = "SELECT email as em FROM users where email='$email' ";
           
  $result = $conn->query($sql);
    if ($result->num_rows<1)
    {
        echo "<br>";
        echo "<center><h1>This email adress do not exist. Try again OR use another email adress !</h1></center>";
        exit();
    }

//=========================================================================================================
mysql_connect('localhost','root','');
mysql_select_db('register-bd');
$q = mysql_query("SELECT answer as ans, controlQuest as cqu, password as pass FROM users where email='$email' ");
while($result=mysql_fetch_array($q)){
    $answer = $result['ans'];
    $controlQuest = $result['cqu'];
    $password = $result['pass'];
}
//=========================================================================================================

$_SESSION['questionControl'] = $controlQuest;
$_SESSION['answerControl'] = $answer;
$_SESSION['password'] = $password;

header('Location:recoverPassword.php');

?>

