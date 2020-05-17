<?php

    $order = $_POST['order'];
    $dep = $_POST['departament'];
    $question = $_POST['question'];
    $var1 = $_POST['v1'];
    $var2 = $_POST['v2'];
    $var3= $_POST['v3'];
    $corect = $_POST['corect'];
    $level = "hard";

        //check the "" variables
        if( mb_strlen($order) == 0 
            || mb_strlen($dep)==0 
            || mb_strlen($question)==0 
            || mb_strlen($var1)==0 
            || mb_strlen($var2)==0 
            || mb_strlen($var3)==0 
            || mb_strlen($corect)==0){
            echo "* Don't leave empty cells";
            exit();
        }
        //check id the corect answer is : <=3 and >=1
        if ( $corect !='1' && $corect != '2' && $corect != '3'){
            echo "* Correct answer must be between 1 and 3";
            exit();  
        }

            $conn = new mysqli('localhost','root','','register-bd');
            if ($conn->connect_error) {
                echo "* Connection to BD failed ";
                exit();
            } 


//if all ok, get the concept from bd 

    mysql_connect('localhost','root','');
    mysql_select_db('register-bd');

    $q = mysql_query("SELECT concept as c  FROM question where departament='$dep' limit 1");
    while($result=mysql_fetch_array($q)){
        $concept = $result['c'];
    }

         $sql = "SELECT departament as dep ,concept as con , `order` as ord FROM question where departament='$dep' and concept ='$concept' and `order`= '$order' and `level`= '$level' ";     
         $result = $conn->query($sql);
         //check if the departament-concept-order is valid
         if ($result->num_rows<1){
             echo "* This tuple (Order: ".$order.")(Concept: ".$concept.")(Departament:".$dep.") doesn't exist";
             exit();
         }

//finally, insert the question!!!

$mysql = new mysqli('localhost','root','','register-bd');
    $mysql->query( "UPDATE `question` 
    SET `corect` = '$corect'
        , `var1` = '$var1' 
        , `var1` = '$var1' 
        , `var1` = '$var1' 
        , `question` = '$question'   
    where `departament`='$dep' 
        and `concept` ='$concept' 
        and `order`= '$order' 
        and `level`= '$level' " );
$mysql->close(); 

    
?>