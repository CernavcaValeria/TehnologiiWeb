<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Type soils</title>
      <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">    
</head>
</style>
<body>


<style >
  body
{
  background: rgb(177, 128, 38);
}
  .menu{
    border:none;
    border:0px;
    margin:0px;
    width: 100%;
    font-weight:bold;
    margin-left: auto;
    margin-right: auto;
}

.menu ul{
    background:#333;
    height:35px;
    list-style:none;
    margin:0;
    padding:0px;

}

.menu li
{
    float:left;
    padding:0px;
    width:20%;

}

.menu li a
 {
    background:#333;
    color:#ccc;
    display:block;
    font-weight:normal;
    line-height:60px;
    margin:0px;
    padding:0px 10%;
    text-align:center;
    text-decoration:none;
    font-family: Arial;
}

.menu li a:hover, .menu ul li:hover a
{
    background:rgb(223, 194, 167);
    color:#FFF;
    text-decoration:none;
    font-family: Arial;
}
.menu li ul
{
    background:#333;
    display:none;
    height:auto;
    padding:0px;
    margin:0px;
    border:0px;
    width:19.8%;
    z-index:200;
    position: absolute;
    font-family: Arial;
}



.menu li:hover ul
{
  display:block;
  width:19.8%;

}
.menu li li
{
  display:block;
  float:none;
  margin:0px;
  padding:0px;
  width:100%;
}

.menu li:hover li a
{
  background:none;
}

.menu li ul a
{
  display:block;
  height:60px;
  font-size:17px;
  font-family: Arial;
  margin:0px;
  padding:0px 10px 0px 10px;
  text-align:left;
}

.menu li ul a:hover, .menu li ul li:hover a
{
  background:rgb(223, 194, 167);
  border:0px;
  color:#fff;
  text-decoration:none;
  border:1px solid white;
  transition: 0.5s;
  margin:0;
}

