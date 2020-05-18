<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>COUNT SCORE</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="../../../../css/quiz.css">
</head>
<body>

<div class="container">
        <header>
            <div class="pull-left">The correct answer was: <? echo $_SESSION['corect']; ?></div>
            <div class="pull-right">Theme: Teaching Guide -> Herb Guide</div>
        </header>
        <main>
<?php

$answer5 = $_POST['answer5'];

 if($answer5 ==  $_SESSION['corect'] )
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
  $concept = "TeachingGuid";
  $departament = "HerbGuide";
  $level='hard';

  $conn = new mysqli('localhost','root','','register-bd');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

  $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$departament' and concept='$concept' and level='$level'";
           
  $result = $conn->query($sql);
    if ($result->num_rows<1)
    {
        $mysql= new mysqli('localhost','root','','register-bd');
        $mysql->query( "INSERT INTO `result`(`userId`,`concept`, `departament`,`level`,`finalScore`) 
        VALUES( '$user' ,'$concept','$departament','hard','$scorFinal')" );
        $mysql->close();

    echo "<br><hr><br><center><h1>Dear " . $_SESSION['name'] ." Your final score is : ".$scorFinal ." out of 5</h1></center><br><hr><br>";
   }
   else
   {
    echo "<br><hr><br><center><h1>Dear " . $_SESSION['name'] ." you've successfully passed this test!</h1></center><br><hr><br>";
   }
 }
 
?> 
        </main><br>
        <footer>
            <div class="pull-left">Total: 5 Questions [hard]</div>
        </footer><br><br>
        <div class="centerDiv"><a href="../../../HerbsGuide.php" class="adws-submit"><i class="ion-android-exit"></i> Quit</a></div>
    </div> <!-- div container-->
<?php
 $_SESSION['score']=0;
?>    

</body>
</html>