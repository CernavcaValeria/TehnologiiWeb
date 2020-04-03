<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amenajare</title>
			<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">

</head>
<style >
	
body
{
	  background: rgb(177, 128, 38); /*url('img/amenajare1.jpg') ;*/
	 height: 2000px;
	 
    background-size:cover ;
}

.column
{
	background-color: rgb(223, 194, 167);
	margin:0 15px 25px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	border-radius: 15px;
	flex-basis: 33%;
}

.card
{
	padding: 15px 25px;

}
.container
{
	/*max-width: 1170;*/
	width: 100%;
	margin:0 auto;
	display:flex;
}
.divinfo 
{
	padding-right: 7%; 
	padding-left: 5%;
	font-family: Times New Roman;
	color: rgb(129, 82, 20);
	font-size: 65px;
}
.divinfo p
{
	font-size: 30px;
	color: black;
}

  .menu{

  margin:0px;
  padding:0px;
  font-weight:bold



}
.menu ul{
  background:#333;
  height:35px;
  list-style:none;
  margin:0;
  padding:0;
}

.menu li
{
  float:left;
  padding:0px;
}
.menu li a
 {
  background:#333; 
  bottom right no-repeat;
  color:#ccc;
  display:block;
  font-weight:normal;
  line-height:60px;
  margin:0px;
  padding:0px 102.8px;
  text-align:center;
  text-decoration:none;
  font-family: Arial;
}

.menu li a:hover, .menu ul li:hover a
{
  background:#556B2F bottom center no-repeat;
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
  position:absolute;
  width:210px;
  z-index:200;
  font-family: Arial;
}

.menu li:hover ul
{
  display:block;
  width:308px;

}
.menu li li
{
  display:block;
  float:none;
  margin:0px;
  padding:0px;
  width:308;

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
  padding:0px 10px 0px 100px;
  text-align:left;
}

.menu li ul a:hover, .menu li ul li:hover a
{
  background:#556B2F center left no-repeat;
  border:0px;
  color:#fff;
  text-decoration:none;
  position: relative;
  border:1px solid white;
    transition: 0.5s;
}

.menu p
{
  clear:left;
}



</style>
<body>

  <div class="menu">
    <ul>
    <li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li><a href="DetermineSoil.php"><i class="ion-ios-paperplane"></i> Determine Soil </a></li>
    <li><a href="UseGrountSoils.php"><i class="ion-ios-paperplane"></i>  Use Case</a></li>
    <li><a href="PracticalTips.php"><i class="ion-ios-paperplane"></i> Practical Tips</a></li>
<?php
if(!isset($_SESSION['user_id'])):
?>
        <li><a href="../../login.html"><i class="ion-checkmark-circled"></i> Try Yourself</a></li>
<?php
else: 
?>  
    <li>
    <a href="#"><i class="ion-checkmark-circled"></i> Try Yourself</a>
      <ul>
          <li> <a href="stylesGardenn/chinese.html">Easy</a></li>
          <li> <a href="stylesGardenn/english.html">Medium</a></li>
          <li> <a href="stylesGardenn/italian.html">Hard</a></li>
      </ul>
  </li>
        </ul>
<?php endif; ?>
    </ul>
  </div>
<br>

<div style="padding-right: 5%;padding-left: 5%">
    <br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			<div>
           				<img src="imgsoil1.png" style="width: 400px;">
           			</div>

           			<div class="divinfo">
           				<center>Sandy Soil</center>
           				<p>The first type of soil is sand. It consists of small particles of weathered rock. Sandy soils are one of the poorest types of soil for growing plants because it has very low nutrients and poor in holding water, which makes it hard for the plant's roots to absorb water. This type of soil is very good for the drainage system. Sandy soil is usually formed by the breakdown or fragmentation of rocks like granite, limestone, and quartz.</p>
           			</div>
           		</div>
			</div>
		</div>



    <br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			<div class= "divinfo">
           				<center>Silt Soil</center>

           				<p>Silt, which is known to have much smaller particles compared to the sandy soil and is made up of rock and other mineral particles which are smaller than sand and larger than clay. It is the smooth and quite fine quality of the soil that holds water better than sand.  Silt is easily transported by moving currents and it is mainly found near the river, lake, and other water bodies. The silt soil is more fertile compared to the other three types of soil. Therefore it is also used in agricultural practices to improve soil fertility. </p>
           			</div>


           			<div>
           				<img src="imgsoil2.png" style="width: 400px;">
           			</div>

           		</div>
			</div>
		</div>



<br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			<div>
           				<img src="imgsoile3.png" style="width: 400px;">
           			</div>

           			<div class="divinfo">
           				<center>Clay Soil</center>
           				<p>Clay is the smallest particles amongst the other two types of soil. The particles in this soil are tightly packed together with each other with very little or no airspace. This soil has very good water storage qualities and making hard for moisture and air to penetrate into it. It is very sticky to the touch when wet, but smooth when dried.  Clay is the densest and heaviest type of soil which do not drain well or provide space for plant roots to flourish. </p>
           			</div>
           		</div>
			</div>
		</div>



    <br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			<div class= "divinfo">
           				<center>Loamy Soil</center>

           				<p>Loam is the fourth type of soil. It is a combination of sand, silt, and clay such that the beneficial properties from each is included. For instance, it has the ability to retain moisture and nutrients, hence, it is more suitable for farming. This soil is also referred to as an agricultural soil as it includes an equilibrium of all three types of soil materials being sandy, clay, and silt and it also happens to have hummus.  Apart from these, it also has higher calcium and pH levels because of its inorganic origins.</p>
           			</div>


           			<div>
           				<img src="imgsoil4.png" style="width: 400px;">
           			</div>

           		</div>
			</div>
		</div>
</div>


      <!-- ----------------------------- -->

<style>

.columnf
{

  margin:0 15px 25px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 15px;
  flex-basis: 33%;
}

.cardf
{
  padding: 15px 25px;
  background-color:#6B8E23;
  border-radius: 18px;



}
.containerf
{
  /*max-width: 1170;*/
  width: 100%;
  margin:0 auto;
  display:flex;
}


.loginf
{
   font-size: 20px;
   background-color:#6B8E23;
   padding-top: 50px;
   padding-bottom: 50px;
   text-align: center;

}

.loginf a
{
  text-decoration: none;
  color:white;
  padding: 11px 60px;
  border:1px solid white;

}

.loginf a:hover
{

  background-color:#6B8E23;
  color:white;
  transition: all 0.01s ease;
  border:3px solid white;
}



*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
}

figure {
  width: 589px;
  height: 150px;
  background-color:#6B8E23;
  color: #fff;
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


.cardf i
{
   font-size: 27px;
}


</style>

<!-- div pading -->


     <div class="container">


           <div class="columnf">
              <div class="cardf">
                <figure>
                   <figcaption>
                     <h2>Wnat to try more Gardening Concepts?</h2>
                      <i class="ion-arrow-down-b"></i> 
                  </figcaption>
                </figure><div class="loginf"> <a href="../../../index.php"> <i class="ion-reply-all"></i> More Concepts</a></div>
             </div>
           </div>




          <div class="columnf">
              <div class="cardf">
              <figure>
                <figcaption>
                  <h2>Want to try yourself on this topic?</h2>
                   <i class="ion-arrow-down-b"></i>
               </figcaption>
               </figure>
                <div class="loginf"> <a href="../../../index.php"> <i class="ion-reply-all"></i> More Concepts</a></div>
              </div>
          </div>

</div>


</body>
</html>
