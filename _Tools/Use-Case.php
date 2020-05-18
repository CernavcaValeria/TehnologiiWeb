<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Use case Tools</title>
    <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../css/usecaseTool.css">
</head>
<body>
<div class="menu">
    <ul>
    <li  class="box-3m"><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li class="box-2m"><a href="PrimitiveTools.php"><i class="ion-ios-paperplane"></i> Primitive Tools</a></li>
    <li class="box-1m"><a href="ElectricTools.php"><i class="ion-ios-paperplane"></i> Electric Tools</a></li>
<?php
if(!isset($_SESSION['user_id'])):
?>        
        <li class="box-4m"><a href="../authenAJAX/login.html"><i class="ion-checkmark-circled"></i> Try Yourself</a></li>
<?php
else: 
?> 
         <li class="box-4m">
            <a href="#"><i class="ion-checkmark-circled"></i> Try Yourself</a>
            <ul>
<!-- ________________________________________________________________________________________________________________ -->
      <? 
           $conn = new mysqli('localhost','root','','register-bd');
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);}
           $user = $_SESSION['user_id'];
           $c = "Tools";
           $d = "UseCase";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_usecase/easy/try_yorself_usecase_q1.php">Easy</a></li>
      <?php else: ?>

         <li > <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Easy</a></li>

      <?php endif; $conn->close(); ?>
<!-- _____________________________________________________________________________________________________________ -->  
<!-- _____________________________________________________________________________________________________________ --> 
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
                 $c = "Tools";
                 $d = "UseCase";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_usecase/medium/try_yorself_usecase_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Medium</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllEasy.php">Medium</a></li>
      <?php endif; ?> 
<!--  ____________________________________________________________________________________________________________-->
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
                 $c = "Tools";
                 $d = "UseCase";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_usecase/hard/try_yorself_usecase_q1.php">Hard</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Hard</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllMedium.php">Hard</a></li>
      <?php endif; ?> 
<!--  _____________________________________________________________________________________________________-->    


            </ul>
        </li>
<?php endif; ?>                
    </ul>
</div>
<br><br>


