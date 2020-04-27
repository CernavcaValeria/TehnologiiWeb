<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>COUNT SCORE</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
</head>
<style >
body{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    line-height: 1.6em;
    background: #F0F8FF;
}
li{
    list-style:none;
}
.container
{
    width: 70%;
    margin:20px auto;
    overflow:auto;
    height: 600px;
}
.pull-left{float:left;}
.pull-right{float:right;}
header{
    background: #4193DA ;
    color:black;
    padding: 20px 80px;
    overflow:auto;
    font-size: 20px;
    border-radius: 20px;

}
footer{

    background: #4193DA ;
    color:black;
    padding: 20px 80px;
    overflow:auto;
    font-size: 20px;
    border-radius: 20px;

}
@media only screen and (max-width: 900px)
{
    .container{
    width: 90%;
    }
}

.dws-submit
{
padding: 13px 130px;
margin: 5px 0 20px 0;
font-size: 19px;
color:#fff;
background-color: #0000FF;
border:none;
border-bottom:4px solid #00008B;
cursor: pointer;
border-radius: 20px;

}
.adws-submit
{
padding: 13px 135px;
margin: 5px 0 20px 0;
font-size: 19px;
color:#fff;
background-color: #0000FF;
border:none;
border-bottom:4px solid #00008B;
cursor: pointer;
border-radius: 20px;
text-decoration:none;

}
</style>
<body>
<div class="container">
        <header>
            <div class="pull-left">Test your knowledge</div>
            <div class="pull-right">Theme: Grount Soils->Use-Case</div>
        </header>
        <main>
<?php

$answer5 = $_POST['answer5'];

 if($answer5 == 1)
{
  $scor = $_SESSION['score'];
  $scor = $scor + 1;
  $_SESSION['score'] = $scor;
}

  $scorFinal = $_SESSION['score'];

 if($scorFinal>5)
 {
    echo "<br><hr><br><center><h1>Dear " .  $_SESSION['name'] . " Something went wrong.</h1> </center><br><center><h1> Quit Quiz Game and try again !</h1></center><br><hr><br>";
 }
 if($scorFinal<=5)
 {
  $user = $_SESSION['user_id'];
  $departament = "TypeSoil";
  $concept = "Usecase";
  $level='easy';

  $conn = new mysqli('localhost','root','','register-bd');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

  $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$departament' and concept='$concept' and level='$level'";
           
  $result = $conn->query($sql);
    if ($result->num_rows<1)
    {
        $mysql= new mysqli('localhost','root','','register-bd');
        $mysql->query( "INSERT INTO `result`(`userId`,`concept`, `departament`,`level`,`finalScore`) 
        VALUES( '$user' ,'$concept','$departament','easy','$scorFinal')" );
        $mysql->close();

    echo "<br><hr><br><center><h1>Dear " . $_SESSION['name'] ." Your final score is : ".$scorFinal ." out of 5</h1></center><br><hr><br>";
   }
 }
 
?> 
        </main><br>
        <footer>
            <div class="pull-left">Total: 5 Questions [easy]</div>
        </footer><br><br>
        <center><a href="../../../UseGrountSoils.php"class="adws-submit"><i class="ion-android-exit"></i> Quit</a></center>
    </div> <!-- div container-->
<?php
 $_SESSION['score']=0;
?>    

</body>
</html>