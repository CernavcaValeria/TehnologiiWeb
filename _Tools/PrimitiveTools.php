<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PrimitiveTools</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> 
</head>
<style >

.wrap2 {
  
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color:  rgb(223, 194, 167);
  display: flex;
  justify-content: center;
  align-items: center;
}
.card12 {
  width: 300px;
  height: 300px;
  position: relative;
  perspective: 1000px;
}
.front2 {
  background-image:  url('img/img40.png');
  background-size:cover ;
}
.front3 {
  background-image:  url('img/img48.png');
  background-size:cover ;
}
.front4 {
  background-image:  url('img/img49.png');
  background-size:cover ;
}
.front5 {
  background-image:  url('img/img50.png');
  background-size:cover ;
}
.front6 {
  background-image:  url('img/img51.png');
  background-size:cover ;
}
.front7 {
  background-image:  url('img/img52.png');
  background-size:cover ;
}
.front8 {
  background-image:  url('img/img53.png');
  background-size:cover ;
}
.front9 {
  background-image:  url('img/img54.png');
  background-size:cover ;
}
.front10 {
  background-image:  url('img/img55.png');
  background-size:cover ;
}
.front11 {
  background-image:  url('img/img57.png');
  background-size:cover ;
}
.front12 {
  background-image:  url('img/img56.png');
  background-size:cover ;
}

.back1,.back2,.back3,.back4,.back5,.back6,.back7,.back8,.back9,.back10,.back11,.back12{
  background-size:cover ;
  transform: rotateY(180deg);
  font-size: 30px;
}
.front2, .back2,
.front3, .back3,
.front4, .back4,
.front5, .back5,
.front6, .back6,
.front7, .back7,
.front8, .back8,
.front9, .back9,
.front10, .back10,
.front11, .back11,
.front12, .back12  
 {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 1s;
  backface-visibility: hidden;
  border-radius: 10px;
}
.card12:hover .front2,
.card12:hover .front3,
.card12:hover .front4,
.card12:hover .front5,
.card12:hover .front6,
.card12:hover .front7,
.card12:hover .front8,
.card12:hover .front9,
.card12:hover .front10,
.card12:hover .front11,
.card12:hover .front12 
{
  transform: rotateY(180deg);
}
.card12:hover .back2,
.card12:hover .back3,
.card12:hover .back4,
.card12:hover .back5,
.card12:hover .back6,
.card12:hover .back7,
.card12:hover .back8,
.card12:hover .back9,
.card12:hover .back10,
.card12:hover .back11,
.card12:hover .back12
{
  transform: rotateY(360deg);
}
  body
{
  background: #696969;
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
    width:25%;

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
    background:#708090;
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
    width:24.8%;;
    z-index:200;
    position: absolute;
    font-family: Arial;
}

.menu li:hover ul
{
  display:block;
  width:24.8%;

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
  background:#708090;
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
    <div class="box-3m"><li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li></div>
    <div class="box-2m"><li><a href="ElectricTools.php"><i class="ion-ios-paperplane"></i> Electric Tools</a></li></div>
    <div class="box-1m"><li><a href="sugestionGarden.html"><i class="ion-ios-paperplane"></i> Use Case</a></li></div>
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
           $c = "Tools";
           $d = "PrimitiveTools";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_primitiveT/easy/try_yorself_primitiveT_q1.php">Easy</a></li>
      <?php else: ?>

         <li > <a href="../../_upss/sorry.php"> Easy</a></li>

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
    color: black;
    font-size: 45px;
}
 p
{
    font-size: 26.5px;
    color: black;
    font-family: Times New Roman;
}
.main
{
    background-color:#F8F8FF;
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
        flex:1;
        order:1;
    }
    .box-2{
        flex:3;
        order:2;
    }
@media(max-width: 1400px)
{
h3
    {
        font-size: 43px;
        color: rgb(129, 82, 20);
    }
 p
   {
    font-size: 25px;
   }
}
@media(max-width: 1300px)
{
h3
    {
        font-size: 40px;
    }
 p
   {
    font-size: 23px;
   }
}
@media(max-width: 1200px)
{
h3
    {
        font-size: 36px;
    }
 p
   {
    font-size: 22px;
   }
}
@media(max-width: 1100px)
{
h3
    {
        font-size: 32px;
    }
 p
   {
    font-size: 20px;
   }
}
@media(max-width: 989px)
{
h3
    {
        font-size: 37px;
    }
 p
   {
    font-size: 22px;
   }
}

</style>

<div class="bigmain">
  <div class="main">
    <div class="box-1">
      <center><h3>Primitive Tools every gardener needs</h3></center>
        <center><i class="ion-arrow-down-b" style="font-size: 50px;"></i></center>
    </div>
  </div>