<div class="bigmain">

  <div class="main">
    <div class="box-2">
    <div class="centerInfo"><h3>Gardening Tools & Their Uses</h3></div>
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="400" src="https://www.youtube.com/embed/8bM9vWzIO-Q"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe></div>

         <p> Having the right tools means all the difference in maintaining a healthy, attractive garden. If you're a new gardener, it's easy to get overwhelmed by the variety of tools available at your local gardening supply store. All of them have their uses, but certain tools are more essential than others. If you're just starting out in the world of gardening, it's a good idea to familiarize yourself with some of the most basic tools so you have everything that you need to grow a beautiful garden.</p>

                 <div class="vl"><h1>Trowel</h1></div>
         <p>Like a spade or hoe, a gardening trowel is used for digging small holes and moving soil. It has a pointed blade that is shaped like scoop and longer than the blade on a spade. You can use a trowel to dig planting holes for vegetables, annuals, perennials and other small plants, but its scooped shape also allows you to lift the plant itself from the soil for transplanting. A trowel also works well for weeding, mixing soil and soil amendments and cultivating. When choosing a trowel, opt for a cast or forged style so it will resist bending if you encounter rocks in your soil.</p>

                 <div class="vl"><h1> Weeders</h1></div>
         <p>Manufacturers give them different names, but one that is at the top of several lists goes by the common name of "dandelion digger."That's appropriate because these little tools are perfect for prying up weeds with taproots (like dandelions!) and crabgrass. They work well because they have a long, slender business-end that looks like a cross between a notched screw driver and a two-tine fork and are made to penetrate easily into the soil and remove weed roots from deep in the ground. The fork points are narrow and sharp enough to surgically coax out wood sorrel, spurge and annual bluegrass that like to hide in ground covers.</p>

                 <div class="vl"><h1>Fork</h1></div>
         <p> A garden fork is indispensable for safely lifting out the roots of an established perennial, dividing overgrown plants or harvesting root vegetables. Stainless steel blades are the strongest.</p>

                 <div class="vl"><h1>Pruners</h1></div>
         <p> Keep overgrown shrubs and trees within bounds with a good pair of secateurs or pruners. The by-pass types are better buys than the anvil pruners because they make cleaner cuts. Look for secateurs with a swivel handle - they're easier on the wrist</p>

                 <div class="vl"><h1>Shears or scissors</h1></div>
         <p> What's a garden without bouquets of flowers? Use chichi shears or scissors or pick up a dozen at the dollar store - all work just as well for cutting the stems of perennials or removing dead flowerheads. </p>
     </div>
    </div>


  <div class="main">
    <div class="box-2">
    <div class="centerInfo"><h3>Prune dormant roses to protect them in winter and improve flowering in spring</h3></div>
         <p> Pruning roses is intimidating to many gardeners, but actually very good for the plants. Becoming an accomplished rose pruner takes time and practice, but keep in mind that it is very hard to kill a rose with bad pruning. While there is a great deal of disagreement among rose experts regarding how and when to prune roses, it is generally agreed that most mistakes will grow out very quickly and it is better to make a good effort at pruning roses, even if you make a few mistakes.</p>
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/PPHzVOCvhVI"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>  


         <div class="vl"><h1>Why Prune Roses?</h1></div>
         <ul>
          <li>Encourage new growth and bloom</li>
          <li>Remove dead wood: this will also reduce disease from pests</li>
          <li>Improve air circulation</li>
          <li>Shape the plan</li>
         </ul>

         <div class="vl"><h1> Easy steps</h1></div>
         <p>Rose Pruning Basics. Use clean, sharp tools. Look at the overall shape and health of the plant, but begin pruning from the base of the plant.<br> Prune to open the center of the plant to light and air circulation. Make your cuts at a 45-degree angle, about 1/4 inch above a bud that is facing toward the outside of the plant</p>
     </div>
    </div>

  <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/lg7N9meQDUI"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                 <div class="vl"><h1>Hori</h1></div>
         <p>First the Hori which is a bit like a knife but with a scalloped blade.<br> 
            The Hori Hori is possibly the most versatile gardening hand tools and one of tools we use most in our home garden.<br>
            With its sharpened sides and point, and serration on one side it looks like a knife, and can be used as one for cutting anything you would use a knife for in the garden, but it is much more than just a knife . <br>
            The scalloped blade of the Hori-Hori makes it incredibly strong allowing you to also use it as a digging tool. It also has both inch and cm measurements engraved on the blade allowing you to use it to measure plant spacing's, depth etc. You can use it's point to dig out, or its serrated edge to cut off larger weeds or its smooth edge to cut off small weeds.  Its sharp point and strong blade can be used to dig even the heaviest garden soil. The Nisaku Hori Hori is made from high quality stainless steel for low maintenance and easy cleani</p>

                 <div class="vl"><h1>Delta Hoe</h1></div>
         <p>Second is the Delta Hoe, named because of its triangle shaped head.<br>
            The Delta Hoe is a very versatile tool. Its sharp point can be used to dig even the heaviest garden soil. Use the tip to open up a furrow to plant seeds then turn it on its side to fill it in again. <br>
            The sharp point is excellent for chipping out larger weeds and the sharp edges are excellent for cutting off small weeds.  The Nisaku Delta Hoe is made from high quality stainless steel for low maintenance and easy cleaning.</p>

                 <div class="vl"><h1>Nejiri Hoe</h1></div>
         <p> Third is the Nejiri Hoe, this hoe is used like a razor blade for weeds, you use it to shave off young weeds just below the soil surface. <br>
         The Nejiri Hoe (or Nejiri Gama) is a very efficient tool for removing small weeds. its blade is very sharp and cuts through small weeds with little effort. Its sharpness and lightness make it a very low effort tool, which is great if using for long periods of time or for those with less physical strength.<br>
         Use it like a razor for the soil, shaving the weeds at or just below the soil surface. Use the tip to open up furrows to plant seeds then turn it on its side to fill it in again. The Nisaku Nejiri Hoe is made from high quality stainless steel for low maintenance and easy cleaning.</p>

                 <div class="vl"><h1>Toothed Sickle</h1></div>
         <p> And fourth, the Toothed Sickle which can be used to cut large weeds and grass or to harvest vegetable such as lettuce, broccoli, cabbage etc. Its sharp, toothed blade cuts through quite tough or woody plants and the serration allows you to use a sawing action for those really resistant plants. The Nisaku Toothed Sickle is made from high quality stainless steel for low maintenance and easy cleaning.</p>
     </div>
    </div>


  <div class="main">
    <div class="box-2">
    <div class="centerInfo"><h3>Here is what you'll need!</h3></div>
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/L73KNiaPg80"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>


         <div class="vl"><h1>How To Remove Rust From Garden Tools</h1></div>
         <ul>
          <li>SUPPLIES</li>
          <li>Garden tools</li>
          <li>Spray bottle</li>
          <li>Vinegar</li>
          <li>Water</li>
          <li>Baking soda</li>
          <li>Paper towels</li>
         </ul>

         <div class="vl"><h1>Instructions</h1></div>
         <p>Fill an empty sprayer with vinegar.<br>
             Spray each tool with the vinegar, then wrap it with a sheet of paper towel.<br>
             Spray the paper towel with more vinegar so it penetrates through to the rusty tools.<br>
             Set aside for 2 hours.<br>
                    With a toothbrush or any cleaning brush brush off the rusty bits. If the rust is stubborn spray with vinegar again and let it sit longer.<br>
                    Rinse the rusty residue off and then apply baking soda and water to the tools and give it a nice wash to neutralize.<br>
                    Wipe each tool with a coat of mineral oil for extra protection from the elements.</p>
     </div>
    </div>


  <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/3bTKVRGeZII"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                 <div class="vl"><h1>How to Rake in the Soil</h1></div>
         <p>Although farmers and professional landscapers use mechanically powered tools to prepare the soil, home gardeners with smaller plots of land can easily do the same with simple garden rake. Unlike a leaf rake, a garden rake is made of rigid metal with a straight bow set with 3-inch teeth. Raking the soil is usually done before planting the seeds. Rakes are also used to press the seeds into the soil after they have been sown.<br></p>
         <ul>
          <li>Slip on your gardening gloves to protect your hands. Use a spade to turn over the top 12 inches of soil. Do this about three weeks before you want to sow your seeds. This buries the weeds and allows them to die and decompose.</li>
          <li>Break up large chunks of earth with the rake. Smash them with the flat side of the rake. Do this right after you turn the earth over.</li>
          <li>Wait for three weeks. Remove any large rocks, sticks and other debris that may interfere with seed germination and growth.</li>
          <li>Rake the soil so that the surface of the plot is smooth and level. Start in one corner and work your way across the plot. This loosens the earth, which makes it easier for seeds to germinate and grow.</li>
          <li>Sow the seeds according to the directions on the package. Most grass, wildflower and annual seeds only require being sown at a depth of about 1/4 inch. Scatter the seeds on top of the soil, and then gently run the rake across the top of the seeds. Then, use the back of the spade to carefully press the seeds into the earth.</li>
         </ul>
                 <div class="vl"><h1>Things You Will Need</h1></div>
         <p>Gardening gloves & Spade & Garden rake with metal tines</p>
     </div>
    </div>

  <div class="main">
    <div class="box-2">
    <div class="centerInfo"><h3>Different Types Of Watering Cans - Choosing Watering Cans For Gardens</h3></div>
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/PgPSuUcUJa8"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> 

         <p>Just as many of us have a favorite pair of pants or a special way to fold towels, there are also preferred watering cans among the knowledgeable gardening set. Each option is as individual as those pants and provides a slightly different watering experience.<br>
         Different types of watering cans can fulfill specific roles in the home and the landscape. Read on for an informative look at watering cans and their many varieties.</p>

                 <div class="vl"><h1>Different Types of Watering cans</h1></div>
         <p>Nozzles and necks. Who knew these were important items in the watering world? <br>
            The many different types of watering cans encompass unique body styles but also different diameter and length necks and a host of handy nozzle designs. Each is fashioned for different plant needs. The style you choose depends upon the size of the plants as well as the method needed to deliver water.<br>
            Some tips on when to use a watering can with certain design features can help you decide which device to purchase.</p>

                 <div class="vl"><h1> Metal or plastic</h1></div>
         <p>The two most basic kinds of watering cans are either metal or plastic. <br>
            Plastic tends to be a bit less expensive and is generally not that durable but these watering cans are lightweight and easy to tote. Metal cans last longer, provided they are galvanized and resist rust. These may be a bit heavier to haul around but their durability means you can have your trusty watering can around for the life of your garden. There is no right or wrong choice but one thing to consider is off gassing. Plastic cans can contaminate your water, which is something to regard if you are watering edibles. Otherwise, either of these watering cans for gardens should do an equally good job.</p>

                 <div class="vl"><h1>Size and handle position</h1></div>
         <p> Size is another issue. If you are using watering cans for light duty work, like gently watering under the leaves of an African Violet, you need a little guy. For bigger jobs in the greenhouse or garden, choose one that you can comfortably lift but that keeps you from having to make frequent trips to the hose bib.It may seem odd to worry about the length and size of a watering neck but consider the different types of plants you will be irrigating. In the case of the African Violets, for example, a longer, slender neck is best to help you get under the leaves.<br>
         Longer necks are also useful for hanging baskets and other hard to reach locations. Shorter necks are sufficient for most overhead watering and offer stability without much dribbling. The position of the handle may be something to consider too. Hold the can and see if it is comfortable to pour.<br>
         Different types of watering cans will handle in distinctive ways. A double handled model may be useful for older gardeners or children who can stabilize the can effortlessly with both hands. It is important to know what type of plants and situations you will be using the can so you can determine which specifications meet your needs.</p>
     </div>
    </div>

 <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/Ry9cW5OALjI"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                 <div class="vl"><h1>Using your garden fork</h1></div>
         <p> The fork is a favourite tool among gardeners, especially useful for the following tasks:<br>
