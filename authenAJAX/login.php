<?php

    $login = $_POST['myLogin'];
    $password = $_POST['myPassword'];
    
    $conn = new mysqli('localhost','root','','register-bd');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit();
    } 

//aflu daca loginul exista in BD
  $sql = "SELECT login FROM users where login='$login'";
  $result = $conn->query($sql);

    if ($result->num_rows <1) {
        echo " * Your login is incorrect";
        exit();
    } 

//criptez parola primita prin Post pentru a compara hash-codurile lor    
$password = md5($password."qwertfhf");

  $sql1 = "SELECT login, password FROM users where login='$login'  and password='$password' ";
  $result1 = $conn->query($sql1);

//tme main IF:

        if( mb_strlen($login) == 0 || mb_strlen($password)==0 )
        {
            echo "* Don't leave empty cells";
            exit();
        }
        else if ($result1->num_rows <1) {
           echo " * Your passwords is incorrect";
           exit();
        } 
        else{ 
            
        //all are ok get login
        mysql_connect('localhost','root','');
        mysql_select_db('register-bd');

            $q = mysql_query("SELECT id as user,name as username, email as em ,hobbie as hobby FROM users where login='$login' and password='$password'");
    
            while($result=mysql_fetch_array($q)){

            $userId = $result['user'];
            $username = $result['username'];
            $email = $result['em'];
            $hobby = $result['hobby'];

            }
            //start session for the current user
            session_start();
            $_SESSION['user_id'] = $userId;
            $_SESSION['name'] = $username;
            $_SESSION['login'] = $login;
            $_SESSION['email'] = $email;
            $_SESSION['hobbies'] = $hobby;
        }
?>