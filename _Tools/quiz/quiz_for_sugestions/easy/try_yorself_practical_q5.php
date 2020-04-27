<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Questin5</title>
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


<?php

$answer4 = $_POST['answer4'];

  if($answer4 == 4)
{
 $scor = $_SESSION['score'];
 $scor = $scor + 1;
 $_SESSION['score'] = $scor;
}

?>
    <div class="container">
        <header>
            <div class="pull-left">Test your knowledge</div>
            <div class="pull-right">Theme: Grount Soils-> Practical Tips</div>
        </header>
        <main>
            <form class="questionForm" action="score.php" method="post" >
                <h3>5.Intrebarea nr 5</h3>
                <ul>
                    <li><input type="radio" name="answer5" value="1">rasp1</li>
                    <li><input type="radio" name="answer5" value="2">rasp2</li>
                    <li><input type="radio" name="answer5" value="3">rasp3</li>
                    <li><input type="radio" name="answer5" value="4">rasp4</li>
                </ul>
                <center><button class= "dws-submit" type="submit">Submit</button></center>

        </main>
        <footer>
            <div class="pull-left">Total: 5 Questions [easy]</div>
            <div class="pull-right"><?php echo "Your current score is : " .$_SESSION['score'] ." points";?></div>
        </footer><br><br>
        <center><a href="../../../PracticalTips.php" class="adws-submit"><i class="ion-android-exit"></i> Quit</a></center>
    </div> <!-- div container-->

</body>
</html>