@media(max-width: 850px)
    {
    .box-1m li{
        flex:1;
        order:1;
    width: 100%
    }
    .box-2m li{
        flex:2;
        order:2;
        width: 100%
    }
    .box-3m li{
        flex:3;
        order:3;
        width: 100%
    }
    .box-4m li{
        flex:4;
        order:4;        
        width: 100%
    }
    .box-5m li{
        flex:4;
        order:4;        
        width: 100%
    }
}
@media(max-width: 849px)
{
  .menu li:hover ul
{
  width:98%;

}
@media(max-width: 749px)
{
  .menu li:hover ul
{
  width:97.5%;

}
@media(max-width: 649px)
{
  .menu li:hover ul
{
  width:97.1%;

}
@media(max-width: 549px)
{
  .menu li:hover ul
{
  width:96.7%;

}
</style>
<body>

<div class="menu">
    <ul>
       <div class="box-3m"><li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li></div>
       <div class="box-1m"><li><a href="DetermineSoil.php"><i class="ion-ios-paperplane"></i> Determine Soil </a></li></div> 
       <div class="box-2m"><li ><li><a href="UseGrountSoils.php"><i class="ion-ios-paperplane"></i>  Use Case</a></li></div>
       <div class="box-2m"><li><a href="PracticalTips.php"><i class="ion-ios-paperplane"></i> Practical Tips</a></li></div>  
       <div class="box-4m">
<?php
if(!isset($_SESSION['user_id'])):
?>        
        <li><a href="../authen/login.html"><i class="ion-checkmark-circled"></i> Try Yourself</a></li>
<?php
else: 
?> 
         <li>
            <a href="#"><i class="ion-checkmark-circled"></i> Try Yourself</a>
            <ul>
<!-- ________________________________________________________________________________________________________________ -->
      <? 
           $conn = new mysqli('localhost','root','','register-bd');
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);}
           $user = $_SESSION['user_id'];
           $c = "GrountSoils";
           $d = "TypeSoil";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_typeSoil/easy/try_yorself_type_q1.php">Easy</a></li>
      <?php else: ?>

         <li class="oli"> <a href="../../_upss/sorry.php"> Easy</a></li>

      <?php endif; $conn->close(); ?>
<!-- ________________________________________________________________________________________________________________ -->  
        
                <li><a href="quiz/quiz_for_determine/">Medium</a></li>
                <li><a href="quiz/quiz_for_determine/">Hard</a></li>
            </ul>
        </li>
<?php endif; ?>                
       </div> 
    </ul>
</div>
<br><br>



<style >
     .bigmain
    {
    padding-right: 10%; 
    padding-left: 10%;
    }

h3{

    font-family: Times New Roman;
    color: rgb(129, 82, 20);
    font-size: 42px;
}
 p
{
    font-size: 23px;
    color: black;
    font-family: Times New Roman;
}
.main
{
    background-color:rgb(223, 194, 167);
    margin:0 30px 30px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    border-radius: 15px;
}

    @media(min-width: 990px)
    {
        .main{
            display: flex; 
        }
    }
 @media(max-width: 990px)
    {
    .bigmain
    {
    padding-right: 1%; 
    padding-left: 1%;

    }
}


    .main div{
        padding:20px;
        padding-top:10px;
        padding-bottom:10px;
    }
    .box-1{
        flex:2.5;
        order:1;
    }
    .box-21{
        flex:1.5;
        order:2;
    }
    .box-22{
        flex:1.5;
        order:1;
    }
    .box-3{
        flex:2.5;
        order:2;
    }
@media(max-width: 1400px)
{
h3
    {
        font-size: 40px;
    }
 p
   {
    font-size: 20px;
   }
}
@media(max-width: 1300px)
{
h3
    {
        font-size: 35px;
    }
 p
   {
    font-size: 18px;
   }
}
@media(max-width: 1200px)
{
h3
    {
        font-size: 30px;
    }
 p
   {
    font-size: 16.5px;
   }
}
@media(max-width: 1100px)
{
h3
    {
        font-size: 28px;
    }
 p
   {
    font-size: 15px;
   }
}
@media(max-width: 1000px)
{
h3
    {
        font-size: 27px;
    }
 p
   {
    font-size: 14px;
   }
}
@media(max-width: 989px)
{
h3
    {
        font-size: 35px;
    }
 p
   {
    font-size: 21px;
   }
}
img
{
    border-radius:10px;
    width: 100%;
}

</style>

<div class="bigmain">
<div class="main">
    <div class="box-21">
        <center><img src="img/imgsoil1.png"></center>
    </div>
    <div class="box-1">
      <center><h3>Sandy Soil</h3></center>
        <p>The first type of soil is sand. It consists of small particles of weathered rock. Sandy soils are one of the poorest types of soil for growing plants because it has very low nutrients and poor in holding water, which makes it hard for the plant's roots to absorb water. This type of soil is very good for the drainage system. Sandy soil is usually formed by the breakdown or fragmentation of rocks like granite, limestone, and quartz.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>Silt Soil</h3></center>
         <p>Silt, which is known to have much smaller particles compared to the sandy soil and is made up of rock and other mineral particles which are smaller than sand and larger than clay. It is the smooth and quite fine quality of the soil that holds water better than sand.  Silt is easily transported by moving currents and it is mainly found near the river, lake, and other water bodies. The silt soil is more fertile compared to the other three types of soil. Therefore it is also used in agricultural practices to improve soil fertility. </p>
     </div>
        <div class="box-22">
         <center><img src="img/imgsoil2.png"></center>
    </div>
  </div>

  <div class="main">
    <div class="box-21">
        <center><img src="img/imgsoile3.png" ></center>
    </div>
    <div class="box-1">
      <center><h3>Clay Soil</h3></center>
        <p>Clay is the smallest particles amongst the other two types of soil. The particles in this soil are tightly packed together with each other with very little or no airspace. This soil has very good water storage qualities and making hard for moisture and air to penetrate into it. It is very sticky to the touch when wet, but smooth when dried.  Clay is the densest and heaviest type of soil which do not drain well or provide space for plant roots to flourish. </p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>Loamy Soi</h3></center>
         <p>Loam is the fourth type of soil. It is a combination of sand, silt, and clay such that the beneficial properties from each is included. For instance, it has the ability to retain moisture and nutrients, hence, it is more suitable for farming. This soil is also referred to as an agricultural soil as it includes an equilibrium of all three types of soil materials being sandy, clay, and silt and it also happens to have hummus.  Apart from these, it also has higher calcium and pH levels because of its inorganic origins.</p>
       </div>  
        <div class="box-22">
         <center><img src="img/imgsoil4.png"  style="width: 100%;"></center>
    </div>
  </div>

</div>

<!-- end big main -->
         <!-- ----------------------------- -->
<style>
    .login
{
   font-size: 20px;
   padding-top: 50px;
   padding-bottom: 50px;
   padding-right: 25px;
   text-align: center;
   font-size: 25px;
   font-family: Times New Roman;
  background-color:rgb(223, 194, 167);

}

.login a
{
  text-decoration: none;
  color:#fff;
  padding: 11px 39px;
  border-radius: 10px;
  background: black;

}

.login a:hover
{
  color: #fff;
  background: black;
  box-shadow: 0 0 10px black, 0 0 40px black, 0 0 80px black;
  transition: 0.6s;
}



*, *:before, *:after {
  box-sizing: border-box;
}

body {
     font-family: Times New Roman;
}

figure {
  width: 80%;
  height: 170px;
  border-radius: 20px;
  background-color:rgb(223, 194, 167);
  color: black;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  text-align: center;

  position: relative;
}
figure h2 {
  transition: 0.2s;
  transform: translateY(20px);
}
figure p {
  transition: 0.2s;
  transform: translateY(-20px);
  opacity: 0;
  visibility: hidden;
}
figure:before {
  content: '';
  position: absolute;
  top: 5%;
  right: 5%;
  bottom: 5%;
  left: 5%;
  border-top: solid 2px;
  border-bottom: solid 2px;
  transition: 0.6s;
  transform: scaleX(0);
}


figure:after {
  content: '';
  position: absolute;
  top: 5%;
  right: 5%;
  bottom: 5%;
  left: 5%;
  border-left: solid 2px;
  border-right: solid 2px;
  transition: 0.6s;
  transform: scaleY(0);
}

figure:hover:before, 
figure:hover:after{
  transform: scale(1);
}

figure:hover h2, 
figure:hover p {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

    .bigmaine
    {
    padding-right: 10%; 
    padding-left: 10%;
    }
    .maine
  {
    background-color:rgb(223, 194, 167);
    margin:0 30px 20px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    border-radius: 15px;
}
    @media(min-width: 1100px){
        .maine{
            display: flex;
        }
         .login
   {
    font-size: 25px;
   }
    }
    .maine div{
        padding: 12px;
    }
    .box-1e{
        flex:1;
        order:1;
    }
    .box-2e{
        flex:1;
        order:2;
    }
    .box-3e{
        flex:1;
        order:3;
    }
@media(max-width: 1250px)
{

 .login
   {
    font-size: 20px;
   }
}
@media(max-width: 1100px)
{

 .login
   {
    font-size: 25px;
   }
}
.gotopbtn{
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 40px;
    right: 50px;
    color:black;
    text-decoration: none;
    text-align: center;
    line-height: 50px;
    font-size: 50px;
} 
.gotopbtn:hover
{
    border-radius: 10px;
    box-shadow: 0 0 10px rgb(223, 194, 167), 0 0 40px rgb(223, 194, 167), 0 0 80px rgb(223, 194, 167);
    transition: 0.2s;
}
</style>

<div class="bigmaine">
<div class="maine">
    <div class="box-1e">
        <center><figure>
                <figcaption>
                      <h2>Want  to discover <br>more Gardening <br>Concepts?</h2>
                      <i style="font-size:28px;" class="ion-arrow-down-b"></i>
                    </figcaption>
        </figure></center>
        <div class="login" > <a href="../../../index.php"> <i class="ion-reply-all"></i> More Concept</a></div>
    </div>
    <div class="box-2e">
        <center><figure>
            <figcaption>
                <h2> Want check out your progress?</h2>
                <i class="ion-arrow-down-b" style="font-size:28px;"></i>
         </figure></center>
         </figure><div class="login"> <a href="../_checkProgres/progres.php"> <i class="ion-reply-all"></i> Your progress</a></div>
    </div>
    <div class="box-3e">
        <center><figure>
            <figcaption>
             <h2>Want to try <br>your knoweladge <br>on this topic ?</h2>
             <i class="ion-arrow-down-b" style="font-size:28px;"></i>
            </figcaption>
         </figure></center>
        <div class="login"> <a href="../../../index.php"> <i class="ion-reply-all"></i>Try yourself</a></div>
    </div>
</div>
</div>
    <a class="gotopbtn" href="#"><i class="fas fa-angle-double-up"></i> </a>
</body>
</html>
