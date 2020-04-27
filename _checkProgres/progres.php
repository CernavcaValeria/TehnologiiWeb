<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Progres</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
</head>
<style>
	body
{

 	background-color: #ccccff;
    background-size:cover ;
}
.container
{
	width: 500px;
	height: 400px;
	background-color:none;
	margin:50px auto 0 auto;
	/*text-align: center;*/
	background-color: #F0FFFF;
    border:1px solid black;
    border-radius: 1%;
}
.container p
{
	font-size: 20px;
	font-family: sans-serif;
	padding-left: 5%;
	padding-bottom: 3%;
}
.dws-submit
{
padding: 15px 128px;
margin: 5px 0 20px 0;
font-size: 18px;
color:#fff;
background-color: #4d4dff;
border:none;
border-bottom:4px solid #3333ff;
cursor: pointer;
border-radius: 4px;

}
.divforicon
{
	background-color: #ccccff;
	/*border-radius: 50%;*/
	width: 90px;
	height: 90px;
	border-radius: 50%;
}
.divforicon i
{
	font-size: 85px;
}



.columnT
{
  background-color:#F0FFFF;
  margin:0 15px 25px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 15px;
  flex-basis: 33%;
}

.cardT
{
  padding: 15px 25px;

}

.containerT
{
  max-width: 1170;
  width: 100%;
  margin:0 auto;
  display:flex;
}

    .table-box
    {
      margin:50px auto;
    }
    .table-row
    {
      display: table;
      width: 100%;
      margin: 10px;
      font-family: sans-serif;
      background:transparent;
      padding: 0px 0;
      color:#2F4F4F;
      font-size:13px;
      border: 1px black solid;
      box-shadow: 0 1px 4px 0 rgba(0,0,50,0.3);
    }
    .table-cell
    {
      display:table-cell;
      width: 25%;
      padding:20px 0;
      text-align: center;
      border-right: 1px solid gray;
      vertical-align: middle;
      font-size: 17px;
      font-weight: 600;
    }
    .table-head
    {
      background:#2F4F4F;
      box-shadow: none;
      color: #fff;
      font-weight: 600;
      background:cover;
      font-size: 17px;
    } 
    .table-head .table-cell
    {
        border-right: none;
        color:#fff;
    }
    .last-cell
    {
      border-right: none;
    }
    .first-cell
    {
      text-align: left;
      padding-left: 10px;
      font-size: 15px;
    }      
</style>
<body>
<div class="container">

<!-- user profile -->
<center><div class="divforicon"><i class="ion-person"></i></div></center>
<center><p><?php echo $_SESSION['name']; ?></p></center>
<p><i class="ion-android-contact"> Login: <?php  echo $_SESSION['login']; ?></i></p>
<p><i class="ion-locked"> Password: <?php  echo $_SESSION['password']; ?></i></p>
<p><i class="ion-paper-airplane"> Email: <?php  echo $_SESSION['email']; ?></i></p>
<p><i class="ion-star"> Hobbies: <?php  echo $_SESSION['hobbies']; ?></i></p>
</div>


<!-- table of test passd -->
<br><br>
<div style="padding-right: 5%;padding-left: 5%">      
<div class="columnT">
 <div class="cardT">
<center style="font-size:35px;color:#2F4F4F;font-weight: 600; font-family:sans-serif;">Your testing progress </center>
  <center>
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

 $q = mysql_query("SELECT concept as c ,departament as d,level as l,finalScore as s FROM result where userId='$userId'");
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
</center>
</div>

</body>
</html>