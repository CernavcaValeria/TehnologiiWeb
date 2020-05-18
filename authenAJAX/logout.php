<?php
session_start();

 unset($_SESSION['user_id']);
  unset($_SESSION['name']);
   unset($_SESSION['email']);
    unset($_SESSION['hobbies']);

 header('Location:login.html');
?>