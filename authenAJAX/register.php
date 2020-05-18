<?php

if (isset($_POST['username']))    	 {$login = $_POST['username'];    		  if ($login == '') {unset($login);}}
if (isset($_POST['name']))    	   	 {$name = $_POST['name']; 				  if ($name == '')  {unset($name);}}
if (isset($_POST['password']))     	 {$pass = $_POST['password'];   		  if ($pass == '')  {unset($pass);}}
if (isset($_POST['email']))		     {$email = $_POST['email']; 			  if ($email == '') {unset($email);}}
if (isset($_POST['quest']))		     {$quest = $_POST['quest']; 			  if ($quest == '') {unset($quest);}}
if (isset($_POST['answer']))		 {$answer = $_POST['answer']; 			  if ($answer == '') {unset($answer);}}
if (isset($_POST['hobbies']))		 {$hobbies = $_POST['hobbies']; 		  if ($hobbies == '') {unset($hobbies);}}

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
if (isset($hobbies) ) {
$hobbies=stripslashes($hobbies);
$hobbies=htmlspecialchars($hobbies);
}

$level='easy';

//the main IF:
        if(mb_strlen($quest) == 0 
            || mb_strlen($hobbies) == 0 
            || mb_strlen($answer) == 0 
            || mb_strlen($login) == 0
            || mb_strlen($pass)==0
            || mb_strlen($name)==0
            || mb_strlen($email)==0)
        {
            echo "* Don't leave empty cells";
            exit();
        }
        else if(mb_strlen($login) < 6 || mb_strlen($login)>30){
            echo "* Login-length must be between 6 and 30";
            exit();
        }
        else if(mb_strlen($pass) < 5 || mb_strlen($pass)>12){
            echo "* Password-length must be between 5 and 12";
            exit();
        }
        else if(mb_strlen($name) < 6 || mb_strlen($name)>30){
            echo "* Name-length must be between 6 and 30";
            exit();
        }

    mysql_connect('localhost','root','');
    mysql_select_db('register-bd');

        $emailIsNew = mysql_query("SELECT email as emaill FROM users ");
        while($result=mysql_fetch_array($emailIsNew)){
        
            $em = $result['emaill'];
            if($email===$em){
                echo "* This email adress alredy exist ";
                exit();
            }
        }

$pass = md5($pass."qwertfhf");       
//if all ok
//finally, registration!!!
      
    $mysql= new mysqli('localhost','root','','register-bd');

    $mysql->query( "INSERT INTO `users` (`login`, `password`,`name`,`email`,`controlQuest`,`answer`,`hobbie`,`level`) 
                    VALUES('$login','$pass','$name','$email','$quest','$answer','$hobbies','$level')" );                
    $mysql->close();
?>