<!DOCTYPE html>
<html lang="en">
<head>
    <title>Send us mail</title>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/sendMail.css">
    <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
</head>
<body>
<div class="container">   

    <div id='for-message'></div>

    <form action="#" method="POST">

        <div class="dws-input">
            <input type="text"  name='name' autocomplete="on" placeholder="Name">
        </div> 
        <div class="dws-input">
            <input type="text"  name='email' autocomplete="on" placeholder="Email">
        </div> 

        <div class="dws-input">
            <input type="text"  name="text" autocomplete="on" placeholder="Some text" >
        </div>     

        <input type="submit" class="dws-submit" id="submit" name="sab" value="Send">
    </form>
</div>

<?php
$letter="Letter";
error_reporting( E_ERROR );   //Off warning и notice

// extrag variabilele din post  
if (isset($_POST['name']))     {$name1     = $_POST['name'];    if ($name1 == '') {unset($name1);}}
if (isset($_POST['email']))    {$email1    = $_POST['email'];   if ($email1 == '')  {unset($email1);}}
if (isset($_POST['text']))      {$text      = $_POST['text'];   if ($text == '')  {unset($text);}}
if (isset($_POST['sab']))       {$sab     = $_POST['sab'];    if ($sab == '')   {unset($sab);}}
//sa scap de spatii inutile
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}

// receiver
$address="cernavcavaleria@gmail.com";
//ce contine scrisoarea
$note_text="Sugestion or question !\r\nUser : $name1 \r\n Email : $email1 \r\n Message: $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$letter,$note_text,"Content-type:text/plain; windows-1251"); 
//thank you message
echo "<center><p style='color:black; font-size:25px'>Dear  <b>$name1</b> your message is succesfuly send.</p></center> <hr>
     <center><p style='color:green; font-size:25px'> Site administrators thank you for contributing to the efficiency of the site.</p></center><hr>
    <center><p style='color:black; font-size:25px'>You will be answered soon by mail <b> $email1</b>.</p></center>";
}
?>  

</body>
</html>