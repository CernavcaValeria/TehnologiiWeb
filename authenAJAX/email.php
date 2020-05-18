<?php
session_start();

if (isset($_POST['email'])){$email = $_POST['email']; if ($email == '') {unset($email);}}

//scap de spatii inutile
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}

//check the email
$conn = new mysqli('localhost','root','','register-bd');
    if ($conn->connect_error) {
        echo "* Connection to BD failed ";
        exit();
    }       


$sql = "SELECT email as em FROM users where email='$email' ";     
$result = $conn->query($sql);
    if ($result->num_rows<1){
        echo "* This email adress do not exist!";
        exit();
    }


mysql_connect('localhost','root','');
mysql_select_db('register-bd');

$q = mysql_query("SELECT answer as ans, controlQuest as cqu, id as userI  FROM users where email='$email' ");
    while($result=mysql_fetch_array($q)){
        $answer = $result['ans'];
        $controlQuest = $result['cqu'];
        $idUs = $result['userI'];
    }

    $_SESSION['questionControl'] = $controlQuest;
    $_SESSION['answerControl'] = $answer;
    $_SESSION['id'] = $idUs;

?>