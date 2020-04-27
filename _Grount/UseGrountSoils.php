<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
      <title>Use of sandy soil</title>
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
       <div class="box-3m"><li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li></div>
       <div class="box-1m"><li><a href="DetermineSoil.php"><i class="ion-ios-paperplane"></i> Determine Soil </a></li></div> 
       <div class="box-2m"><li><a href="TypesGrountSoils.php"><i class="ion-ios-paperplane"></i> Type Soil</a></li></div>
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
           $d = "Usecase";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_usecase/easy/try_yorself_usecase_q1.php">Easy</a></li>
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
h4{

    font-family: Times New Roman;
    color: black;
    font-size: 30px;
}
 p
{
    font-size: 22px;
    color: black;
    font-family: Times New Roman;
}
.smalp
{
  padding-top: 5%;
    font-size: 26px;
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
   .smalp
   {
    font-size: 24px;
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
    .smalp
   {
    font-size: 22px;
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
     .smalp
   {
    font-size: 20px;
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
      .smalp
   {
    font-size: 18px;
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
      .smalp
   {
    font-size: 16px;
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
      .smalp
   {
    font-size: 23px;
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
      <center><h3>Best Plants to Grow In Sandy Soil</h3></center>
        <center><i class="ion-arrow-down-b" style="font-size: 40px;"></i></center>
    </div>
  </div>
<div class="main">
    <div class="box-1">
        <center><img src="img/img2.png"></center>
    </div>
    <div class="box-2">
      <center>
        <p class="smalp">Carrots have tap roots, which means that carrots grow better when their root systems can
         easily penetrate the ground. That need for depth makes sandy soil a perfect medium for
         growing carrots. Clods of soil, like those present in clay-based soil types, can impede
         and disrupt the development of carrot root development.</p>
     </div>
    </div>
<div class="main">
    <div class="box-1">
        <center><img src="img/img3.png"></center>
    </div>
    <div class="box-2">
         <p  class="smalp">Like carrots, radishes also have tap roots, which need to be able to easily burrow
          into the ground. Sandy soils are porous and more malleable than clay-based mediums,
          so they are therefore suited to be a habitat for radishes, carrots, and other root
          vegetables.</p>
     </div>
  </div>

<div class="main">
    <div class="box-1">
        <center><img src="img/img4.png"></center>
    </div>
    <div class="box-2">
         <p  class="smalp">Potatoes are another root vegetable that thrives in sandy soil. This is mainly
                     because sandy soils have an acidic soil pH balance. Acidic soils eliminate the
                     possibility of scab, a disease that plagues potatoes, often affecting entire
                     crops.</p>
     </div>
  </div>

<div class="main">
    <div class="box-1">
        <center><img src="img/img5.png"></center>
    </div>
    <div class="box-2">
        <p  class="smalp">Lettuce, more than many other leafy green vegetables, tends to tolerate the
                     dryness of sandy soils as long as gardeners make sure that plants are
                     watered daily and regularly, never allowing the soil above the roots to
                     completely dry out. Hydration is especially on abnormally hot or windy days.</p>
     </div>
  </div>

<div class="main">
    <div class="box-1">
        <center><img src="img/img6.png"></center>
    </div>
    <div class="box-2">
        <p class="smalp">Tomatoes are sun-loving fruits that perform exceptionally well in the
                     heat-retaining, well-draining habitat that sandy soils provide. Though
                     they’re sometimes grown as annuals in the summer, tomatoes are usually
                     grown as perennials that are harvested throughout a long growing season.
                  </p>
     </div>
  </div>

    <div class="main">
    <div class="box-1">
        <center><img src="img/img8.png"></center>
    </div>
    <div class="box-2">
        <p  class="smalp">Watermelon requires a longer growing season than other fruits of
                     its type but enjoys the warmth and well-draining environment
                     that sandy soil provides. Just make sure you provide sufficient
                     space between plants for each watermelon to develop, as these
                     plants will only thrive if they are not having to battle other
                     plants for water and nutrients.
                  </p>
     </div>
  </div>

    <div class="main">
    <div class="box-1">
        <center><img src="img/img9.png"></center>
    </div>
    <div class="box-2">
        <p class="smalp">Cucumbers need fast-draining soil to thrive, so a sandy
                     medium is a great fit. However, you will need to go the
                     extra mile in providing lots of water and nutrients for your
                     cucumbers to keep them happy. A trellis must also be
                     provided to give the cucumber vine a support to attach
                     itself to and grow upon.
                  </p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img10.png"></center>
    </div>
    <div class="box-2">
        <p class="smalp">Grown best from the crowns in a sandy soil medium,
                     asparagus is well-suited to growing in trenches. Use
                     bone meal or rock phosphate to fertilize your asparagus
                     twice per week when growing in sandy soils for the
                     highest yields.
                  </p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
         <center><h3> Plants to Grow In Silt Soil</h3></center>
         <center><i class="ion-arrow-down-b" style="font-size: 40px;"></i></center>
    </div>
 </div>

  <div class="main">
    <div class="box-1"><br><br><br><br>
        <center><img src="img/img11.png"></center>
    </div>
    <div class="box-2">
        <h4>Bulbs</h4>
                  <p>Some flowering bulbs are well-suited for silty soil. Their bloom times vary.</p>
                  <p><i class="ion-leaf"></i> Snowdrop (Galanthus nivalis), hardy in USDA zones 3 through 7, blooms in late winter or spring.</p>
                  <p><i class="ion-leaf"></i > Daffodils (Narcissus spp_._), hardy in USDA zones 4 through 8, flower in early spring or in the middle of spring.</p>
                  <p><i class="ion-leaf"></i> Crocus (Crocus vernus), hardy in USDA zones 3 through 8, flower in early spring.</p>
                  <p><i class="ion-leaf"></i> Snowflake (Leucojum aestivum), hardy in USDA zones 4 through 8, blooms in early to mid-spring.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1"><br>
        <center><img src="img/img12.png"></center>
    </div>
    <div class="box-2">
        <h4>Ferns</h4>
                  <p>A variety of ferns grow well in the moist, often wet conditions of silty soil.</p>
                  <p><i class="ion-leaf"></i> Male fern (Dryopteris filix-mas) is a 2- to 3-foot-tall plant for shady areas. It is hardy in USDA zones 4 through 8.</p>
                  <p><i class="ion-leaf"></i> Ostrich fern (Matteuccia struthiopteris) grows 3 to 6 feet tall and prefers moist, shady areas. It is hardy in USDA zones 3 through 7.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1"><br><br><br>
        <center><img src="img/img13.png"></center>
    </div>
    <div class="box-2">
        <h4>Roses</h4>
                  <p>Roses (_Rosa _spp.) grow well in silt because they prefer soil on the heavy side. Hundreds of rose varieties are available. They are hardy in USDA zones 2 through 11, depending on their kind.</p>
                  <p><i class="ion-leaf"></i> 'Polar Ice' rose (Rosa rugosa 'Polar Ice') is hardy in USDA zones 2 through 9.</p>
                  <p><i class="ion-leaf"></i> Hedgehog rose (Rosa rugosa var. alba), also hardy in USDA zones 2 through 9, works well in cottage gardens. It features simple open flowers.</p>
                  <p><i class="ion-leaf"></i> Lady Banks rose (Rosa banksia 'Lutea'), with pale-yellow flowers, is hardy in USDA zones 7 through 11.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1"><br><br><br><br>
        <center><img src="img/img14.png"></center>
    </div>
    <div class="box-2">
       <h4>Shrubs</h4>
                  <p><i class="ion-leaf"></i> Butterfly bush (Buddleja davidii), hardy in USDA zones 5 through 9, grows well in silty soil because it adapts to wet and dry conditions. This shrub is so successful that it is invasive in some areas; keep it pruned and remove unwanted seedlings to prevent that problem.</p>
                  <p><i class="ion-leaf"></i> Japanese barberry (Berberis thunbergii), hardy in USDA zones 4 through 10, grows well in silt soil. With many cultivars to choose from, you should be able to find one that is just right for your landscape.</p>
                  <p><i class="ion-leaf"></i> Smoke tree (Cotinus coggygria), hardy in USDA zones 5 through 8, makes a statement in the landscape with its smokelike foliage. It grows well in silty soil that has good drainage.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
         <center><h3> Best Plants to Grow In Clay  Soil</h3></center>
         <center><i class="ion-arrow-down-b" style="font-size: 40px;"></i></center>
    </div>
 </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img15.png"></center>
    </div>
    <div class="box-2">
       <h4>Alchemilla mollis</h4>
                  <p>This is a very useful edging plant for clay soil. It produces wispy stems of yellowish green flowers in early summer, that create a 'frothy' look from a distance. Low-growing, Alchemilla mollis is a useful plant for covering the bare stems of 'leggy' shrubs and roses. It also grows well in partial shade.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img16.png"></center>
    </div>
    <div class="box-2">
        <h4>Pulmonaria</h4>
                  <p>Pulmonaria is tolerant of shade as well as being one of the top perennial plants for clay soil. This spring-flowering, low-growing perennial is a good source of food for early bees. Its cheerful blue flowers make beautiful accompaniments to daffodils in spring. The distinctive dotty foliage can be refreshed if you cut it back in early summer.</p>
     </div>
  </div>

   <div class="main">
    <div class="box-1">
        <center><img src="img/img17.png"></center>
    </div>
    <div class="box-2">
       <h4>Lonicera periclymenum</h4>
                  <p>A sweetly scented honeysuckle is a true summer treat and this species of honeysuckle grows well on clay soil. A scented climber is always a memorable plant, the perfume easy to access, especially if you grow it by your front door. The variety "Serontina" has flowers that display a vivid deep red colouring.</p>
     </div>
  </div>
  
   <div class="main">
    <div class="box-1">
        <center><img src="img/img18.png"></center>
    </div>
    <div class="box-2">
       <h4>Syringa vulgaris</h4>
                  <p>Lilacs are tough shrubs that often get overlooked, perhaps because they often don’t look attractive in the garden centre. Though their flowering time is fairly short, a lilac in late spring is a glorious sight. The scent of the blooms is delicious. They make glorious cut flowers.</p>
     </div>
  </div>
  
  <div class="main">
    <div class="box-1">
        <center><img src="img/img19.png"></center>
    </div>
    <div class="box-2">
       <h4>Viburnum tinus</h4>
       <p>Viburnum is an underrated evergreen shrub for clay soil. The opening of its white flowers announces the end of winter and provides a pretty backdrop for a border in early spring. Dense, compact growth make this a useful plant for screening off a view and creating a sense of enclosure in the garden.</p>
     </div>
  </div>
  <div class="main">
    <div class="box-1">
        <center><img src="img/img20.png"></center>
    </div>
    <div class="box-2">
       <h4>Spiraea japonica</h4>
                  <p>A tremendous shrub to place near the front of a border. It shows off thousands of tiny flowers in summer, held together in tight clusters. Spiraea japonica is not fussy and grows well on clay soil. It will also tolerate drought well once established, after a couple of growing seasons in a border. The flowers attract bees and butterflies.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
         <center><h3>Plants to Grow In Loamy  Soil</h3></center>
         <center><i class="ion-arrow-down-b" style="font-size: 40px;"></i></center>
    </div>
 </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img21.png"></center>
    </div>
    <div class="box-2">
       <h4>Trees</h4>
                  <p>Various pine species, soft maple, honey locust, cottonwood, willow and Douglas firs will grow in a wide array of soils including sandy loam. In addition to trees, several shrubs will thrive the sandy loam. Rose, sumac, honeysuckle, hazel and juniper are a few of the shrubs you can successfully grow in sandy loam.</p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img22.png"></center>
    </div>
    <div class="box-2">
        <h4>Plants and Flowers</h4>
                  <p>Most gardeners do not think of sandy loam as a good soil type for planting flowers. That is just not the case for many species of plants. Cacti are one of the most common plants that prefer the well-drained sandy loam to other types of soil. However, cacti are hardly the only plants that enjoy sandy loam. Gladiolus, various lilies, amaryllis, hostas and irises are just a few species of plants that will live long and happy lives in sandy loam.
                  </p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img23.png"></center>
    </div>
    <div class="box-2">
       <h4>Fruits and Vegetables </h4>
                  <p>Aesthetic vegetation is not the only type of plants that you can grow in sandy loam locations. Several crops both fruit and vegetables will grow just fine in sandy loam if they get the right amount of sunlight and water. A few of fruits and vegetables that you can plant in sandy loam are blackberries, blueberries, strawberries, tomatoes, lettuce and peppers.
                  </p>
     </div>
  </div>

  <div class="main">
    <div class="box-1">
        <center><img src="img/img24.png"></center>
    </div>
    <div class="box-2">
        <h4>Herbs and Spices</h4>
                  <p>A good mixture of sandy loam grows a wide array of herbs that you can use for cooking, alternative medicine and natural pest control. Good drainage is a major aspect of successfully herb growing which gives sandy loam an advantage over other types of soil. Lemon balm, sage, basil, horehound, lavender and thyme are only a few of the herbs and spices that grow in sandy loam.</p>
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
