<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questin2</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="../../../../css/quiz.css">
</head>
<body>
<?php
$_SESSION['score']=0;
$answer1 = $_POST['answer1'];

  if($answer1== $_SESSION['corect'])
{
 $_SESSION['score']=1;
 $scor= $_SESSION['score'];
}
?>
    <div class="container">
        <header>
            <div class="pull-left">The correct answer was: <?php echo $_SESSION['corect'];?></div>
            <div class="pull-right">Theme: Tools->Primitive Tools</div>
        </header>
        <main>
            <form class="questionForm" action="try_yorself_primitiveT_q3.php" method="post" >
 <?php 
mysql_connect('localhost','root','');
mysql_select_db('register-bd');
$concept = "Tools";
$departament = "PrimitiveTools";
$level = "easy";
$order = '2' ;

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
                    <li><input type="radio" name="answer2" value="1"> <?php echo $var1; ?></li>
                    <li><input type="radio" name="answer2" value="2"> <?php echo $var2; ?></li>
                    <li><input type="radio" name="answer2" value="3"> <?php echo $var3; ?></li>
                </ul>
                <div class="centerDiv"><button class= "dws-submit" type="submit">Submit</button></div>
    </form>

        </main>
        <footer>
            <div class="pull-left">Total: 5 Questions [easy]</div>
            <div class="pull-right"><?php echo "Your current score is : " .$_SESSION['score'] ." points";?></div>
        </footer><br><br>
        <div class="centerDiv"><a href="../../../PrimitiveTools.php" class="adws-submit"><i class="ion-android-exit"></i> Quit</a></div>
    </div> <!-- div container-->

</body>
</html>