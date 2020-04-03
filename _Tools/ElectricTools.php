<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
</head>
<style >

body
{

  background-color: #CD5C5C;
}

.column
{
	background-color:  rgb(223, 194, 167);
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
	max-width: 1170;
	width: 100%;
	margin:0 auto;
	display:flex;
}

.divinfo 
{
	padding-right: 7%; 
	padding-left: 5%;
	font-family: Times New Roman;
	color:  rgb(129, 9, 9);
	font-size: 50px;
}
.divinfo p
{
	font-size: 25px;
	color: rgb(104, 38, 38);
}



/*///////////////////////////*/

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
  width: 200px;
  height: 200px;
  position: relative;
  perspective: 1000px;
}
.front2, .back2 {
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
.front2 {
  background-image:  url('img/tools.jpg');
  background-size:cover ;
}
.back2 {
  background-size:cover ;
  transform: rotateY(180deg);
  font-size: 30px;
}
.card12:hover .front2 {transform: rotateY(180deg);}
.card12:hover .back2 {transform: rotateY(360deg);}
/*///////////////////////////////////////*/
.front3, .back3 {
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

.front3 {
  background-image:  url('img/img41.png');
  background-size:cover ;
}
.back3 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front3 {transform: rotateY(180deg);}
.card12:hover .back3 {transform: rotateY(360deg);}
/*/////////////////////////////*/
.front4, .back4 {
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

.front4 {
  background-image:  url('img/img42.png');
  background-size:cover ;
}
.back4 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front4 {transform: rotateY(180deg);}
.card12:hover .back4 {transform: rotateY(360deg);}
/*/////////////////////////////*/
.front5, .back5 {
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

.front5 {
  background-image:  url('img/img43.png');
  background-size:cover ;
}
.back5 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front5 {transform: rotateY(180deg);}
.card12:hover .back5 {transform: rotateY(360deg);}
/*/////////////////////////////*/
.front6, .back6 {
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

.front6 {
  background-image:  url('img/img44.png');
  background-size:cover ;
}
.back6 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front6 {transform: rotateY(180deg);}
.card12:hover .back6 {transform: rotateY(360deg);}
/*/////////////////////////////*/
.front7, .back7 {
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

.front7 {
  background-image:  url('img/img45.png');
  background-size:cover ;
}
.back7 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front7 {transform: rotateY(180deg);}
.card12:hover .back7 {transform: rotateY(360deg);}
/*/////////////////////////////*/

.front8, .back8{
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

.front8 {
  background-image:  url('img/img46.png');
  background-size:cover ;
}
.back8 {
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front8 {transform: rotateY(180deg);}
.card12:hover .back8 {transform: rotateY(360deg);}
/*/////////////////////////////*/

.front9, .back9{
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

.front9 {
  background-image:  url('img/img47.png');
  background-size:cover ;
}
.back9{
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front9 {transform: rotateY(180deg);}
.card12:hover .back9 {transform: rotateY(360deg);}
/*/////////////////////////////*/



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
  padding:0px 105.43px;
  text-align:center;
  text-decoration:none;
  font-family: Arial;
}

.menu li a:hover, .menu ul li:hover a
{
  background:#8B0000 bottom center no-repeat;
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
width:315px;


}
.menu li li
{
  display:block;
  float:none;
  margin:0px;
  padding:0px;
width:315;

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
  background:#8B0000 center left no-repeat;
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

<body >

<div class="menu">
    <ul>
    <li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li><a href="PrimitiveTools.php"><i class="ion-ios-paperplane"></i> Primitive Tool</a></li>
    <li><a href=""><i class="ion-ios-paperplane"></i>  Sugestions</a></li>
    <li><a href="sugestionGarden.html"><i class="ion-ios-paperplane"></i> Use Case</a></li>
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
    </div>

<br><br>

<div style="padding-right: 5%;padding-left: 5%">
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap2">
          <div class="card12" style="width: 400px; height: 300px;">
              <div class="front2"><span></span></div>
              <div class="back2"><span>Garden Tools</span></div>
          </div>
        </div>
          <div class="divinfo">
              <h3>Primitive Tools every gardener needs</h3>
          </div>
       </div>
    </div>
  </div>
</div>
    

    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap3" style="padding-top:60px;">  
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Electric Edger</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>When choosing an electric edger, you will have to decide whether you want it to be cordless or corded. Both types are very lightweight and are thus ideal for people who aren't strong enough to use a manual edger or to handle the strength, power, and weight of a gas edger. Make sure that you choose one that has a strong blade, as these edgers don't tend to be as powerful as gas ones, and they can take longer to complete the same amount of work.<br> They are very quiet and are perfect if you live close to your neighbors and want to make sure that you don't disturb them with your yard work. They're also ideal for smaller yards, as corded options have a limit to how far they can reach, and even a great battery won't last long enough to easily edge a very large lawn.</p>
          </div>
       </div>
    </div>
  </div>
    </div>
    
    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap4" style="padding-top:80px;">
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Gas Edger</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>A gas edger is the most powerful kind of edger tool that you can buy. While they weigh more than other available types, they are not so heavy that people are unable to lift them into a truck or onto the back of a trailer. They do tend to be rather noisy, so it's important to consider how close your neighbors are before buying this type of edger, and whether the noise is going to disturb them.
                  <br>
                  They are perfect if you have a very large yard and need to do a lot of edging, as they will cut down on the amount of time that this work takes. You can choose between a smaller gas edger that has a two-cycle engine or a larger, more powerful one that has a four-cycle engine. The four-cycle engine machines tend to be cleaner when they run, making them better for the environment. In addition, look for a fourth wheel, as this will make it much easier to maneuver the edger and will help keep it from tipping over.
              </p>
          </div>
       </div>
    </div>
  </div>
    </div>
    

    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap5" style="padding-top:100px;">
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Lawn Mower </span></div>
          </div>
          </div>
          <div class="divinfo">
              <p>This is a machine that works by using revolving blades to cut the grass in your lawn to a pre-set height. With most machines, you can adjust how tall you want the grass to be, allowing you to personalize your lawn and how often you have to mow. There are many types of lawn mowers available, making it easy to find one that will meet your needs without breaking the bank. For most small mowers, an engine turns the blades and will either move the lawn mower as well or require the person using it to push it.<br>Larger mowers are usually self-propelled, which means the user only has to guide where the mower goes and not actually use much effort to move the mower. Finally, there are also ride-on lawn mowers that are much larger and ideal for mowing big lawns. While there are robotic lawn mowers that are remote-controlled and will work on their own, these are not very popular and are difficult to find.<br>You can buy lawn mowers that run on gasoline, are electric, or are push-powered and reel mowers. The kind that you choose will depend on the power that you need, the size of your lawn, and your budget.</p>
          </div>
       </div>
    </div>
  </div>
    </div>
    
    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap6" style="padding-top:90px;">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Leaf Blower</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These popular tools work by forcing air out of a nozzle. The person using the leaf blower can direct the air where they want it to go, thereby easily moving piles of leaves or lawn clippings. You can buy either electric or gas-powered leaf blowers. They are available for purchase in a backpack format with the nozzle hanging down for easy use, or as completely handheld models. Of course, the backpack leaf blowers are easier to use for a long period of time and are often gasoline powered, as these types of blowers are usually heavier.<br>If you have a huge yard or will be helping neighbors clear their lawns in addition to your own, then you may want to look into buying a larger leaf blower that has wheels or even a motor that will allow it to self-propel. These are much stronger but also more expensive.</p>
          </div>
       </div>
    </div>
  </div>
</div>
    
    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap7" >
          <div class="card12">
              <div class="front7"><span></span></div>
              <div class="back7"><span>Mulcher</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>If you want to be able to suck up leaves and twigs in your yard and mulch them right away, you need a mulcher. These are very powerful and have an attached bag that collects the mulch that you make.</p>
          </div>
       </div>
    </div>
  </div>
</div>
    
    <br>
<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap8">
          <div class="card12">
              <div class="front8"><span></span></div>
              <div class="back8"><span>Cultivator</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>Used after a tiller to ensure that the ground is very soft and ready for planting, these tools are generally walked behind or pushed. They are great for use in vegetable gardens or if you are going to redo your lawn and want to make sure that the ground is soft and prepared for the grass seed.</p>
          </div>
          </div>
       </div>
    </div>
  </div>
 
    
    <br>


<div style="padding-right: 2%;padding-left: 2%">
    <div class="column">
      <div class="card">
        <div class="container">
        <div class="wrap9">
          <div class="card12">
              <div class="front9"><span></span></div>
              <div class="back9"><span>Trailer Sprayer</span></div>
            </div>
          </div>

          <div class="divinfo">
              <p>These are sprayers that attach to your ATV or lawn tractor and have wheels so that they can be easily towed across the ground. They have very efficient pumps and can be used to spray items that are very tall.</p>
          </div>
        </div>
     </div>
   </div>
</div>
</div>









      <!-- ----------------------------- -->

<style>

.columnf
{
  background-color:red;
  margin:0 15px 25px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 15px;
  flex-basis: 33%;
}

.cardf
{
  padding: 15px 25px;
  background-color:#CD5C5C;



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
   background-color:#CD5C5C;
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

  background-color:#8B0000;
  color:white;
  transition: all 0.2s ease;
  border:2px solid white;
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
  background-color:#CD5C5C;
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
</div> 
<!-- div pading -->
<hr>

     <div class="container">


           <div class="columnf">
              <div class="cardf">
                <figure>
                   <figcaption>
                     <h2>Want to try more Gardening Concepts?</h2>
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

<hr>
<br>




</body>
</html>