-to avoid slicing plant roots when transplanting and, to avoid damaging crops when lifting e.g. potatoes;<br>
-to lift branching underground weed stems e.g. couch grass, it breaks soil away from clumps to extract the weed in one piece,<br>
-when opening the earth without moving the weighty bulk of soil. Does less damage to worms and soil than a spade,<br>
-when opening the soil surface to lightly cultivate and work in organic fertilizer, compost or manure around plants or shrubs,<br>
-to move light fibrous materials like straw, weed heaps, manure etc...<br>
-divide certain clumps of perennials by slipping in 2 forks back to back, and pulling plant apart.<br>
-Slip the Digging Fork underneath shallow rooted clumps of weed. The picture shows the fork being stabbed into the ground at 45 degrees. (don't prong your leg)<br>
-It involves bending the back. But then use the gardening tool to support your stance and always lever the weeds up don't lift from your back.<br></p>

                 <div class="vl"><h1> LONG HANDLED GARDEN CLAW</h1></div>
         <p>A gardening tool innovation and alternative cultivator. Good for small gardens because on large areas it involves intense repetitive action. Here's what it does and how it works.<br>
-you stand in upright position to use it - no bending<br>
-the chisel ended curved tines dig into the soil and loosen it up<br>
-loosens up weeds without chopping roots of cultivated plants<br>
-easy to reach the bottom of a trench so better than a fork for double digging<br>
-used to work in top dressings or fertilizer<br>
-you get lots of leverage through the handle bars<br></p>

                 <div class="vl"><h1>How to use it</h1></div>
         <p>-on better quality models the height is adjustable<br>
-stand easy astride the cultivator<br>
-press down while pushing and pulling the handles back and forward<br>
-involves intense repetitive action so it's best used on smaller areas, or take a break.<br>
-a slight bending of the knees will absorb the tension to ensure you don't twist your back.</p>
     </div>
    </div>


 <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/hDeZs58QK9M"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                 <div class="vl"><h1>When to Use Hand-Held Hedge Trimmers</h1></div>
         <p> It's tough to talk about this tool as a "pruning" tool because hedge shears are not used for the type of work that we typically think of as pruning. In the right very few circumstances, hedge shears are a must-have or a convenience. But when used in the wrong situations and the wrong hands, the things are a tool of evil, especially the motorized gas- and electric-powered varieties.</p>

                 <div class="vl"><h1>What Are Hedge Shears?</h1></div>
         <p>Hand-operated hedge shears, more than any other gardening tool, look like giant scissors. They have long, straight blades typically somewhat under a foot long, sometimes wavy-edged to hold stems in place as they cut (but which are harder to sharpen).<br>
         With such long blades, hedge shears are designed to cut a much larger area with each stroke than any other pruning tool (unless you consider a machete a pruning tool). For this reason, and since they are straight, they create long, straight edges on your plant as they cut. As you can imagine, this is not the natural shape of any plant, and not right for most plant care in your garden.<br>
         The fact is, you can probably get by without owning hedge shears. You only need them if you have a formal hedge to maintain, and they'll be very handy for fall and spring cutting-back if you have a lot of perennials and ornamental grasses. For other jobs where you change the shape of the plant by managing its woody framework, pruners, loppers, and saws are the right tools.</p>

                 <div class="vl"><h1>General Use of Shears</h1></div>
         <p>The two most basic kinds of watering cans are either metal or plastic. <br>
            Plastic tends to be a bit less expensive and is generally not that durable but these watering cans are lightweight and easy to tote. Metal cans last longer, provided they are galvanized and resist rust. These may be a bit heavier to haul around but their durability means you can have your trusty watering can around for the life of your garden. There is no right or wrong choice but one thing to consider is off gassing. Plastic cans can contaminate your water, which is something to regard if you are watering edibles. Otherwise, either of these watering cans for gardens should do an equally good job.</p>
                             <div class="vl"><h1>Size and handle position</h1></div>
         <p>Being large scissors, shears are used just as you naturally want to: snip away! How accurate you need to be will depend on which of the above tasks you are doing. One major difference between shears and other pruning tools is that you do not need to aim to cut above the nodes of the plant, but rather you snip to create lines: near the ground for perennial cutback, and in special patterns in hedging and topiary.</p>
     </div>
    </div>

 <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/QAgQiSyjnz8"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                 <div class="vl"><h1>Garden Trowel Information</h1></div>
         <p> If someone were to ask me what gardening tools I could not live without, my answer would be a trowel, gloves and pruners. While I do have one pair of heavy duty, expensive pruners that I've had for a few years, at the beginning of each landscape season I buy several inexpensive pruners because I know I have a habit of misplacing them. It's shameful, really, how many pairs of gloves and pruners I have gone through over the years.<br>
         My garden trowel is a very different story, though. I have had the same favorite garden trowel for about ten years now. It is one of my most prized possessions. So what is a trowel and why is it an essential tool for every gardener to own? Continue reading for garden trowel information.</p>

                 <div class="vl"><h1>Using Gardening Trowels</h1></div>
         <p>In masonry, a trowel is the flat tool that is used to apply and spread mortar or plaster. This type of trowel is different than a garden trowel, though. A garden trowel is a small handheld shovel or spade. Garden trowels usually have wooden, plastic or rubber coated metal handles. <br>
         The actual shovel part of a garden trowel can be made of various types of metal or even plastic, sometimes the metal blades are coated or painted. These hand held shovels are available in different widths, generally one to five inches (2.5 to 12.7 cm.) across. Which width you choose is a matter of personal preference, though certain widths are better for specific jobs. Garden trowels can also have flat, curved or even scoop-shaped blades. My beloved garden trowel is a pretty basic one with a stainless steel blade and wooden handle. If memory serves me right, I paid $6.99 (USD) for it about ten years ago. Through the years, I have purchased other garden trowels, usually because they look neat. All these other trowels have ended up broken and in the trash.<br>
         Garden trowels that are not made of stainless steel have a nasty habit of bending, breaking or rusting.<br>
         Over time, painted or coated blades chip and begin to rust. I've also had many problems with the rubber on the handles of trowels ripping off or disintegrating. I will admit, however, that even wooden garden trowel handles can crack or swell if exposed to the elements for too long. Proper cleaning and storage of any garden trowel will increase its life. Trowel blades should be cleaned, sanitized and wiped dry after each use. Like pruners, infected garden trowels can spread diseases from plant to plant. Garden trowels should never be left outdoors at any time of the year, and they should be stored in a garage or shed through winter. The best way to store garden trowels, when not in use, is by hanging them up. Most garden trowels have a hole at the end of the handle for hanging.</p>

                 <div class="vl"><h1>When and How to Use a Trowel in the Garden</h1></div>
         <p>When to use a gardening trowel depends on the job at hand. Garden trowels are used for digging small holes, such for planting bulbs, annuals or perennials. It would take a lot of time and effort to dig a hole for a tree or shrub with a garden trowel. Garden trowels are also used to dig up weeds. In small, tight areas, a narrow width blade will work better to dig out weeds or to install small plants or bulbs. Flat trowel blades work better on weeds with ling taproots. Wider trowel blades and scoop-shaped blades work best for digging up small plants, digging holes for perennials, or scooping up soil when potting plants.</p>
     </div>
    </div>


 <div class="main">
    <div class="box-2">
      <div class="centerInfo"><iframe class="iframe"  width="1000" height="500" src="https://www.youtube.com/embed/PJKTvNpeEck"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> 

                 <div class="vl"><h1>Choosing A Wheelbarrow</h1></div>
         <p>At some point, most gardeners will find that they need a wheelbarrow to complete certain garden tasks. Wheelbarrows are used for a variety of things, such as moving rock, mulch or compost to the garden, moving trees or large shrubs from one spot to another, hauling bricks, disposing of garden debris, or even for mixing concrete or fertilizers.<br>
         Not all wheelbarrows are the same, though, so which type of wheelbarrow you should buy depends on the tasks you need it for. Continue reading to learn more about how to choose a wheelbarrow and the different types of wheelbarrows.</p>

                 <div class="vl"><h1>Using Wheelbarrows in Gardens</h1></div>
         <p>With so many varieties available, choosing a wheelbarrow that properly suits your gardening needs is important. Generally, there are two types of wheelbarrow buckets to choose from: steel or plastic. Steel wheelbarrow buckets can bear more weight, but they can rust and are heavier to deal with.<br>
         Steel wheelbarrows are used for heavy duty jobs such as moving rocks, bricks or large plants. Plastic wheelbarrow buckets are lighter and they are usually less expensive than steel, but they can crack from too much weight, extreme temperature fluctuations or improper handling. Plastic wheelbarrows are used for moving mulch, compost, garden debris and smaller plants. Plastic is also better for mixing things like concrete or fertilizers and hauling cow manure, as these things can damage steel. There are also wheelbarrows that hold different capacities or volume. In the U.S., these are usually available with a 2-square foot to 6-square foot capacity, 3-square feet being the most common. These wheelbarrows may also be labelled to carry 300-500 lbs.<br>
         Elsewhere, wheelbarrows are often sold as holding 60-120 L., with 100 L. being most common. Just because a wheelbarrow label says it can hold 500 pounds, though, does not mean you have to fill it to the brim with rock or bricks. How much weight you put in your wheelbarrow will depend on your own strength. While wheelbarrows are designed to make it easier to move and dump heavy items, a wheelbarrow full of rock or other heavy materials may be too heavy for many people to handle.</p>

                 <div class="vl"><h1>How to Choose a Wheelbarrow</h1></div>
         <p>Some other considerations when choosing a wheelbarrow are the handles and wheel(s). When you hear "wheelbarrow" you probably picture the classic wheelbarrow with two straight handles, one wheel centered in the front and two supports spaced evenly at the back.<br>
         However, newer types of wheelbarrows may have ergonomic bar handles and/or two wheels. Wheelbarrows with one wheel are easier to dump and maneuver, but they can also tip over very easily while turning or dumping, or from imbalanced loads. Wheelbarrows with two wheels are less tippy, but can be harder to turn and dump.<br>
         Wheels are also available as regular air filled wheels, like a bike or solid rubber wheels. Solid rubber wheels don't go flat or pop like air filled wheels, but they also don't have the shock absorption of air filled wheels, making them harder to use on rough terrain. The classic two handled wheelbarrow is designed for good leverage. These handles are usually plastic, metal or wood. Plastic handles can break from too much weight. Metal handles can get extremely hot from long periods in the sun. Wood handles can crack and splinter from too much weather exposure. Two handled wheelbarrows can also require a lot of upper body strength and cause shoulder, arm and back pain.<br>
         Ergonomic handles are often bar-type of handles, like a lawn mower. These bar-type handles are designed to cause less strain in the upper arms, but they can actually cause more back pain by having less leverage when dumping the load. Specialty slim-line wheelbarrows are also available for use in small, tight spaces. There are also foldable canvas wheelbarrows available for easy storage. Of course, these canvas wheelbarrows cannot hold much weight. Take time to select the best wheelbarrow for your own needs. There are pros and cons to all the different types of wheelbarrows, so base your choice on what which seems easiest for you to use. To prolong the life of your wheelbarrow, always store it in a garage or shed between uses.</p>
     </div>
    </div>
  </div>

</body>
</html>
