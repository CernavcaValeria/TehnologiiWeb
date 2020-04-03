<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PrimitiveTools</title>
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
  background-image:  url('img/img40.png');
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
  background-image:  url('img/img48.png');
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
  background-image:  url('img/img49.png');
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
  background-image:  url('img/img50.png');
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
  background-image:  url('img/img51.png');
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
  background-image:  url('img/img52.png');
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
  background-image:  url('img/img53.png');
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
  background-image:  url('img/img54.png');
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

.front10, .back10{
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

.front10 {
  background-image:  url('img/img55.png');
  background-size:cover ;
}
.back10{
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front10 {transform: rotateY(180deg);}
.card12:hover .back10 {transform: rotateY(360deg);}
/*/////////////////////////////*/

.front11, .back11{
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

.front11 {
  background-image:  url('img/img57.png');
  background-size:cover ;
}
.back11{
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front11 {transform: rotateY(180deg);}
.card12:hover .back11 {transform: rotateY(360deg);}
/*/////////////////////////////*/


.front12, .back12{
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

.front12 {
  background-image:  url('img/img56.png');
  background-size:cover ;
}
.back12{
  background-size:cover ;
  transform: rotateY(180deg);
    font-size: 30px;
}

.card12:hover .front12 {transform: rotateY(180deg);}
.card12:hover .back12 {transform: rotateY(360deg);}
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
  color:#ccc;
  display:block;
  font-weight:normal;
  line-height:60px;
  margin:0px;
  padding:0px 106.3px;
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

<body>

<div class="menu">
    <ul>
    <li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li><a href="ElectricTools.php"><i class="ion-ios-paperplane"></i> Electric Tool</a></li>
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
        <div class="wrap2">
          <div class="card12">
              <div class="front2"><span></span></div>
              <div class="back2"><span>Garden Tools</span></div>
          </div>

          <div class="divinfo">
              <center><h3>Primitive Tools every gardener needs</h3></center>
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
        <div class="wrap3">
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Trowel</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These have much shorter handles than other kinds of shovels, making them ideal for using by hand when you are close to the ground. They are perfect for digging holes for planting, but their edge has to be kept sharp enough or they will be very frustrating to use. They can easily be sharpened using a bench grinder. Buying a trowel with an ergonomically designed handle will keep your hand from cramping and help ensure that you don't get blisters when using this tool.</p>
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
        <div class="wrap4">
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Square Shovel</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These shovels have flat tips that are very hard and straight, making them perfect for digging tightly packed dirt, as they will have more force and make it easier to penetrate the ground. They are also great for scooping up and moving the rock, mulch, sand, and soil. Square shovels can be used to edge a lawn, cut roots and sod, and easily divide perennials without causing too much trauma to the plants.
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
        <div class="wrap5">
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Pointed Shovel</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>When you are going to be digging into tilled soil that is fairly loose and easy to move, you'll want to use a pointed shovel, as they will make the job very easy. These shovels don't have the driving force that square shovels do, but they are helpful to have when planting a garden.</p>
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
        <div class="wrap6">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Garden Fork</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These giant forks have four very strong tines that make it easy to penetrate the soil. They are generally made from a single piece of steel, which ensures that the tines will not break. Use a garden fork when you need to break up soil, turn it over, or work some compost into your garden.</p>
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
        <div class="wrap7">
          <div class="card12">
              <div class="front7"><span></span></div>
              <div class="back7"><span>Potato Fork</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>While you can use a garden fork to dig up potatoes, if you want to make sure that you don't accidentally damage your crop, you will need to use a potato fork. They have multiple tines that are quite thin with blunted ends so that the potatoes aren't damaged when you dig.</p>
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
              <div class="back8"><span>Hoe</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These tools are commonly used just to tear unwanted weeds and plants out of the garden, and they are also great for cultivating soil and breaking up larger clumps so that the garden is ready for planting. When the ground is soft enough, they can easily be used to dig trenches for your bulbs or seeds or to make furrows.</p>
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
              <div class="back9"><span>Edging Shears</span></div>
          </div>
        </div>
          <div class="divinfo">
              <p>These shears are positioned at a right angle to the handle, making it very easy to use them without having to get down on your knees. While some people try to use them by operating both of the handles at the same time, the best way to operate them is by only moving the handle that controls the upper blade of the shears. This will ensure that you have a nice smooth motion and the tool will not jerk around as you are trying to use it. It's important that you keep the shears level with the side of the lawn where you are cutting and cut at a swift pace, as this will help ensure that you get clean cuts on your grass. Make sure to wipe down the blades when you are finished using them, and if you notice that the grass is being bent instead of cut then you will need to sharpen them.</p>
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
          <div class="wrap10">
            <div class="card12">
                <div class="front10"><span></span></div>
                <div class="back10"><span>Rake</span></div>
            </div>
          </div>
            <div class="divinfo">
                <p>Being able to get your leaves and lawn debris into a pile is important, and during the fall especially you will want a tool to help with this process. Rakes are indispensable for this. There are a number of different kinds of rakes available, each best suited to different jobs. Leaf rakes are plastic and have a little give to them, making them ideal for raking up large piles of leaves, pine needles, and even cut grass. Another kind of rake that is important for lawn care is the bow rake, which has shorter, stronger tines. These rakes are perfect for moving gravel, sand, or rocks around and for landscaping your garden and lawn.</p>
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
            <div class="wrap11">
              <div class="card12">
                  <div class="front11"><span></span></div>
                  <div class="back11"><span>Hose</span></div>
              </div>
            </div>
              <div class="divinfo">
                  <p>This long, flexible tube is the best way to move water from one location to another and by which to water your garden and your lawn. It can be attached to the spigot on the side of your home and then the other end left free to allow the water to flow, attached to a sprinkler, or used with a sprayer so you can easily control where the water goes. There are also hoses that have small holes in them, and these "soaker hoses" make it easy to run an irrigation system through your garden or lawn at very little cost.<br>When buying a hose, you will want to make sure that it is long enough to reach where you need it to reach. While you can connect multiple hoses to each other, it"s often easier to simply use one longer one. Other factors to consider include how heavy duty or light the hose is and whether or not it can hold hot water if that is needed for your yard work.</p>
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
            <div class="wrap12">
              <div class="card12">
                  <div class="front12"><span></span></div>
                  <div class="back12" style="text-align: center;"><span>Garden<br> Gloves</span></div>
              </div>
            </div>
              <div class="divinfo">
                  <p>You may not think of these as a tool, but I find gloves to be an indispensable item in my tool shed. Gloves not only protect your hands from getting dirty but also protect you from injury. If you have to deal with thorny branches or prickly plants, gloves will protect your hands and wrists from scratches, scrapes, and splinters.<br>If you have sensitive skin like I do, then gardening gloves aren't optional. I have to wear gloves in the garden to avoid rashes and allergic reactions to plants, fertilizers, and other chemicals. Eczema prone gardeners need a nice set of gloves to protect their hands.

                    They even make touchscreen garden gloves now, which are perfect if you listen to music or podcasts on a smartphone while you garden.</p>
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

<hr>
<br>





</body>
</html>