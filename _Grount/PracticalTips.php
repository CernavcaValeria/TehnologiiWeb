<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Practical Tips</title>
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
  width:97.6%;

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
       <div class="box-3m"><li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li>
       <div class="box-1m"><li ><a href="DetermineSoil.php"> <i class="ion-ios-paperplane"></i>  Determine Type</a></li></div> 
       <div class="box-2m"><li ><a href="TypesGrountSoils.php"> <i class="ion-ios-paperplane"></i> Soils Type</a></li></div>
       <div class="box-2m"><li ><a href="UseGrountSoils.php"> <i class="ion-ios-paperplane"></i>  Use Case</a></li></div>  
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
           $d = "PracticalTips";
           $c ="GrountSoils";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_practical/easy/try_yorself_practical_q1.php">Easy</a></li>
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
    color: black;
    font-size: 42px;
}
 p
{
    font-size: 22px;
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
    <div class="box-1">
      <center><h3>Dirty Secrets: 9 Tips to Improve Garden Soil</h3></center>
      <center><i class="ion-arrow-down-b" style="font-size: 40px;"></i></center>
    </div>
  </div>
<div class="main">
    <div class="box-21"><br><br><br>
        <center><img src="img/img25.png"></center>
    </div>
    <div class="box-1">
      <center><h3>1. Feed it an Organic Diets</h3></center>
        <p>Spring brings a flurry of underground activity that we can't see. Billions of soil organisms stretch and yawn, exploding into existence. It's this living soil below ground that helps gardens thrive above ground by recycling nutrients, capturing water, improving soil tilth, and fighting pests and disease.
        We build soil health all year-round by feeding and caring for it. How? Living soil has the same four basic requirements we do: food, water, shelter, and air.
        Autumn is the best season to start. Organic materials, the key ingredients for healthy soils, abound. You can add fallen leaves, garden debris, kitchen scraps, and even apples raked from beneath fruit trees to soil.
        Chop organic material directly into the top 2 inches of soil with a heavy bladed hoe and cover with mulch. Ideally, add concentrated manures, mineral phosphorous and potassium fertilizers, and lime at the same time. Adding these materials in the fall gives them time to break down for use when plants need them in the spring. </p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>2. Till With Worms</h3></center>
         <p>Instead of breaking out the rototiller, or breaking my back double digging, I like to let the worms do my tilling for me by using sheet mulching techniques.
          Sheet mulching is the process of building compost right on the soil surface. For new gardens, I'll add a smothering bottom layer of cardboard to kill existing vegetation, then alternate 2- to 4-inch-inch thick green and brown compost layers. This invites worms to burrow through the soil as they transport food. In the process, they dramatically improve soil structure, while depositing power-packed worm manure castings.
          Sheet mulching takes advance planning. Ideally, start sheet mulches for new gardens the year before you plan to plant (and for existing gardens a few months before planting). Sheet mulching will build new garden soil literally from the ground up. It maximizes nutrients, smothers weeds, and keeps soil life intact and undisturbed. </p>
     </div>
        <div class="box-22"><br><br>
         <center><img src="img/img26.png"></center>
    </div>
  </div>

  <div class="main">
    <div class="box-21"><br>
        <center><img src="img/img27.png"></center>
    </div>
    <div class="box-1">
      <center><h3>3. Grow Your Own Soil</h3></center>
        <p>Green manures and cover crops such as buckwheat and phacelia in the summertime and vetch, daikon, and clovers in the fall are my favorite way to improve soils. Whenever I have a window before planting, I grow a cover crop to add organic matter, lighten and loosen soil structure, and enrich garden nutrients. Cover crops also act as a living mulch to shelter soils and control weeds in the off-season.
        Chop over-wintered cover crops directly into spring soils a few weeks before planting. During the growing season, sow a quick-growing cover crop, such as buckwheat, to fill the gap between spring and fall crops. When it's time to plant, pull the buckwheat cover and use it as a mulch for fall garden beds.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>4. Test for Success</h3></center>
         <p>Soil tests are an indispensable garden tool. I always recommend taking one when starting a new garden, or when garden health declines. If an essential nutrient is missing, garden and soil health will suffer. For best results, take nutrient tests in the late summer or early fall. Submit a soil test to a certified lab to add the right balance fertilizers and lime materials to new gardens. For a list of certified labs visit NAPT.</p>
       </div>  
        <div class="box-22">
         <center><img src="img/img28.png" ></center>
    </div>
  </div>

  <div class="main">
    <div class="box-21"><br>
        <center><img src="img/img29.png" ></center>
    </div>
    <div class="box-1">
      <center><h3>5. Supply What's Missing</h3></center>
        <p>Over several seasons of soil building, a living, organic soil recycles and retains most nutrients, reducing or eliminating added fertilizer needs. When planting a new garden, however, organic fertilizers and lime ensure proper nutrition for the season ahead. If you've missed the fall window to add lime and mineral fertilizers, add them several weeks before planting in spring.
        Use soil tests results and other resources to determine your garden's fertilizer needs. For general purposes, purchase a complete organic fertilizer mix from your garden center and use as recommended. Scratch fertilizers into the top 2 inches of vegetable gardens. For perennial gardens, don't dig at all. Spread fertilizers and lime, when needed, around the plants, water lightly, and cover with mulch.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>6. Don't Forget Nitrogen</h3></center>
         <p>Of all the essential plant nutrients, nitrogen deserves special mention. Though a living soil will continue to recycle and retain most other mineral nutrients, nitrogen is often in short supply, even after years of soil building. Not only does nitrogen feed soil plants, it also feeds soil organisms. Because of this, garden growth and long-term soil health depend on nitrogen.
          Before planting every year, ensure sufficient nitrogen by counting all the sources you've added. Organic fertilizers, such as blood, seed, or feather meal, are sources of concentrated nitrogen. Fall or spring legume cover crops transfer nitrogen from the atmosphere to the soil.  Manures or green grass clippings, incorporated as amendments, provide nitrogen as well. Compost, on the other hand, does not supply enough garden nitrogen. While compost is great for improving overall soil health, additional nitrogen sources are needed when using compost as an amendment.</p>
       </div>  
        <div class="box-22"><br><br><br>
         <center><img src="img/img30.png" ></center>
    </div>
  </div>


  <div class="main">
    <div class="box-21"><br>
        <center><img src="img/img31.png"></center>
    </div>
    <div class="box-1">
      <center><h3>7. Pull, Cover, Smother</h3></center>
        <p>As our garden wakes up in spring, so do the weeds. Before planting, get them under control. Weeds compete with garden plants, and from a soil perspective, they steal organic food away from the living soil.
        For starters, fall mulching gives you the upper hand on spring weeds. Pull weeds that do emerge in the spring early and quickly, when they are small and easy to manage. If not noxious-that is, not spreading vigorously by root or stem , so I suggest laying them right back on the soil surface and covering them with from 2 to 4 inches of organic mulch. Covering garden beds right from the start gives you the jump on garden weeds, while feeding the soil with organic material at the same time.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-3">
      <center><h3>8. Recycle Perennials</h3></center>
         <p>If you have a landscape garden, hedges, woodlands, or fruit trees, then you have a wealth of materials to amend soils. Winter and early spring tree prunings, hedge trimmings, and perennial cuttings can feed the soil when recycled back into the garden.
          Chipped yard debris and bits pruned from trees make effective mulch. When green, they also provide a valuable nitrogen source as a sheet mulch layer. Use softer perennial cuttings as mulch, sheet mulch compost, or a garden bed amendment. I like a natural look in my landscape gardens. I'll actually chop cuttings into smaller pieces and mulch them right below the perennials I've cut. This type of composting in place mimics the way plant litter falls in nature.</p>
       </div>  
        <div class="box-22"><br>
         <center><img src="img/img32.png"></center>
    </div>
  </div>

  <div class="main">
    <div class="box-21"><br>
        <center><img src="img/img33.png"></center>
    </div>
    <div class="box-1">
      <center><h3>9. Let Soils Dry</h3></center>
        <p>For soils, it's often what we don't do, as much as what we do, that matters. Before planting spring gardens, the most important soil care priority is letting wet spring soils dry. Digging, walking on, or driving a rototiller over wet soils, particularly those with clays, compacts and damages the soil structure we work so hard to build. When this happens, we literally squeeze the air out of soils, leaving little space for organisms to breathe or roots to grow.
        To tell when your soils are ready to work in the spring, take a handful and squeeze. If water comes out, hold off for a week or so. Soils that form a sturdy ball when molded or clay soils that press into a shiny ribbon also need to dry more.</p>
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
