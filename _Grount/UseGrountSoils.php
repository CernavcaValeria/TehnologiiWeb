<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Use of sandy soil</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
   </head>

   <style>
      body {
      background: rgb(177, 128, 38);
      height: 2000px;
      background-size: cover;
      }
      .column {
      background-color: rgb(223, 194, 167);
      margin: 0 15px 25px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      border-radius: 15px;
      flex-basis: 33%;
      }
      .card {
      padding: 15px 25px;
      }
      .container {
      /*max-width: 1170;*/
      width: 100%;
      margin: 0 auto;
      display: flex;
      }
      .divinfo {
      padding-right: 7%;
      padding-left: 10%;
      font-family: Times New Roman;
      color: rgb(70, 112, 88);
      font-size: 60px;
      }
      .divinfo p {
      font-size: 30px;
      color: black;
      }
      .divinfo i
      {
         font size:50px;
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
  padding:0px 103.31px;
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
    <li><a href="PracticalTips.php"><i class="ion-ios-paperplane"></i> Practical Tips</a></li>
    <li><a href="TypesGrountSoils.php"><i class="ion-ios-paperplane"></i> Type Soil</a></li>
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
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div class="divinfo">
                  <center><h3>Best Plants to Grow In Sandy Soil</h3></center>
                   <center><i class="ion-arrow-down-b"></i></center>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img2.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Carrots have tap roots, which means that carrots grow better when their root systems can
                     easily penetrate the ground. That need for depth makes sandy soil a perfect medium for
                     growing carrots. Clods of soil, like those present in clay-based soil types, can impede
                     and disrupt the development of carrot root development.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img3.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Like carrots, radishes also have tap roots, which need to be able to easily burrow
                     into the ground. Sandy soils are porous and more malleable than clay-based mediums,
                     so they are therefore suited to be a habitat for radishes, carrots, and other root
                     vegetables.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img4.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Potatoes are another root vegetable that thrives in sandy soil. This is mainly
                     because sandy soils have an acidic soil pH balance. Acidic soils eliminate the
                     possibility of scab, a disease that plagues potatoes, often affecting entire
                     crops.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img5.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Lettuce, more than many other leafy green vegetables, tends to tolerate the
                     dryness of sandy soils as long as gardeners make sure that plants are
                     watered daily and regularly, never allowing the soil above the roots to
                     completely dry out. Hydration is especially on abnormally hot or windy days.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img6.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Tomatoes are sun-loving fruits that perform exceptionally well in the
                     heat-retaining, well-draining habitat that sandy soils provide. Though
                     they’re sometimes grown as annuals in the summer, tomatoes are usually
                     grown as perennials that are harvested throughout a long growing season.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img7.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Like zucchini, corn is a heavy-feeding annual summer vegetable that
                     thrives in sandy soil as long as it is well fertilized.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img8.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Watermelon requires a longer growing season than other fruits of
                     its type but enjoys the warmth and well-draining environment
                     that sandy soil provides. Just make sure you provide sufficient
                     space between plants for each watermelon to develop, as these
                     plants will only thrive if they are not having to battle other
                     plants for water and nutrients.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img9.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Cucumbers need fast-draining soil to thrive, so a sandy
                     medium is a great fit. However, you will need to go the
                     extra mile in providing lots of water and nutrients for your
                     cucumbers to keep them happy. A trellis must also be
                     provided to give the cucumber vine a support to attach
                     itself to and grow upon.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img10.png" style="width: 200px;">
               </div>
               <div class="divinfo">
                  <p>Grown best from the crowns in a sandy soil medium,
                     asparagus is well-suited to growing in trenches. Use
                     bone meal or rock phosphate to fertilize your asparagus
                     twice per week when growing in sandy soils for the
                     highest yields.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div class="divinfo">
                  <center><h3> Plants to Grow In Silt Soil</h3></center>
                <center><i class="ion-arrow-down-b"></i></center>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img11.png" style="padding-top:120px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Bulbs</h4>
                  <p>Some flowering bulbs are well-suited for silty soil. Their bloom times vary.</p>
                  <p><i class="ion-leaf"></i> Snowdrop (Galanthus nivalis), hardy in USDA zones 3 through 7, blooms in late winter or spring.</p>
                  <p><i class="ion-leaf"></i > Daffodils (Narcissus spp_._), hardy in USDA zones 4 through 8, flower in early spring or in the middle of spring.</p>
                  <p><i class="ion-leaf"></i> Crocus (Crocus vernus), hardy in USDA zones 3 through 8, flower in early spring.</p>
                  <p><i class="ion-leaf"></i> Snowflake (Leucojum aestivum), hardy in USDA zones 4 through 8, blooms in early to mid-spring.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img12.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Ferns</h4>
                  <p>A variety of ferns grow well in the moist, often wet conditions of silty soil.</p>
                  <p><i class="ion-leaf"></i> Male fern (Dryopteris filix-mas) is a 2- to 3-foot-tall plant for shady areas. It is hardy in USDA zones 4 through 8.</p>
                  <p><i class="ion-leaf"></i> Ostrich fern (Matteuccia struthiopteris) grows 3 to 6 feet tall and prefers moist, shady areas. It is hardy in USDA zones 3 through 7.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img13.png" style="padding-top:120px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Roses</h4>
                  <p>Roses (_Rosa _spp.) grow well in silt because they prefer soil on the heavy side. Hundreds of rose varieties are available. They are hardy in USDA zones 2 through 11, depending on their kind.</p>
                  <p><i class="ion-leaf"></i> 'Polar Ice' rose (Rosa rugosa 'Polar Ice') is hardy in USDA zones 2 through 9.</p>
                  <p><i class="ion-leaf"></i> Hedgehog rose (Rosa rugosa var. alba), also hardy in USDA zones 2 through 9, works well in cottage gardens. It features simple open flowers.</p>
                  <p><i class="ion-leaf"></i> Lady Banks rose (Rosa banksia 'Lutea'), with pale-yellow flowers, is hardy in USDA zones 7 through 11.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img14.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Shrubs</h4>
                  <p><i class="ion-leaf"></i> Butterfly bush (Buddleja davidii), hardy in USDA zones 5 through 9, grows well in silty soil because it adapts to wet and dry conditions. This shrub is so successful that it is invasive in some areas; keep it pruned and remove unwanted seedlings to prevent that problem.</p>
                  <p><i class="ion-leaf"></i> Japanese barberry (Berberis thunbergii), hardy in USDA zones 4 through 10, grows well in silt soil. With many cultivars to choose from, you should be able to find one that is just right for your landscape.</p>
                  <p><i class="ion-leaf"></i> Smoke tree (Cotinus coggygria), hardy in USDA zones 5 through 8, makes a statement in the landscape with its smokelike foliage. It grows well in silty soil that has good drainage.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="column">
         <div class="card">
            <div class="container">
               <div class="divinfo">
                  <center><h3>Best Plants to Grow In Clay  Soil</h3></center>
                   <center><i class="ion-arrow-down-b"></i></center>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img15.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Alchemilla mollis</h4>
                  <p>This is a very useful edging plant for clay soil. It produces wispy stems of yellowish green flowers in early summer, that create a 'frothy' look from a distance. Low-growing, Alchemilla mollis is a useful plant for covering the bare stems of 'leggy' shrubs and roses. It also grows well in partial shade.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img16.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Pulmonaria</h4>
                  <p>Pulmonaria is tolerant of shade as well as being one of the top perennial plants for clay soil. This spring-flowering, low-growing perennial is a good source of food for early bees. Its cheerful blue flowers make beautiful accompaniments to daffodils in spring. The distinctive dotty foliage can be refreshed if you cut it back in early summer.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img17.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Lonicera periclymenum</h4>
                  <p>A sweetly scented honeysuckle is a true summer treat and this species of honeysuckle grows well on clay soil. A scented climber is always a memorable plant, the perfume easy to access, especially if you grow it by your front door. The variety "Serontina" has flowers that display a vivid deep red colouring.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img18.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Syringa vulgaris</h4>
                  <p>Lilacs are tough shrubs that often get overlooked, perhaps because they often don’t look attractive in the garden centre. Though their flowering time is fairly short, a lilac in late spring is a glorious sight. The scent of the blooms is delicious. They make glorious cut flowers.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img19.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Viburnum tinus</h4>
                  <p>Viburnum is an underrated evergreen shrub for clay soil. The opening of its white flowers announces the end of winter and provides a pretty backdrop for a border in early spring. Dense, compact growth make this a useful plant for screening off a view and creating a sense of enclosure in the garden.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img20.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Spiraea japonica</h4>
                  <p>A tremendous shrub to place near the front of a border. It shows off thousands of tiny flowers in summer, held together in tight clusters. Spiraea japonica is not fussy and grows well on clay soil. It will also tolerate drought well once established, after a couple of growing seasons in a border. The flowers attract bees and butterflies.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="column">
         <div class="card">
            <div class="container">
               <div class="divinfo">
                  <center><h3>  Plants to Grow In Loamy  Soil</h3></center>
                   <center><i class="ion-arrow-down-b"></i></center>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img21.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Trees</h4>
                  <p>Various pine species, soft maple, honey locust, cottonwood, willow and Douglas firs will grow in a wide array of soils including sandy loam. In addition to trees, several shrubs will thrive the sandy loam. Rose, sumac, honeysuckle, hazel and juniper are a few of the shrubs you can successfully grow in sandy loam.</p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img22.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Plants and Flowers</h4>
                  <p>Most gardeners do not think of sandy loam as a good soil type for planting flowers. That is just not the case for many species of plants. Cacti are one of the most common plants that prefer the well-drained sandy loam to other types of soil. However, cacti are hardly the only plants that enjoy sandy loam. Gladiolus, various lilies, amaryllis, hostas and irises are just a few species of plants that will live long and happy lives in sandy loam.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img23.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Fruits and Vegetables </h4>
                  <p>Aesthetic vegetation is not the only type of plants that you can grow in sandy loam locations. Several crops both fruit and vegetables will grow just fine in sandy loam if they get the right amount of sunlight and water. A few of fruits and vegetables that you can plant in sandy loam are blackberries, blueberries, strawberries, tomatoes, lettuce and peppers.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div>
      <br>
      <div class="column">
         <div class="card">
            <div class="container">
               <div>
                  <img src="img24.png" style="padding-top:80px; width: 300px;">
               </div>
               <div class="divinfo">
                  <h4>Herbs and Spices</h4>
                  <p>A good mixture of sandy loam grows a wide array of herbs that you can use for cooking, alternative medicine and natural pest control. Good drainage is a major aspect of successfully herb growing which gives sandy loam an advantage over other types of soil. Lemon balm, sage, basil, horehound, lavender and thyme are only a few of the herbs and spices that grow in sandy loam.</p>
               </div>
            </div>
         </div>
      </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

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







