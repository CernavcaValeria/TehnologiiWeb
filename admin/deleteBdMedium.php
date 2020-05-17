<?php
    $order = $_POST['order'];
    $dep = $_POST['departament'];
    $concept = $_POST['concept'];
    $level = 'medium';

//delete question!!!

$mysql = new mysqli('localhost','root','','register-bd');
    $mysql->query( "DELETE FROM `question` 
    WHERE `departament`='$dep' 
        and `concept` ='$concept' 
        and `order`= '$order' 
        and `level`= '$level' " );
$mysql->close(); 

?>