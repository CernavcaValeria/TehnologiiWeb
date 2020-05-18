<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VegetableGuide</title>
      <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="/assets/dcode.css">
         <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
         <link rel="stylesheet" type="text/css" href="../css/vegetable.css">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>

<div class="menu">
    <ul>
      <li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li>
      <li><a href="FruitGuide.php"><i class="ion-ios-paperplane"></i> Fruit Guide </a></li>
      <li><a href="HerbsGuide.php"><i class="ion-ios-paperplane"></i> Herb Guide</a></li>

<?php
if(!isset($_SESSION['user_id'])):
?>        
        <li><a href="../authenAJAX/login.html"><i class="ion-checkmark-circled"></i> Try Yourself</a></li>
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
           $c = "TeachingGuid";
           $d = "VegetableGuide";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_vegetable/easy/try_yorself_veget_q1.php">Easy</a></li>
      <?php else: ?>

         <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Easy</a></li>

      <?php endif; $conn->close(); ?>
<!-- ________________________________________________________________________________________________________________ --> 
<!-- ________________________________________________________________________________________________________________ --> 
<? 
 mysql_connect('localhost','root','');
 mysql_select_db('register-bd');
 $user = $_SESSION['user_id'];
 $level='easy';  
 $q = mysql_query("SELECT COUNT(level) as num FROM result where userId='$user' and level='$level'");
while($result=mysql_fetch_array($q)){
    $counter = $result['num']; }

      if ($counter==15):
      ?>  
                <? 
                 $conn = new mysqli('localhost','root','','register-bd');
                 if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                 $user = $_SESSION['user_id'];
                 $c = "TeachingGuid";
                 $d = "VegetableGuide";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_vegetable/medium/try_yorself_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Medium</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllEasy.php"> Medium</a></li>
      <?php endif; ?> 
<!--  ____________________________________________________________________________________________________________________-->
<!-- _____________________________________________________________________________________________________________ --> 
<? 
 mysql_connect('localhost','root','');
 mysql_select_db('register-bd');
 $user = $_SESSION['user_id'];
 $level='medium';  
 $q = mysql_query("SELECT COUNT(level) as num FROM result where userId='$user' and level='$level'");
while($result=mysql_fetch_array($q)){
    $counter = $result['num']; }

      if ($counter==15):
      ?>  
                <? 
                 $conn = new mysqli('localhost','root','','register-bd');
                 if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                 $user = $_SESSION['user_id'];
                 $c = "TeachingGuid";
                 $d = "VegetableGuide";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_vegetable/hard/try_yorself_veget_q1.php">Hard</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Hard</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllMedium.php"> Hard</a></li>
      <?php endif; ?> 
<!--  _____________________________________________________________________________________________________________-->


            </ul>
        </li>
<?php endif; ?>                
    </ul>
</div>


    <div class="wrapper">
        <h2 style=font-size:6vw>Vegetable   Gardening  Guide &#128214;</h2>
        <p style=font-size:2vw>&#12316;Learn how to grow your favorite vegetables.<br>

            Click on the stories below to find out how to grow your favorite vegetables.&#12316;
        </p>
            <a class="titlu">Tomatoes&#127813;</a>
            <a href="#modal" class="modal-open" >&#9676;  Choosing Tomato Varieties</a>
 
            <div class="modal" id="modal">
               <div class="modal__content">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Choosing Tomato Varieties</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Healthy, vigorous tomato vines can produce a lot of fruit. If you're new to gardening, try growing just a few tomato plants at first - perhaps two or three plants of two to three different varieties. But of the thousands available, from cherished heirloom types to the hottest new hybrids, how do you narrow your choices?<br>
<h1 style=font-size:4vw>Criteria for Choosing Varieties</h1>
When do fruit ripen? Since varieties mature at different times, you can stretch your harvest over many weeks. If you're buying seeds to start your own plants, read catalog descriptions carefully to discover "days to maturity." This indicates approximately how soon you can expect ripe fruit once you've transplanting seedlings to the garden. Plants sold at garden centers are often labeled "early," "midseason," or "late" to indicate when the variety should start ripening.<br>

Determinate vs. Indeterminate. Another consideration in choosing tomato varieties is whether the vines are determinate or indeterminate. Determinate plants stop growing once the flower buds emerge. Because of their more restrained size, many determinate varieties need no staking or caging, but providing support can improve the quality of the fruit. All the fruit ripens within a relatively short period of time - usually about a week to 10 days. This can be a boon if you're canning, but for the gardener who prefers to have a fewer number of tomatoes over a longer period of time, indeterminate varieties are better. The vines continue to grow and set fruit throughout the season, and won't quit until the weather turns too hot or too cold to sustain fruiting and growth, or kills plants outright.<br>

For gardeners with little space to spare, or only a deck or balcony to grow on, patio and bush varieties are a good option. They're more compact than determinates, yet produce fruit throughout the season like indeterminate types. They are bred to succeed in small spaces.<br>

What to do with the fruit? When selecting a tomato variety, keep in mind what you plan to do with the fruits. There are varieties suited for just about every purpose - eating fresh, making tomato paste, canning, drying - even for cultivating into a county fair prizewinner.<br>

Seeds or Transplants. The easiest way to get your tomato patch started is to purchase young plants, also called transplants or starts. You can pick up plants at garden centers or order them through catalogs or the Internet. For years, gardeners who bought plants had a very narrow field of variety choices, but thanks to an expanding mailorder trade, the options are greater than ever.<br>

