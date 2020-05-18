<?php
session_start();
if (isset($_POST['newPassword'])){
    $newPass = $_POST['newPassword'];    		 
    if ($newPass == '') {unset($newPass);}
}

if (isset($_POST['newPasswordRep'])){
    $newPasswordRep = $_POST['newPasswordRep']; 
    if ($newPasswordRep == '')  {unset($newPasswordRep);}
}

$user = $_SESSION['id'];

//sa scap de spatii inutile

if (isset($newPass) ) {
$newPass=stripslashes($newPass);
$newPass=htmlspecialchars($newPass);
}
if (isset($newPasswordRep) ) {
$newPasswordRep=stripslashes($newPasswordRep);
$newPnewPasswordRepass=htmlspecialchars($newPasswordRep);
}

//the main IF:
        if(mb_strlen($newPass) == 0 || mb_strlen($newPasswordRep) == 0)
        {
            echo "* Don't leave empty cells";
            exit();
        }
        else if(mb_strlen($newPass) < 6 || mb_strlen($newPass)>30){
            echo "* Password-length must be between 6 and 30";
            exit();
        }
        else if(mb_strlen($newPasswordRep) < 6 || mb_strlen($newPasswordRep)>30){
            echo "* Password-length must be between 6 and 30";
            exit();
        }

$lenght1=mb_strlen($newPass);
$lenght2=mb_strlen($newPasswordRep);

//check the passwords match
if($lenght1 < $lenght2 || $lenght1 > $lenght2)
{
    echo "Your passwords does not match.Try again!";
    exit();

}else if( $lenght1 == $lenght2 && $pass!==$passwordRepeat){
    echo "Your passwords does not match. Try again!";
    exit();
}
else{

    $newPass = md5($newPass."qwertfhf");
    $mysql = new mysqli('localhost','root','','register-bd');
    $mysql->query( "UPDATE `users` SET `password`='$newPass' where id='$user'" );
    $mysql->close(); 
}

?>