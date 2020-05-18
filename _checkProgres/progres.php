<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Progres</title>
	<link rel="stylesheet" type="text/css" href="../css/progres.css">
	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">  
</head>
<body>
<div class="container"><div class="divforicon"><i class="ion-person"></i></div>
<p class="nameUser"><?php echo $_SESSION['name']; ?></p>
<p><i class="ion-paper-airplane"> Email: <?php  echo $_SESSION['email']; ?></i></p>
<p><i class="ion-star"> Hobbies: <?php  echo $_SESSION['hobbies']; ?></i></p>

<?php
  mysql_connect('localhost','root','');
  mysql_select_db('register-bd');

$user = $_SESSION['user_id'];

   $q = mysql_query("SELECT COUNT(level) as num FROM result where userId='$user' ");
     while($result=mysql_fetch_array($q))
    {
     $counter = $result['num']; 
    }

  if ($counter<15): ?> 
      <p><i class="ion-ios-lightbulb"> Current Level: Easy</i></p>

  <?php elseif($counter>=15 && $counter<30): ?> 
      <p><i class="ion-ios-lightbulb"> Current Level: Medium</i></p>

      <?php  
        $mysql= new mysqli('localhost','root','','register-bd');
        $mysql->query( "UPDATE `users` SET `level`='medium' where id='$user'" );
        $mysql->close(); 
      ?>

  <?php elseif($counter>=30 && $counter<45): ?> 
      <p><i class="ion-ios-lightbulb"> Current Level: Hard</i></p>
      <?php  
        $mysql= new mysqli('localhost','root','','register-bd');
        $mysql->query( "UPDATE `users` SET `level`='hard' where id='$user' " );
        $mysql->close(); 
      ?>

  <?php elseif($counter==45): ?>
      <p><i class="ion-ios-lightbulb"> Current Level: Professional</i></p>
      <?php  
        $mysql= new mysqli('localhost','root','','register-bd');
        $mysql->query( "UPDATE `users` SET `level`='professional' where id='$user'" );
        $mysql->close(); 
      ?>
  <?php endif; ?> 
</div>


<?php
if ($counter==45):
?>
<div class="Congratulations">
 <p><i>Dear <?php echo $_SESSION['name']; ?>, you have passed all the possible tests that we proposed for study. Congratulations! You have reached the highest level: <strong>Professional</strong>. The site administration is proud to have raised a gardener like you.Now that you are fully informed,you can help the administration with your suggestions.</i></p>
</div>


<?php endif; ?> 
<!-- table of test passd easy level-->
<br><br>
<div class="padding">      
<div class="columnT">
 <div class="cardT">
<p class="centerr">Your testing progress on Easy level </p>
  <div class="table-box">
    <div class="table-row table-head">
      <div class="table-cell ">
        <p>Concept</p>
      </div>  
      <div class="table-cell">
        <p>Departament</p>
      </div>
      <div class="table-cell">
        <p>Level</p>
      </div>
      <div class="table-cell">
        <p>Score</p>
      </div>                                  
    </div>
<?php 

  mysql_connect('localhost','root','');
  mysql_select_db('register-bd');

$userId = $_SESSION['user_id'];

    $q = mysql_query("SELECT concept as c ,departament as d,level as l,finalScore as s FROM result where userId='$userId' and level='easy' ");

    while($result=mysql_fetch_array($q)):
?>    
    <div class="table-row">
      <div class="table-cell ">
        <p><?php echo $result['c'];?></p>
      </div>  
      <div class="table-cell">
        <p><?php echo $result['d'];?></p>
      </div>
      <div class="table-cell">
        <p><?php echo $result['l'];?></p>
      </div>
      <div class="table-cell last-cell">
        <p><?php echo $result['s'];?></p>
      </div>                                  
    </div> 
<?php endwhile; ?>
</div>
</div>
</div>
</div>


<!-- table of test passd medium level-->
<br><br>
<div class="padding">      
<div class="columnT">
 <div class="cardT">
<p class="centerr">Your testing progress on Medium level </p>
  <div class="table-box">
    <div class="table-row table-head1">
      <div class="table-cell ">
        <p>Concept</p>
      </div>  
      <div class="table-cell">
        <p>Departament</p>
      </div>
      <div class="table-cell">
        <p>Level</p>
      </div>
      <div class="table-cell">
        <p>Score</p>
      </div>                                  
    </div>
<?php 
    mysql_connect('localhost','root','');
    mysql_select_db('register-bd');

$userId = $_SESSION['user_id'];

      $q = mysql_query("SELECT concept as c ,departament as d,level as l,finalScore as s 
        FROM result where userId='$userId'and level='medium' ");

      while($result=mysql_fetch_array($q)):
?>    
    <div class="table-row">
      <div class="table-cell ">
        <p><?php echo $result['c'];?></p>
      </div>  
      <div class="table-cell">
        <p><?php echo $result['d'];?></p>
      </div>
      <div class="table-cell">
        <p><?php echo $result['l'];?></p>
      </div>
      <div class="table-cell last-cell">
        <p><?php echo $result['s'];?></p>
      </div>                                  
    </div> 
<?php endwhile; ?>
</div>
</div>
</div>
</div>


<!-- table of test passd hard level-->
<br><br>
<div class="padding">      
<div class="columnT">
 <div class="cardT">
<p class="centerr">Your testing progress on Hard level </p>
  <div class="table-box">
    <div class="table-row table-head2">
      <div class="table-cell ">
        <p>Concept</p>
      </div>  
      <div class="table-cell">
        <p>Departament</p>
      </div>
      <div class="table-cell">
        <p>Level</p>
      </div>
      <div class="table-cell">
        <p>Score</p>
      </div>                                  
    </div>
<?php 
      mysql_connect('localhost','root','');
      mysql_select_db('register-bd');
    
    $userId = $_SESSION['user_id'];

      $q = mysql_query("SELECT concept as c ,departament as d,level as l,finalScore as s FROM result where userId='$userId' and level='hard' ");

      while($result=mysql_fetch_array($q)):
?>    
    <div class="table-row">
      <div class="table-cell ">
        <p><?php echo $result['c'];?></p>
      </div>  
      <div class="table-cell">
        <p><?php echo $result['d'];?></p>
      </div>
      <div class="table-cell">
        <p><?php echo $result['l'];?></p>
      </div>
      <div class="table-cell last-cell">
        <p><?php echo $result['s'];?></p>
      </div>                                  
    </div> 
<?php endwhile; ?>
</div>
</div>
</div>
</div>
    <a class="gotopbtnhome" href="../index.php"><i class="ion-ios-home"></i> </a>
</body>
</html>