That said, starting your own seed gives you an almost endless list of varieties to choose from, allowing you to get just the type that will suit your growing conditions and tastes. Starting seeds gives you a chance to start "gardening" earlier in the season, and nurturing plants from seed to harvest is a great experience. Plant seeds six to eight weeks before the last frost date for your region, and place them under flourescent light. (For seedstarting details go to Starting Tomatoes from Seed. Call cooperative extension Master Gardeners or your local weather service to find out your last spring frost date.<br>

Disease resistance. By planting tomato varieties with built-in resistance to diseases, you can have a bit more control over your garden's success.<br>

For instance, many tomato varieties are resistant to soil-borne diseases such as verticillium and fusarium wilts and nematodes. Most seed catalogs indicate resistance to these diseases by putting F (fusarium), V (verticillium), N (nematodes) after the variety name. You'll also see varieties with resistance to viruses such as tomato mosaic virus (T), and to alternaria (A), the fungus that causes early blight.<br>

Talk to the Master Gardeners office or to neighboring home gardeners. They can tell you if certain tomato diseases are common in your area.<br>

Experiment! If you're not counting on your garden as your only food source, you can certainly afford to risk planting the varieties that appeal to you - perhaps an heirloom that, though not resistant to disease, is reportedly produces the most delicious tomatoes in the world. Experimentation is part of the joy of gardening, and part of your harvest is what you learn along the way.<br>
               </div>
            </div>




            <a href="#modal1" class="modal-open1" >&#9676;  Garden Prep for Tomatoes</a>
 
            <div class="modal1" id="modal1">
               <div class="modal__content1">
                 <a href="#" class="modal__close1">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Garden Prep for Tomatoes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Where you plant your tomatoes in the garden is important. Tomatoes need at least six to eight hours of sun a day to produce well -- and full sun is best, especially in cooler, more northern climates. Tomato roots won't do well in soggy soil -- a sunny, well-drained part of your garden is best.<br>
<h1 style=font-size:4vw>Best Soil for Tomatoes</h1>
Tomatoes like their soil pH around 6.0 to 6.8. Briefly, pH is a measure of soil acidity or alkalinity. On the pH scale, 7.0 is neutral; so the range which tomatoes prefer is slightly on the acid side. (By the way, that's the pH range at which most vegetables grow best.)<br>

You should check the pH level in your garden every three to five years. You can test it with an inexpensive kit from a garden center, or your local cooperative extension service may offer an inexpensive testing service.<br>

If your soil pH is too low (too acid), you'll need to add lime to the soil to bring the pH back into the proper range. Gardeners in western states (and some areas of the east) often have high pH or alkaline soils and may need to add sulfur to the soil to lower the pH. Although lime and sulfur can be added to the soil any time the ground isn't frozen, fall is a convenient time for many gardeners and gives slow-acting lime a chance to take effect. Get recommendations from the Extension service on how much lime or sulfur to apply based on your soil test report.<br>

<h1 style=font-size:4vw>Making Better Soil</h1>
No matter what kind of soil you have in your garden, you can shape it into a great home for your tomatoes with a little work. Both light, sandy soils that drain too rapidly and heavy, clay soils that take forever to drain and warm up in spring can be improved with the addition of organic matter -- leaves, compost, grass clippings, garden residues or easy-to-grow cover crops such as buckwheat, cowpeas or annual ryegrass.<br>

In sandy soils, organic matter builds up the soil's water-holding capacity. This is vitally important for tomatoes, which depend on a continuous supply of moisture all season long. But tomatoes don't want to sit in puddles! Organic matter also opens up heavy soil so that water and air penetrate better.<br>

If your tomato crop has been only so-so for the past few years, work some extra organic matter into the soil where your plants will be growing. You'll probably see a big difference in the harvest.<br>

Before transplanting tomatoes, it's a good idea to work the soil until it's loose to a depth of six to eight inches. You can do the work with a tiller or a garden fork. The tomato roots will be able to expand quickly in the loose earth and you'll also uproot and kill many weeds.<br>

<h1 style=font-size:4vw>Fertilizer</h1>
It's important to work some fertilizer into the soil at transplanting time, so that your transplants can get off to a good start.<br>

After the soil has been well tilled and is loose, make a trench or furrow six to eight inches deep down what will be the row of tomatoes. At the bottom of the furrow put a thin band of organic or chemical commercial fertilizer, such as 5-10-10. The numbers 5-10-10 refer to the percentages, by weight, of nitrogen (N), phosphorus (P) and potassium (K) in the bag of fertilizer. They'll always be listed in that order, too: N-P-K.<br>

Another method is to put down a deeper band of dehydrated animal manure, compost or rotted leaves. You can use both methods for a quick start and strong finish for your tomatoes.<br>

Then, no matter which method you've chosen, cover all this fertilizer with two or three inches of soil. If your transplants' roots or stems come in direct contact with the fertilizer, the salts in the fertilizer can draw moisture from them, which is harmful. If the fertilizer is deep underneath the plant, the roots will grow to it and absorb the nutrients gradually.<br>

After covering the fertilizer, it's just a matter of transplanting the tomatoes into the 3- to 4-inch-deep furrow.<br>
               </div>
            </div>

            <a href="#modal2" class="modal-open" >&#9676; Tomato Essentials</a>                
 
            <div class="modal" id="modal2">
               <div class="modal__content2">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Tomato Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    <h1 style=font-size:4vw>Planning</h1>
Select several varieties that mature at different times to extend your harvest.<br>
If you don't purchase plants, start seeds indoors in flats or pots 6 to 7 weeks before the average last frost date, and set out transplants when the soil is warm and all danger of frost is past.<br>
<h1 style=font-size:4vw>Preparation</h1>
Select a site in full sun (except in very hot climates, where some shading will be desirable to prevent blossom drop).<br>
A week or so before planting, fertilize with 1 to 1 3/4 pounds of 5-10-10 or its equivalent per 100 square feet. Increase the amounts for sandy soils.<br>
<h1 style=font-size:4vw>Planting</h1>
Set up trellises, cages, or stakes at planting time.<br>
Dig planting holes 18 to 24 inches apart if you plan to stake or trellis the crops, 36 to 48 inches apart if the plants aren't trained.<br>
Mix a teaspoon of 5-10-10 fertilizer or its equivalent and 1 tablespoon ground limestone with soil at the bottom of the planting hole (except in high pH soils). Pinch off two or three of the lower branches on the transplant and set the root ball of the plant well into the hole until the remaining lowest leaves are just above the soil surface.<br>
Water generously and keep the plants well watered for a few days.<br>
<h1 style=font-size:4vw>Care</h1>
Provide an even supply of water all season.
If staking or trellising, prune suckers to allow one or two central stems to grow on staked plants, two or three central stems for trellis systems.<br>
Apply a thick layer of organic mulch 4 or 5 weeks after transplanting.<br>
Side-dress tomato plants initially when the first clusters of fruit have formed and every 3 weeks thereafter. Two cupfuls of 5-10-10 or its equivalent are generally adequate for 20 plants.<br>
See our article Summer's Bad Guys by Charlie Nardozzi for controls of common tomato insect pests such as tomato hornworms and whiteflies. See our article Tomato Diseases by Carolyn Male for controls of common tomato diseases such as early blight and verticillium wilt.<br>
<h1 style=font-size:4vw>Harvesting</h1>
For best flavor, harvest tomatoes when firm and fully colored. Fruits will continue to ripened if picked half ripe and brought indoors.<br>
               </div>
            </div>


            <a href="#modal3" class="modal-open" >&#9676;  Fertilizing Tomatoes</a>
 
            <div class="modal" id="modal3">
               <div class="modal__content3">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Fertilizing Tomatoes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Tomatoes need quite a big food supply over the season -- they're what we call "heavy feeders." This is no surprise when you look at all the work they're doing: extending the stem, putting out more branches, leaves and blossoms; developing, nurturing and ripening all those fruits! To do all this work they need a steady diet of water and nutrients.<br>
                    <h1 style=font-size:4vw>All About Side-Dressing</h1>
                    In most gardens, it's a good idea to side-dress tomatoes. That simply means placing fertilizer around the plants to give them extra nourishment through the season. One or two side-dressings is fine for most gardens.<br>
                    
                    Many kinds of fertilizers can give tomatoes the extra nutrients they need. Some gardeners prefer to use a complete fertilizer (such as 5-10-10 or 10-10-10). Organic fertilizers such as bone meal, dried manure or cottonseed meal are also good. Just remember that most organic fertilizers don't contain balanced amounts of the three major nutrients - nitrogen, phosphorus and potassium. For example, manure tends to be low in phosphorus so you could add bone meal at the same time to provide a more complete diet.<br>
                    
                    Stay away from high-nitrogen fertilizers such as urea, ammonium sulfate or fresh manure because it's easy to use too much. When you over fertilize, you get tall, dark green plants with few tomatoes.<br>
                    
                    <h1 style=font-size:4vw>When To Side-Dress</h1>
                    Start side-dressing when the first tomatoes have just formed - when they're about the size of golf balls. Make repeat side-dressings every three weeks after that. About a pound (two cups) of 5-10-10 should be enough for all the plants in a 30-foot row (about 20 plants). This works out to about 1-1/2 tablespoons per plant spread in a one-inch-deep circular furrow five to six inches away from the stem, usually right under the drip line of the plant. Be careful not to get any of this fertilizer on the leaves or stem because it will burn them. Cover the fertilizer with one to two inches of soil. The next rain or watering will start carrying the nutrients down into the root zone of the plants.<br>
               </div>
            </div>




            <a href="#modal4" class="modal-open" >&#9676;  Watering Tomatoes</a>
 
            <div class="modal" id="modal4">
               <div class="modal__content4">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Watering Tomatoes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Tomatoes require an even supply of water throughout the season; an irregular water supply will cause your tomatoes to develop problems.<br>
<h1 style=font-size:4vw>Give Them An Inch</h1>
Like most other vegetables in the garden, tomatoes need at least one inch of rain or irrigation water per week for steady growth. In the hotter, drier parts of the country, their needs go up to two inches of water per week during the summer months.<br>

An inch of water measures out to about 60 gallons for each 100 square feet of garden. So, if you have to water by the bucket brigade, that's something to bear in mind.<br>

<h1 style=font-size:4vw>Watering Technique</h1>
Here's a clever way of watering tomatoes. Cut the tops from some gallon-size cans, punch holes in the bottoms and set them in the ground with only about an inch of the can showing above the surface. Use two cans near each tomato plant and fill them two or three times per week -- or more often, if needed.<br> This method directs water right to the root zone of the plants and little is wasted.<br>

<h1 style=font-size:4vw>You can develop your own watering techniques as long as you follow these guidelines:</h1>

Water thoroughly to encourage the tomato roots to seek water and nutrients deep in the soil. With an extensive, deep root system, the plants will hold up better during dry spells. When watering, soak the soil to a depth of at least six to eight inches.<br>
Water only when your plants need it. Tomatoes like moisture, but overwatering is harmful. You not only waste water, but soggy soil will prevent the roots from getting the air they need.<br> If your plants look a little wilted on a hot, summer afternoon, that's usually normal. They'll perk up overnight. If plants are wilted in the morning, don't wait -- water them! (Certain diseases can also cause wilting.) <br>A thorough soaking every four to five days on light, sandy soils and every seven to ten days on heavy soils is a good general guide for irrigating if you don't get enough rain.<br>
Water early in the day to cut down on evaporation losses and also to give your plants plenty of time to dry out. Wet foliage overnight may help trigger some diseases. With furrow irrigation, drip irrigation or soaker hoses, which all deliver water right at the soil surface and not on the leaves, you can water almost anytime. Try to avoid watering at midday though, because that's when evaporation losses are highest.<br>
Use a good mulch to help retain moisture in the soil. Mulches reduce the fluctuation of soil moisture and that helps the crop enormously. But, remember, don't apply mulch until after the transplants have been going for five to six weeks.<br>
               </div>
            </div>


            <a href="#modal5" class="modal-open" >&#9676;  Tomato Problems</a>
 
            <div class="modal" id="modal5">
               <div class="modal__content5">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Tomato Problems</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Some problems with tomatoes are not caused by insects or diseases. Here's a few sommon problems.<br>

<h1 style=font-size:4vw>Blossom End Rot</h1>
This rot begins on the bottom -- or blossom -- end of the tomato as a sunken, water-soaked spot. The spot turns brown or black, dry and leathery as it grows larger. It affects both green and ripe tomatoes and is caused by a lack of calcium in the plant, which is usually the result of a fluctuating moisture supply.<br>

Staked or pruned plants, or plum-shaped fruits are more likely to suffer from blossom end rot than are unstaked tomatoes. The rot often starts if the plants are in the midst of a growth spurt and they're suddenly hit by a hot, dry spell. The moisture stress brings on the problem.<br>

Prevention is the best cure. Concentrate on keeping the water supply even throughout the season. Mulch can be a big help. It conserves soil moisture and keeps down weeds. Cultivating deeper than about an inch within a foot of the plants may damage roots and encourage rot.<br>

One on-the-spot measure for gardeners facing a blossom end rot crisis: Apply calcium right away to the leaves. You can get the calcium in the form of calcium chloride -- sold by some seed companies and by hardware stores in northern areas as de-icing salt. Mix one tablespoon to a gallon of water and spray two or three times a week. This will help some.<br>

<h1 style=font-size:4vw>Cracking</h1>
Tomatoes often start to crack during warm, rainy periods -- especially if this weather comes after a dry spell. The tomatoes simply expand too fast. They're most likely to crack when they've reached full size and are beginning to turn color. Some varieties are resistant to cracking, such as 'Early Girl' and 'Jet Star'. Again, the best way to avoid the problem is to keep the moisture supply as steady as possible throughout the season and to select crack-resistant varieties.<br>

<h1 style=font-size:4vw>Catfacing</h1>
This is another kind of cracking or scarring. Tomatoes develop unusual swelling and streaks of scar tissue. Catfacing isn't a disease; it's caused by abnormal development of the tomato flower at blossom time. Cool weather may cause the flower problems and older varieties seem to be more susceptible than newer ones.<br>

<h1 style=font-size:4vw>Blossom Drop</h1>
Some years many of the early-season blooms simply fall off without setting fruit. This is the result of cool night temperatures (below 55° F). Some varieties, such as 'Pixie II', will keep their blossoms and set fruit in cool weather. Blossom drop also occurs when day temperatures are consistently above 90° F or night temperatures remain above 75° F in the summer. This is one reason why it can be difficult to get a summer-long crop of tomatoes in the hot sections of the South and Southwest. Certain varieties, such as 'Heatwave', will set fruits well even under hot, dry conditions.<br>

<h1 style=font-size:4vw>Curling of Leaves</h1>
Curling or "leaf roll" is very common but doesn't harm production. It usually occurs after periods of heavy rains, when the soil is very wet. Older leaves are affected, rolling up until their edges touch. Some varieties are more prone to leaf roll than others. Plant in well-drained soil to minimize leaf roll.<br>

<h1 style=font-size:4vw>Sunscald</h1>
This occurs when green or ripening tomatoes get too much exposure to the hot sun. At first, a yellowish white patch appears on the side of the tomato facing the sun. The area gets larger as the fruit ripens and becomes grayish white. To guard against sunscald, be careful not to overprune and don't remove foliage shading the fruits. Especially in hot climates, it may be a good idea to grow plants in cages where they'll develop lots of protective foliage. Control diseases such as early blight that cause plants to lose foliage.<br>

Although these common problems make tomatoes look ugly, they're okay to eat fresh. Just cut away the affected part and enjoy the rest.<br>
               </div>
            </div>



            <a href="#modal6" class="modal-open" >&#9676;  Insect Pests of Tomatoes</a>
            <div class="modal" id="modal6">
               <div class="modal__content6">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Insect Pests of Tomatoes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    It's high summer, your tomato vines are flourishing, and you're eager to pluck the first juicy, ripe orb. But chances are you aren't the only one interested in America's favorite vegetable -- you no doubt have competition in the form of pests! Here's some basic information on several widespread pests that, like you, hanker for tomatoes. For more information on the pests most likely to cause problems in your part of the country and how to control them, contact your local county Extension agent.<br>
                    <h1 style=font-size:4vw>Aphids</h1>
                    Aphids can bother tomato plants all season long. These soft-bodied, pear-shaped insects may be green, pink or yellow. They suck the sap from plants, weakening them and, indirectly, spread diseases. Wash them from plants with a shot from your garden hose every few days, and if they peresist, use insecticidal soap.<br>

<h1 style=font-size:4vw>Beetle Pests.</h1>
 Blister beetles and Colorado potato beetles both feed on tomato foliage. The 1/2- to 3/4-inch-long, black, gray, brown or yellow blister beetles generally don't do much damage. Just keep an eye out when harvesting tomatoes; if you crush one of these beetles, its juices can cause your skin to blister. The Colorado potato beetle is a more voracious feeder. Adult beetles are orange and black striped; the large, orange humpbacked larvae have two rows of black dots down their sides. Both of these pests can be controlled with diligent hand-picking. Approved insecticides, such as B.t. 'san diego' for potato beetles and pyrethrum for blister beetles, also provide control.<br>

Cutworms are gray, brown or black pests that curl up tightly when disturbed. They're one to 1-1/2 inches long, hide in the soil during the day and come out at night to feed on young plants. They'll chew tomato transplants right off at the soil surface. There's no need to spray for these pests in the home garden. Simply put a newspaper collar around the tender stem at transplanting time, spanning at least one inch above and two inches below ground.<br>
<h1 style=font-size:4vw>Flea Beetles</h1>
Flea Beetles are tiny, 1/16-inch-long black beetles that jump like fleas and chew numerous small holes in the leaves, most often early in the season. Damage on established plants usually isn't serious, but young seedlings can be badly weakened by flea beetle feeding. To control, spray or dust with an approved insecticide, such as pyrethrum. Adult beetles spend the winter in plant debris, so clean up the garden well in the fall.<br>

Hornworms are many gardeners' least favorite pest. These huge, green caterpillars with a "horn" on their back ends eat both leaves and tomatoes. They work fast, too. Handpicking is the best bet in the home garden because you often discover the pests at harvesttime when it's unwise to spray with chemical insecticides. (The "horn" is fierce-looking, but harmless.) If you prefer to spray, use Bacillus thuringiensis (known as Bt, and available as Dipel or Thuricide), a natural insecticide that requires no waiting between application and harvest. This form of Bt only infects caterpillars. It is most effective if used when the caterpillars are small. Bt can kill the larvae of all species of butterfly or moth, so be sure to use care during application to minimize drift.<br>

Stinkbugs are mainly a problem in the southern part of the country. These 5/8-inch-long, shield-shaped insects may be green, gray, blue or red. Like aphids, they feed by sucking the plants' sap. This causes deformed fruits with hard, whitish spots on them. To control stinkbugs, reduce their habitat by keeping weeds under control, both in the garden and surrounding. Cover plants with floating row cover to create a barrier against the pests.<br>

Tomato fruitworm are a season-long pest that feed on tomato foliage and fruits. These yellow-, green- or brown-striped caterpillars can grow up to two inches long. Spray with Bt for control. Destroy infested fruits and clean up all tomato plant debris at the end of the season to reduce the number of overwintering insects.<br>

Whiteflies feed on many plants in the vegetable garden besides tomatoes, including cucumbers and melons. These tiny (1/16-inch-long) pests fly out in a cloud from infested plants when disturbed. They feed by sucking the plants' sap, causing leaves to become yellow and distorted and weakening plants. Whiteflies secrete a sugary substance called honeydew on which a sooty black mold often grows, making tomato leaves appear dirty. Spray with insecticidal soap for control.<br>

If you use any kind of spray, organic or not, follow the directions exactly. Read the directions three times: before you make a purchase, so you know what you're getting; before you use it, to make sure you use it correctly; and after you've used it, so that you store it properly.<br>
               </div>
            </div>



            <a class="titlu">Sweet Corn&#127805;</a>


            <a href="#modal7" class="modal-open" >&#9676;  Planning Your Corn Crop</a>
            <div class="modal" id="modal7">
               <div class="modal__content7">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planning Your Corn Crop</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    If you've never grown corn before, check with a local farm or garden store, a neighbor who raises corn or your Cooperative Extension Service agent before you buy seeds. They can tell you what varieties do particularly well in your area, as well as some of the disease, pest or weather problems you may encounter.<br>

<h1 style=font-size:4vw>Corn Varieties</h1>
When asking for advice, keep in mind that gardeners are often emotionally attached to their favorites. For instance, some people always plant Silver Queen corn, even though the first, creamy white ears won't be ready to harvest until fall. That waiting is part of what makes 'Silver Queen' special, and the long-awaited fall harvest is one of life's fine pleasures. Other people feel the same about 'Country Gentleman' or 'Stowell's Evergreen'.<br>

Sweet corn varieties are usually grouped according to the length of their growing season. You can really extend your harvest by planting more than one group at the same time. The tassel time won't overlap, so you won't have to worry about cross-pollination between varieties.<br>

Despite the preference for a particular type of corn, it's a lot of fun to try a new variety or two every year. However, although the latest hybrids often produce beautifully, watch the results of a few seasons before you depend on a new one for your main crop.<br>

<h1 style=font-size:4vw>Common Sense and Cross-Pollination</h1>
You may come upon words of caution in a seed catalog or have had another gardener tell you to isolate certain types of corn to avoid cross-pollination. It's true that corn's dependence on the wind for pollination means you sometimes have to watch out for accidental mixing of different varieties, but in most home gardens this is a minor problem, if one at all.<br>

The technical explanation for the way corn changes when it's pollinated by another variety has to do with recessive and dominant genes, plus a number of other factors. Luckily, you don't have to be a plant breeder to understand how to keep your garden corn from having an unwanted mix-up. You can just use common sense.<br>

When one type of corn tassels - letting its pollen loose - that pollen can land on the silks of any corn in the immediate area. If only one variety of corn is silking at any given time, crossing cannot take place. This is usually the case in home gardens, where the varieties planted tend to have significantly different flowering and growing seasons.<br>

If two similar varieties cross, the difference in the resulting ears may be unnoticeable. However, because of their genetic makeup, some types of corn suffer if they cross with a stronger or dominant variety.<br>

<h1 style=font-size:4vw>What's a Home Gardener To Do</h1>
There are three instances where this can be a concern in the home garden. First, yellow corn is dominant over white. If a yellow and a white variety cross, the white corn could end up with some yellow kernels. Because it's dominant, yellow corn wouldn't be affected by the cross.<br>

Second, both popcorn and field corn have genes that are dominant over sweet corn. If a cross takes place with either popcorn or field corn and sweet corn, the sweet corn is likely to be tough and starchy. Again, because they're dominant, popcorn or field corn wouldn't be affected by the cross.<br>

Third, many of the genes for supersweet flavor are recessive, so they're affected by any corn that crosses with them. That's why the seed companies advise isolating these varieties.<br>

<h1 style=font-size:4vw>Corn Isolation</h1>
Isolating just means preventing an unwanted cross, and you have a choice of ways to do this. All you have to do is prevent cross-pollination. Simply plan to keep different varieties of corn that enter the tassel and silk stage at the same time far enough apart that their pollens won't mix. The recommendations vary from 100 feet to 600 feet, depending on whom you ask. Naturally, the farther apart the better, but about 200 feet is fine unless you regularly experience very strong winds.<br>

To isolate corn you can choose varieties with different days to maturity, or stagger plantings of varieties that have a similar number of days to maturity. Allow at least 10 days between plantings, and your crops shouldn't cross.<br>

Another trick is to plant the dominant corn on the prevailing downwind side of any variety that will suffer if they cross. If you're not sure in which direction the prevailing winds blow in your area, check with your local weather service.<br>

Some gardeners claim that planting a "fence" of two rows of tall sunflowers between corn varieties is enough to prevent cross-pollination. This works most of the time, because the odds are generally in your favor when it comes to accidental crossing.<br>

<h1 style=font-size:4vw>Old Favorites</h1>
An open-pollinated corn variety is a nonhybrid or a strain that has grown for many generations without plant breeders' modifications. With the revived interest in heirlooms, many other varieties such as 'Country Gentleman', 'Golden Bantam', 'Stowell's Evergreen', and 'Ashworth' are becomming more readily available to home gardeners.<br>

Open-pollinated corn grows just like its parent plants, so you can save the seed from one year to the next with good results. If you want to save the seeds of an open-pollinated variety, isolate the crop from other varieties, so there won't be an accidental mixing of pollens to affect the next generation.<br>
               </div>
            </div>
        

            <a href="#modal8" class="modal-open" >&#9676;  Corn Growing: Getting Started</a>
            <div class="modal" id="modal8">
               <div class="modal__content8">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Corn Growing: Getting Started</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Corn is a warm-weather vegetable that grows best during the long, sunny days of summer. The standard rule of thumb for seeding corn is to plant it two weeks before the last expected frost date. To extend your harvest a few weeks, stagger your corn plantings. This also prevents accidental cross-pollination of certain varieties.<br>

Time your plantings by checking the days to maturity and counting back from the date you want to begin harvesting. One thing to remember is that the harvest time may vary slightly if the weather is very cool or very warm during the growing season. Timing your corn plantings is especially helpful if you're planning a midsummer vacation away from home. You needn't miss a single, delicious ear if you plan it right.<br>

<h1 style=font-size:4vw>Soil and Site</h1>
Corn likes rich soil with good drainage. Ideal soil for corn is sandy loam that stays moist, without being too wet. The fastest way to improve less-than-perfect soil is to add plenty of organic matter (leaves, compost, grass clippings and crop residues). If your soil is too sandy, organic matter will help it retain nutrients and moisture, which are vital to corn. If you have heavy clay soil, organic matter will wedge between the soil's tightly compacted particles to loosen it and improve its drainage.<br>

Corn has the same needs as most vegetables when it comes to soil pH (acidity or alkalinity). The best range for all vegetables is between 5.8 and 6.8 on the pH scale. This measurement indicates that soil is slightly acidic (the scale runs from 0 to 14, with 7 marking the neutral point). Anything below 7 is acid; anything above is considered alkaline. Contact your local extension service to have your soil tested every few years to be sure the pH is at an acceptable level. To raise or lower your soil's pH, you add lime or sulphur, and specific amounts are usually recommended in the test results.<br>

As you're planning your garden, whether on paper or in your head, arrange the corn so it will be in at least four side-by-side rows to ensure good pollination. Be sure it gets full sun, away from trees that might shade it. Most corn varieties are tall and can shade shorter crops, so plant corn on the north or east side of the garden.<br>

If you're growing corn for the first time, you may need to enlarge your existing garden. All you need to "sod bust" or turn a patch of lawn or an overgrown garden into a productive seedbed is a spade or tiller. Although it's best to break new ground the fall before you want to plant, you can create a new garden in the spring with fairly good results.<br>

If you spade an area by hand, dig it to a depth of 8 to 10 inches and turn each spadeful of soil bottom-side up. This helps to keep grass from resprouting. Keep working the soil by chopping and stirring it, breaking up the clumps to make it loose and friable.<br>

A tiller will also turn over sod to create a loose, friable seedbed. Till the soil back and forth until the seedbed is worked 8 to 10 inches deep.<br>

If you've grown corn before in the same garden, change the place where you plant it, or rotate it, every year. This can be tricky if you don't have lots of garden space, but when you rotate corn, you prevent disease and pest problems from recurring. You also keep your garden's natural fertility in balance by moving heavy feeders, like corn, around. If your garden is too small for yearly rotation, rotate it at least every second or third season. If you run into a bad insect or disease problem one year, rotation the following season is a must.<br>



<h1 style=font-size:4vw>Fertilizer -- A Fish Story?</h1>
Many gardeners have heard that colonists learned from the Indians to plant each corn kernel on top of a dead fish. This is no "fish story." Decaying fish contain nitrogen, which corn needs for good growth. The Indians and colonists may not have known why it worked, but they liked the results, so continued to do it.<br>

Because it needs a steady supply of nitrogen throughout the growing season, corn is called a "heavy feeder." It's logical that a plant that can grow over six feet tall and produce hundreds of seeds needs lots of food. It's not so much the amount of food that matters as a steady diet while corn is growing. In fact, at planting time, corn needs about the same amount of fertilizer as most other garden vegetables. During the growing season, however, you give corn additional feedings by side-dressing the crop. There's quite a selection of fertilizers available today, and you should use whichever seems best for your garden and you.<br>



Going along with the notion behind the dead fish of early American times, you can use an organic fertilizer such as well-rotted compost, aged or dehydrated animal manures or concentrated animal or plant extracts like bloodmeal or alfalfa meal. These materials may be available at little or no cost to gardeners in some areas. In other areas they may be prepackaged and sold at garden stores and the prices can be high. An advantage of these fertilizers is their ability to condition the soil as well as to feed plants. They also provide nutrients over an extended period of time, which helps corn. On the other hand, because their nutrient content may not be known, it's hard to judge exactly how much of some of these materials to use for best corn production.<br>

Many gardeners use a balanced commercial fertilizer such as 10-10-10. The numbers indicate the percentages of nitrogen, phosphorus and potassium (N-P-K), and they're always listed in the same order on the label of each bag of fertilizer. Corn does best with high amounts of nitrogen, so pay special attention to the first number when selecting a commercial fertilizer. It should be equal to or higher than the other two elements listed. Chemical fertilizers are fairly inexpensive, and it's easy to use them in accurately measured amounts.<br>

To achieve the best of both worlds, try combining equal parts of an organic fertilizer such as dehydrated chicken manure or compost and 10-10-10.<br>



<h1 style=font-size:4vw>Broadcast or Sprinkler Method</h1>
You can apply fertilizer at planting time by "broadcasting" or sprinkling it evenly over a patch of soil, or by "banding" the fertilizer in the row where your seeds will be planted. Broadcasting makes sense if you want to fertilize a large area in a short time; you just sprinkle it on and work it into the top three to four inches of soil. Broadcasting also guarantees that fertilizer is available to every seed, although in smaller amounts than if you applied it in a band.<br>

If you broadcast fertilizer, use 4 to 5 pounds per 100- square-feet of soil, or a 12-quart pail per 1,000-square- feet. Use about four times as much if you're broadcasting bulky organic matter.<br>

Even though broadcasting fertilizer works well, banding it makes the most efficient use of the plant food. To band, sprinkle one to two cups of balanced commercial fertilizer down every 10 feet of row. Use about four times as much if you're using organic material, which has less concentrated amounts of the three key elements. Cover the fertilizer with an inch or two of soil before planting. Because corn is such an important crop in this country, there have been many studies to determine how to make the best use of fertilizers. As home gardeners, we can benefit from the results of this research.<br>

It's been proved that the best place for fertilizer at planting time is in bands to the side and slightly below the seed. With this placement, the seed can't be burned by the nitrogen in the fertilizer, and the fertilizer is readily available in the soil by the time the taproot starts downward and side roots start to grow<br>
               </div>
            </div>


            <a href="#modal9" class="modal-open" >&#9676; Corn: Planting Basics</a>
            <div class="modal" id="modal9">
               <div class="modal__content9">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Corn: Planting Basics</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    There's an old farmer's rhyme about planting corn seed: "One for the blackbird, one for the crow, one for the soil and one to grow."<br>

                    Although it's not necessary to plant four times the amount of seed that you actually want to grow, a little extra doesn't hurt, if only to ensure good germination. As for the blackbird and the crow, they may be tough to beat in large cornfields, but there are a few ways to outwit them in the home garden.<br>
                    
                    <h1 style=font-size:4vw>Planting Methods</h1>
                    Once the seedbed is well worked and fertilized, you're ready to plant. There are two traditional ways to plant corn: three to five seeds grouped together in small circles, or "hills,"or spaced evenly down straight rows, one behind the other.<br>
                    
                    Many people find that planting corn in rows takes less time. There's usually less thinning needed, and it's easy to cultivate rows during the season. To plant in rows, stake each row the length you want and stretch a string along the ground to mark the planting line. Use the edge of a hoe or the end of its handle to draw a shallow furrow, one to two inches deep, along one side of the string. A handy way to fertilize the row at this time is to draw a second shallow furrow down the other side of the string. Sprinkle a band of fertilizer in this furrow. When it's time to cover the seeds, one pass with a hoe will cover the fertilizer at the same time.<br>
                    
                    
                    
                    <h1 style=font-size:4vw>How To Plant</h1>
                    To plant, just drop seeds into the planting furrow, spacing them 8 to 10 inches apart. Firm the seeds into the soil with the back of a hoe to keep the seeds in place. This allows good contact with the soil, which is important for germination.<br>
                    
                    Next, cover the seeds with one to 1 1/2 inches of soil. You can draw the hoe along the string to flatten the ridge of soil created by making the furrow. This automatically brings the planting and fertilizer furrows to ground level, covering the seeds and fertilizer with the right amount of soil. You can also cover corn seeds by raking one to 1 1/2 inches of soil over them, using soil from the edges of the furrow. Firm the soil one more time after covering.<br>
                    
                    Leave 24 to 36 inches between the rows for cultivation, and plant at least four rows for the best pollination. Many short rows will provide better pollination than just a few long ones. If you intend to weed and cultivate the corn rows with hand tools, you don't need as much room between the rows as you do if you plan to cultivate by machine.<br>
                    
                    
                    
                    <h1 style=font-size:4vw>Planting in Hills</h1>
                    To plant in hills, stake out the rows, but don't make the straight-line planting furrow. Instead, every 18 to 24 inches, use your hoe to draw a circular planting furrow, about six inches in diameter. Place a small handful of fertilizer to the side of the seeds and cover it. Plant three to five seeds in each circle. Firm the seeds, cover with one to 1.5 inches of soil and firm again.<br>
                    
                    If all the seeds in each hill come up, you'll have to thin out all but the two or three strongest or the seedlings will be too crowded. If you don't like to thin corn, don't plant in hills. However, plenty of gardeners don't mind hand thinning. Try planting both ways and decide for yourself.<br>
               </div>
            </div>


            <a href="#modal10" class="modal-open" >&#9676; Corn Diseases, Insects, and Pests</a>
            <div class="modal" id="modal10">
               <div class="modal__content10">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Corn Diseases, Insects, and Pests</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Most of the trouble gardeners have with corn is easily controlled. Diseases aren't much of a problem, and insects can easily be kept in check. Birds and four-footed visitors who want to share your corn harvest can be kept out with any number of scare-off devices and fences. Prevention can be 100 percent of the cure. If you sow your corn in well drained soil that has balanced nutrient levels, you're on the road to having healthy plants. Healthy plants can withstand nibbling or insect damage better than weakened ones. In many cases, a crop that's healthy will often be spared disease and insect attack altogether.<br>

A very important step you can take for disease-free corn is to clean up all the cornstalks as soon as the harvest is over. Till healthy cornstalks into the soil as additional organic matter, or, if you prefer, shred, compost or simply discard them. Dealing with old cornstalks will prevent many diseases and insects from overwintering, which is crucial to the health of crops grown in future seasons.<br>

<h1 style=font-size:4vw>Diseases</h1>
Stewart's Bacterial Wilt can affect sweet corn at any stage, but is most harmful to young plants. It causes dwarfing and wilting of the plants, and the tassels often develop early and die without completing pollination. Leaves develop yellow-brown streaks and wavy edges. The leaves of young plants may dry out, and the stem eventually dies. This wilt is often characterized by a yellow slime on the inner husks and in the stem. Bacteria overwinter in the gut of the corn flea beetle. This disease is prevalent after a mild winter, when more disease-carrying flea beetles have survived. To prevent an outbreak, clean up all crop residues, rotate your corn crop each year, plant resistant varieties and control corn flea beetles.<br>

Root Rot is caused by fungi in the soil and shows up as stunted plants or irregular plants with rotten roots. You risk root rot when planting seed in cold, damp soil. Use treated seed, plant on raised beds if soil drainage is a problem and wait until the soil temperature is 55° F before planting.<br>

Corn Smut is caused by a soil fungus, and can strike corn anywhere it's grown. Smut looks awful, but it's not a disastrous condition. Smut is edible and actually is sought after by gourmet chefs. In the early stages of the infection, grayish white, spongy growths called "galls" usually appear on the corn ear or tassel. As these galls ripen, they turn black and eventually burst open, releasing powdery spores that spread the smut. The disease thrives in hot, dry weather and often infects weak or injured plants first. To prevent, rotate crops, and if you notice any galls, pick them and burn them before they blacken and burst. This will halt the smut's spread and is often all it takes to keep the disease in check from one season to the next.<br>

Southern Corn Leaf Blight is another fungal disease. It is characterized by tan streaks or lesions on the leaves, and may cause early seedling death, mold-covered kernels or rotten cobs. A similar disease, northern corn leaf blight, results in grayish green or tan lesions on the leaves and reduced yields. These fungi overwinter in infected seed and plant debris. Plant resistant varieties, using healthy, certified disease-free seed. Rotate crops and remove or till under crop debris. If the disease has been severe in your area, check with your local Extension agent for a preventive fungicide program. In 1970 this blight reached epidemic proportions, wiping out 15 percent of the total United States corn crop, for an estimated loss of one billion dollars.<br>

<h1 style=font-size:4vw>Insects</h1>
These are the insects most likely to affect corn, along with the best control measures for the home gardener.<br>



Corn earworm is also known as the tomato fruitworm or cotton bollworm. This 1- to 2-inch-long caterpillar ranges from light green to purplish brown. Moths lay eggs on corn plants in early summer and larvae feed first on the silks, then on the kernels at the tip of each ear. The insect can prevent pollination, and it opens kernels to fungus invasion. To discourage this pest, select varieties with tightly closed husks. Earworms can be controlled somewhat by squirting mineral oil into each ear after silks have started to dry, using half a medicine dropper per ear. You can also spray the plant and silks with Bt. If earworm damage occurs, clip off the tip of the ear and any affected kernels. The rest of the ear should be fine to eat.<br>



European corn borer is a 1-inch-long tan or brown caterpillar sporting rows of dark brown spots and a dark brown head. The moths fly mostly at night and lay eggs on the undersides of corn leaves in early summer. The hatched larvae bore into cornstalks and ears to feed. Broken tassels, bent stalks and "sawdust" around corn are all signs of borer damage. If you catch it in time, you can often cut out the borer from the stalk with no permanent damage. To prevent infestation, treat ears and leaves with Bt as soon as silk has partially emerged. Spray with an organic pesticide at five-day intervals from the time you first spot borer activity or when the tassels begin appearing. Make at least two applications for best results. Be sure to till or spade under crop residues at the end of the season so the borer has no place to overwinter.<br>

Corn Sap Beetles are small, black beetles that spawn maggot-like larvae that eat into the kernels of roasting corn. Larvae are whitish and up to 1/4 inch long. The beetles are attracted to the scent of damaged corn, so preventing feeding by other pests helps keep them at bay. To prevent, plant resistant varieties and clean up all crop residues. Southern corn rootworms are small, yellowish grubs of the spotted cucumber beetle. They weaken corn plants by feeding on roots, causing the stalks to blow over easily in wind or heavy rain. Adults lay eggs around roots of cornstalks in the fall. The eggs hatch in spring. You can avoid damage from corn rootworms by tilling under cornstalks and rotating crops each year.<br>

Corn Root Aphids are tiny, light green insects that feed on corn roots, causing the plants to be stunted and yellowed. The aphids overwinter in the nests of cornfield ants. The best way to control this pest is to plow the garden in the fall, destroying ant nests. Corn Flea Beetles are small but dangerous. Only 1/16th of an inch long, these jumping black beetles chew corn foliage and transmit Stewart's bacterial wilt. The pests abound during cool, wet periods and after mild winters. They hibernate in weeds and plant debris over the winter, so keep the garden and surrounding areas clean. Many of the later-maturing white corn varieties are resistant to wilt. To repel flea beetles, sprinkle a light dusting of wood ash over plants and soil.<br>

Wireworms are slender, yellowish or brown larvae of click beetles. These 1/2- to 1 1/2-inch-long worms resemble a jointed wire. They damage corn plants by feeding on the roots. These pests are most often present in newly worked sod. Rotate crops and till or spade your garden thoroughly in the fall. Heavy infestations may require soil treatment with beneficial nematodes before planting.<br>

Seed corn maggots are cream-colored and legless. The 1/2-inch-long larvae bore into sprouting seeds and prevent further growth. When early corn is planted in cool, wet soil, the slower germination makes the seeds more susceptible to maggot attack. If maggots are a problem in your area, delay planting until weather warms.<br>

<h1 style=font-size:4vw>Uninvited Guests</h1>
One of the biggest challenges in growing corn is keeping it for yourself. From the day you plant to the day you're ready to harvest, it seems there's always some critter who'd just love to share in the bounty. Fortunately, most of the animals and birds that invade corn can be outwitted. Raccoons are smarter than we'd like them to be, but they, too, can be kept at bay. Here are some ideas to keep corn free of uninvited guests. Some of these tricks can solve pest problems in other parts of your garden, as well.<br>

Raccoons are well known for their expertly timed raids on the sweet corn patch. Many people start their tales of raccoon damage with the words, "The night before we were going to pick the first, ripe, sweet corn -." When you lose ripening sweet corn to raccoon raiders, you swear they were on hand at planting time reading your seed packets, jotting down the days to harvest and keeping track of the time back in the woods. Actually, raccoons are attracted by the smell of the sweet corn tassels.<br>

There are many old-time tricks to keep raccoons out of the corn patch, but only one rule: Put your defense in action before the raccoons can set a single foot in your garden. Once an animal has tasted your sweet corn, it will be almost impossible to keep it out of the garden.<br>

<h1 style=font-size:4vw>To protect sweet corn, try these ideas:</h1>
* Erect a three-foot-high chicken-wire fence topped by an electrical wire.<br>

* Play a portable radio in the cornfield all night.<br>

* Plant a crop such as pole beans, pumpkins or winter squash between rows of corn. Supposedly, raccoons don't like to tread on vines or foliage covering the ground around cornstalks. Also, the lush foliage of pole beans cuts down the raccoons' ability to see, and this, too, is said to discourage their corn raids.<br>



<h1 style=font-size:4vw>Other Critters</h1>
Some of the methods that keep raccoons out will also work for skunks, woodchucks, deer and squirrels. An electric fence is the best all-around pest barrier, except when it comes to squirrels. These agile creatures aren't put off by fences, electric or not. One way to keep squirrels away is to sprinkle red pepper or Tabasco sauce on some ears on the outer rows of the corn. It won't affect the corn's flavor when it's cooked, but any squirrel, skunk or raccoon who takes a nibble of the "hot" ears isn't likely to come back for seconds.<br>

It seems there's an endless list of home remedies to try to keep the corn patch free of four-footed pests: running barefoot around the corn rows to leave a strong human scent; tying your dog near the corn to guard it; placing a paper bag over each ear; the bag of tricks seems bottomless. Some of these methods work some of the time, so try anything you think might work for you. Using several methods in succession or simultaneously increases your chances of success.<br>

<h1 style=font-size:4vw>Birds</h1>
Unlike four-footed critters, birds do as much good in the garden by eating insect pests as they do damage, but some species have a weakness for corn. There are a few ways to keep birds away from the corn at each stage of the game.<br>

After planting, cover each row with a long strip of chicken wire, bending it in an inverted U-shape about 10 inches high in the middle. The close mesh keeps out prying beaks, and by the time the seedlings touch the top of the wire, the birds are no longer interested. You can remove the wire and store it for the next season.<br>



Don't bother with scarecrows. Although they might be fun for the kids to put together, they'll only serve as a handy perch for most birds. However, there are other effective ways to scare birds away. Try putting a realistic life-size plastic owl on a tall post near the corn. The owl will ward off birds, and may help with neighborhood mice and rabbits as well. Moving the owl frequently will keep critters from getting used to it too quickly.<br>



If you can keep birds away from your newly planted corn, they shouldn't bother the crop again until the ears start to fill out. Then you need an effective bird-scarer or chaser. Rig up noisemakers or aluminum pie plates around the corn to frighten them. A cat or dog near the garden often does the trick. Flashy mylar tape and scare-eye balloons can help, too.<br>

One time-consuming, but surefire bird barrier is to tie a paper bag around each ear of corn, but only after the corn has been pollinated. This also can ward off invading insects, but it's too much work for a large cornfield. When it rains, the bags break and need replacing; and when it's windy, they often blow off.<br>

<br>
               </div>
            </div>

            <a href="#modal11" class="modal-open" >&#9676; Harvesting Corn</a>
            <div class="modal" id="modal11">
               <div class="modal__content11">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Harvesting Corn</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Harvesting corn is a matter of picking the ears at peak flavor. Here's how to know when to harvest.<br>

<h1 style=font-size:4vw>The Sweetness Factor</h1>
The prime harvest time for sweet corn passes quickly for most varieties except the supersweets, so gardeners need to know how to judge when to harvest to get the most from their crop.<br>

Corn is ready to be picked as soon as the ears have completely filled out. This goes for sweet corn and roasting ears.You can tell when this happens by feeling the end of an ear. If it's rounded or blunt rather than pointed, the ears are ready. The silks also dry up when the ears are almost ready to be picked.<br>

If you don't trust your judgment, you can pull back a bit of the husk and check to see if the ear looks well filled and the kernels are creamy yellow or white. Many gardening guides tell you to pierce a kernel with your thumb nail to test for ripeness. If the liquid inside is watery, that ear isn't quite ready. If the liquid is white or "milky," you're in business.<br>



Although opening the husk is a fairly sure test, try not to do this. Once you open an immature ear, it's susceptible to insect and bird attacks as it continues to ripen. It usually takes only a little practice to become a good judge by feeling the ends of the ears.<br>

Sweetness is the key, so it helps to understand what makes corn sweet and why timing is so important in your harvest. The plant manufactures natural sugars when the kernels are filling out. These kernels are seeds that each contain a natural food-storage compartment as well as the corn embryo. A seed can't store sugars, but it can live on stored starches throughout the winter months and in its early stages of growth the following season. As soon as the kernels are full of sugar, the plant begins to convert it into starch. For best flavor, harvest the corn before this change can take place.<br>

The sweetness of corn depends on the variety, temperature and amount of sunlight during the day when the ears are forming. The plant makes the most sugar on cool, sunny days. If the temperature is too hot, the sugar-making process is slowed. That's why the long, crisp, sunny days of early fall produce the sweetest corn.<br>

<h1 style=font-size:4vw>Time It Right</h1>
If you have a choice, it's a good idea to harvest corn as close to the time you're going to eat or use it as possible. In fact, you might want to have the water boiling for corn on the cob before you head out to harvest. To harvest sweet corn, grab an ear and twist it down and off the stalk.<br>

If you want the sweetest corn possible, try to harvest each ear at its peak. Keep in mind that the natural conversion of sugar into starch is sped up when you harvest. The moment you pick an ear of sweet corn, its sugars start to change into starches because the natural goal is to nourish seed for reproduction. In 24 hours, most varieties convert more than half their sugar content to starch. However, the new super sweet varieties stay sweet much longer after harvest than the old standards.<br>

The loss of sugar is much slower at lower temperatures, so refrigerate corn if you're not going to be able to eat it right away. If you're not near a refrigerator and you have some harvested corn, keep the freshly picked ears in single layers, rather than stacking them. Corn tends to overheat inside its tight husks, so give each ear as much breathing room as possible. It also helps to cover the ears with a damp cloth.<br>

Super sweet varieties have been developed to slow down the conversion of the natural sugars into starch, which makes these varieties last longer on the stalk, and helps them retain their flavor for a few days once harvested. Many seed catalogs claim that super sweet types are twice as sweet at harvest time as ordinary hybrids, and four times as sweet after 48 hours.<br>

Some people prefer corn that's less sweet, with more texture in each kernel. They take advantage of the natural conversion process and don't harvest corn until it's somewhat doughy from the increased starch content. They may also wait a day or two to serve it after picking.<br>

If you want to store corn over the winter or grind your own cornmeal, give it time to harden completely. This means it has passed through its entire carbohydrate production cycle. It will then contain such heavy starch that it will be too hard to bite and it will keep for many months in storage.<br>

<h1 style=font-size:4vw>Popcorn Pointers</h1>

The only way that growing popcorn differs from growing sweet corn is at harvest time, and popcorn is actually easier to harvest because you don't have to catch it at the peak of sweetness. Leave popcorn in the garden until the stalks and husks are brown and dry, then twist and snap each ear from the stalk. Do this before the frost hits. To prepare popcorn for indoor curing, carefully strip away the dried husk from each ear. The kernels will be partially dried or "cured," a necessity for long-term storage.<br>

Besides drying on the stalks, popcorn requires another four to six weeks of thorough drying in a warm, well-ventilated place. Corn can't pop unless there's the right amount of moisture inside the kernel. When it's heated, the moisture turns to steam, which causes the kernel to burst.<br>

Place the ears in mesh bags or spread them out in an area where they'll have warm air circulating around them. You can also hang mesh bags full of popcorn ears in your garage for about four weeks. After curing, hang the bags of corn from the rafters of your root cellar. The corn can keep for years in the cool, dry, dark conditions there.<br>



After a month of curing, the kernels can be taken off the ears and stored in airtight jars. Whether you're removing the kernels before storage or just before popping, there's no real trick to it. Simply grasp the ear firmly in both hands and twist until the kernels drop out. Once started, the kernels drop off with very little pressure. However, beware of the sharply pointed kernels if you're using your bare hands. After two or three ears, you may have a few nicks and scratches. If you want to remove the kernels from a lot of ears, it might be a good idea to wear gloves.<br>

Popcorn doesn't take much garden space for a sizable harvest. Each ear is loaded with tiny kernels come harvest time, and three or four five-foot-long rows should be plenty. Many popcorn varieties produce one or two ears per plant, so you may have enough by growing just five or six plants.<br>

Pop homegrown popcorn just as you would store-bought. Heat a few tablespoons of oil in a deep pot. Sprinkle in enough kernels to coat the bottom and cover the pot. If not, as soon as you hear the first kernel pop, shake the covered pot vigorously while the rest pop. Shaking prevents the kernels from burning, and the unpopped kernels stay on the bottom nearest the heat. If you're using a popcorn popper, follow the manufacturer's instructions.<br>

When the popping stops, remove the pot from the heat and take off the lid to let the steam escape. The popcorn is ready. Enjoy it plain, or add your favorite topping.<br>
               </div>
            </div>
            


            <a class="titlu">Eggplant, Peppers and Okra &#127798;</a>


            
            <a href="#modal12" class="modal-open" >&#9676; Pepper Types</a>
            <div class="modal" id="modal12">
               <div class="modal__content12">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Pepper Types</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Seed companies break the peppers we grow down into two categories: hot and sweet. The hot types include Cayenne, Jalapeno and Anaheim. Examples of sweet peppers are Bell and Pimiento. Banana and Cherry peppers come both sweet and hot.<br>

<h1 style=font-size:4vw>Anaheim</h1>
Mildly hot, elongated, blunt-ended pods measure from four to 10 inches long and turn from green to red at maturity. These peppers are often called New Mexico chilis because of their long history of being grown in that region. Popular varieties include 'Anaheim TMR', 'NuMex Big Jim' and 'NuMex Sunrise'.<br>

<h1 style=font-size:4vw>Banana</h1>
Long, thin-walled pepper that ripens to red or yellow; often used in the immature pale green stage. The hot type is called Hungarian Wax. Varieties include 'Sweet Banana' and 'Giant Yellow Banana'.<br>

<h1 style=font-size:4vw>Bell</h1>
Characterized by large, blocky fruits with three or four lobes, these peppers are about three inches wide and four inches long and they taper slightly. Starting off as dark green to yellow-green, most turn red when fully ripe, although some turn yellow or orange, and even brown or purple. Bell peppers are regularly harvested and used when green. There are around 200 varieties in the Bell group. 'California Wonder', 'Northstar' and 'Ace' belong to this group.<br>

<h1 style=font-size:4vw>Cayenne</h1>
These are hot chile peppers. The fruits are slim, pointed and slightly curved, ranging in length from two to eight inches. Most of the fruits are green, ripening to red. They can be used in either the green or the red stage. Examples are 'Large Thick Cayenne', 'Super Cayenne' and 'Long Red Cayenne'.<br>

<h1 style=font-size:4vw>Cherry</h1>
Fruits are cherry or globe-shaped with three cells. They grow on long, upright stems, usually above the leaves of the plant. They are usually orange to deep red when harvested and may be sweet or hot, large or small. Varieties include 'Cherry Sweet' and 'Large Cherry'.<br>

<h1 style=font-size:4vw>Jalapeno</h1>
One of the most well known hot peppers. The three-inch-long by one-inch-wide conical fruits can be eaten green or red and their mildly hot flavor is popular on nachos, salsas and pickled. Varieties include 'Jalapa', 'Jalapeno M' and 'TAM Jalapeno'.<br>

<h1 style=font-size:4vw>Pimiento</h1>
These peppers are sweet and have very thick walls. The fruit is conical, two to three inches wide, three to four inches long and slightly pointed. Pimientos are red when ripe, and they're most commonly used at this stage. Popular varieties include 'Super Red Pimiento' and 'Pimiento L'.<br>

<h1 style=font-size:4vw>Ornamental Peppers</h1>
Ornamental peppers are a true member of the Capsicum family like the peppers that are grown for food outdoors. Give them lots of sun and keep them evenly moist, and they'll produce many small cone-shaped peppers. These plants, which you can usually buy through a seed catalog, at a florist shop or even in a supermarket, are very pretty when the miniature peppers start to ripen. Often you'll have a plant simultaneously splashed with green, yellow, red and orange because each pepper ripens at its own pace.<br>

These mini peppers are edible, but they are hot! You can use them in cooking or for attractive and different hors d'oeuvres along with crackers and a dip. Just be careful not to confuse them with a plant called the Jerusalem or Christmas Cherry. Instead of the cone-shaped peppers, these plants have round, reddish-orange fruits when ripe and they are not edible.<br>

<h1 style=font-size:4vw>The Name Game</h1>
Chile, Chili, Cayenne, Jalapeno - By Any Name, It's Hot! Names for hot peppers can get confusing. Some people call them chili peppers, cayennes or jalapenos, and others just call them hot peppers. What are they really called? Is each of these names a separate category?<br>

The confusion started in Mexico. Chile is the Spanish word for pepper. To specify which type of pepper, Mexicans would add the word for the particular type after the name chile. Therefore, chile dulce would be sweet pepper, chile jalapeno would be the Jalapeno pepper, and so on. When chile found its way into this country, different meanings were given to it in various parts of the country, and it even acquired a new spelling. In the Southwest and West, chile is used to refer to the Anaheim pepper. In other parts of the South and the Southeast, and still other sections of the country, chile refers to any type of hot pepper. Some folks refer to all hot peppers as cayennes or jalapenos. And all over the country we have different chile con carnes, which are pepper based.<br>

Chile and chili are not varieties of peppers, but only words used to describe that the pepper is hot. So whether you say chile or chili, cayenne or jalapeno, and whether the word describes just an Anaheim pepper or all hot peppers, watch out! That pepper is hot!<br>
               </div>
            </div>




            <a href="#modal13" class="modal-open" >&#9676; Eggplant Essentials</a>
            <div class="modal" id="modal13">
               <div class="modal__content13">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Eggplant Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
Eggplants are a warm-weather crop.<br>
Start plants indoors in flats or peat pots about 2 months before the soil warms up in your region, or buy nursery transplants just before planting.<br>
<h1 style=font-size:4vw>Preparation</h1>
A fertile, well-drained soil is required for best results.<br>
Use a covering of black plastic mulch to warm heavy clay soils before setting out transplants.<br>
Mix 1 inch or so of well-rotted manure or a general fertilizer such as 5-10-5 throughout the planting bed about a week before planting. Apply 2 to 3 pounds per 100 square feet.<br>
<h1 style=font-size:4vw>Planting</h1>
Set out the transplants when all spring frost danger is past. Space plants 18 to 24 inches apart.<br>
Mix 1 tablespoon of 5-10-5 or a shovelful of rotted manure or good compost with the soil in the bottom of each planting hole and cover with more soil.<br>
<h1 style=font-size:4vw>Care</h1>
Add an organic mulch to retain moisture and control weeds after the soil has completely warmed up, about 1 month after setting out transplants.<br>

Side-dress with 1 tablespoon of 5-10-5 or 10-6-4 per plant when the plants have set several fruits, in southern regions where the growing season is long, side-dress every 3 to 4 weeks.<br>
See our article Summer's Bad Guys by Charlie Nardozzi for controls of common eggplant pests such as flea beetles, Colorado potato beetles, and tomato hornworms.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Start harvesting when the eggplants are 4 to 5 inches long. The skin should be shiny; dull skin is a sign that the eggplant is overripe.<br>
Use a sharp knife and cut the eggplant from the plant, leaving at least 1 inch of stem attached to the fruit.<br>
               </div>
            </div>


            <a href="#modal14" class="modal-open" >&#9676; Okra Essentials</a>
            <div class="modal" id="modal14">
               <div class="modal__content14">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Okra Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
In most parts of the country, plant okra directly in the garden when the nights stay above 55° F and the soil has warmed to 65° F to 70° F.<br>
In the most northern areas, start seeds indoors in peat pots several weeks before the soil warms up. Or direct seed through black plastic and cover the rows with grow tunnels.<br>
<h1 style=font-size:4vw>Preparation</h1>
Choose a site in full sun, preferably on a southern slope for maximum warmth.<br>
A week or so before planting, work into the soil 1/2 pound of 10-10-10 or its equivalent per 25 feet of row.<br>
<h1 style=font-size:4vw>Planting</h1>
To hasten germination, soak seeds overnight in tepid water or freeze them to crack their coats.<br>
Sow seeds 1/2 to 1 inch deep, 3 to 4 inches apart.<br>
Set out transplants to stand 1 to 2 feet apart in rows 3 to 4 feet apart.<br>
<h1 style=font-size:4vw>Care</h1>
When the seedlings are about 3 inches tall, thin to stand 1 to 2 feet apart.<br>
Provide at least 1 inch of water per week; more in hot, arid regions.<br>
When plants are young, cultivate lightly to eliminate weeds. Mulch heavily (4 to 8 inches) to keep weeds down and conserve moisture.<br>
Side-dress plants with 10-10-10 fertilizer (1/2 pound per 25 feet of row), aged manure, or rich compost. Side-dress three times: after thinning, when the first pods begin to develop, and at least once midway through the growing season.<br>
See our article Summer's Bad Guys by Charlie Nardozzi for controls of common okra pests such as flea beetles.<br>
<h1 style=font-size:4vw>Harvesting</h1>
The first pods will be ready in 50 to 60 days. Harvest the pods when still immature (2 to 3 inches long).<br>
Pick at least every other day to encourage production.<br>
Wear gloves and long sleeves to avoid coming in contact with the irritating spines on the leaves and pods. Use a knife to cut the stem just above the cap.<br>
               </div>
            </div>

            <a href="#modal15" class="modal-open" >&#9676; Pepper Essentials</a>
            <div class="modal" id="modal15">
               <div class="modal__content15">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Pepper Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
Plan to set out home grown or purchased transplants after the last spring frost date.<br>
Start pepper plants indoors in flats or pots 8 to 10 weeks before the average last frost date.<br>
<h1 style=font-size:4vw>Preparation</h1>
One week before setting out transplants, broadcast 1 1/2 pounds of 5-10-10 or its equivalent per 100 square feet.<br>
<h1 style=font-size:4vw>Planting</h1>
Set hot pepper plants 12 to 15 inches apart, larger bell types 15 to 18 inches apart.<br>
Place a teaspoon of 5-10-10 fertilizer or its equivalent into each planting hole and cover with 1 inch of soil before setting in transplants.<br>
Provide windbreaks.<br>
<h1 style=font-size:4vw>Care</h1>
Provide deep watering weekly for pepper plants.<br>
Side-dress plants monthly with about 1 tablespoon of 5-10-10 fertilizer or its equivalent for each plant.<br>
Support bushy, heavy-yielding plants with 2-foot-high cages, or stake them.<br>
Apply heavy organic mulches when summer heat begins to peak.<br>
Temperatures over 90° F can cause buds and blossoms to drop; the condition is more serious if humidity is low also.<br>
Pests are not a serious concern. However, see our article Summer's Bad Guys by Charlie Nardozzi for controls of common pepper pests such as corn borers, flea beetles, and leaf miners.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Begin harvesting when peppers reach a usable size.<br>
Leave some peppers on the plant to ripen fully. The peppers will change color and develop greater levels of vitamin C. Don't let all peppers stay on the plant as this will cut off further blossoming and fruit set.<br>
               </div>
            </div>
            
            
            <a href="#modal16" class="modal-open" >&#9676; Harvesting Eggplant, Peppers and Okra</a>
            <div class="modal" id="modal16">
               <div class="modal__content16">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Harvesting Eggplant, Peppers and Okra</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The most important thing about harvesting eggplant, peppers and okra is to start as soon as there's something to eat. It's the job of the plant to make seeds, so too much of the plant's effort will go into ripening the fruit instead of producing new fruit if you don't harvest regularly and often. Make it a practice to go out every few days and pick what's ready to eat. Try to get the most out of each plant. After all, having good things to eat is one of the main reasons to garden.<br>

You can harvest peppers when they're as small as golf balls. Most peppers, except for a few varieties like Sweet Banana, are green when young. Don't be surprised if you see your bell peppers turn red; many of them do as they ripen. Harvest them by cutting through the stem of each fruit with a knife. You can have an almost-continuous harvest from your pepper plants by cutting often, as this encourages the plant to keep blossoming, especially in the beginning of the summer. Later in the season, leave some green peppers on your plants to turn red. They taste wonderful and are colorful in pepper relish.<br>

In the South, pepper plants can be cut back after the first big harvest to encourage another crop. That's because peppers are really a perennial plant, although they are most often grown as an annual. If your season is long enough, cut the plant back to a few inches above the soil surface. The plant will grow back and give you a second, large harvest. Don't forget to sidedress, though, so the plant will have enough food to continue its work.<br>



<h1 style=font-size:4vw>Eggplant</h1>
Eggplant tastes best when harvested young. If you cut into an eggplant and find an abundance of brown seeds, it's already too late for prime eating. The fruit will be a dark, glossy purple when it's ready to harvest. The surface of the eggplant will turn dull and it will taste bitter as it gets older and past its prime. To harvest eggplant, cut through the stem above the green cap, or calyx, on the top. It's a tough stem, so have a sharp knife handy. The calyx can be prickly, so you may want to wear gloves. You can cut these plants back like peppers if your season is long enough for a second crop.<br>



<h1 style=font-size:4vw>Okra</h1>
Gloves and a long-sleeved shirt are practically a must when you harvest okra. The pods and leaves are usually covered with little spines you can hardly see. These spines can get under your skin and make your hands and arms itch for days.<br>

Overripe okra is too tough to eat, and it grows so fast you may have to harvest every day. A pod that's ready one day will have gone by the next. The best pods, those not more than four inches long, should be cut with a knife or broken right below the cap on the bottom. Only one pod grows beneath each leaf, so break off the leaf after harvesting the pod. This helps you remember where you've already harvested and indicates where to start the next time.<br>

Okra plants grow so tall in the South you may have to stand on a ladder to harvest them! Okra doesn't get nearly that tall in the North. When the plants get too tall to harvest, southern gardeners can cut them back to 12 to 18 inches above the ground. This is usually done in July or August. The plants will sprout again to make a second crop. You can also grow dwarf varieties that grow less than six feet tall.<br>
               </div>
            </div>




            <a href="#modal17" class="modal-open" >&#9676; Fertilizing Eggplant, Peppers, and Okra</a>
            <div class="modal" id="modal17">
               <div class="modal__content17">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Fertilizing Eggplant, Peppers, and Okra</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    Eggplant, peppers and okra are heavy feeders, but they are also picky eaters. They like small amounts of food all season long. Too much nitrogen will produce lots of foliage but not much in the way of fruits.<br>

<h1 style=font-size:4vw>Adding Fertilizer</h1>
So, before planting, add some organic fertilizer, like dehydrated chicken manure, or any other type of animal manure. You can also work two to four pounds of a balanced fertilizer, such as 10-10-10, into each 100 square feet of soil. The numbers 10-10-10 refer to the percentages, by weight, of nitrogen (N), phosphorus (P) and potassium (K) in the bag of fertilizer. For an extra boost at planting time, put a handful of compost or a teaspoon of 5-10-10, mixed with some soil, into the bottom of the hole and then cover the fertilizer with one to two inches of soil. This protects your plants from getting burned if the roots come into contact with the fertilizer.<br>



<h1 style=font-size:4vw>The Match Trick</h1>
If you've tried to grow peppers in the past and you've been disappointed with the results, try this trick. Peppers like a pH that's a bit on the acid side (5.5 to 6.0), so take a few matches from a matchbook and mix them with the soil and fertilizer in the bottom of the transplant hole. Then cover this mixture with two to three inches of soil. The roots of the transplants must not come into contact with the matches because the sulfur can damage them. The sulfur in the matches lowers the pH around the roots, and the peppers seem to love it.<br>

A variation of this trick can be done by buying sulfur powder at the drugstore, mixing a pinch of it with the soil in the bottom of the hole and covering it before planting.<br>

Try the match trick. It just might give you the largest pepper crop you've ever had.<br>

<h1 style=font-size:4vw>Careful with the Fertilizer</h1>
You also need to be careful when fertilizing. Sometimes pepper plants will have lots of blossoms but not enough fruit. This could be due to extremes of heat (temperatures above 90 degrees F) or cold (below 55 degrees F). Under these conditions, blossoms will drop off the plant rather than set. A lack of magnesium can contribute to the problem. To restore magnesium, buy some Epsom salts at the drugstore and add about one tablespoon to an empty spray bottle. Then fill the bottle with lukewarm water, shake it up so the Epsom salts dissolve and spray the solution on the leaves and blossoms of your pepper plants. If you do this a couple of times during the blossom period, you should have plenty of peppers.<br>
               </div>
            </div>


            <a href="#modal18" class="modal-open" >&#9676; Insect Control on Peppers</a>
            <div class="modal" id="modal18">
               <div class="modal__content18">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Insect Control on Peppers</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Some folks prefer using homemade remedies for insect control instaed of chemical ones. Homemade bug chasers include a soapy water solution for aphids and a chili powder and water mixture for other pests. If you find small groups of insects starting to chew on your pepper plants, pick off the bugs before they do too much harm. Keep your garden clean of debris, so that insects won't have a place to reproduce. If they've already laid their eggs, it doesn't matter if you've cleaned or not; lack of debris, though, helps against those pests that winter over.<br>

Although home remedies are usually effective, for some insect problems you may need to turn to commercially available controls. Be extremely careful when using commercial insecticides.<br>

<h1 style=font-size:4vw>Pesticide Basics</h1>
<h1 style=font-size:4vw>Here are some things to keep in mind when controlling insects in the garden:</h1>

Some chemical products, including Sevin, are harmful to bees. If you use them, do so near evening after the bees are done gathering for the day. Decreased bee activity will reduce pollination and fruit set in your garden.<br>

Check the label on any commercial product to find out if there's a waiting period between use and harvest. Read the label three times: when you buy the product, when you use it and when you carefully put it away.<br>

Pay attention to the timing and the life cycle of the insect you're dealing with. If you catch the problem early -- before the adults have laid eggs and hundreds or thousands of new insects emerge -- you'll need less of the chemical product and there'll be less insect damage to your crops.<br>

Pesticides come under a safety review on a regular basis, so check with your county extension agent or co-operative extension specialist located at the land-grant college in your state about the latest commercially available controls that are safe and effective for home garden use. The pesticide recommendations in this book are based on the most up-to-date information available, but be aware that they are subject to change because of safety reviews.<br>
               </div>
            </div>


            <a class="titlu">Lettuce and Greens &#9752;</a>


            <a href="#modal19" class="modal-open" >&#9676; Leaf Crop ABC's</a>
            <div class="modal" id="modal19">
               <div class="modal__content19">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Leaf Crop ABC's</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Most greens crops thrive in cool spring and fall weather (50° F to 60° F). Just compare the crisp, flavorful lettuce leaves harvested in spring with the often bitter leaves of a summer cutting and you'll agree. A few greens can handle summer heat, but most of them prefer the cooler temperatures of spring and fall.<br>

A steady flow of moisture and nutrients is important for good greens growth. And for some greens, these supplies have to be near the surface. The roots of lettuce, for example, are close to the surface. They don't grow deep in the soil to search out food and water. If you've gardened in dry times, you know lettuce isn't very drought-resistant. Big-leaved plants give off a lot of moisture. When it's dry, they get very thirsty!<br>

<h1 style=font-size:4vw>Nitrogen for Greens</h1>
Leafy crops need plenty of nitrogen, too. That's the key element in the good growth of leaves and it influences the crispness and quality of leafy crops, as well.<br>

The one thing most greens don't need is a lot of heat. Spinach, for example, will quickly develop a seedstalk and start to stretch upward when it gets too warm. This is known as going to seed or "bolting." When it happens, spinach leaves begin to lose some of their flavor. A long hot spell can spoil heads of iceberg-type lettuce, too. The heat loosens the leaves of the head, and they get soft and sometimes bitter. If you can shade some of these crops as hot weather approaches, you can often keep the harvest going a few weeks longer.<br>
               </div>
            </div>
            
            
            <a href="#modal20" class="modal-open" >&#9676; Planning Your Greens Garden</a>
            <div class="modal" id="modal20">
               <div class="modal__content20">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planning Your Greens Garden</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    When you think about greens to grow you've got a big group of plants to consider, as well as different varieties of some salad crops. So plan your greens garden on paper in mid-winter, when the temperature really drops. It's a nice time to spend an evening or two thumbing through the summery, colorful seed catalogs.<br>

<h1 style=font-size:4vw>The Other Greens</h1>
In addition to lettuce, spinach and chard, why not make room for cabbage family greens, such as mustard and kale, as well as some of the lesser-known greens, such as chicory, corn salad (mache), radicchio and escarole. They don't take up much room, and a new green can really spice up a summer salad.<br>

If you're planting your lettuce in space-saving wide rows, you'll have room to try several varieties. Buy an extra seed packet or two of varieties you'd like to try. Planting three- to six-foot rows of three or four kinds of lettuce will give almost any family more than enough lettuce to eat.<br>

If you live in the South, you may want to design your garden to give lettuce and spinach some shade, so they'll last a little longer when the warm temperatures come and push these crops toward bolting.<br>

<h1 style=font-size:4vw>Planning Tips</h1>
Start lettuce or greens indoors as transplants for an extra-early spring harvest, or to start a fall crop. Know in advance which method of shading you're going to use on your cool-weather greens, or try these planting ideas:

Plant quick-maturing leaf lettuces under pole bean teepees to provide some shade. The bean foliage will shade some of the sun and keep the plants and soil cool. Plant the beans early.<br>
Plant some lettuce or spinach between your corn rows, or on the shady side of a row of tomatoes.
Try multi-planting. Plant lettuce, carrots and onions within the same wide row (15 to 16 inches across). Harvest the lettuce when young, leaving expansion room for carrots and onions. You can mix and match with other crops, too, including beets and spinach.<br>
Save a window box for a peppery, green-like curly cress. Plant lettuce in a small section of your flower garden, or use it as a decorative, edible border. The foliage is lovely and contrasts beautifully with flowers.
Succession plant short rows of lettuce to avoid having too much mature at once.<br>
               </div>
            </div>



            <a href="#modal21" class="modal-open" >&#9676; Preparing Soil for Greens</a>
            <div class="modal" id="modal21">
               <div class="modal__content21">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Preparing Soil for Greens</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    When it's early in the season and nearly time to plant a host of greens, put in a little time with your garden soil to prevent weed problems.<br>

<h1 style=font-size:4vw>Working the Soil</h1>
Work the soil once or twice in the week or so before planting time. This puts the soil in good tilth, with no clods or soil chunks, and kills early-growing weeds. Weed seeds are quite small and must be near the surface where there's moisture and warmth before they can sprout to life. When they do sprout, you have to look hard to see them. Working the soil, even raking it, will get rid of the tiny weed seedlings before they shoot up.<br>

By periodically going over the soil before planting, you destroy most of the weeds that could be a problem later on. Work the soil one last time a few minutes before planting. This eliminates most weed seeds that have germinated since your last outing and will give your greens an even chance against the few remaining ones.<br>

<h1 style=font-size:4vw>Greens Love Rich Soil</h1>
The healthiest and best-tasting greens are those that grow quickly. The important contributors to rapid growth are a steady moisture supply and fertile soil rich with decomposed organic matter or humus. Make it a point to regularly work plenty of organic matter into the top six to eight inches of soil. Use leaves, compost, grass clippings, garden residues or easy-to-grow cover crops, such as buckwheat, cowpeas or annual ryegrass.<br>

Organic matter in the soil helps it to act like a sponge, retaining moisture. Without organic matter, the soil may drain too quickly, and shallow-rooted crops, like lettuce, will dry out and stop growing. When growth is interrupted like that, food quality goes way down.<br>

When you spade or till all this organic matter into the soil, you're feeding the teeming soil life - those millions of microorganisms that break down the organic matter into nutrient-rich humus. Feed them, and they'll feed you in return.<br>

The microorganisms in the soil and the plants' roots have to breathe, too, and organic matter gives the soil a porous quality so that oxygen can reach the roots. If you have heavy soil that doesn't drain well and crusts over after a rain, the particles of organic matter will wedge themselves between the tightly packed soil particles, so that air and water can circulate better.<br>

<h1 style=font-size:4vw>About pH</h1>
Lettuce, spinach, chard, beet and turnip greens, and most of the other greens, prefer slightly acid soil with a pH of 6.0 to 6.5. The term pH refers to the measure of soil acidity or alkalinity. The pH scale of measurement runs from 1 (very acid) to 14 (very alkaline), with 7 as neutral. (In nature you generally find the range between 4.0 to 8.3.) If your soil pH is too high or too low, your crops may disappoint you. Spinach, for example, will be stunted and less tender when the soil pH is down below 6.0.<br>

To test your soil pH, you can buy an inexpensive testing kit at a garden center or send a soil sample to a commercial lab or to your local Cooperative Extension Service, if they do soil tests. The results may indicate you need to add ground limestone to raise your pH, or you may have to mix sulfur into the soil to lower your pH.<br>

The soil test report will indicate what and how much to add to your soil to bring it into the correct range.<br>
               </div>
            </div>


            <a href="#modal22" class="modal-open" >&#9676; Plant Greens in Wide Rows</a>
            <div class="modal" id="modal22">
               <div class="modal__content22">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Plant Greens in Wide Rows</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Wide-row planting involves broadcasting seeds in a wide band, thus creating thicker rows with fewer paths in between. Not all vegetables, of course, are meant for wide rows. Squashes, tomatoes, cucumbers and melons are examples of crops that need room to run. But for greens - including head lettuce, collards and kale - wide rows offer many advantages. Most important, you can harvest more than half again as much from wide rows as from single rows using the same space. However, there are other reasons for growing green in wide rows, too:<br>

* Wide rows mean less weeding because after the closely planted greens grow up to shade the ground, they create a "living mulch" or ground cover that blocks out light from weeds, thus checking their growth. Some hand weeding is still necessary, but the living mulch in wide rows take care of most weeding.<br>

* Living mulch shades the soil, keeping it cool and moist, which is very important for crops like lettuce and spinach that get bitter and bolt when the weather warms up. Wide-row growing extends the harvest into summer because the soil in the row stays cooler. The cooler the soil, the better-flavored your crop will taste.<br>

With summer greens like Swiss chard, the moist soil of a wide row helps maintain continuous growth. There's less drying out of the soil, and consequently, less stop-and-go growth.<br>

* Planting is quick and simple. You scatter seed over the wide seedbed with no worry about straight lines or precise spacing.<br>

* Wide rows are proven space-savers. You can do away with long single rows of one variety and plant more varieties of your favorite crops. For example, in a 10-foot-long row, 15 inches wide, you can grow three or four kinds of lettuce.<br>

* Harvesting is fast because you can reach so many more plants from one spot without moving. It sure beats the nonstop stooping and straightening it takes to harvest or weed single rows.<br>



<h1 style=font-size:4vw>Planting Wide Rows</h1>
After you've prepared and fertilized your soil on planting day, follow these easy steps to plant your wide rows of greens and salad crops: Mark the wide row. Stretch a string between two stakes close to the ground for the length of row you want.<br>

Smooth the planting bed. With an iron garden rake, smooth the soil along one side of the string. The rake will mark the width of the row. Don't pack the seedbed down by stepping on it. Always do your work from the side of the row.<br>

Sprinkle the seeds onto the seedbed. Roll seeds off the ends of your fingers with your thumb. Try to scatter them across the seedbed as evenly as you can. The spacing of crops will vary a bit. Lettuce seeds can be planted much thicker than kale or collard seeds, for example. Don't worry if you plant too thickly, thinning will correct that. To give you an idea of how much seed you need, the average packet of lettuce seed will cover three to six feet of a row that's 15 inches wide.<br>

Sprinkle in a few radish seeds. After you've broadcast the main crop, sprinkle some radish seeds down the row. They'll come up quickly and mark the row. Use about five percent as much radish seed as the main seed. You can either pull up the radishes while they're small or harvest them after you pick your crop of greens.<br>



Firm the seeds into the soil with a hoe, so the seeds make good contact with the earth.<br>

Cover the seeds with soil from the sides of the row, pulling it up with your rake. The rule of thumb for the amount of soil to cover seeds is two to four times the diameter of the seed. So for most seeds in the greens group, that's about 1/4 to 1/2 inch of soil. In midsummer or late-summer plantings, an extra 1/4 inch of soil will help keep the seeds from drying out.<br>

Finally, firm the soil once more with the back of a hoe and water gently if the soil is dry.<br>

<h1 style=font-size:4vw>Single-Row Planting</h1>
Use a string to plant a single row, too. Rake the seedbed smooth right over the string and with the handle end of your rake, make a shallow furrow or planting line along the string.<br>

Sprinkle the seeds in the shallow furrow, and walk by a second time and drop radish seeds every five or six inches. After firming the seeds into the soil, cover them with 1/4 to 1/2 inch of soil and firm down gently again. Mark the row with the seed packet or a small sign, remove stakes and string and proceed to the next row to be planted.<br>



<h1 style=font-size:4vw>Double or Triple Rows</h1>
The double-row planting system is two single rows separated by four to five inches. It's a garden space-saver, and it's easier to irrigate, which is very important for gardeners in the West and South.<br>

A simple irrigation system can be made by placing a soaker hose between the two rows. A soaker hose has many tiny holes in it so water oozes gradually from it, irrigating only the soil around your plants. This is a big watersaving advantage over sprinklers, which tend to water the walkways, too. You can even put three or four single rows four to five inches from each other and move the soaker hose to each aisle to water all the plants. This arrangement has the space-saving characteristics of wide-row growing and lets you water all the plants evenly, too.<br>
               </div>
            </div>



            <a href="#modal23" class="modal-open" >&#9676; Growing Watercress</a>
            <div class="modal" id="modal23">
               <div class="modal__content23">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Watercress</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Most people think they have to chase around the woods and streams to find watercress. Not so. Though it's more at home in a fast, shallow stream, this snappy, clean-tasting green will grow very well in the garden. You just have to give it a wet spot and preferably some shade to grow in. You'll have to water it often to assure rapid growth.<br>

<h1 style=font-size:4vw>Starting Seeds</h1>
You can start seeds in small clay pots set in a pan of water indoors and later transplant them to an outside location when the hard spring frosts are past. Or you can start a few plants indoors by sticking some store-bought leafy watercress stems into moist potting soil. Just make sure you keep it well watered.<br>



<h1 style=font-size:4vw>Growing Cress</h1>
When the stems have developed roots and are producing new leaves, transplant them to the garden six to eight inches apart from each other. In four to five weeks, you can start harvesting by cutting off the top three to four inches of the plants.<br>

Giving the plant the moist conditions it needs will be any gardener's main challenge with watercress. Once you find the right spot - perhaps next to a small pool, or in a low, wet area of the garden - you can show off your success with this highly prized green. It really adds flavor to sandwiches, omelettes, freshly caught trout and salads.<br>

<h1 style=font-size:4vw>Watercress Stream</h1>
Here's an easy way to create a false stream on the shady side of the house so you can grow watercress. Dig a trench (preferably near a downspout or an outside spigot) that will hold a few sections of orangeburg pipe, cut in half lengthwise. (Orangeburg pipe is a man-made fiber pipe, often six inches in diameter, used in sewage systems. You can cut it with a saw.) Remember that since you're cutting it in half, you only need to buy half the total length you want to end up with.<br>

Butt the sections together and place them in the trench, so the rim of the pipe is at ground level. Just about fill the pipe with small stones or stone chips. Then place narrow, perforated plastic seed flats in the pipe trench. Fill them with peat moss and soil, and sow your watercress seeds or put in cuttings.<br>

Let the water from a garden hose or the spigot run into the stones in the pipe sections. As long as the stone bed beneath the flats stays wet, your watercress should flourish - from first thaw to last freeze.<br>

If you have a drainage problem where you've built your stream, you can run a "lateral" of perforated soil drainpipe from one of the ends.<br>



<h1 style=font-size:4vw>Upland Cress</h1>
Sometimes called winter cress or spring cress, upland cress is a biennial, which means it will go to seed the second year of its growth.<br>

Plant seeds early in the spring, and soon after start harvesting the young leaves and sprigs. The plants will survive most winters and send up flower stalks early the next season. You can have a spring harvest of some leaves before the seedstalks appear.<br>
               </div>
            </div>
            
            
            <a href="#modal24" class="modal-open" >&#9676; Growing Swiss Chard</a>
            <div class="modal" id="modal24">
               <div class="modal__content24">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Swiss Chard</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Swiss Chard is a favorite green of many gardeners because it grows well in both cool and warm weather. This ability to grow through the summer sets it apart from most greens, and should put chard at the top of your planting list!<br>

<h1 style=font-size:4vw>What is Swiss Chard?</h1>
Chard is actually a bottomless beet. Although a member of the beet family, it doesn't develop bulbous roots. However, like beets, the large, fleshy stalks and broad, crisp leaves, are packed with minerals.<br>

<h1 style=font-size:4vw>Planting Chard</h1>
Plant chard in rows about 15 inches wide, scattering the seeds an inch or so apart. Thin the plants to four to five inches apart. Harvest the first greens when they're about six inches high, and cut the entire plant an inch above ground. In a short time chard leaves will sprout again. Harvest only a few feet of the row at a time, so by the time you cut your way to the taller plants at the end of the row, the plants you harvested first are about ready to cut back again. This way the wide row of chard will keep producing into fall and early winter. If you really enjoy chard, make two plantings: one in early spring and another one in mid- or late summer. You can plant it in the fall down South.<br>



<h1 style=font-size:4vw>Chard Varieties</h1>
Swiss chard comes in different colors. Varieties such as 'Lucullus' and 'Fordhook Giant' are green with white stems. 'Rhubarb' and 'Ruby Red' have bright red stems and reddish-green leaves. And 'Bright Lights' is like a sunset in your garden, with stems ranging from yellow to intense orange to fuchsia, purple, pink and white, with crinkly green leaves. All varieties of Swiss chard are good from a nutritional standpoint, being high in vitamin A.<br>

Those chard stalks offer a double delight for the greens grower, by the way. Cut the stalk and thick mid-rib out of the leaves for two entirely different vegetables from the same plant: Cook up the leaves using your favorite greens recipes and prepare the stems as you would asparagus or braised celery.<br>
               </div>
            </div>



            <a href="#modal25" class="modal-open" >&#9676;Growing Wild Greens</a>
            <div class="modal" id="modal25">
               <div class="modal__content25">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Wild Greens</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    Not all greens are tame in flavor. Here are some "wild" ones to try.<br>

                    <h1 style=font-size:4vw>Arugula</h1>
                    Arugula is also called roquette and rocket. The young leaves of this annual green are rough and slender, with a taste all their own: hot, with a hint of bean or nut flavor. Chopped into a salad, rocket leaves can sure keep people guessing about the ingredients!<br>
                    
                    Cold weather is a must for a good crop of rocket. Sow seeds early in the spring, or in late summer or fall for a late fall or winter harvest, depending on your climate. Harvest leaves when they're no larger than six inches.<br>
                    
                    
                    
                    <h1 style=font-size:4vw>Dandelion</h1>
                    Dandelion greens are more popular in Europe than in this country. Several dandelion varieties have been developed in Europe to produce larger and curlier leaves. 'Montmagny' is one such variety available in this country.<br>
                    
                    European gardeners make a habit of blanching the plants to reduce bitterness. If you want to blanch some local dandelions - on your lawn, for instance - turn flower pots over them in early spring, wait a week and then harvest the leaves. Be sure no herbicides have been used on the lawn you're harvesting from. Once dandelions begin to flower the leaves turn very bitter.<br>
                    
                    
                    
                    <h1 style=font-size:4vw>Corn Salad (Mache)</h1>
                    This spring and fall green, much prized in Europe, is also called lamb's lettuce, mache or fetticus. Its leaves have a subtle taste and mix well in a salad with more sharply flavored greens.<br>
                    
                    One of the nice things about corn salad is its cold hardiness. It's one of the last crops to quit in the fall and early winter. Start plants indoors in early spring for a late spring crop; in mid- to late summer for a fall harvest. In mild climates seeds can be sown in late fall for an early spring harvest.<br>
                    
                    Sow seeds fairly thickly in a 15-inch-wide row simply by broadcasting the seed over the seedbed. Thin so plants stand several inches apart. You can harvest the young leaves any time after the seedling stage, or you can wait to harvest the entire head in 45 to 60 days.<br>
                    
                    
                    
                    <h1 style=font-size:4vw>Celtuce</h1>
                    Celtuce was introduced to U.S. gardeners more than 20 years ago from China. It was first called "celery lettuce." That's because you can harvest the young leaves of the plants in early spring like leaf lettuce, and then later as the plants get taller, cut the stems, pick off the leaves, peel the stems and use them like celery, raw or cooked.<br>
                    
                    Celtuce is a cool-weather plant for the most part. Plant it as early as you'd plant lettuce, but spaced a little farther apart. Harvest the leaves as they reach eating size.<br>
                    
                    The late spring warm weather will cause the leaves to become bitter, so let them go. When the plant gets a foot or two high, cut the stalk for the "celery" harvest. Trim the leaves off and be sure to peel the stem before eating raw or cooked.<br>
                    
                    <h1 style=font-size:4vw>Curlicress or Peppergrass</h1>
                    This zesty, fast-growing green is low to the ground, frizzy and adds a curly look to the salad garden. It's often advertised as the plant you can start harvesting in seven to 10 days.<br>
                    
                    Curlicress will grow just about anywhere. Probably the best place for it would be in an indoor flat near the kitchen where you could snip leaves anytime for garnishing salads or sandwiches.<br>
                    
                    Chew a few leaves before you decide to use a lot of it in any one dish, though. Curlicress has a fiery taste.<br>
                    
                    Plant it in short, wide rows early in the year and add more seeds every couple of weeks. Harvest early because it will produce little flower stalks in a month or so and the quality of the sprigs will go down.<br>
                    
                    <br>
               </div>
            </div>




            <a class="titlu">Broccoli, Cabbage, Cauliflower & Company&#127814;</a>


            <a href="#modal26" class="modal-open" >&#9676; Broccoli Essentials</a>
            <div class="modal" id="modal26">
               <div class="modal__content26">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Broccoli Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
<h1 style=font-size:4vw>Two broccoli crops a year are possible in many areas.</h1>
Start spring transplants indoors 5 to 7 weeks before the last spring frost date, or buy nursery transplants 3 weeks before the last spring frost date.<br>
Plan to seed fall crops 85 to 100 days before the average first fall frost date.<br>
Where the weather is warm, select a variety that is bolt resistant.<br>
<h1 style=font-size:4vw>Preparation</h1>
Add 3 to 4 pounds of 5-10-10 or its equivalent per 100 square feet before planting.<br>
<h1 style=font-size:4vw>Planting</h1>
Set out transplants 3 to 4 weeks before the last spring frost.<br>
Set the transplants 6 to 18 inches apart, with 20 to 36 inches between rows, depending on the fertility of the soil.<br>
Protect transplants from hard frosts with newspapers, plastic cones, paper bags, or baskets. Provide a windbreak to reduce transplant shock and moisture loss.<br>
For fall crops, direct seed the broccoli in the garden. Sow the seeds 1/4 inch deep, 2 to 4 seeds per foot of row, leaving at least 20 to 36 inches between rows, depending on soil fertility.<br>
<h1 style=font-size:4vw>Care</h1>
Thin direct-seeded seedlings when they are 4 inches tall. In rich soil, thin seedlings to stand 6 to 12 inches apart. Where soil is of average fertility, thin seedlings 12 to 18 inches apart.<br>
Side-dress each plant 3 weeks after setting out transplants or 5 weeks after sowing from seed with 1 tablespoon of fertilizer high in nitrogen.<br>
See our article Summer's Bad Guys by Charlie Nardozzi for controls of common broccoli pests such as flea beetles, cabbageworms, and cabbage loopers.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Harvest for peak quality when the buds of the head are firm and tight. If buds start to separate and the yellow petals inside start to show, harvest immediately.<br>
               </div>
            </div>



            <a href="#modal27" class="modal-open" >&#9676; Cabbage Essentials</a>
            <div class="modal" id="modal27">
               <div class="modal__content27">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Cabbage Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
Cabbage is grows best when the heads mature in cool weather, so plan to harvest before the onset of hot weather in summer or in the fall.<br>
For a spring-planted crop, buy transplants at a nursery or start seedlings indoors 50 to 60 days before the last spring frost date.<br>
Late-maturing varieties are best for fall harvests.
Plant them in early summer in the North, mid- to late summer in central and southern areas. Chinese cabbages are best grown for a fall harvest.<br>
<h1 style=font-size:4vw>Preparation</h1>
A week or so before planting, mix three or four shovelfuls of aged manure or compost into the planting bed for each transplant you'll set out, or use a balanced fertilizer such as 5-10-10 at the rate of 3 to 4 pounds per 100 square feet.<br>
<h1 style=font-size:4vw>Planting</h1>
For spring crops, set out well-hardened cabbage transplants in the garden 2 or 3 weeks before the last expected frost date. Space early-maturing cabbages 12 to 15 inches apart, either in beds or single rows; later types, 18 to 24 inches apart.<br>
For fall crops, sow seeds directly in the garden. Plant seeds 1/4 inch deep, 1 1/2 to 2 inches apart.<br>
Sow seeds for Chinese cabbage in the fall 1/4 to 1/2 inch deep and 3 inches apart.<br>
<h1 style=font-size:4vw>Care</h1>
When cabbages are 4 to 5 inches tall, thin or transplant to stand 18 to 24 inches apart; Chinese cabbages should be thinned to 12 to 15 inches apart.<br>
About a month after transplanting, side-dress cabbages with about 1 pound of 10-10-10 or its equivalent per 25 feet of single row. Side-dress Chinese cabbages with 1/2 pound of 10-10-10 or its equivalent per 15-foot single row when plants are 4 to 6 inches tall, and every 3 weeks thereafter.<br>
Apply a thick layer of mulch to retain moisture.
See our article Summer's Bad Guys by Charlie Nardozzi for controls of common cabbage pests such as aphids, root maggots, cabbageworms, and cabbage loopers.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Start harvesting when cabbage heads are firm and softball size.<br>
Cut the head from the stem with a sharp knife and discard the outer leaves.<br>
Begin harvesting Chinese cabbage when the leaves are 10 inches tall and still loose or wait until the heads are formed.<br>
To keep cabbage as long as possible, harvest late in the season before hard freezes and keep heads in a cold, moist area.<br>
               </div>
            </div>
            


            
            <a href="#modal28" class="modal-open" >&#9676;Planning for Cole Crops</a>
            <div class="modal" id="modal28">
               <div class="modal__content28">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planning for Cole Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Selecting the right site will help you produce a healthy crop of cabbage, broccoli, cauliflower and other cole crops.<br>

<h1 style=font-size:4vw>Site Selection</h1>
Cole crops can be planted just about anywhere in the garden. As long as they get six to eight hours of sun each day, they don't mind a little shade from neighboring rows. Your only considerations will be crop rotation and how long the crop will occupy the spot you give it. For instance, Brussels sprouts take the entire growing season, yet some varieties of broccoli will be finished in as little as 30 days from transplant time.<br>

<h1 style=font-size:4vw>Crop Rotation -- A Must!</h1>
One final word before you plant your cole crops; be sure you don't plant any member of the cabbage family in the same place in successive years. Also, rotate if you plant more than one crop the same season. The insects and diseases that bother cole crops remain in the soil, and your crops will be spared considerable damage if you plant them where beans, peas, tomatoes or other vegetables grew previously.<br>

If you garden in a community plot, it can be worth your while to find out what crops were in that plot during the previous year, and rotate your cole crops.<br>

<h1 style=font-size:4vw>Double your Pleasure, Double your Fun</h1>
Even in the shortest growing season, you can enjoy a harvest from two gardens with just one garden spot with a little advance planning. By planting both spring and fall crops of cabbages, broccoli and cauliflower, you can have a steady supply of these vegetables. In warmer areas of the South and along the West Coast, you can grow cole crops throughout the winter.<br>

<h1 style=font-size:4vw>Early-Bird Spring Gardening</h1>
Plan to start your first crop of cole-family plants indoors and transplant the seedlings early, waiting only until the ground is dry enough to work and you're not expecting another hard freeze. Allow four to six weeks from planting the seeds indoors to transplanting.<br>

Certain varieties are designed as early maturing and others as late maturing, so you can extend the harvest by planting more than one variety. In general, the early varieties are meant for the spring planting, but you can mix and match with very few, if any, problems.<br>
               </div>
            </div>



            <a href="#modal29" class="modal-open" >&#9676;Planning for Cole Crops</a>
            <div class="modal" id="modal29">
               <div class="modal__content29">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planning for Cole Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Selecting the right site will help you produce a healthy crop of cabbage, broccoli, cauliflower and other cole crops.<br>

<h1 style=font-size:4vw>Site Selection</h1>
Cole crops can be planted just about anywhere in the garden. As long as they get six to eight hours of sun each day, they don't mind a little shade from neighboring rows. Your only considerations will be crop rotation and how long the crop will occupy the spot you give it. For instance, Brussels sprouts take the entire growing season, yet some varieties of broccoli will be finished in as little as 30 days from transplant time.<br>

<h1 style=font-size:4vw>Crop Rotation -- A Must!</h1>
One final word before you plant your cole crops; be sure you don't plant any member of the cabbage family in the same place in successive years. Also, rotate if you plant more than one crop the same season. The insects and diseases that bother cole crops remain in the soil, and your crops will be spared considerable damage if you plant them where beans, peas, tomatoes or other vegetables grew previously.<br>

If you garden in a community plot, it can be worth your while to find out what crops were in that plot during the previous year, and rotate your cole crops.<br>

<h1 style=font-size:4vw>Double your Pleasure, Double your Fun</h1>
Even in the shortest growing season, you can enjoy a harvest from two gardens with just one garden spot with a little advance planning. By planting both spring and fall crops of cabbages, broccoli and cauliflower, you can have a steady supply of these vegetables. In warmer areas of the South and along the West Coast, you can grow cole crops throughout the winter.<br>

<h1 style=font-size:4vw>Early-Bird Spring Gardening</h1>
Plan to start your first crop of cole-family plants indoors and transplant the seedlings early, waiting only until the ground is dry enough to work and you're not expecting another hard freeze. Allow four to six weeks from planting the seeds indoors to transplanting.<br>

Certain varieties are designed as early maturing and others as late maturing, so you can extend the harvest by planting more than one variety. In general, the early varieties are meant for the spring planting, but you can mix and match with very few, if any, problems.<br>
               </div>
            </div>



            <a href="#modal30" class="modal-open" >&#9676;Growing Cole Crops</a>
            <div class="modal" id="modal30">
               <div class="modal__content30">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Cole Crops</h2>
                 <p class="modal__paragraph">
                    <h1 style=font-size:4vw>Keeping weeds away, watering and fertilzing are ways to insure a strong cole crop harvest.</h1><br>

<h1 style=font-size:4vw>Away With Weeds!</h1>

Weeds aren't much of a problem with transplanted cole crops, especially if you plant in wide rows. Once the plants take hold and develop broad leaves, they shade the soil under the plants. Weeds -- like all plants -- can't grow without adequate light.<br>

Watch out for weeds in your rows of direct-seeded plants for fall, however. The first few weeks your plants are growing is when weeds can damage the crop.<br>

By working the soil and raking it four or five times before planting, you can prevent quite a few weeds. Stirring the top few inches of soil exposes or buries weed seeds that would otherwise sprout.<br>

Once you've planted some cole crop seeds, you can continue this invisible weed-killing method by using a rake or weeding tool to scratch the top 1/4 inch of soil. Be careful, however, not to stir up the seeds you're trying to grow.<br>

When the seedlings are well established, you can cultivate the soil near them as well as the walkways between to keep out weeds. Use a hoe or other weeding tool to disturb the top 1/2 inch of soil every four or five days. Cultivating also aerates the soil, permitting air to get down to the roots of the plants.<br>

Don't ever use a hoe right under the shallow-rooted cole crops. No matter how shallowly you cultivate or how careful you are, you're bound to injure some roots. It's safer to pull weeds there by hand.<br>

<h1 style=font-size:4vw>Water</h1>

Make sure your cole crops stay moist as seedlings and receive a steady supply of water from the time they're up. They need about one inch of water per week.<br>

If you have a rainy spring or fall, you won't have to worry about watering. Unfortunately, every gardening season seems to be drier at times than we'd like, so most of us have to supplement nature's watering occasionally.<br>

Don't water out of sheer habit. If you have clay soil that retains moisture or if it rains hard every week or so, you may not have to water much. But, if you have light, sandy, quick-draining soil, you may have to water more often.<br>

You can monitor rainfall with a rain gauge, or you can check the soil for dryness by digging down a few inches. If you find dry soil below three or four inches, water!<br>

Water the garden thoroughly to a depth of five or six inches to encourage deeper root growth and to spread nutrients throughout the soil.<br>

Evaluate your own garden and use every drop of water wisely; your plants will be healthier for it.<br>

<h1 style=font-size:4vw>Mulch</h1>

Mulch is a protective layer of material such as straw, hay, leaves or grass clippings. Placing four to eight inches of mulch around your garden vegetables prevents weeds, keeps the soil cool and helps retain moisture in the ground around your plants. Mulch is practically a must in the South.<br>

Cole crops don't need to be mulched when the weather and soil are cool. But you can use mulch to provide the cool, moist growing conditions they need if it's hot.<br>

Brussels sprouts have to be in the garden for a number of months before they mature, so it's likely they'll be subjected to some hot, sunny days. Mulching them will help them endure the heat with fewer problems.<br>

One of the benefits of mulch is that it cuts down on weeds by shutting out light to the ground it covers. If you really hate to weed, you can mulch the walkways between your garden rows as well as the vegetables themselves. Try to use a mulching material such as straw that contains few, if any, weed seeds, so you aren't planting more weeds than you prevent.<br>

Black plastic is another type of mulch, but it is used mostly to warm up the soil for heat-loving plants, such as melons and tomatoes. Don't use it on cole crops. Organic mulches are best, as they tend to keep the soil cool.<br>

<h1 style=font-size:4vw>Side-Dress Fertilizer</h1>

Some plants need extra nutrients during their growing period. They either use the initial fertilizer completely or they take such a long time to reach maturity that the fertilizer has been washed away. Giving plants a second dose of nutrients is known as side-dressing.<br>

You usually will want to sidedress broccoli, Brussels sprouts and cabbage. The best time to sidedress cabbage is just before it starts to head. The plants will use this boost to produce a second crop once you've harvested the first. Brussels sprouts are in the ground a long time and the foliage is quite dense, so they really respond to a second dose of fertilizer just before they start budding.<br>

To sidedress, simply draw a circle in the soil around the base of the plant, about four inches from the stem. Sprinkle a handful of 5-10-10 or dehydrated manure in the ring and cover it with an inch of soil.<br>

The tender foliage can be burned by the nitrogen in the mixture, so place the plant food a few inches away from the base of the plant. This will also ensure that the nutrients will seep gradually into the soil, reaching the roots a little at a time rather than all at once.<br>

If there's no rain soon after side-dressing, water around the base of the plant to send the nutrients to the roots.<br>
               </div>
            </div>




            <a href="#modal31" class="modal-open" >&#9676;It's Harvest Time</a>
            <div class="modal" id="modal31">
               <div class="modal__content31">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>It's Harvest Time</h2>
                 <p class="modal__paragraph">
                   <h1 style=font-size:4vw>You can enjoy a rich harvest of cabbage, broccoli, cauliflower and Brussels sprouts -- if you use your head at harvest time.</h1><br>

<h1 style=font-size:4vw>Harvesting Broccoli & Brussels Sprouts</h1>
Broccoli is like a trick candle you can't blow out. Once you pick the first head, the plant responds by producing more side shoots for you to eat. The first head is prime for cutting when its buds are packed close together without any sign of blossoming. Cut it off then, even if the head is smaller than you'd like. If you wait until the small yellow flower blossoms appear, the head will become bitter and the plant won't produce side shoots; it's already gone to seed (bolted). If you spot any yellow blossoms, cut the broccoli. You may stop the bolting process in time, and side shoots may form.<br>

Leave 2 to 3 inches of stem on the plant; the second, lateral heads will branch out from there. Harvest these smaller spears on a daily basis, breaking or cutting them off the plant close to the main stem. Most of the broccoli stem is tender enough to eat, although the most tender part is at the top, nearest the newest growth. Again, if you harvest before these side shoots blossom, you should be able to keep the plant producing for weeks!<br>

Brussels sprouts are easy to harvest. Starting when they're marble-sized, pick off sprouts from the bottom of the plant, moving up the stalk as you go. Also pick off any loose or soft buds, even if you aren't going to eat them, so the plant will keep producing new sprouts.<br>

In the far North, you may be able to harvest Brussels sprouts into December or January, brushing aside snow to reach the plants. In more temperate climates, these extra-hardy plants will produce throughout the winter months.<br>

<h1 style=font-size:4vw>Cutting Cabbage</h1>
Cabbage can be a challenge at midsummer harvest time because you can coax each plant into producing two, three or up to six heads for a fall harvest. To do it, you must harvest the first spring-planted cabbage when the heads are fairly small, about softball size. These small heads make terrific coleslaw for two. Leave four to five lower leaves on the plant, and from each leaf or two another small head may appear.<br>

Of course, you can settle for just one cabbage from each plant. You have no choice in the fall, because your second crop of cabbage only has time to make single heads. Harvest the largest heads in the row; the larger and firmer they are, the better they'll keep.<br>

<h1 style=font-size:4vw>Harvesting Cauliflower and Friends</h1>
Cauliflower heads are ready to harvest as soon as they are blanched pure white and have grown to be 6 to 12 inches across. Each plant produces only one head, so make the most of your growing efforts and keep harvesting any heads that are ready. Simply cut off the head, leaving about 3 inches of stem to keep the florets intact.<br>

Chinese cabbage is best harvested fully grown, although the leaves are edible right from the start. When the loose heads are 12 to 15 inches tall, cut them off at the base with a sharp knife. Harvest the largest heads first to make room for the rest to develop.<br>

Kohlrabi should be pulled when it's 2 to 3 inches across. Don't let it grow any bigger or the bulb will become tough, bitter and woody tasting.<br>



<h1 style=font-size:4vw>Storage</h1>
Although all of the cole crops are easy to freeze, cabbages will also keep in a root cellar or other winter storage facility.<br>

To store cabbages, harvest only fully mature heads, handling them carefully to prevent bruising. Don't wash the heads or trim off any outer leaves; these will help protect the heads.<br>

Cabbages can be tricky to store for extended periods. They need cool, moist, dark surroundings, such as a root cellar with an even temperature. To prolong preservation, wrap each head in several thicknesses of newspaper. Check your stored cabbages often -- even slight rot can send out a three-alarm smell.<br>

If you don't have a root cellar, you can make cabbage storage mounds outdoors with very little effort. Dig a deep hole, and line the bottom with a heavy layer of straw for insulation. Place the heads upside-down in the hole, cover them with more thick straw, shovel 4 to 5 inches of soil around the straw and leave an opening on top. Cover the opening with a board. Whenever you need a cabbage, dig down into the straw pit and repack the straw around the remaining vegetables when you're finished.<br>

<br>
               </div>
            </div>


            <a class="titlu">Beans and Asparagus &#9752;</a>


            <a href="#modal32" class="modal-open" >&#9676;Asparagus Essentials</a>
            <div class="modal" id="modal32">
               <div class="modal__content32">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Asparagus Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
The easiest way to start asparagus is from crowns.<br>
Plant crowns in the spring as soon as the soil can be worked.<br>
Plants will take three growing seasons to become established.<br>
Allow ten to twenty plants per person (15 to 30 feet of row).<br>
<h1 style=font-size:4vw>Preparation</h1>
Select a well-drained site in at least part sun; full sun is not necessary.<br>
Asparagus will thrive in slightly acid soil (pH of about 6.5), but will tolerate alkaline conditions up to 9.0.<br>
Eliminate all weeds by repeated tilling or by growing a cover crop a year in advance.<br>
About one week before planting, prepare trenches for crowns.<br>
<h1 style=font-size:4vw>Planting</h1>
Soak the crowns briefly in lukewarm water before planting.<br>
Draw a hoe along each side of the prepared trench to form a mound in the center running the length of the trench.<br>
Set the crowns 18 inches apart on the mounds in the trench, draping the roots over the sides.<br>
To cover the crowns, mix one part manure to 3 parts topsoil and bury the crowns 2 inches deep.<br>
Water the bed thoroughly.<br>
<h1 style=font-size:4vw>Care</h1>
First year: Weed the beds carefully. Periodically add more topsoil/manure around emerging shoots until the trench is filled. Then spread a 4-to 8-inch layer of mulch such as hay or leaves or a 3-to 4-inch layer of aged manure, compost, or shredded bark around the base of the asparagus ferns. Water regularly. In the early fall, pull back the mulch and side-dress with 2 1/2 pounds of a balanced fertilizer per 100 square feet. Cut down dead ferns in late fall and side-dress with 2 1/2 pounds phosphate fertilizer per 100 square feet.<br>
Second year: Cultivate lightly by hand until the new spears are several inches tall. Keep the bed thickly mulched. Side-dress with a balanced fertilizer such as 10-10-10 at the rate of 2 1/2 pounds per 100 square feet in the spring and early fall. Follow first year instructions for late fall.<br>
Third year and beyond: Maintain as for the second year, but apply the spring side-dressing after the harvest.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Plants started from crowns can be harvested lightly in the spring of the second year; plants started from seeds in the third year.<br>
Harvest only those spears that are thicker than a pencil.<br>
Cut off the spears at or just above ground level when they are 6 to 8 inches tall.<br>
               </div>
            </div>



            <a href="#modal33" class="modal-open" >&#9676;Soil Preparation for Beans</a>
            <div class="modal" id="modal33">
               <div class="modal__content33">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Soil Preparation for Beans</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Most of the work of growing a good crop of beans (and all other vegetables, too) comes before you put the seeds in the ground. If you get your soil into the best possible shape and prepare a smooth seedbed, you'll have the fewest problems.<br>

<h1 style=font-size:4vw>Turning the Soil</h1>
To get beans off to a good start, till or spade a sunny section of your garden to a depth of six to eight inches, making sure the soil is as free as possible of clumps of earth or sod. A seed-bed of deep, loose soil allows bean roots to stretch rapidly and to take in water, food and oxygen easily. For best germination, wait until the soil temperature is at least 60oF to plant.<br>

To get a jump on the weeds, work the soil two or three times over a period of several days before planting (the more, the better). Each time you do this, you'll kill a lot of weeds that have just begun to germinate. Till one last time just before planting. Working the soil this way takes care of half your weeding chores before you even plant!<br>

<h1 style=font-size:4vw>Best Soils</h1>
Most beans aren't too choosy about where they'll sink their roots. They'll give you a good crop in soil that's loamy, sandy, rocky, rich or poor and even in clay. But avoid planting beans in the shade or in soil that stays wet and doesn't drain well. Bean diseases thrive in wet conditions, and the roots may not get enough oxygen with water and mud clogging their air channels.<br>

<h1 style=font-size:4vw>Fertility Needs</h1>
Beans like soil that's slightly acid, with the best pH range for them around 6.0 to 6.5 (pH is an acid-to-alkaline scale). They'll grow outside that range, but they make best use of the nutrients and fertilizers in the soil when the pH is slightly acid. If you're unsure about your garden soil's pH, you can purchase an inexpensive, easy-to-use pH test kit. Or, contact your local county extension agent, who can advise you about soil testing. The test will tell you how much lime (to neutralize an acid soil) or sulfur (to correct an alkaline soil) to add. If you have to add lime or sulfur, mix it into the top six to eight inches of soil. Although you can add it anytime, the fall is best because it takes time for the lime or sulfur to work.<br>
               </div>
            </div>



            <a href="#modal34" class="modal-open" >&#9676;Shell Beans</a>
            <div class="modal" id="modal34">
               <div class="modal__content34">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Shell Beans</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Shell beans are becoming increasingly popular with home gardeners, but because of the many varieties, uses and harvesting stages, they may seem confusing at first. It's really quite simple, though, to get them straight.<br>

<h1 style=font-size:4vw>Harvesting Shell Beans</h1>
<h1 style=font-size:4vw>There are three harvesting stages for most shell beans:</h1>

1. You can eat many shell beans, young pods and all, just as you would snap beans.<br>

2. You can let them grow, so the beans inside mature, and shell them green when the beans are tender. You just eat the green beans and not the pods. Lima beans are the most popular example of green shell beans.<br>

3. You can let the shell bean plants mature fully until the end of the season. The pods and plants dry up, and the beans become hard. After soaking, use these shell beans in dishes such as chili and baked beans.<br>

Though there are some climbing varieties, most shell beans grow on short, bushy plants.<br>

<h1 style=font-size:4vw>Lima Beans</h1>
Fresh, homegrown lima or butter beans, as they're called in the South, are favorite shell beans among many home gardeners. Once you eat some, you'll know what makes them so popular. Harvested at peak freshness, they have a much livelier taste than the processed limas you find in the store. One nice thing about growing and freezing your own limas is that they lose very little flavor.<br>

There are large-seeded and small-seeded or "baby" lima beans. If the conditions are right, large-seeded ones such as 'Fordhook 242' give you more beans, and they're easier to shell. The baby limas grow on short, bushy plants and produce smaller beans, but they are very productive for the small space they take up, especially if you plant them in a wide row. 'Thorogreen' is a newer baby lima variety.<br>

If you don't have much space for bush limas, try a pole variety. 'King of the Garden' has been the standard pole lima for years; 'Christmas' produces large seeds and pods; and 'Large-Speckled Christmas' produces white beans with crimson splotches.<br>

<h1 style=font-size:4vw>Other Varieties</h1>
Next to limas, other favorite shell beans include 'French Horticultural', 'Red Kidney' and 'Vermont Cranberry'. These can be harvested all three ways, but are generally harvested when they're fully mature and stored dry. They're fine as baked beans, and in chowders and chilis, and they're also wonderful harvested in the "green shell" stage and served as succotash. Other popular shell beans include 'Black Turtle', 'Cannellini', 'Great Northern', 'Soldier', Yellow Eye', and 'Pinto'.<br>

<h1 style=font-size:4vw>Healthy Beans</h1>
Dried beans are a very good source of protein. Proteins are composed of 22 amino acids, eight of which are essential for us because our bodies cannot produce them. Beans contain only some of the essential eight, which is why beans are often eaten in combination with corn, rice and other vegetables.<br>
               </div>
            </div>



            <a href="#modal35" class="modal-open" >&#9676;Caring For & Harvesting Beans</a>
            <div class="modal" id="modal35">
               <div class="modal__content35">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Caring For & Harvesting Beans</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Once you've planted beans, you can relax because growing them is easy. They grow very well all by themselves, and that's one of the prime reasons they're so popular with home gardeners. To have a satisfactory bean harvest the two most important things are to stay out of the garden when it's wet to avoid spreading diseases, and to keep picking snap beans when they're young for a continuous harvest.<br>

<h1 style=font-size:4vw>Weeding Fundamentals</h1>
The third important thing is to be careful when weeding. Beans grow quickly and shade out weeds, particularly if the beans are grown in wide rows. If you've prepared the soil well, your weed worries will be few. The only time to be concerned is when beans are very young, before they've developed their leafy shade.<br>

If you're working around young bean plants with a hoe or other weeding tool, or if you're cultivating between rows, remember to stay near the surface. Weed seeds are tiny and must be very close to the surface to germinate -- not like beans, which are planted at least one inch deep. A gentle stirring of the top 1/4 inch of soil every 4 to 5 days pulls the germinating weeds out of the soil and exposes their roots to the sun, which kills them.<br>



<h1 style=font-size:4vw>Shallow is Better</h1>
Deep cultivation is bad for two reasons: It injures the roots of the beans, and it brings more weeds up near the surface of the soil where they'll germinate. A good time to cultivate is after a rain but when the plants are completely dry and the soil has dried out a little. This is when many weeds start to germinate.<br>

Once the bean leaves grow enough to shade the ground, there shouldn't be any weed problem within the row, and a good heavy mulch or regular cultivation in the pathways should take care of weeds there.<br>

<h1 style=font-size:4vw>Harvest Time</h1>
It's best to harvest snap beans when they're just about the diameter of a pencil or even a bit smaller. Simply snap them off the plant - take care, though, because hard jerking may tear the vines, reducing later harvests.<br>



<h1 style=font-size:4vw>Pick'em Young</h1>
For the best flavor and nutritional value pick snap beans when they're young and tender. You really can't overharvest snap beans. When you pick the pods, you encourage more blossoms and more pods. That's because the plant is trying to produce large, mature seeds to complete its life cycle. When it succeeds in producing seeds, the plant will stop blossoming and making pods, so keep picking.<br>

After your first picking, you can probably pick again three to five days later. Just pick, pick, pick, and in order to keep the harvest going as long as possible, don't let any seeds develop inside the pods.<br>

<h1 style=font-size:4vw>Picking Green Shell Beans</h1>
When shell beans are young, they're greenish. They begin turning color when they're ready for picking at the green shell stage. 'Horticultural' beans turn a strawberry roan color, 'Kidney' beans become red and limas mature to a creamy white color. When you pick them, pick only the pods without damaging the plants.<br>
               </div>
            </div>



            <a href="#modal36" class="modal-open" >&#9676;Picking Dried Shell Beans</a>
            <div class="modal" id="modal36">
               <div class="modal__content36">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Picking Dried Shell Beans</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    It's easy to produce dry, mature shell beans for winter storage. In warm parts of the country, the beans and pods will mature and dry very well right in the garden. In the North, it's cool and sometimes wet in fall, so the beans often require additional drying. Pull up the plants and pile them around a fence post, roots to the post (like spokes in a wheel), to dry them some more. If you're having a wet fall, hang the plants from rafters in your garage or your attic. Anywhere that's airy and relatively dry will do. You can hang the plants themselves or put them in burlap or mesh bags. It's easy to tell when the beans are dry: They're so hard, biting into one won't even make a dent.<br>

<h1 style=font-size:4vw>Threshing</h1>
Threshing by hand sounds like an old-fashioned chore, but it's simply the removal of the beans from the pods once the beans are dry. To thresh, take some of the plants by the roots - pods, beans and all - and whack them back and forth inside a clean trash can. The dry pods shatter, and the beans drop into the can. Toss the threshed plants aside and pick up the next bunch.<br>

There are other ways to thresh beans, too. A fun method is to put the plants, again pods and all, in a big burlap or cloth bag. Then get a bunch of kids to walk and jump on the bag for a few minutes. Roll the bag over, and let them jump some more. Because the beans are dry and hard, the kids won't hurt them a bit. You can also let them have a good time hitting the bag with a baseball bat. Then open the bag, vigorously shake the plants to make sure all the beans are out of the pods, and remove the plants. You'll just have beans and small bits of debris, or chaff, in the bag. Alternately, you can cut off a small corner of the bag and let the beans drop out, leaving the plants inside.<br>

Old-timers used to thresh beans with a homemade bean flail. The flail was made of two wooden sticks (one short, one long) hitched together at one end by a leather strap. They gripped the long stick and whirled the short one against a pile of dried bean plants laid out on a sheet of canvas on the floor of a barn. It was important to hold onto the long handle and use the shorter one to flail. The short stick couldn't whirl back and rap one's knuckles. After flailing awhile, you lifted the plants with a hay fork, shook them and then tossed them aside for the compost heap, leaving behind a pile of beans and chaff.<br>

<h1 style=font-size:4vw>Winnowing</h1>
Once you've threshed the beans, you need to separate out the chaff, and that's called winnowing.<br>

On a windy day, take a basket of beans - chaff and all - and, holding it up high, pour the beans slowly into an empty basket on the ground. Repeat this a few times. The wind will blow all the chaff away as the beans fall. (It's a good idea to put a sheet under the basket on the ground to catch any beans that miss or bounce out.)<br>

If you have a friend to help you winnow, spread the beans and chaff on a spare window screen outside on a windy day. When the two of you lightly jiggle and shake the frame, the chaff will blow away, leaving only the beans.<br>

<h1 style=font-size:4vw>Sorting</h1>
The final step before storing shell beans is sorting. It's important to remove the discolored, immature and misshapen beans from the good ones, because the bad ones could affect the taste.<br>

An easy way to sort beans is to spread a white sheet over the kitchen table and pour the beans onto the sheet. The sheet makes it easy to roll the beans around, allowing you to check them carefully. Using this technique it's especially easy to spot bad white beans. Sorting is a chore, but if you enlist a friend to help, it can also be a time for a chat.<br>

Dry beans will keep well in tightly capped, airtight containers, stored in a cool, dry, dark spot.<br>

<br>
               </div>
            </div>



            <a class="titlu">Onions </a>



            <a href="#modal37" class="modal-open" >&#9676;How Onions Grow</a>
            <div class="modal" id="modal37">
               <div class="modal__content37">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>How Onions Grow</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    There are more than 300 widely scattered species of onions in the world, and the bulb onion we grow is just one of them. The onion is a biennial plant, which means that it grows one year and produces its seeds the second. Between these two seasons onions have a dormant phase, which helps us gardeners.<br>

<h1 style=font-size:4vw>Onion's Growth Cycle</h1>
The first-year onion plants begin their growth by putting out green top leaves during the cool weather. They store a lot of energy in those leaves. When the weather gets warmer and the days longer, the plants stop putting out new top leaves. Instead, they take the energy from the leaves and store it in the expanding bottom bulbs. Eventually the leaves fall over and shrivel up and the plants appear dormant. Inside the bulbs, however, the plants are storing the energy to put out flowering seed stalks when they start growing again. That's the goal of any plant - to produce the seed to keep its species going.<br>

Onion bulbs are best for eating, cooking and storing before they've started to put their energy into making seed. That's why gardeners harvest onions after just one season and pick off any seed pods as soon as they appear.<br>
               </div>
            </div>



            <a href="#modal38" class="modal-open" >&#9676;Planting Onions</a>
            <div class="modal" id="modal38">
               <div class="modal__content38">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Onions</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Plant your sets early in the spring. Onions do best if the temperature is cool when they start to grow, and warm as they mature. Northern springs are certainly cool -- and often frosty! But as the saying goes, "You can't kill an onion -- even with a hammer!"<br>

Frost just won't harm sets. As soon as the ground can be worked in the spring, put the sets in. In the North that's usually in late March and early April. Gardeners in the mild winter areas of the Deep South can plant their sets in the fall and get a plentiful supply of fresh onions throughout the winter months.<br>

<h1 style=font-size:4vw>Why Onions Form Bulbs</h1>
Onion sets you plant in early spring will put on a lot of green top growth before they make bulbs. You may ask, "Why don't the bulbs start forming right away?" The answer is that before the plants can make bulbs, they first have to store energy in the top green leaves. Then they must wait for nature's signal to put this energy into bulb making.<br>

The plants usually get the message when the day length and the temperature are right. The onions don't care how old they are or when they were put in the ground; when conditions are right, they simply stop making new leaves and start using the energy they've stored to make bulbs. The size of the onion bulb is determined by how much energy there is in the top green leaves before the light conditions signal to start diverting energy to the bulbs. The more green growth before this time, the more energy there is and the bigger the bulb will be.<br>

Early planting is important because it gives your onions plenty of time to grow tops and to store a lot of energy for the bulbs. If you put your sets in late, they won't have the time for a lot of top growth. As a result, there won't be much energy available when nature whispers to the onion plant, "Make a bulb."<br>

<h1 style=font-size:4vw>The Wide-Row Method</h1>
Plant sets three to four inches away from each other in wide rows (or a little closer if you plan to harvest them when they're small). Wide rows are useful for onions and many other vegetables because you can grow much more using less space. That's especially important if you only have a small plot. Here's why:<br>

If you plant 100 onion sets three inches apart in a single row, your row will be 25 feet long. If you allow a few inches, say three, on each side of the set, the row will be six inches wide. That's a total of 12 1/2 square feet of garden space for 100 sets. But with a wide row 15 inches across, putting the 100 sets three inches apart in all directions, your row will be just 5 feet long and 6 1/4 square feet. A wide row is easier to water, weed, fertilize and harvest, too.<br>

<h1 style=font-size:4vw>In the Ground</h1>
There's no need to make trenches or special holes for the sets. Just grasp them at the top (the pointed end) with the root end down and push them into well-prepared soil the full depth of the bulb. The soil should just barely cover the top of the onion sets. If you have some tiny sets, plant them at least an inch in the ground, so they get good contact with the soil. The sets will get a better start. After you've got your sets in the ground, firm the soil around them with a hoe.<br>

Remember, if a set is planted too shallowly, it takes a long time to get started. It's important to push the bulb all the way into the soil. It gets the onion off to a good start for producing a lot of top growth. If the onion sets are a little too deep, it won't hurt. Later, when the bulbs are expanding, pull some of the dirt away from the sides to give the bulbs room to expand.<br>

You may not want to plant all your sets at once. Try keeping back a few handfuls in the refrigerator. When you start harvesting some small onions to eat raw or use in salads and other dishes, replace them with sets from the refrigerator. Just remember that onion sets planted later in the spring won't develop into large onions.<br>
               </div>
            </div>



            <a href="#modal39" class="modal-open" >&#9676;Growing Garlic</a>
            <div class="modal" id="modal39">
               <div class="modal__content39">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Garlic</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    You can buy garlic bulbs or sets from garden stores or the local grocer. 'Elephant' garlic is a good variety to look for if you want large, mild-flavored clusters. This type of garlic peels easily, too. In general, buy garlic varieties adapted to your area. If you're in the West, try 'Silverskin'; in the East, try 'New York White'.<br>

<h1 style=font-size:4vw>Planting Garlic</h1>
Plant the small, individual cloves that break off from the bulb. The outer cloves of each garlic will produce the largest bulbs. Don't break them up until you plant them, though.<br>

Like onions, garlic is great for wide-row growing. Plant the cloves the full depth of the bulb -- three or four inches apart, and firm the soil. Try a row 10 to 12 inches wide. To grow big garlic bulbs, plant the cloves in late fall. They'll mature the following summer. If you live in the North you can mulch garlic over the winter, but next season you'll have to watch out for seed stalks and pick them off right away. If you have a long growing season, you can also plant the cloves in the spring as soon as the ground can be worked. However, the resulting heads will be smaller than fall-planted garlic.<br>

If you live in the South or Southwest, plant the cloves anytime from the fall through early spring. Plant early because garlic isn't fond of hot weather. It doesn't like competition from weeds, either.<br>

<h1 style=font-size:4vw>Harvesting Garlic</h1>
Harvest garlic when the tops have only six to eight green leaves left. It should take at least 100 days for spring-planted garlic. Pull the heads up and let them dry for a few days, and then cure them in an airy place, like onions. They'll keep for quite a while at 40° F to 60° F. Braiding is an excellent way to cure and store them.<br>

If you leave garlic bulbs in the ground over the winter, let them go to seed the following season. At the top of the seed stalk the bulbs will produce 10 to 15 tiny bulbs that you can plant -- it's fun.<br>
               </div>
            </div>



            <a href="#modal40" class="modal-open" >&#9676;Harvesting Onions</a>
            <div class="modal" id="modal40">
               <div class="modal__content40">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Harvesting Onions</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    There's never a time when onions aren't ready for harvesting. They can be picked and eaten at any stage. No matter how many onions you use during the season, though, it's nice to have a crop of big onions mature at the end of summer to store for the fall and winter months.<br>

<h1 style=font-size:4vw>When to Harvest</h1>
You can always tell when onions have stopped growing. The leaves will lose their color, weaken at the top of the bulb and flop over. Each year a few new gardeners watch the leaves die and wonder, "What's wrong?" There's nothing wrong; it's Nature's plan. The leaves' job is done - they've put the last of their energy into the bulbs.<br>

Let most of your onion tops fall over by themselves - maybe 80% or 90% of them - then bend over the rest of the tops. Once they're down, leave the bulbs in the ground for another 10 days to two weeks to mature fully. It's not good to leave the onions in the ground for longer than two weeks after the tops die because they become open to organisms that can cause rot in storage, or they might even start growing again.<br>

Pull your onions up on a sunny day if you can, then let them sit in the sun for another day or so to dry (in hot climates this usually takes just a few hours). This drying kills the root system at the bottom of each bulb. The roots will be like little brittle wires when they're dry.<br>

Picking the right day to pull the onions can determine how well the onions will keep. If you harvest them after some rainy weather they'll have a lot more moisture in them and won't dry out as well.<br>

<h1 style=font-size:4vw>Curing</h1>
After drying the onions in the open for a day or so, it's time to bring them under cover for a second, longer drying or "curing" process.<br>

Some people cut the tops off the onions before curing, but that's not strictly necessary. However, if you do trim the top leaves, don't cut them any closer than one inch from the bulb. Otherwise the neck won't dry out, and the onion could rot in storage.<br>



To cure the onions, spread them out in any warm, airy place out of the sun, such as on a porch. If you find you have too many onions for your available porch space, try spreading them out near the edge of your driveway, covering them with a light cotton (not plastic) sheet to provide shade. The sheet, held in place by stones along the edge, keeps the sun from burning the bulbs but still allows a lot of air circulation. Turn the bulbs a couple of times to promote even drying.<br>

Heavy coverings like canvas or plastic trap moisture inside, so the onions will never get really dry. With the sheet system you won't have to worry about a few scattered rains. The sheets and the onions dry out rapidly together after a shower.<br>

You don't want any wet spots on the onions when you put them in storage, so cure them really well. This can take two to three weeks. After curing them, hang the onions in mesh bags in your garage and dry them some more before putting them in your root cellar. It doesn't take this long in the South, but wherever you live, the longer you cure your onions, the better they'll keep.<br>



<h1 style=font-size:4vw>Curing Basics</h1>
<h1 style=font-size:4vw>Here are the basics of curing:</h1>

Sun dry for just a short time.<br>
Cure just the onions you'll store; separate the soft, young and thick-necked bulbs and use them first.<br>
Cure thoroughly in a warm, well-ventilated area away from direct sun.<br>
Don't crowd onions during curing; give them room to breathe.<br>
Onions are ready to store when the skins rattle and the roots are dry and wiry.<br>
<br>
               </div>
            </div>


            <a class="titlu">Other Root Crops&#127840;</a>

            <a href="#modal41" class="modal-open" >&#9676;Planting Root Crops</a>
            <div class="modal" id="modal41">
               <div class="modal__content41">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Root Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    With the planning and soil preparation taken care of, you're ready to decide whether to plant in raised beds or trenches, and whether to use wide or single rows.<br>

<h1 style=font-size:4vw>Easy Raised Beds</h1>
The simplest raised beds are nothing more than well-worked garden soil raked into a mound. They're easy to make, even in the smallest garden, and they enhance vegetable growth.<br>

<h1 style=font-size:4vw>Raised beds work because they make an ideal growing environment. Here's how:</h1>

The soil in a raised bed has room on the sides to give with little or no resistance as the roots grow, even if it's hard-packed or wet. Roots develop easily, which makes them healthy, well-formed and better tasting.<br>

You can plant much earlier in the spring on raised beds because the soil warms up and dries out in the bed before it does in the rest of the garden. If you make some raised beds in the fall, you can plant on them very early the next spring. This way, you may be harvesting baby beets and carrots almost before your neighbors have planted a single seed.<br>

If your garden stays waterlogged for a long time after each rain, raised beds solve that problem. On level beds, standing water cuts off the oxygen supply to the roots, and the weight of the water packs the soil so tightly it stifles root growth. On raised beds, water runs off and into the walkways in between. The soil in the bed dries out quicker, and the water seeps gradually back into the soil from the sides.<br>

The added height makes the soil deep and loose, so you can grow longer carrots and parsnips than is possible on a level bed. In making raised beds, you place some of the valuable topsoil from the walkways onto them. This increases the total amount of topsoil on the seedbed.<br>

Wide-row growing makes sense on raised beds to make the most efficient use of all that growing space. If you're going to do the work making them, you might as well make it worthwhile by getting as much food from them as you can.<br>

Raised beds are convenient and attractive. Your crops are 10 to 12 inches closer to your hands, saving you some bending and kneeling. It's easier to keep children and pets from walking on the garden soil and packing it down or stepping on plants, because they can easily tell the walkways from the seedbeds.<br>

Last, but not least, raised beds give your whole garden a neat, well-tended look that is very pleasing to the eye.<br>

Raised beds are as easy as one-two-three! Once you have the soil well-tilled or spaded to a depth of six to eight inches, you can probably make a raised bed in less time than it takes to read this page. Here's how:<br>

Determine the width and length of the bed and the walkways, using stakes for guidelines. The dimensions will depend on whether you plant in wide or narrow rows.<br>

Use a hoe to pull the loosely tilled soil from the walkways up onto the bed until it's four to eight inches higher than the walkway.<br>

Rake the top of the bed smooth, leveling the surface as you go. You're all set to plant.<br>

You fertilize, plant, thin and harvest in the same ways on raised beds as on level ground. You can add fertilizer to the whole plot before you make the beds -- the fertilized soil will end up on the beds anyway. You can also mulch between the beds to prevent weeds and keep the soil moist.<br>

There's no need to brace the sides of beds six to 10 inches high unless you have the materials handy. For taller beds, railroad ties or planks give a neater appearance.<br>

Raised beds work in almost every kind of soil, in just about any part of the country and with all of your garden vegetables. They dry out faster than normal beds, however, so raised beds aren't recommended for very dry areas or sandy soils.<br>

You don't have to turn your whole garden into raised beds, but try growing a few root crops on some this year and you'll be convinced -- raised beds make sense!<br>
               

               </div>
            </div>
            <a href="#modal42" class="modal-open" >&#9676;Soil Preparation for Root Crops</a>
            <div class="modal" id="modal42">
               <div class="modal__content42">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Soil Preparation for Root Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    This part of gardening is the key to healthy root crops - you need to prepare a foundation for your plants just as you would for a house. If your foundation is weak, your house falls down. Your plants can fail, too, but you won't have to worry if you get your soil into good shape before you plant. Here's the formula for success:<br>

<h1 style=font-size:4vw>First . . . pH</h1>
You should check the pH of your garden soil at least every couple of years. The most accurate reading is taken in the fall. pH is the measure of soil acidity or alkalinity, with 7 indicating neutral on a scale from 1.0 (most acid) to 14.0 (most alkaline). Root crops and most vegetables prefer slightly acid soil, with a pH of 6.0 to 6.8.<br>

To test your soil pH, you can buy an inexpensive testing kit at a garden center, or send a soil sample to your County Extension office if it offers that service. The test may indicate that you need to add lime to raise your pH or sulfur to lower it. Just follow the recommendations accompanying the test results.<br>



<h1 style=font-size:4vw>The Wonders of Organic Matter</h1>
Root crops are harvested for what grows down, not up, so they really need the best possible growing quarters - preferably soil that is loose, rich and loamy.<br>

To achieve this ideal soil condition, work into the soil plenty of organic matter such as leaves, compost, grass clippings, garden residues or easy-to-grow cover crops like buckwheat, cowpeas or annual ryegrass.<br>

Most of us have less than perfect soil, ranging from light, sandy soil that drains too quickly all the way to heavy clay soils that take forever to drain and warm up in the spring. Whether you work on a garden-wide basis or just improve the spot where your root crops will be, here's how adding organic matter to the soil will help:<br>

Organic matter feeds the soil life that will in turn break it down into nutrient-rich humus. In sandy soil that doesn't hold moisture, organic matter will make the soil act like a sponge, holding moisture to nourish the expanding taproots. On the other hand, with a heavy soil that doesn't drain well, the particles of organic matter wedge themselves between the tight soil particles so that air and water can circulate better.<br>

A word of caution about adding manure to your soil: try to get dehydrated or well-composted manure, because even aged manure contains some weed seeds. By spreading it over your garden, you may be planting extra weeds, and that just doesn't make sense! The heat process of dehydrating or thorough composting kills most of the weed seeds. If you can't get well-aged manure, use what you have, but stay on the lookout for weeds.<br>



<h1 style=font-size:4vw>Fertilizer</h1>
Root crops taste better if they grow at a steady pace, and they need certain nutrients for this smooth growth. These nutrients are available in commercial fertilizers, which you can broadcast over the planting area and mix into the top two to three inches of soil.<br>

The best time to add fertilizer is on planting day. If you wait more than a few days between fertilizing and planting, some fertilizer is bound to leach away or lose its potency.<br>

Apply two to three pounds of a balanced fertilizer such as 5-10-10 for each 100 square feet. The numbers 5-10-10 or 10-10-10 refer to the percentages by weight of nitrogen (N), phosphorus (P) and potassium (K) in the bag of fertilizer, and they're always listed in the same order: N-P-K.<br>

These three major plant nutrients are essential for proper plant growth. Nitrogen aids in leaf and stem production, phosphorus promotes strong roots and potassium also helps in root development by conditioning the entire plant.<br>

Seeds are sensitive, and they can get burned by the nitrogen in any fertilizer that touches them. By mixing the fertilizer thoroughly into the soil, you can prevent that kind of accident.<br>

The easiest way to avoid fertilizing mistakes is to always mix the fertilizer completely into the soil, and with root crops, to go easy rather than overdo it. Don't be tempted to add that extra handful of fertilizer. You may end up with no carrots at all - just lots of bushy tops!<br>

You can aid root growth, however, by adding a little extra phosphorus in the form of bonemeal or superphosphate (0-20-0). Sprinkle it directly onto the rows just before planting the seeds, raking the bonemeal into the top inch of soil so it can be used by the young seedlings when they come up. A handful is about right for every four to six square feet.<br>

Phosphorus won't burn the seeds, but the plants will only use as much as they need. So don't overdo it because excess will just go to waste.<br>

You can also work a light coating of wood ashes into your soil before planting to ward off root maggots. Wood ashes can raise the soil pH because they are very alkaline, so don't overdo it. As with lime, the best time to add ashes is in the fall, but they may be added in the spring - they just won't have as much time to work. The right amount is four to five pounds per 100 square feet, mixed into the top two to three inches of soil.<br>



               </div>
            </div>
            <a href="#modal43" class="modal-open" >&#9676;Growing Root Crops</a>
            <div class="modal" id="modal43">
               <div class="modal__content43">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Root Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Three essentials to a healthy crop of roots is thining, weeding, and watering.<br>

<h1 style=font-size:4vw>The First Thinning</h1>
Thinning is a must with root crops. Crowded conditions cause them to become stunted or twisted around each other, and that's not good. You have to thin if you want roots that are big enough to eat. Starting when the seedlings are approximately 1/4 to 1/2 inch tall, you can thin by hand or use the simple but effective iron-rake method.<br>

Thinning with a rake is a snap. Just pull an iron garden rake once across the row with its teeth going into the soil about 1/4 inch. The teeth are spaced at intervals to catch just enough seedlings, pulling them from the row. Don't look down as you're doing this -- it's a horrible sight. You may think you've destroyed the whole row of plants, but don't fret. The remaining ones will perk up in a day or so. You can thin a single row this way, too.<br>

Raking also cultivates the soil, stirring up and killing "weedlings." Most young weeds haven't had time to develop a deep taproot, so this initial thinning will dislodge them before they come up, exposing their shallow roots and killing them. Some of the worst garden weeds (pigweed, lamb's-quarter and many others) have very strong taproots, and the idea is to catch these weeds before they put down deep roots.<br>

By thinning with a rake, you also break any crust on the surface, aerating the soil at the same time.<br>



You can thin by hand if the rake technique seems a little too drastic. Simply pull up enough plants that the remaining ones will stand one to two inches apart. You may not trust the rake method at first, but try it on at least part of a row. With the rake you can thin (and weed) all your root crops in just a minute or two, whereas thinning by hand seems to take forever.<br>

The best time to thin is a few hours after a rain or a thorough watering, when the soil is damp but the plants have dried off completely. (Never weed, thin or harvest around wet plants, because you can spread disease from your hands and clothing without knowing it.) Damp soil permits seedlings to be pulled without disturbing the roots of the remaining plants, and any weeds that start to germinate after a rain will be uprooted, too. If it's very dry on the day you decide to thin, water the surface of the soil, so you don't pull up more seedlings than you intend.<br>

Because beet seeds produce clusters of seedlings, the simplest way to thin them is with an iron rake. The rake teeth will uproot just the right number of seedlings. If you thin by hand, don't try to remove any of the seedlings from within a single cluster. It's too easy to disturb the remaining ones. Instead, pull up whole clusters, leaving two to three inches between them. If you like beet greens, sow the seeds a little thicker than is usually recommended on seed packages. When the beets are a little bigger, thin them again; along with the greens, you'll also get a great harvest of marble-sized baby beets.<br>

Thinning always seems more traumatic for the gardener than it is for the plants. People don't like to pull up those helpless seedlings that have just barely made it through the soil surface. Think of it as helping your whole crop and giving you more food to eat, and it will soon be a natural part of your garden routine.<br>



<h1 style=font-size:4vw>Weeding</h1>
Most root crops grow very slowly the first few weeks, and they can't compete with weeds. But there are several time-saving ways to stay ahead in the weeding game.<br>

Try this trick in the early spring before you even plant a seed: Wait a week or so between the initial soil preparation and planting day. During this time, go out several times and till or stir the soil. This exposes and kills the first batches of tiny "weedlings" lurking near the surface that may try to overrun your young seedlings.<br>

Once your plants are up, you should stir up the soil within the rows every four or five days until the seedlings are well established. You can save a lot of bending over by using special hoes for weeding. Many have a strong, narrow blade with a curved gooseneck to let you pull weeds from even tight spots in the row without damaging the stems or roots of vegetables.<br>

Once the plants get too tall to use a weeding tool, buckle down and hand pull every weed as soon as you see it. Keep in mind that any weed that grows in your garden is a robber, stealing sun, water and food from your crops, and in the end, stealing food from you.<br>

To keep down weeds between the rows, stir the soil surface there, too. Or, you can put down a two- to three-inch layer of mulch (shredded leaves, straw, lawn clippings or even newspapers) between the rows to do the work for you. Mulch has the added advantage of keeping the soil moist and at an even temperature. Your root crops will really appreciate this.<br>

Naturally, the more weed prevention you can accomplish early, the easier it will be later on. And by planting in wide rows, you'll have very little hand weeding to do. But you're bound to get some weeds, so go out to your garden daily and keep them pulled!<br>



<h1 style=font-size:4vw>The Second Thinning and the First Harvest</h1>
Thin again by hand several weeks after the first thinning to give the remaining plants space to reach their mature size. (Enjoy the thinnings of these sweet, tender "baby" carrots and beets.) This is also when you would harvest the radishes planted as companion plants. In heavy soil, leave the White Icicle radishes until they're quite large, then pull them to create that beneficial void in the soil. The beets, carrots, parsnips or turnips left in the row will push the soil around them into the gaps as they grow.<br>

The third time you go out to thin, you'll be harvesting for real. See how you can kill a few birds with one stone, as each chore combines with the others?<br>

<h1 style=font-size:4vw>Watering</h1>
Root crops need about one inch of water per week. If you can supply this water evenly, with no long dry spells to inhibit the growth of the roots and greens, you'll encourage a healthy crop. The exception to the one inch per week rule of thumb is the light sprinklings you should provide after sowing the seeds and until the seedlings emerge. Once the seedlings are up, return to the following watering habits:<br>

Water when your garden needs it, not just by a calendar schedule. Don't be tempted to water your plants if the greens are drooping occasionally in the late afternoon sun -- this is normal. But, if they look wilted before eleven o'clock in the morning, they need water.<br>

Another mistake gardeners often make is to give their gardens many light waterings instead of a few thorough soakings. Once your seeds are sprouted, soak the soil when it needs it to a depth of four to six inches. By watering deeply you encourage the taproot to grow down seeking the moisture. Shallow waterings promote shallow root growth, which is exactly what you don't want, especially if you live in a drought-prone area.<br>

How much does it take to water your garden to a depth of four to six inches? If you're using a sprinkler, set a pan in the area you're watering. When the water is an inch deep in the pan, the nearby soil will be sufficiently soaked-about six inches down.<br>




               </div>
            </div>
            <a href="#modal44" class="modal-open" >&#9676;Root Crop Problems</a>
            <div class="modal" id="modal44">
               <div class="modal__content44">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Root Crop Problems</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Fortunately, root crops aren't bothered too much by insects or diseases, and the few that may strike can be prevented with a few good gardening habits.<br>

Rotate your root crops as well as all other vegetables in your garden from season to season and in your early and late plantings. This discourages insects and disease.<br>

<h1 style=font-size:4vw>Pest Control Basics</h1>
Make a daily visit to your garden, and pick off any harmful insects you see. Pull up and destroy any unhealthy or diseased plants. Or tear off the leaf or two that are infested and burn them. The rest of the plant may be fine.<br>

Keep your soil healthy and productive by working in plenty of organic matter. Healthy soil means healthy and disease-resistant plants.<br>

As soon as a crop is harvested, either till all the residues back into the soil or carry them off to the compost heap. By doing this, you don't furnish insects with a place to reproduce and live over the winter.<br>

<h1 style=font-size:4vw>Getting Help</h1>
If, despite all your efforts, you do run into a problem with your root crops (root maggots, leaf miners, carrot rust flies or diseased roots, to name a few), get help from your local cooperative extension service agent or a master gardener. Knowing the area, he or she will be able to diagnose the situation and give you specific advice about treatment.<br>

Your soil test alone may indicate a nutrient deficiency that might cause disease, and the extension service can be helpful in this case, too. For instance, sometimes a lack of boron in the soil will cause a problem known as internal black spot in beets. Your extension agent can give you the right prescription for adding boron to the soil (in the form of borax, a household product) to combat this.<br>

If you're plagued by root maggots, wireworms or cutworms, a light application of wood ashes worked into the soil will help to deter them.<br>

All in all, you shouldn't have much trouble keeping your root crops trouble free, if you practice the basic steps outlined here.<br>

<h1 style=font-size:4vw>Rodents and Other Root Crop Lovers</h1>
Mice, rabbits and other small animals like nothing better than fresh carrots or beets -- both tops and bottoms -- for a midnight snack. You can protect your entire garden with a fence, but just keeping the whole area around the garden mowed and weed free also helps. If you use mulch anywhere in your garden, try to have it free of weed seeds, or you may be attracting seed-loving rodents to the garden without knowing it.<br>



               </div>
            </div>
            <a href="#modal45" class="modal-open" >&#9676;Harvesting Root Crops</a>
            <div class="modal" id="modal45">
               <div class="modal__content45">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Harvesting Root Crops</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    After all your hard work, it's time to enjoy your harvest. Here's how to pick your crops.<br>

<h1 style=font-size:4vw>Time to Eat!</h1>
Start harvesting beets and turnips early for their greens, and baby carrots when they're the size of your little finger. This will give you a good start on a long harvesting period; the roots left in the row will have more room to grow; and you won't be faced with an entire row of vegetables ready to be pulled on the same day. Besides, the smaller the root, the better it tastes!<br>

For a few extra meals of beet or turnip greens, just go out and snip off the leaves you want. As long as you leave some greens on the plant, it will continue to grow more of them -- as well as growing a nice big root, too.<br>

Pull the largest roots every time you harvest. People are tempted to leave the biggest ones, so they'll grow even bigger. Don't do it! By pulling the largest roots, you're sure to have them before they're so big they're all woody and bitter. Again, this encourages the remaining plants to fill in and grow bigger, giving you what seems like an inexhaustible supply of medium-sized, savory roots.<br>

Once some root crops get bigger, you may have to wiggle them back and forth (or loosen them with a trowel, pitchfork or spade) to get them out. If a top breaks off in your hand, don't give up. Dig down into the soil and pull that root! If you water the soil before harvesting, the roots will pop out more easily.<br>

Harvest whenever you need fresh roots, picking just enough. You should be able to enjoy all your spring-planted root crops in this fresh, garden-to-table fashion.<br>

<h1 style=font-size:4vw>Where's the Biggest Carrot?</h1>
If you want to find the biggest carrot in the row just by looking at the greens, remember this: the bigger the root, the darker the greens and the thicker the stem. If some of the greens in the row look darker than the others, you can be sure the largest carrots are underneath. With beets, radishes or turnips, the greens with the thickest stems will point the way to the biggest roots.<br>
               </div>
            </div>
         <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div> 
    </div>  
</body>
</html>