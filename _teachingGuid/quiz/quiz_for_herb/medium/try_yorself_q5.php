<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Questin5</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="../../../../css/quiz.css">
</head>
<body>


<?php

$answer4 = $_POST['answer4'];

  if($answer4 == $_SESSION['corect'])
{
 $scor = $_SESSION['score'];
 $scor = $scor + 1;
 $_SESSION['score'] = $scor;
}

?>
    <div class="container">
        <header>
            <div class="pull-left">The correct answer was: <? echo $_SESSION['corect']; ?></div>
            <div class="pull-right">Theme: Teaching Guide -> Herb Guide</div>
        </header>
        <main>
            <form class="questionForm" action="score.php" method="post" >
<?php 
mysql_connect('localhost','root','');
mysql_select_db('register-bd');
$concept = "TeachingGuid";
$departament = "HerbGuide";
$level = "medium";
$order = '5' ;

    $q = mysql_query("SELECT question as quest, var1 as v1, var2 as v2, var3 as v3 , corect as cor FROM question where concept='$concept' and departament='$departament' and level='$level' and `order`='$order' " );
    
    while($result=mysql_fetch_array($q)){
    $question = $result['quest'];
    $var1 = $result['v1'];
    $var2 = $result['v2'];
    $var3 = $result['v3']; 
    $corect = $result['cor'];   
    }
    $_SESSION['corect'] = $corect;
?>                
                <h3><?php echo $order .". ".$question; ?></h3>
                <ul>
                    <li><input type="radio" name="answer5" value="1"> <?php echo $var1; ?></li>
                    <li><input type="radio" name="answer5" value="2"> <?php echo $var2; ?></li>
                    <li><input type="radio" name="answer5" value="3"> <?php echo $var3; ?></li>
                </ul>
                <div class="centerDiv"><button class= "dws-submit" type="submit">Submit</button></div>
    </form>


        </main>
        <footer>
            <div class="pull-left">Total: 5 Questions [medium]</div>
            <div class="pull-right"><?php echo "Your current score is : " .$_SESSION['score'] ." points";?></div>
        </footer><br><br>
        <div class="centerDiv"><a href="../../../HerbsGuide.php" class="adws-submit"><i class="ion-android-exit"></i> Quit</a></div>
    </div> <!-- div container-->

</body>
</html>