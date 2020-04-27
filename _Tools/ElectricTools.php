<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eectric Tools</title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">   
</head>
<style>

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
  background-image:  url('img/tools.jpg');
  background-size:cover ;
}
.front3 {
  background-image:  url('img/img41.png');
  background-size:cover ;
}
.front4 {
  background-image:  url('img/img42.png');
  background-size:cover ;
}
.front5 {
  background-image:  url('img/img43.png');
  background-size:cover ;
}
.front6 {
  background-image:  url('img/img44.png');
  background-size:cover ;
}
.front7 {
  background-image:  url('img/img45.png');
  background-size:cover ;
}
.front8 {
  background-image:  url('img/img46.png');
  background-size:cover ;
}
.front9 {
  background-image:  url('img/img47.png');
  background-size:cover ;
}
.back1,.back2,.back3,.back4,.back5,.back6,.back7,.back8,.back9{
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
.front9, .back9 
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
.card12:hover .front9 
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
.card12:hover .back9 
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

<body >

<div class="menu">
    <ul>
    <div class="box-3m"><li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li></div>
    <div class="box-2m"><li><a href="PrimitiveTools.php"><i class="ion-ios-paperplane"></i> Primitive Tools</a></li></div>
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
           $d = "ElectricTools";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_electricT/easy/try_yorself_electricT_q1.php">Easy</a></li>
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
    font-size: 22px;
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
        font-size: 40px;
        color: rgb(129, 82, 20);
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

</style>

<div class="bigmain">
  <div class="main">
    <div class="box-1">
      <center><h3>Electric Tools every gardener needs</h3></center>
        <center><i class="ion-arrow-down-b" style="font-size: 45px;"></i></center>
    </div>
  </div>

    <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap4"><br>
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Gas Edger</span></div>
          </div>
    </div></center>
  </div>
    <div class="box-2">
         <p>A gas edger is the most powerful kind of edger tool that you can buy. While they weigh more than other available types, they are not so heavy that people are unable to lift them into a truck or onto the back of a trailer. They do tend to be rather noisy, so it's important to consider how close your neighbors are before buying this type of edger, and whether the noise is going to disturb them.
         They are perfect if you have a very large yard and need to do a lot of edging, as they will cut down on the amount of time that this work takes. You can choose between a smaller gas edger that has a two-cycle engine or a larger, more powerful one that has a four-cycle engine. The four-cycle engine machines tend to be cleaner when they run, making them better for the environment. In addition, look for a fourth wheel, as this will make it much easier to maneuver the edger and will help keep it from tipping over.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      <center>
      <div class="wrap5"><br><br><br>
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Lawn Mower </span></div>
          </div>
          </div></center>
    </div>
    <div class="box-2">
        <p>This is a machine that works by using revolving blades to cut the grass in your lawn to a pre-set height. With most machines, you can adjust how tall you want the grass to be, allowing you to personalize your lawn and how often you have to mow. There are many types of lawn mowers available, making it easy to find one that will meet your needs without breaking the bank. For most small mowers, an engine turns the blades and will either move the lawn mower as well or require the person using it to push it.<br>Larger mowers are usually self-propelled, which means the user only has to guide where the mower goes and not actually use much effort to move the mower. Finally, there are also ride-on lawn mowers that are much larger and ideal for mowing big lawns. While there are robotic lawn mowers that are remote-controlled and will work on their own, these are not very popular and are difficult to find.<br>You can buy lawn mowers that run on gasoline, are electric, or are push-powered and reel mowers. The kind that you choose will depend on the power that you need, the size of your lawn, and your budget.</p>
     </div>
  </div>

<div class="main">
    <div class="box-1">
      <center>
        <div class="wrap3">  
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Electric <br>Edger</span></div>
          </div>
        </div></center>
      </div>  
    <div class="box-2">
        <p>When choosing an electric edger, you will have to decide whether you want it to be cordless or corded. Both types are very lightweight and are thus ideal for people who aren't strong enough to use a manual edger or to handle the strength, power, and weight of a gas edger. Make sure that you choose one that has a strong blade, as these edgers don't tend to be as powerful as gas ones, and they can take longer to complete the same amount of work.<br> They are very quiet and are perfect if you live close to your neighbors and want to make sure that you don't disturb them with your yard work. They're also ideal for smaller yards, as corded options have a limit to how far they can reach, and even a great battery won't last long enough to easily edge a very large lawn.</p>
     </div>
    </div>


    <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap6">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Leaf Blower</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2">
        <p>These popular tools work by forcing air out of a nozzle. The person using the leaf blower can direct the air where they want it to go, thereby easily moving piles of leaves or lawn clippings. You can buy either electric or gas-powered leaf blowers. They are available for purchase in a backpack format with the nozzle hanging down for easy use, or as completely handheld models. Of course, the backpack leaf blowers are easier to use for a long period of time and are often gasoline powered, as these types of blowers are usually heavier.<br>If you have a huge yard or will be helping neighbors clear their lawns in addition to your own, then you may want to look into buying a larger leaf blower that has wheels or even a motor that will allow it to self-propel. These are much stronger but also more expensive.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap7" >
          <div class="card12">
              <div class="front7"><span></span></div>
              <div class="back7"><span>Mulcher</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2">
        <p>When choosing an electric edger, you will have to decide whether you want it to be cordless or corded. Both types are very lightweight and are thus ideal for people who aren't strong enough to use a manual edger or to handle the strength, power, and weight of a gas edger. Make sure that you choose one that has a strong blade, as these edgers don't tend to be as powerful as gas ones, and they can take longer to complete the same amount of work.<br> They are very quiet and are perfect if you live close to your neighbors and want to make sure that you don't disturb them with your yard work. They're also ideal for smaller yards, as corded options have a limit to how far they can reach, and even a great battery won't last long enough to easily edge a very large lawn.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap8">
          <div class="card12">
              <div class="front8"><span></span></div>
              <div class="back8"><span>Cultivator</span></div>
          </div>
        </div></center>
    </div>
    <div class="box-2"><br><br><br>
        <p>Used after a tiller to ensure that the ground is very soft and ready for planting, these tools are generally walked behind or pushed. They are great for use in vegetable gardens or if you are going to redo your lawn and want to make sure that the ground is soft and prepared for the grass seed.The Mantis Electric Cultivator is a faster way to dig anywhere. Much easier than using a shovel or other hand tools. </p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      <center>
        <div class="wrap9">
          <div class="card12">
              <div class="front9"><span></span></div>
              <div class="back9"><span>Trailer Sprayer</span></div>
            </div>
          </div></center>
    </div>
    <div class="box-2"><br>
        <p>These are sprayers that attach to your ATV or lawn tractor and have wheels so that they can be easily towed across the ground. They have very efficient pumps and can be used to spray items that are very tall.Sprayers may have started as a niche for the inventive, but have since become an integral part of farming for decades. The ease of scale our products provide allows you to properly apply chemicals that control diseases, insects and weeds. Enjoy high yield crops without worrying about faulty equipment and painstaking measures to ensure that your crops are treated. Our equipment is specially designed to be robust, easily customized to the unique needs of your farm and simple to maintain.</p>
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