<div class="main">
    <div class="box-1">
      <center>
        <div class="wrap3">
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Trowel</span></div>
          </div>
        </div>
      </center>  
    </div>
    <div class="box-2">
       <p>These have much shorter handles than other kinds of shovels, making them ideal for using by hand when you are close to the ground. They are perfect for digging holes for planting, but their edge has to be kept sharp enough or they will be very frustrating to use. They can easily be sharpened using a bench grinder. Buying a trowel with an ergonomically designed handle will keep your hand from cramping and help ensure that you don't get blisters when using this tool.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap4">
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Square Shovel</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br>
       <p>These shovels have flat tips that are very hard and straight, making them perfect for digging tightly packed dirt, as they will have more force and make it easier to penetrate the ground. They are also great for scooping up and moving the rock, mulch, sand, and soil. Square shovels can be used to edge a lawn, cut roots and sod, and easily divide perennials without causing too much trauma to the plants.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap5">
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Pointed <br>Shovel</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br><br>
       <p>When you are going to be digging into tilled soil that is fairly loose and easy to move, you'll want to use a pointed shovel, as they will make the job very easy. These shovels don't have the driving force that square shovels do, but they are helpful to have when planting a garden.</p>
     </div>
    </div>

 <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap6">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Garden Fork</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br>
       <p>These giant forks have four very strong tines that make it easy to penetrate the soil. They are generally made from a single piece of steel, which ensures that the tines will not break. Use a garden fork when you need to break up soil, turn it over, or work some compost into your garden.</p>
     </div>
    </div>  
 
 <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap7">
          <div class="card12"><br><br>
              <div class="front7"><span></span></div>
              <div class="back7"><span>Potato Fork</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br>
       <p>While you can use a garden fork to dig up potatoes, if you want to make sure that you don't accidentally damage your crop, you will need to use a potato fork. They have multiple tines that are quite thin with blunted ends so that the potatoes aren't damaged when you dig.</p>
     </div>
    </div> 

   <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap8">
          <div class="card12">
              <div class="front8"><span></span></div>
              <div class="back8"><span>Hoe</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br>
       <p>These tools are commonly used just to tear unwanted weeds and plants out of the garden, and they are also great for cultivating soil and breaking up larger clumps so that the garden is ready for planting. When the ground is soft enough, they can easily be used to dig trenches for your bulbs or seeds or to make furrows.</p>
     </div>
    </div>  

 <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap9"><br><br>
          <div class="card12">
              <div class="front9"><span></span></div>
              <div class="back9"><span>Edging Shears</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2">
       <p>These shears are positioned at a right angle to the handle, making it very easy to use them without having to get down on your knees. While some people try to use them by operating both of the handles at the same time, the best way to operate them is by only moving the handle that controls the upper blade of the shears. This will ensure that you have a nice smooth motion and the tool will not jerk around as you are trying to use it. It's important that you keep the shears level with the side of the lawn where you are cutting and cut at a swift pace, as this will help ensure that you get clean cuts on your grass. Make sure to wipe down the blades when you are finished using them, and if you notice that the grass is being bent instead of cut then you will need to sharpen them.</p>
     </div>
    </div>  

  <div class="main">
    <div class="box-1">
      <center>
          <div class="wrap10"><br><br>
            <div class="card12">
                <div class="front10"><span></span></div>
                <div class="back10"><span>Rake</span></div>
            </div>
          </div></center>
    </div>
    <div class="box-2">
        <p>Being able to get your leaves and lawn debris into a pile is important, and during the fall especially you will want a tool to help with this process. Rakes are indispensable for this. There are a number of different kinds of rakes available, each best suited to different jobs. Leaf rakes are plastic and have a little give to them, making them ideal for raking up large piles of leaves, pine needles, and even cut grass. Another kind of rake that is important for lawn care is the bow rake, which has shorter, stronger tines. These rakes are perfect for moving gravel, sand, or rocks around and for landscaping your garden and lawn.</p>
     </div>
    </div> 

  <div class="main">
    <div class="box-1">
      <center>
            <div class="wrap11"><br><br>
              <div class="card12">
                  <div class="front11"><span></span></div>
                  <div class="back11"><span>Hose</span></div>
              </div>
            </div></center>
    </div>
    <div class="box-2">
        <p>Being able to get your leaves and lawn debris into a pile is important, and during the fall especially you will want a tool to help with this process. Rakes are indispensable for this. There are a number of different kinds of rakes available, each best suited to different jobs. Leaf rakes are plastic and have a little give to them, making them ideal for raking up large piles of leaves, pine needles, and even cut grass. Another kind of rake that is important for lawn care is the bow rake, which has shorter, stronger tines. These rakes are perfect for moving gravel, sand, or rocks around and for landscaping your garden and lawn.</p>
     </div>
    </div> 

<div class="main">
    <div class="box-1">
      <center>
            <div class="wrap12"><br><br><br>
              <div class="card12">
                  <div class="front12"><span></span></div>
                  <div class="back12"><span>Garden<br> Gloves</span></div>
              </div>
            </div></center>
    </div>
    <div class="box-2">
        <p>You may not think of these as a tool, but I find gloves to be an indispensable item in my tool shed. Gloves not only protect your hands from getting dirty but also protect you from injury. If you have to deal with thorny branches or prickly plants, gloves will protect your hands and wrists from scratches, scrapes, and splinters.If you have sensitive skin like I do, then gardening gloves aren't optional. I have to wear gloves in the garden to avoid rashes and allergic reactions to plants, fertilizers, and other chemicals. Eczema prone gardeners need a nice set of gloves to protect their hands.They even make touchscreen garden gloves now, which are perfect if you listen to music or podcasts on a smartphone while you garden.</p>
     </div>
    </div>                    

</div>
    <!-- end bigmain -->
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
  background-color:#D3D3D3;

}

.login a
{
  text-decoration: none;
  color:#fff;
  padding: 11px 39px;
  border-radius: 10px;
  background: black;
  box-shadow: 0 0 10px black, 0 0 40px black, 0 0 80px black;

}

.login a:hover
{
  color: #fff;
  transition: 0.6s;
  background: #696969;
  box-shadow: 0 0 10px #696969, 0 0 40px #696969, 0 0 80px #696969;
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
  background-color:#D3D3D3;
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
    background-color:#D3D3D3;
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
    box-shadow: 0 0 10px #fff, 0 0 40px #fff, 0 0 80px #fff;
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
         </figure><div class="login"> <a href="../../../index.php"> <i class="ion-reply-all"></i> Your progress</a></div>
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