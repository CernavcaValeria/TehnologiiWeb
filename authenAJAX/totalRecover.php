<?php
session_start();

if (isset($_POST['answer']))     {$answer = $_POST['answer'];         if ($answer == '') {unset($answer);}}

if (isset($answer) ) {
$answer=stripslashes($answer);
$answer=htmlspecialchars($answer);
}

if( $answer!==$_SESSION['answerControl'])
{
    echo " * Wrong answer";
    exit();
}
else{
//do nothing
    exit();
}
?>

