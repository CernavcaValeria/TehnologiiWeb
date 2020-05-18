<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HerbsGuide</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
         <link rel="stylesheet" type="text/css" href="../css/herb.css">
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="/assets/dcode.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
</head>
<body>

<div class="menu">
    <ul>
      <li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li>
      <li><a href="FruitGuide.php"><i class="ion-ios-paperplane"></i> Fruit Guide </a></li> 
      <li><a href="VegetableGuide.php"><i class="ion-ios-paperplane"></i> Vegetable </a></li>
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
           $d = "HerbGuide";
           $level='easy';

          $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
          $result = $conn->query($sql);
      if ($result->num_rows<1):
      ?>
        <li> <a href="quiz/quiz_for_herb/easy/try_yorself_herb_q1.php">Easy</a></li>
      <?php else: ?>
        <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Easy</a></li>
      <?php endif; $conn->close(); ?>
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
                 $d = "HerbGuide";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_herb/medium/try_yorself_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Medium</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllEasy.php">Medium</a></li>
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
                 $d = "HerbGuide";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_herb/hard/try_yorself_herb_q1.php">Hard</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Hard</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllMedium.php">Hard</a></li>
      <?php endif; ?> 
<!--  _____________________________________________________________________________________________________________-->

            </ul>
        </li>
<?php endif; ?>                
    </ul>
</div>

    <div class="wrapper">
        <h2 style=font-size:6vw>Herbs   Gardening  Guide &#127807;</h2>
        <p style=font-size:2vw>&#12316;Learn how to grow your favorite herbs.<br>

            Click on the stories below to find out how to grow your favorite herbs.&#12316;
        </p>
            <a class="titlu">Annual Herbs&#127807;</a>

            <a href="#modal" class="modal-open" >&#9676;  Growing Basil</a>
            <div class="modal" id="modal">
               <div class="modal__content">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Basil</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Featured in cuisines across the globe, basil is an indispensable flavoring. Plant seeds or transplants after all danger of frost has passed and soil is warm, and it will yield an abundant harvest within weeks.<br>
<h1 style=font-size:4vw>Types of Basil</h1>
The type of basil you're most likely to find in garden supply stores and mail order catalogs is bush or sweet basil, a compact plant that grows 18 to 24 inches tall. Purple basil's richly hued leaves add color and interest to an herb bed or even a flower garden. Use it like common basil, but expect it to be less sweet. Steeping leaves in white vinegar produces a lovely tint. The number of basil species and varieties are growing by the year. You can find lemon and lime basils that bring a citrus fragrance to both the garden and the kitchen, and Thai basil, which imparts a licorice flavor. You'll also find cinnamon-flavored varieties, clump-forming types with tiny leaves, and "lettuce leaf" basil, among others.<br>

<h1 style=font-size:4vw>Caring for Basil</h1>
Plant basil in fertile soil in a spot that gets direct sun for at least 6 hours per day. Pinch the tip from the center shoot of basil after it has grown for 6 weeks to force side growth and prevent early flowering. If flower stalks develop, simply snip them off.<br>

Basil needs a steady supply of moisture and warm soil temperatures to produce well, so you have to play a balancing act with mulch. In cool areas, delay mulching until the soil temperature has reached the mid-60s. Where summer really heats up and soil loses moisture quickly, you can add mulch sooner.<br>

This heat-loving herb is susceptible to even mild frost; harvest the remainder of your crop if temperatures are predicted to dip into the 30s.<br>

Basil has few pests, but occasionally generalist pests such as aphids, flea beetles, and Japanese beetles will feast upon it. Rinse off aphids with a garden hose. To prevent beetles from munching, cover the crop with fabric row cover. If slugs are a problem on new transplants, try a barrier of copper flashing.<br>

Diseases are more of an issue for basil-lovers. Fusarium wilt of basil, first identified in the early 1990s, arrived via infected seed imported from Italy. Symptoms include sudden wilting and leaf drop, accompanied by dark streaks on the stems, usually in weather above 80°F. If you notice these signs, quickly dig up the infected plant, along with all soil around the roots, and discard it. If part of your garden becomes infected, avoid spreading the disease by moving soil around on your tools or tiller, and consider growing your basil in containers. You might also try a fusarium-resistant variety, such as 'Nufar'.<br>

Basil is also susceptible to a few bacterial rots that show up on stems or leaf clusters, usually in cool, wet weather, often late in the season. Keys to control include planting in well-drained soil, spacing plants so they dry off after rain, and removing infected plants from the patch.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
Basil is at its most flavorful when fresh. The best time to harvest is just as the plant starts to set flower buds, well before flowers bloom. Basil is programmed to initiate flowering when it has six pairs of leaves on a stalk. For maximum production per plant, cut it back to two leaves per stem, and don't let it grow past four pairs. You can harvest the entire plant about every three weeks, and at the end of the season there will be 12 to 24 lateral branches.<br>

The later in the day you harvest basil, the longer it stays fresh. In a perforated bag kept at around 60°F, it will keep for 10 to 14 days. In contrast, refrigerated basil lasts two or three days. You can also store stems in a vase in your kitchen, close at hand for cooking. As for flower bouquets, change water in the vase every few days.<br>

To best maintain the flavor of dried basil, store it in the freezer. To quick-freeze basil, dry whole sprigs and pack them in plastic bags with the air pressed out. To dry basil, pinch leaves off the stem and spread them out in a shady, well-ventilated area. Check in 3 or 4 days, and if they don't crumble easily between your fingers, finish drying in the oven; otherwise the leaves may turn brown or black in storage. Use the lowest heat possible with the door slightly open, turn leaves for even drying, and check them frequently.

Another method is to make pesto (or even basil processed with olive oil), pack it into containers or ice cube trays, and freeze it. Once cubes are frozen, you can pop them out of trays and into plastic bags for easy storage.<br>
               </div>
            </div>





            <a href="#modal1" class="modal-open1" >&#9676;  Growing Dill</a>
 
            <div class="modal1" id="modal1">
               <div class="modal__content1">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Dill</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Pickles, salad dressing, seafood, potatoes, and cucumbers: these are just a few of dill's culinary dance partners, making it a favorite in the herb garden. It's flavor is never better than when you pick it fresh from your garden. Another good reason to grow this graceful plant: The umbel of delicate yellow-green flowers attracts beneficial insects, from pest-eating wasps to colorful butterflies.
<h1 style=font-size:4vw>Planting and Care</h1>
Common dill grows to a height of about 3 feet; bouquet dill is a smaller variety that generally produces fewer blossoms and seeds. Dill produces a strong taproot like its cousin the carrot, and so does poorly when transplanted. Instead sow seed right in the garden. Plants thrive in rich, loose soil and full sun location. If you hope to harvest seed at pickling time, plant 1 to 2 weeks before the last spring frost date. In plots that receive less than 6 hours of direct sun per day, grow stocky varieties, such as 'Delikat' or 'Fernleaf'.

Sow Seed 1/4 inch deep in rows 18 to 24 inches apart or broadcast over a bed 2 feet square and gently rake the seeds into the soil. Plants should emerge in 10 to 14 days; let them grow for 10 to 14 more days and then thin them to 12 to 18 inches apart. Make small sowings a few weeks apart until midsummer to get a season-long supply of fresh leaves.

If your garden is in a windy spot, stake the tall plants to prevent wind damage, or grow a dwarf variety. If you let a few plants mature and drop seed, and leave the area undisturbed, seedlings will emerge the following growing season.

Dill in home gardens rarely has pest or disease problems, but black swallowtail butterfly larvae depend on dill as a food source. If they show up in your garden, you can concentrate the caterpillars on a few plants, and reap a double bounty - dill and butterflies!

<h1 style=font-size:4vw>Harvest and Storage</h1>
You can start harvesting the fern-like leaves about 8 weeks after planting. Just pinch off the outer leaves close to the stem. They are most flavorful just when flower heads are opening.

Spread leaves on a screen in a cool, dark place to dry. If you freeze the dried leaves in plastic bags with the air pressed out, they will retain their flavor better.

To harvest seed for pickling, cut off the seedheads when they're light brown, dry them for a few days in paper bags with air holes in the sides, then shake seeds loose in the bag. To separate the seed from the chaff, spread a sheet out on the grass, set a portable fan at one edge of the sheet facing the center, and turn it to "low". Pour the collected seed in front of the fan's breeze, and it will blow away the light chaff, allowing the heavier seed to collect on the sheet below. Store dill seed as you would dried leaves.<br>
               </div>
            </div>

            <a href="#modal2" class="modal-open" >&#9676; Growing Sage</a>
 
            <div class="modal" id="modal2">
               <div class="modal__content2">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Sage</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Sage is for more than seasoning your Thanksgiving turkey. Harvest fresh leaves from your kitchen garden to flavor meat and bean dishes, or toss the blossoms into salad! You can even wire dried sprigs to a frame to create an aromatic wreath or swag.<br>
<h1 style=font-size:4vw>Choosing Sage for Your Garden</h1>
Sages encompass a large group of plants, although just a few are considered to be good culinary herbs. The most familiar of these is garden sage (Salvia officinalis), a hardy perennial characterized by its soft, gray-green foliage and spikes of light-colored spring flowers. Plants can get quite tall and floppy, but the dwarf form (Salvia officinalis var. nana) has a more compact growth habit. Its flavor equals that of the standard variety, but it is not as hardy.<br>

Some cultivars of garden sage are as at home in the perennial border as in the kitchen garden, thanks to their stunning leaf color. Three outstanding varieties are purple sage (S.o. cv. Purpurescens), golden sage (S.o. cv. Aurea), and tricolor sage (S.o. cv. Tricolor). These tend to be less hardy than regular sage.<br>

<h1 style=font-size:4vw>Growing Sage</h1>
You can start seed indoors up to eight weeks before your last frost date. If you sow seeds right in the garden, do so up to two weeks before the last frost date. Use fresh seed, as it doesn't store well. You can also start plants from root cuttings from established plants. Set plants or thin seedlings to stand 24 to 30 inches apart. Sage thrives in full sun and well-drained soil. Young plants need a steady moisture supply until they start growing vigorously.<br>

Each spring, prune out the woodiest stems and spent flower stalks. Stop harvesting early in the fall to encourage the plant to harden off for the winter. After a few years, plants become quite woody and less productive. Plan a year ahead to replace them.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
Harvest lightly during the first year to allow this perennial plant to become established. In the following couple of years, you may be able to harvest an entire plant two or three times. When harvesting, leave a few stalks in place to allow the plant to rejuvenate.<br>

If you wish to dry sage, hang stalks in a shady, well-ventilated area until the leaves crumble easily, then store in tightly lidded jars. Sage keeps its flavor better if stored in the freezer. Freeze leaves or stalks on a tray, then move the leaves into a zippered bag or container. Some cooks blend the leaves with oil, pack the ground mixture into ice cube trays to freeze, and then transfer the cubes to a container.<br>

               </div>
            </div>


            <a href="#modal3" class="modal-open" >&#9676;  Growing Parsley</a>
 
            <div class="modal" id="modal3">
               <div class="modal__content3">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Parsley</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Parsley deserves recognition for more than its role as a garnish. It's rich vitamins A and C, a good source of iron, and freshens your breath, to boot! Parsley is a key ingredient in tabouli, and compliments sauces, stuffing, fish, and poultry dishes.

Though curly leaf parsley (Petroselinum crispum crispum) is the most common type, flat-leaved parsley (P.c. neapolitanum) is preferred for cooking and chopping; it's easier to work with and has a stronger flavor that holds up better in storage.
<h1 style=font-size:4vw>Raising Parsley</h1>
Although parsley is a biennial, it's best to start new plants each year because the leaf flavor is not as good in the second season. To hasten germination of this slow-sprouting seed, pour warm water over seeds and let them stand overnight before planting. Sow seed in individual pots indoors or plant them outside in the garden. Parsley is very hardy: You can direct-sow seeds 2 to 3 weeks before the last spring frost. (If you sow seeds directly in the garden, keep the area as weed-free as possible so the tiny, slow-growing seedlings don't have to compete with a jungle when they sprout.)

Plants do well in sun or partial shade, and prefer a rich, moist soil. Thin plants to stand 6 to 10 inches apart, and provide an even supply of water all summer. In some regions, caterpillars such as cabbage looper and black swallowtail larvae may take up residence and nibble on plants.

<h1 style=font-size:4vw>Harvest and Storage</h1>
To harvest, cut entire leaves from the outer edge of the plant as you need them. At season's end, you can cut the entire plant for storage. To dry parsley, tie stems together and hang them in a shady, warm, well-ventilated area. Once thoroughly dried, crumble the parsley and store it in an airtight container. To freeze, remove leaves from stems, rinse, and pat them dry before placing in a zippered freezer bag.

To keep fresh parsley crisp and flavorful, place stalks in a glass of water and store it in the refrigerator. In cold regions, pot a few plants in the fall to place in a sunny window. Though you won't get a large yield, you will have some fresh, tangy sprigs to remind you of summer!<br>
               </div>
            </div>


            <a href="#modal4" class="modal-open" >&#9676;  Basil Varieties</a>
 
            <div class="modal" id="modal4">
               <div class="modal__content4">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Basil Varieties</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Common basil (Ocimum basilicum) includes a number of different basils most commonly used for cooking.

<h1 style=font-size:4vw>Sweet basil</h1>
Your basic basil, with large leaves and white flowers. The Genovese variety (names include 'Sweet Genovese' and 'Genovese' or 'Genova Profumitissima') is particularly nice, with a very pleasing flavor preferred for pestos. I've also found it a vigorous, luxuriant grower, slow to bolt.<br>

<h1 style=font-size:4vw>Lettuce leaf (O. b. crispum)</h1>
A short, wide plant with thick, very crinkled leaves; slow to bolt. Other varieties include 'Mammoth' and 'Napoletano'; 'Green Ruffles' is similar. The flavor is sweet, and not as strong as the other sweet basils, making it especially good for tossing into salads. The leaves can also be used to wrap fish, chicken or a rice stuffing for grilling.<br>

<h1 style=font-size:4vw>Dwarf or bush basils (O. b. minimum)</h1>
These shorter varieties ('Spicy Globe', 'Piccolo Verde', 'Fino Verde' or 'Fine Green') bear small, narrow leaves with a sweeter, less pungent smell than the large-leaf types. It sounds like a great nuisance to pick all those tiny leaves off, but actually the stems are quite soft and succulent, so that you can chop up the sprigs, stems and all. The delicate flavor tends to wash out in long cooking, so add the leaves at the end or use them raw.<br>

<h1 style=font-size:4vw>Opal basils</h1>
These O. basilicum hybrids include 'Dark Opal' (a 1962 All-America Selections winner) and 'Purple Ruffles' (also an AAS winner in 1987). The purple varieties can be quite beautiful, but they are far less vigorous growers and there has been a noticeable falloff in the purpleness of both the above varieties since their introduction, with more and more green or piebald plants. Breeders have recently begun a reselection process to produce seed stock for more purely purple plants. 'Rubin', released in 1993, is a reselection of 'Dark Opal' for a more consistent dark coloration.<br>

<h1 style=font-size:4vw>Exotic Basils</h1>
Some of these are Ocimum basilicum, some are other basil species, and some no one really knows for sure. One name can cover many quite different varieties. Some are available as seed; others only as plants.<br>

<h1 style=font-size:4vw>Lemon basil (O. b. americanum or O. b. citriodorum)</h1>
Generally has small, light green leaves and a distinctive lemony aroma. O. b. 'Mrs. Burns' is a more vigorous selection with larger leaves and a powerful lemon scent. Try it in pesto, salad dressings, sauces, fish dishes and desserts.<br>

<h1 style=font-size:4vw>Licorice (or anise) basil and cinnamon basil</h1>
Handsome, tallish varieties of Ocimum basilicum with dark foliage and flowers and distinctive spicy flavors. Cinnamon basil makes a good jelly.

Thai, East Indian, Puerto Rican and Cuban basils are among those gathered from other parts of the world, and often expressly suited to creating the flavors of their local cuisines.<br>
               </div>
            </div>





            <a class="titlu">Perennial Herbs&#127807;</a>


            <a href="#modal5" class="modal-open" >&#9676;  All About Rosemary</a>
 
            <div class="modal" id="modal5">
               <div class="modal__content5">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>All About Rosemary</h2>
                 <p class="modal__paragraph">
                    <h1 style=font-size:4vw>How to Grow Rosemary</h1>

Rosemary and its cultivars are best started from plants. When grown from seed, germination is slow with variable results. Plants can be set out in the spring when the weather has warmed in zones 1 through 9, and in spring or fall in zone 10.<br>
All rosemaries require full sun, but in the warmer climates they will accept some light shade. They thrive in a light, well-drained, average garden soil with a pH range of 5 to 8. During the growing season, pinch back growth tips two or three inches to promote bushy plants; cut back hard only in early spring to allow the new growth time to mature.<br>
Most rosemary varieties are reliably hardy to only 20°F (zone 9); however, gardeners in cold-winter areas can successfully grow rosemary indoors in a container with a fast-draining potting soil. Bring the plants indoors at least several weeks before your area's first frost date. Feed the potted rosemary regularly with fish emulsion and provide good air circulation to ward off harmful mildew.<br>
Carole Saville is a food and garden witer based in Albany, California.
Rosemary means "dew of the sea," an appropriate name for this popular garden herb, watered by the ocean mists in its native habitat along the arid coastline of the Mediterranean.<br>
Because of rosemary's long history - literary, cosmetic, culinary and medicinal - an herb garden without rosemary is unthinkable. But this versatile evergreen needn't be relegated only to the herb garden.<br>
"Rosemary forms extraordinary hedges and can be clipped into fancy topiary = even bonsai for those with the patience," says Northern California landscape designer Rosalind Creasy. "It's a gleaming focal point in the perennial garden or mixed border," she adds. Rosemary is a must in a fragrance garden, and it's the cornerstone of a drought-tolerant garden. The prostrate forms look bountiful in containers and hanging baskets, and in the mild-winter USDA Hardiness Zones 9 and 10, they create an impressive evergreen ground cover. A tender perennial in colder climates, rosemary must spend the winter indoors, where good air circulation is a must for survival.<br>
<h1 style=font-size:4vw>A Selection of Rosmaries</h1>
Rosmarinus officinalis is the classic culinary, upright rosemary with opposite, needlelike gray-green leaves that are 1/2- to 11/2-inches long with powdery white undersides. The plant bears two-lipped pale blue flowers in little clusters toward the end of the branches. This evergreen shrub grows three to five feet tall.<br>
R. officinalis 'Majorca Pink' is from the Balearic Islands in the Spanish Mediterranean. Similar in growth to (R. officinalis), it has shorter resinous leaves and lovely pink flowers. Planted next to one of the blue-flowering varieties, its amethyst-pink flowers stand out vividly.<br>
R. officinalis 'Tuscan Blue' is a tall-growing upright rosemary, with branches that can reach six feet tall that grow dramatically from the base of the plant. Used for hedges to border small fields in Tuscany, 'Tuscan Blue' is a handsome plant with exceptionally dark blue flower spikes and highly aromatic pale green leaves that lend themselves to cooking and drying. Along with the other tall rosemaries, it is more suitable for growing in warmer climates, but it can also be grown in short-season regions.<br>
"During our growing season from May to October, both 'Tuscan Blue' and 'Miss Jessopp' grow 1-1/2 feet tall and wide," notes Louise Hyde, owner, with her husband, Cy, of Well-Sweep Herb Farm in northern New Jersey. Peter Borchard, of Companion Plants, a specialty herb nursery in Athens, Ohio, concurs. "During the summer, 'Tuscan Blue' can put on four feet of growth before bringing it indoors for the winter," he says. "It can be potted up in a five-gallon container and placed in a sunny room with good air circulation until spring."<br>
R. officinalis 'Miss Jessopp's Upright' is named after the English gardener Miss Euphemia Jessopp. In 1957, a cutting from a plant growing at Sissinghurst Castle was propagated by the plantswoman Elizabeth de Forest in her Santa Barbara, California, garden, and this rosemary was then introduced into the nursery trade. Hardy to zone 8, it can grow from five to eight feet tall and has slate blue flowers and highly aromatic dark gray-green leaves.<br>
R. officinalis 'Arp' is the introduction of the distinguished plantswoman, garden author and herb afficionado, Madalene Hill of Roundtop, Texas. In 1987 she discovered an extremely hardy rosemary growing in the hamlet of Arp, in northeast Texas. She introduced it into the nursery trade via the National Herb Garden in Washington, D.C., where it was first grown. 'Arp', along with another of her cold-hardy rosemary discoveries, R. officinalis 'Hill Hardy', is one of the hardiest rosemaries, surviving the winter with protection to zone 6. 'Arp' grows from three to five feet tall, has light blue to almost white flowers and has thick, widely spaced, fragrant leaves grayer than (R. officinalis). It requires excellent drainage.<br>
R. officinalis 'Prostratus' grows one to two feet tall and three to eight feet wide with 3/4-inch, glossy dark green leaves that have a mild, piney fragrance. The flowers are a delicate lavender-blue. Another excellent prostrate rosemary is the vigorous grower and bloomer, (R. officinalis) 'Lockwood de Forest', a California cultivar introduced from a seedling discovered in the Santa Barbara garden of the de Forest family in the 1940s. It has lighter leaves and deeper blue flowers than 'Prostratus'.<br>
R. officinalis angustifolius - pine-scented rosemary - is from Corsica and is not considered culinary. It smells like a Christmas tree and grows as tall as a small one, from 2-1/2 to 4 feet, with slender, needle-shaped leaves and dark blue flowers. It is hardy to 25°F (zone 9). A choice cultivar is 'Benenden Blue', a semiprostrate shrub that grows to three feet tall, with a curious growth habit: its initially erect branches arch, then begin to gracefully grow sideways.<br>
               </div>
            </div>


            <a href="#modal6" class="modal-open" >&#9676;  Growing Mint</a>
 
            <div class="modal" id="modal6">
               <div class="modal__content6">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Mint</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The mint family offers a tremendous diversity of refreshing scents and flavors for cooking, beverages, and potpourris. Bumblebees and other pollinators are attracted to the delicate flowers that appear in mid- to late summer. Some varieties sport variegated foliage for added interest in the herb garden.<br>
<h1 style=font-size:4vw>Mints for Your Garden</h1>
Spearmint (Mentha spicata) makes a soothing tea, and is a key ingredient in mint juleps. It's also the mint of mint jelly, and can be use to highlight flavors in a fruit salad or grain pilaf. Plants grow 2 to 3 feet tail and blossom in pale violet mid- to late summer. Peppermint (Mentha x piperita) is more pungent than spearmint, which tends to the sweet side. Peppermint grows to 3 feet tall, bearing smooth leaves 1 to 3 inches long. But the bouquet is bigger than these two familiar flavors. In catalogs and garden centers, you can find apple mint, chocolate mint, orange mint, and many others.<br>

<h1 style=font-size:4vw>Growing and Harvesting Mints</h1>
Mint can be terribly invasive, particularly in rich, moist soil. To keep it from overtaking your yard, confine it to a bed with edging of metal or plastic. Bury edging to a depth of 14 inches around the perimeter of the mint patch, or simply grow the plants it in pots.<br>

A single plant is plenty for a small garden, as it will quickly spread to fill its allotted space. Choose a sunny location with moderately fertile, humusy soil. Use a light mulch to retain moisture and keep leaves clean.<br>

Once plants are growing vigorously, you can harvest young or mature leaves. Don't be afraid to cut the plants back frequently to promote fresh growth. Rusty spots on leaves indicate a fungal infection; pick and destroy blemished leaves and propagate new plants from uninfected cuttings to cultivate in a new location. You can dry mint leaves on trays or by hanging bunched branches upside down in a warm, dark, well-ventilated area, such as an airy attic or outbuilding. Fresh leaves are easy to freeze too.<br>
               </div>
            </div>



            <a href="#modal7" class="modal-open" >&#9676;  Growing Chives</a>
            <div class="modal" id="modal7">
               <div class="modal__content7">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Chives</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Chives are hardy and vigorous perennial herbs. Ornamental and savory, the lush clumps of dark green leaves and bountiful blossoms suit the perennial border as well as the herb or vegetable garden. The flowers also attract beneficial insects that feast on pests and pollinate crops.<br>
<h1 style=font-size:4vw>Types of Chives</h1>
Common chives (Allium schoenoprasum) can grow to about a foot tall. They have narrow, hollow green leaves and spherical pink or purple flowers. The leaves are used in sauces and salads to lend a delicate onion flavor. Separate flower heads and toss them with greens for colorful and zesty salad. Concoct a colorful and tasty herb vinegar by adding whole chive blossoms to white vinegar.<br>

Garlic chives (Allium tuberosum), sometimes called oriental chives, taste like a blend of garlic and chives. They're useful for spicing soups, salads, sauces, and meat dishes. Garlic chives have flat leaves, and white blossoms that appear in the summer. Although the seed heads make a nice addition to dried wreaths, be sure to pick them before the seeds fall, because garlic chives can be invasive.<br>

<h1 style=font-size:4vw>Growing Chives</h1>
You can start plants from seed, purchase a plant or two, or ask a neighbor for a division from their chive plants. To starting chives from seed, plant in the garden in mid- to late spring. Choose a sunny spot with rich, well-drained soil, and sow seeds in clusters 1 to 1-1/2 feet apart. Keep soil evenly moist until seedlings are up and growing vigorously. If you start with purchased seedlings or divisions, plant them 1-1/2 feet apart.<br>

Chives are hardy and need little care. If your soil is moderately fertile, a light mulching with compost in the spring will provide sufficient nutrients. Encourage deep rooting with infrequent but deep watering. Remove blossoms when they've passed their peak. If you harvest frequently and heavily, in addition to compost, fertilize in spring with an organic 5-10-5 fertilizer as directed on the product label. Divide plants every 3 to 4 years in the spring to keep them healthy.<br>

To spice winter fare, pot small clumps of chives in the fall to grow indoors under lights or in a very bright window.<br>

<h1 style=font-size:4vw>Harvesting Chives</h1>
You can begin harvesting about 6 weeks after planting seeds, or as soon as established plants resume growth in the spring. Cut outer leaves right back to the base. Use them fresh or frozen; they do not retain their flavor well when dried.<br>
               </div>
            </div>


            <a href="#modal8" class="modal-open" >&#9676;Growing French Tarragon</a>
            <div class="modal" id="modal8">
               <div class="modal__content8">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing French Tarragon</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The sweet, anise-flavored leaf of French tarragon (Artemisia dracunculus) is a key ingredient in Béarnaise sauce and fines herbs. It also makes a delicious addition to egg dishes, seafood, salad dressing, vegetables, and poultry. You will find plants of this hardy perennial for sale, but not seeds because the plants seldom produce viable seed. If you find seed for sale, it's probably Russian tarragon (A. dracunculoides), a related species with what most cooks consider an inferior flavor. (Grow French and Russian species side by side, and decide for yourself!)<br>
<h1 style=font-size:4vw>Cultivation</h1>
French tarragon is hardy to USDA zone 5, or to zone 4b with winter protection. It grows well in full sun or partial shade, and needs well-drained soil. Purchase plants propagated from stem tip or root cuttings, or from crown divisions. Space plants about 2 to 3 feet apart to give them room to spread.<br>

Harvest regularly or prune plants to a height of 2 feet to prevent flowering and keep plants neat. In central and northern states, water deeply and spread mulch in late fall to protect the roots over the winter. Divide the plants every 3 to 4 years to keep them healthy and vigorous. Each established plant can yield 2 or 3 divisions.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
Harvest leaves in early to midsummer when they contain the most essential oil. Use leaves fresh or freeze them in airtight bags for later use. Steeping tarragon sprigs in vinegar is another popular preservation method. If you dry tarragon, you may have to use more than called for in recipies, as it loses its flavorful essential oils during drying and storage.<br>
               </div>
            </div>
        

            <a href="#modal9" class="modal-open" >&#9676;  Growing Oregano</a>
            <div class="modal" id="modal9">
               <div class="modal__content9">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Oregano</h2>

                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    There are several species of oregano used in cooking, but the one we recommend for kitchen use is Origanum heracleoticum. If you haven't been impressed with the flavor of oregano you've purchased at the store, consider that commercially available dried oregano may contain any number of species of oregano, and even unrelated plants! Growing your own is the best way to find out which best suits your palate and compliments other ingredients.<br>

Origanum heracleoticum is commonly known as Greek oregano, winter sweet marjoram, or Italian oregano. Common names for O. vulgare include European oregano, wild marjoram, and winter marjoram. Sweet marjoram, another desirable addition to the herb garden, is also a species of oregano: O. majorana.<br>
<h1 style=font-size:4vw>Cultivation</h1>
Purchase plants or seeds from a reliable source to be sure you're getting the right species. Plant in full sun and well-drained soil after danger of frost has passed, spacing plants or thinning seedlings to stand 8 to 10 inches apart. Trim plants back before flowering (approximately 5 to 6 weeks after planting) to stimulate a dense growth habit. If you allow some of the flowers to produce and drop their seed, you can keep your oregano patch fresh and vigorous. Remove 3- to 4-year-old plants to keep the bed quality high.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
Harvest leaves as you need them. The flavor is best just before flowers bloom. Unlike some herbs, dried oregano leaves keep their flavor well in storage. Hang harvested sprigs in an airy, shaded location until the leaves crumble easily, then store in an airtight container. You can also freeze fresh sprigs in zippered plastic bags; press as much air from the bag as possible.<br>
               </div>
            </div>

            


            <a href="#modal10" class="modal-open" >&#9676; Growing Marjoram</a>
            <div class="modal" id="modal10">
               <div class="modal__content10">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Marjoram</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Shakespeare knew his herbs, and characterized them in his work. In All's Well that Ends Well, someone gives a compliment, describing another as, "the sweet marjoram of the salad, or rather the herb of grace." It is a delightful herb, at once sweet and savory. Use it in sauces, egg dishes, fish, poultry, and, as the Bard alludes, in salads.<br>

Origanum majorana goes by several common names: sweet marjoram, garden marjoram, and annual marjoram. It is hardy only to USDA Zone 9 and rarely survives even mild winters. Plant seeds or purchase plants each spring. Sweet marjoram has an upright, bushy growth habit and can reach a foot in height. (Where perennial, it can reach 2 feet.)<br>

<h1 style=font-size:4vw>Growing Marjoram</h1>
Start the tiny seeds indoors under grow lights about 6 weeks before the last frost date in your region. Set out seedlings in full sun in slightly alkaline soil that's rich in organic matter. Place plants about 6 to 8 inches apart, or in clumps of two or three plants set 12 to 14 inches apart, and keep the soil slightly moist until they are growing vigorously. Pinch back stems to maintain a bushy growth habit. After each harvest, add 1 inch of compost in a 12-inch-wide band around the plants.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
When flowers appear, cut entire plants to stand 3 to 4 inches tall, and repeat as more flower buds appear. Use leaves fresh, and dry some for winter use. Leaves dry quickly and retain their flavor well. To dry, tie stems together and hang bunches upside down in a shady, dry, well-ventilated place. After drying, remove leaves from stems and store in an airtight container.<br>
               </div>
            </div>

            <a href="#modal11" class="modal-open" >&#9676; Growing Thyme</a>
            <div class="modal" id="modal11">
               <div class="modal__content11">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Thyme</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Thymes are versatile, indeed - more than fifty varieties are judged useful for culinary or ornamental gardens! Its flavor heightens that of most any food.<br>

<h1 style=font-size:4vw>Types of Thyme</h1>
The thyme most often used in cooking is know as English thyme (a form of Thymus vulgaris). Like the other thymes, it has woody stems with small oval leaves. It can reach 8 to 12 inches high, though some varieties are smaller. Creeping varieties make attractive aromatic rock garden or edging plants.<br>

Loved for its lemon scent, lemon thyme (Thymus citriodorus) is a delightful plant for both garden and kitchen. One cultivar of lemon thyme with variegated yellow leaves and a prostrate habit is known as 'Doone Valley'. It makes a beautiful ground cover, particularly in winter when it turns strong shades of yellow, red, and green. Caraway thyme (Thymus herbabarona) is a low-growing plant with dark green leaves sporting the fragrance of its namesake herbs. Others thymes sport aromas of lavender, orange, oregano, and rose geranium!<br>

<h1 style=font-size:4vw>Growing Thyme</h1>
It's best to purchase plants rather than start thyme from seed, since it germinates slowly and unevenly. You can also start plants from cuttings if you have a friend willing to share. Thyme thrives in full sun and light well-drained soil. Space plants 9 inches apart.<br>

Where winters are very cold, mulch the plants after the ground freezes with a light mulch such as pine needles. Trim the plants a bit in the spring and summer to maintain a neat growth habit and prevent the development of too much woody growth.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
You can harvest leaves and sprigs all summer. To dry thyme for storage, harvest sprigs in early fall, tie them together, and hang them upside down in a shady, warm, well-ventilated area to dry. Store leaves in a tightly lidded container. You can also remove leaves from the stem, dry them on a tray, or freeze them.<br>
               </div>
            </div>
            
            <a class="titlu">Unusual Herbs & Herb Stories&#127807;</a>

            <a href="#modal12" class="modal-open" >&#9676; How to Grow Herbs Indoors </a>
            <div class="modal" id="modal12">
               <div class="modal__content12">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>How to Grow Herbs Indoors</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Herbs are sun worshipers for the most part. As expatriates of the Mediterranean region, most flavorful herbs don't thrive in the un-Mediterranean environment and inadequate light our houses provide. Herbs don't tolerate north-facing windows, or any window that gets less than four hours of direct sunshine a day.<br>
<h1 style=font-size:4vw>Provide Light</h1>
Even if your indoor herbs get their four hours of direct sunshine daily, installing supplementary lighting is a necessity. The light coming through a window may seem bright to your eyes, but its intensity in winter is often less than one-tenth of the outdoor light during a summer day. Grow lights will work if their light intensity is high enough and the spectral quality is right.<br>

<h1 style=font-size:4vw>Acclimate Plants Gradually</h1>
Plants produce two kinds of leaves in response to strong or weak light. High-light leaves are thick, strong, and narrow. Low-light leaves are thinner, more delicate, and broader than high-light leaves. But narrow high-light leaves are less efficient in converting light energy into food than low-light leaves. High-light leaves are accustomed to an abundance of light, so they don't have be as efficient at food production. A plant that is adapted to abundant light often turns brown and drops leaves indoors. This is because it can't produce enough food to maintain itself. The plant tries to make food by shedding the inefficient leaves and producing efficient leaves higher up and closer to the light source. When you bring herbs indoors, this leaf drop and increased leggy growth can happen within weeks, or even days. Some herbs cannot make the transition fast enough to survive.<br>

Rosemary is a case in point. This slow-growing evergreen doesn't have the chance to adjust to changes in light before the plant slowly starves itself. By January, February, or March, the leaves dry up, and the plant dies. This sudden death is by far the most common complaint about growing rosemary indoors. Here's what to do: Gradually adjust the plant to lower light. Place it in partial shade for two to three weeks, then in deeper shade for another two to three weeks before bringing it indoors. When plenty of new growth appears, the plant is ready to go into the house.<br>

<h1 style=font-size:4vw>Soil, Fertilizer, and Water</h1>
After light, proper soil is the next most important factor in producing healthy herb plants. With few exceptions, herbs require excellent drainage, especially during the winter months, when transpiration rates are lowest (that's the rate at which plants release water from their leaves to the atmosphere). When roots are confined in a pot or planter, water and air cannot move easily. To improve drainage without sacrificing nutrients, add sharp sand or perlite to a good sterilized compost-based mix. Most herbs do well in soils of pH 6 to 7.<br>

Many people incorrectly think that herbs grow better in poor soil. Flavors are stronger when culinary herbs grow outdoors in gardens. But in the confines of a pot, supplementary feedings with liquid fertilizer or organic fish emulsion are necessary. Feed herbs once a week when plants are actively growing, but not when dormant.<br>

Watering is not a trivial matter with herbs. In general, water less often and more thoroughly, and only when the soil is actually dry. When the soil is dry to the touch, add water until it comes out the bottom of the pot. If the water doesn't come out, pots have a drainage problem. First, check that the holes aren't blocked; if not, you may have to repot with soil that has better drainage.<br>

<h1 style=font-size:4vw>Pests and Diseases</h1>
Herbs are susceptible to common pests, including whiteflies, spider mites, aphids, mealybugs, scale insects, and thrips. Inspect herbs regularly.<br>

If your herbs are in portable containers, control pests by dipping the whole aboveground part of the plant into a pail of insecticidal soap. Swish vigorously for a minute or two to wet all leaf surfaces (hold your hand over the pot to prevent soil loss). Dipping once or twice a week for three to four weeks will clear up most problems.<br>
               </div>
            </div>




            <a href="#modal13" class="modal-open" >&#9676; Best Herbs for Indoor Growing</a>
            <div class="modal" id="modal13">
               <div class="modal__content13">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Best Herbs for Indoor Growing</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    In recent years, many new varieties of herbs have been introduced, some of which do better indoors than the traditional varieties. Here are 10 herbs notable for their consistent, compact growth habit and strong flavor.<br>

'Grolau' chives (Allium schoenoprasum): Strong flavor and thick, dark green leaves. Developed for forcing, 8 to 12 inches tall. Seeds germinate in 10 to 14 days at 60 to 68oF.<br>

'Fernleaf' dill (Anethum graveolens): Dwarf form of dill only 18 inches tall. Ideal for dill weed indoors. Standard varieties grow too tall and bolt too soon. Easy from seeds, germinating in 7 to 14 days at 60 to 68oF.<br>

'English' mint (Mentha spicata): Perhaps the best-behaved spearmint variety (not as invasive as others, and the leaves are broader and deeper green). Excellent for cooking and tea. Easy to propagate from cuttings.<br>

'Spicy Globe' basil (Ocimum basilicum minimum): Dense, compact form of basil, 8 to 10 inches tall. Good flavor. Grow from seed; germinates in 6 to 12 days at 68 to 77oF.<br>

Greek oregano (Origanum vulgare hirtum): The true oregano for Mediterranean cooking, with excellent flavor and white flowers. Watch out for the impostor (called wild marjoram) with pink flowers and no flavor. Greek oregano grows well in pots, reaching 8 to 12 inches. Grows easily from seed in 7 to 21 days at 65 to 77oF.<br>

Broadleaf thyme (Plectranthus amboinicus or Coleus amboinicus): Also known as Spanish thyme and Cuban oregano, this plant has broad, fleshy leaves unlike those of ordinary thyme. Wonderful, spicy thyme-oregano flavor and useful in many of the same recipes as ordinary thyme. Never goes dormant. Grows from cuttings only, and reaches 10 to 12 inches tall.<br>

Vietnamese coriander (Polygonum odoratum): Not true coriander, but a good substitute. Regrows after cutting, unlike true coriander, which must be reseeded after harvest. Grows 4 to 8 inches tall. Propagate from cuttings.<br>

'Blue Boy' rosemary (Rosmarinus officinalis): More compact and diminutive than regular rosemary, reaching only 24 inches. Flowers freely and has excellent flavor. Propagated by cuttings only.<br>

Dwarf garden sage (Salvia officinalis 'Compacta'): Smaller leaves and more compact habit than regular sage, growing only 10 inches high. Same sage flavor. Propagated by cuttings only; seeds are unavailable.<br>

Creeping savory (Satureja repandra or S. spicigera): Flavor identical to that of winter savory, but easier and faster to grow indoors. Reaches only 2-4 inches in height, but fills the pot with a dense mat of foliage. Difficult to find seeds, but grows readily from cuttings.<br>
               </div>
            </div>


            <a href="#modal14" class="modal-open" >&#9676; Growing Herbs Under Lights</a>
            <div class="modal" id="modal14">
               <div class="modal__content14">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Herbs Under Lights</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Even with a bright sunroom, sun-loving herbs will need 12 to 16 hours a day of supplemental light. You have two choices: fluorescent or high-intensity discharge (HID).<br>

The brightness of a light is measured in either lumens or foot candles. Lumens refers to the amount of light at the source, foot candles to the amount of light falling on a given area. As you move farther away from a light, the lumens stay the same, but the foot candles decrease. For perspective, a typical bright but overcast day is about 1,000 foot candles, and a bright summer day at noon is about 10,000 foot candles.<br>
<h1 style=font-size:4vw>Fluorescent Lights</h1>
Home gardeners have used fluorescent lights for starting seeds and growing plants for many years. Because their light intensity is low, they are best for seedlings and low-growing herbs so that even the lowest leaves are no more than 8 inches from the tube. A standard 4-foot unit with two 40-watt tubes will light an area about 8 inches wide. A variety of special tubes for growing plants are available, but a combination of standard cool- and warm-white tubes is also effective. Verilux tubes approximate the color of natural light and cost about $10 each. Vita-Lite "power twist" tubes produce somewhat more light per watt, and the quality of light is balanced for optimum plant growth, but they cost about $18 each.<br>

Fluorescent lights at 6 inches provide 700 foot candles, and at 12 inches the light drops to 450 foot candles. Fluorescent efficiency, 60 to 80 lumens per watt, though superior to that of standard incandescent, is far below that of HID lamps. Cost is $30 to $60 for the fixture and tubes, and about $2 to $4 per month for electricity.<br>

<h1 style=font-size:4vw>High-Intensity Discharge Lights</h1>
Serious herb growers, including commercial producers of fresh-cut herbs, rely on high-intensity lamps. Our stock plants grew fabulously through the winter under these lights. They produce a much greater intensity of light, meaning the bulb can be several feet above the plants and still deliver adequate intensity to lower leaves. There are two types: metal halide and high-pressure sodium. Both utilize large, long-lived, and relatively expensive bulbs filled with various combinations of rare gases and a remote ballast.<br>

A 400-watt HID lamp delivers about 1,000 foot candles of light 3 feet below the bulb and can sufficiently illuminate 25 square feet. Cost of electricity is $4 to $8 per month, depending upon lamp size and your electricity rates. (Operate HIDs only during off-peak hours to reduce energy cost.)<br>

Most gardeners prefer metal halide lamps because the light they produce is good for healthy growth and flowering and pleasant to work around. Efficiency is 120 to 130 lumens per watt. Bulbs are available in 150-watt ($200) to 1,000-watt ($350) versions.<br>

High-pressure sodium lamps are the most efficient type of HID lamp, producing about 140 lumens per watt. The light they produce is reddish, so it's less pleasing to work around, but is preferred for some flowering plants. Bulbs are available in 150-watt ($160) to 1,000-watt ($400) versions.<br>
               </div>
            </div>

            <a href="#modal15" class="modal-open" >&#9676; Best Herbs for Teas</a>
            <div class="modal" id="modal15">
               <div class="modal__content15">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Best Herbs for Teas</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Once I began blending and testing herb teas to sell under my Garden Party label, I knew what I didn't want. An herb tea should never be flat and flavorless. Whether it's fruity or spicy, soothing or lively, simple or sophisticated, it needs taste and personality.<br>

I found my homegrown mint, lemon balm and chamomile were more flavorful than the herbal ingredients I could buy. I also learned that many of the old-fashioned beverage flavorers, such as rose petals and toasted sunflower hulls, are still delightful additions. And for simple pleasures, few things equal the fragrance and flavor of a few fresh leaves of lemon verbena steeped in boiling water.<br>
<h1 style=font-size:4vw>Best Herbs for Tea</h1>

Here are my picks for the most flavorful and widely adapted "tea" plants for home gardens, along with tips for harvesting and my favorite recipes. All of these plants grow well throughout the United States. They are hardy perennials (up to -20oF) that do well in sun or part shade, except where noted.<br>

* Bee Balm (Monarda didyma), a member of the mint family, is native to the eastern United States and Canada. Here in the drier West, I pamper it, making sure it's in water-retentive soil. Both the brightly colored flowers and the leaves, with their complex flavors of citrus and spice, are used for tea.<br>

* Betony (Stachys officinalis) bears two- to three-foot spikes of violet flowers. The deep green, hairy leaves make a slightly astringent tea that's similar to a mild, fragrant China tea.<br>

* Catnip (Nepeta cataria) is a two- to three-foot-tall mint-family member. The fuzzy, scalloped leaves have a lemon-mint flavor. If you have cats, you know they roll in it. My solution: Grow a surplus and dry the leaves on top of the refrigerator where the cats can't reach them. One caution: Pregnant women should avoid drinking catnip tea.<br>

* Chamomile bears small, daisy-like flowers that have long been used in Europe for tea. German chamomile (Matricaria recutita) is a two-foot annual. Roman or English chamomile (Chamaemelum nobile) is a lush green perennial ground coverms of C. nobile bear small, yellow, button-like flowers. Although many references designate German chamomile as the sweeter type preferred for tea, I harvest the mature flowers of both chamomiles for a light, apple-scented tea.<br>

* Coriander (Coriandrum sativum) produces seeds that lend a warm, citrusy flavor to tea. The leaves, used in cooking, are known as cilantro or Chinese parsley. This fast-growing half-hardy annual prefers cool weather. Plant in fall in mild climates; elsewhere, succession-plant through spring and summer.<br>

* Fennel (Foeniculum vulgare) is a three- to five-foot perennial often cultivated as an annual. In cold climates, you can succession-plant through the early spring and summer, and it will often self-sow. Here in the desert, I plant in fall. Fennel likes full sun. Both the feathery leaves and the seeds are used for licorice-flavored teas.<br>

* Lemon Balm (Melissa officinalis) is our family favorite. This floppy two-foot-tall member of the mint family has scalloped, lemon-scented leaves that make a soothing evening tea and add body to blends as well. It's listed for zones 4 and 5, but I've found it less hardy than other mints. A rooted cutting will overwinter indoors.<br>

* Lemon Verbena (Aloysia triphylla) is, among all the plants with "lemon" in their names, the most like oil of lemon, hence the most strongly flavored. The leaves are long, slightly sticky and deciduous. This woody shrub prefers full sun and a light, well-drained soil. It's hardy only in zones 10 and 11. Elsewhere, grow it in a planter and winter it indoors (treat it first with insecticidal soap, as it's prone to whiteflies and spider mites).<br>

* Mint (Mentha spp.) comes in many varieties, all of which have been used as teas. In my opinion, peppermint leaves (M. x piperita) are the only ones that stand up to drying and steeping, making a wonderfully refreshing iced tea. Like any mint, peppermint can be invasive. It tolerates drier conditions than spearmint. Here in the desert we give it shade.<br>

* Roses (Rosa spp.) can be used to make two kinds of tea, those from the hips (fruit) and those from the petals. You can use the petals of any fragrant variety that's been grown organically. I gather them when the blooms are just past their peak. Rosa rugosa is one that's recommended for both petals and hips because it's a fragrant, pest-free rose that doesn't require spraying. Rose hip tea is red, with a tart lemon-orange flavor, and is a source of vitamin C. Cut slits in plump hips to speed drying and crush them slightly before brewing tea.<br>

* Sunflower seed hulls, roasted and ground, were used by Native Americans and pioneers as a coffee substitute. I run a rolling pin over the seeds to crack them, then remove the kernels for baking and snacks. I place the hulls in a dry cast-iron frying pan and stir over medium-high heat for a few minutes until they're blackened. It's a smoky operation, but the aroma is toasty and inviting. The hulls add a hearty flavor to teas, as well as darken them.<br>

* Yerba Buena (Satureja douglasii) is a low-growing perennial with wonderful menthol-mint-flavored leaves. A native of the Pacific redwood forests and hardy only to 10oF, it needs a climate that's moist and mild. We grew it in San Francisco, and miss it here in the desert.<br>
Harvesting

Aromatic oils are most concentrated when herb plants are in bud, so that's a good time to harvest, although you can certainly take cuttings here and there during the growing season. Cut back the entire plant by two thirds. In my region, I get about three cuttings before letting the plants go.<br>

The plants listed here can all be used fresh for tea, or they can be dried first. To dry them, I spread the stems on trays in a warm, airy place and turn them twice a day. When they're dry (four to eight days), I gently strip off the leaves, buds or flowerheads and store them in closed containers.<br>

I cut stalk fennel and coriander when the seeds are barely mature, but before they shatter, and invert them in paper sacks. In a few weeks, when the seeds have dropped to the bottom and dried, I funnel them into storage containers.<br>
               </div>
            </div>
            
            
            <a href="#modal16" class="modal-open" >&#9676;Herbal Tea Recipe</a>
            <div class="modal" id="modal16">
               <div class="modal__content16">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Herbal Tea Recipe</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Once you've harvesting your herbs for tea, here's how to blend and brew up a healthy pot of tea.<br>

<h1 style=font-size:4vw>Blending and Brewing</h1>
In "merry olde England," a tea with one ingredient was called a simple. By all means, start by sampling some simples and get familiar with the various teas. That way, you'll know if you're one of a very small percentage of people that may experience a reaction to one of these ingredients.<br>

Once you discover the art of blending, however, you'll probably prefer the made-to-order tastes and subtle accents you can create. But just as mixing contrasting colors can make a muddy mess, mixing unrelated flavors can be unsatisfying. The trick is to choose one flavor or family of flavors to carry your message. Then, for accent, add small amounts of other herbs or bits of dried fruit or citrus peel, toasted almonds or walnuts, or whole spices. Use about three parts of your dominant ingredient(s) to one part of accent items. Crumble the leaves if necessary to mix evenly, but not enough to go through your strainer or tea ball.<br>

<h1 style=font-size:4vw>Recipes</h1>
The recipes given here call for dried ingredients and yield six cups of tea. Use one tablespoon of dried herbs per cup, plus one for the pot. For fresh leaves or flowers, triple the amounts (seed measurements don't change). Pour boiling water over the herbs, cover and let steep for one to three minutes. Herb teas are naturally pale. Sweetening with honey darkens them and adds body. Lemon juice bleaches the color; try rose hips instead. Peppermint, betony and sunflower teas can take a little milk.<br>

<h1 style=font-size:4vw>Mint Mania</h1>
3 tablespoons peppermint leaves<br>
1 tablespoon catnip leaves<br>
1 tablespoon rose petals<br>
1 tablespoon lemon verbena leaves<br>

<h1 style=font-size:4vw>Orchard</h1>
3 tablespoons chamomile flowers<br>
2 tablespoons lemon verbena leaves<br>
1 tablespoon fennel seed<br>
1 teaspoon crushed coriander seed<br>
1 teaspoon snipped dried apricot<br>

<h1 style=font-size:4vw>Bistro</h1>
4 tablespoons toasted sunflower hulls<br>
4 teaspoons fennel seed<br>
4 teaspoons orange rind (colored part only)<br>

<h1 style=font-size:4vw>Maytime</h1>
3 tablespoons chamomile flowers<br>
1 tablespoon bee balm leaves<br>
2 teaspoons rosemary leaves<br>
2 teaspoons crushed coriander seed<br>
2 teaspoons peppermint leaves<br>
               </div>
            </div>





            <a href="#modal17" class="modal-open" >&#9676; St. John's Wort</a>
            <div class="modal" id="modal17">
               <div class="modal__content17">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>St. John's Wort</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    In medieval times, people thought St. John's wort (Hypericum perforatum) protected them from demonic possession. Maybe they were right. Today, it is widely used to treat mild depression, anxiety, and insomnia, and its antiviral properties are under investigation. It's now so popular that various formulations are widely marketed, but one of the simplest ways to realize its therapeutic benefits is still the old-fashioned way, as an infusion.<br>

Since this herbaceous perennial was brought to New England by European settlers, it has naturalized across much of the continent. It thrives throughout USDA Hardiness Zones 4 through 8 but also grows in zones 3 and 9. In California, Idaho, Montana, and Oregon, St. John's wort grows too well so is considered a noxious weed, and gardeners there cannot buy plants or seeds. In many other regions it is also abundant in woods, meadows, and along roadsides. And gathering from the wild is not considered harmful to the existing population. Before harvesting wild plants, make sure that they have not been treated with pesticides or other chemicals.<br>

The key medicinal constituents are concentrated in the buds, flowers, and upper leaves. A combination of genetic and environmental factors governs their concentration. For instance, narrow-leaved varieties seem to have higher concentrations of hypericin, a key compound, than broad-leaved kinds. But in every case, the level of active chemicals drops dramatically after flowers are pollinated.<br>

<h1>Harvest and Making Tea</h1>
Harvest plants while they're in early bloom, after a minimum of four flowers have opened. Snip off the top 8 inches of the shoots, including a mix of unopened buds, flowers, and leaves. Protect them from light, and dry them rapidly to preserve volatile compounds. Dry them for about 10 hours in a warm (86oF to 104oF) dark area. Store completely dried herbs in a cool (less than 68oF), dry, dark place for up to a year.<br>

To make an infusion, steep about 2 teaspoons of the dried herb in 5 ounces of boiling water for 10 minutes. Drink it twice a day with food; its effects are not immediate -- they may take several months. Some people experience increased sensitivity to sunlight while taking the herb. Before using any botanical as part of a healthcare program, consult a qualified health practitioner. Seeds and plants are widely available.<br>
               </div>
            </div>


            <a href="#modal18" class="modal-open" >&#9676; Preserving Herbs</a>
            <div class="modal" id="modal18">
               <div class="modal__content18">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Preserving Herbs</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The most common ways to preserve herbs are drying and freezing. You can also make herb-based sauces. Try one or more of these methods so you can enjoy that fresh-picked flavor year-round.<br>

<h1 style=font-size:4vw>Tools and Materials</h1>
paper bags<br>
rubber bands<br>
airtight containers<br>
ice cube trays<br>
freezer bags<br>
<h1 style=font-size:4vw>Drying.</h1>
 Many herbs can be air dried by tying several stems together with a rubber band and hanging them in a cool, dark, dry location. Bay, marjoram, oregano, parsley, rosemary, sage, and thyme are good candidates for drying. If the area is dusty, keep the herbs in paper bags during the drying process. Parsley and thyme retain more of their color if they are dried in a 150-degree oven or in a dehydrator. When leaves are brittle, pull them off the stems and store in airtight jars in a cool, dark place. Don't crumble the leaves until you use them because they will lose flavor. Dried herbs keep their flavor and color for about three months.<br>

Freezing. Some herbs keep their flavor best when frozen. These include basil, chives, chervil, dill, lemon balm, mints, oregano, parsley, rosemary, sage, French tarragon, thyme, and lemon verbena. Wash them thoroughly and shake or pat off the excess water. Place individual leaves or chopped leaves in freezer bags. Flatten the bags to remove air. Dill, sage, rosemary, and thyme also freeze well on the stalks, which you can add frozen to cooking pots and remove before serving.<br>

You can also puree herbs with a small amount of water and freeze the paste in small, zippered freezer bags. Then break off frozen pieces as you need them. Combine herbs that are good culinary companions, such as sage and thyme, mix with a little olive oil, and seal the paste in freezer bags. Or pour the mixture into ice cube trays. Once frozen, remove and store in freezer bags and thaw individual cubes as needed.<br>

<h1 style=font-size:4vw>Tips</h1>
An herb's flavor is most pronounced just before the plant begins to flower. You can prolong the harvest by snipping off the flower buds whenever they appear.<br>

The essential oils are concentrated in the leaves in early morning, before the sun causes them to be released into the air. Early morning is, therefore, the best time to harvest. Snip individual leaves or cut an entire shoot just above a leaf node (this will encourage dormant buds to grow at the nodes for a bushier plant).<br>

Harvest the seeds of dill, fennel, and coriander when the flower heads have faded and started to dry. Clip the flower heads and place them in paper bags, then shake the heads to dislodge the seeds. Store seeds in an airtight container.<br>
               </div>
            </div>

            

            <a href="#modal19" class="modal-open" >&#9676;  Growing Herbs(Basil)</a>
            <div class="modal" id="modal19">
               <div class="modal__content19">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Herbs(Basil)</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Featured in cuisines across the globe, basil is an indispensable flavoring. Plant seeds or transplants after all danger of frost has passed and soil is warm, and it will yield an abundant harvest within weeks.<br>
<h1 style=font-size:4vw>Types of Basil</h1>
The type of basil you're most likely to find in garden supply stores and mail order catalogs is bush or sweet basil, a compact plant that grows 18 to 24 inches tall. Purple basil's richly hued leaves add color and interest to an herb bed or even a flower garden. Use it like common basil, but expect it to be less sweet. Steeping leaves in white vinegar produces a lovely tint. The number of basil species and varieties are growing by the year. You can find lemon and lime basils that bring a citrus fragrance to both the garden and the kitchen, and Thai basil, which imparts a licorice flavor. You'll also find cinnamon-flavored varieties, clump-forming types with tiny leaves, and "lettuce leaf" basil, among others.<br>

<h1 style=font-size:4vw>Caring for Basil</h1>
Plant basil in fertile soil in a spot that gets direct sun for at least 6 hours per day. Pinch the tip from the center shoot of basil after it has grown for 6 weeks to force side growth and prevent early flowering. If flower stalks develop, simply snip them off.<br>

Basil needs a steady supply of moisture and warm soil temperatures to produce well, so you have to play a balancing act with mulch. In cool areas, delay mulching until the soil temperature has reached the mid-60s. Where summer really heats up and soil loses moisture quickly, you can add mulch sooner.<br>

This heat-loving herb is susceptible to even mild frost; harvest the remainder of your crop if temperatures are predicted to dip into the 30s.<br>

Basil has few pests, but occasionally generalist pests such as aphids, flea beetles, and Japanese beetles will feast upon it. Rinse off aphids with a garden hose. To prevent beetles from munching, cover the crop with fabric row cover. If slugs are a problem on new transplants, try a barrier of copper flashing.<br>

Diseases are more of an issue for basil-lovers. Fusarium wilt of basil, first identified in the early 1990s, arrived via infected seed imported from Italy. Symptoms include sudden wilting and leaf drop, accompanied by dark streaks on the stems, usually in weather above 80°F. If you notice these signs, quickly dig up the infected plant, along with all soil around the roots, and discard it. If part of your garden becomes infected, avoid spreading the disease by moving soil around on your tools or tiller, and consider growing your basil in containers. You might also try a fusarium-resistant variety, such as 'Nufar'.<br>

Basil is also susceptible to a few bacterial rots that show up on stems or leaf clusters, usually in cool, wet weather, often late in the season. Keys to control include planting in well-drained soil, spacing plants so they dry off after rain, and removing infected plants from the patch.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
Basil is at its most flavorful when fresh. The best time to harvest is just as the plant starts to set flower buds, well before flowers bloom. Basil is programmed to initiate flowering when it has six pairs of leaves on a stalk. For maximum production per plant, cut it back to two leaves per stem, and don't let it grow past four pairs. You can harvest the entire plant about every three weeks, and at the end of the season there will be 12 to 24 lateral branches.<br>

The later in the day you harvest basil, the longer it stays fresh. In a perforated bag kept at around 60°F, it will keep for 10 to 14 days. In contrast, refrigerated basil lasts two or three days. You can also store stems in a vase in your kitchen, close at hand for cooking. As for flower bouquets, change water in the vase every few days.<br>

To best maintain the flavor of dried basil, store it in the freezer. To quick-freeze basil, dry whole sprigs and pack them in plastic bags with the air pressed out. To dry basil, pinch leaves off the stem and spread them out in a shady, well-ventilated area. Check in 3 or 4 days, and if they don't crumble easily between your fingers, finish drying in the oven; otherwise the leaves may turn brown or black in storage. Use the lowest heat possible with the door slightly open, turn leaves for even drying, and check them frequently.

Another method is to make pesto (or even basil processed with olive oil), pack it into containers or ice cube trays, and freeze it. Once cubes are frozen, you can pop them out of trays and into plastic bags for easy storage.<br>
               </div>
            </div>



            <a href="#modal20" class="modal-open" >&#9676;  Growing Herbs(Mint)</a>
 
            <div class="modal" id="modal20">
               <div class="modal__content20">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Mint</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The mint family offers a tremendous diversity of refreshing scents and flavors for cooking, beverages, and potpourris. Bumblebees and other pollinators are attracted to the delicate flowers that appear in mid- to late summer. Some varieties sport variegated foliage for added interest in the herb garden.<br>
<h1 style=font-size:4vw>Mints for Your Garden</h1>
Spearmint (Mentha spicata) makes a soothing tea, and is a key ingredient in mint juleps. It's also the mint of mint jelly, and can be use to highlight flavors in a fruit salad or grain pilaf. Plants grow 2 to 3 feet tail and blossom in pale violet mid- to late summer. Peppermint (Mentha x piperita) is more pungent than spearmint, which tends to the sweet side. Peppermint grows to 3 feet tall, bearing smooth leaves 1 to 3 inches long. But the bouquet is bigger than these two familiar flavors. In catalogs and garden centers, you can find apple mint, chocolate mint, orange mint, and many others.<br>

<h1 style=font-size:4vw>Growing and Harvesting Mints</h1>
Mint can be terribly invasive, particularly in rich, moist soil. To keep it from overtaking your yard, confine it to a bed with edging of metal or plastic. Bury edging to a depth of 14 inches around the perimeter of the mint patch, or simply grow the plants it in pots.<br>

A single plant is plenty for a small garden, as it will quickly spread to fill its allotted space. Choose a sunny location with moderately fertile, humusy soil. Use a light mulch to retain moisture and keep leaves clean.<br>

Once plants are growing vigorously, you can harvest young or mature leaves. Don't be afraid to cut the plants back frequently to promote fresh growth. Rusty spots on leaves indicate a fungal infection; pick and destroy blemished leaves and propagate new plants from uninfected cuttings to cultivate in a new location. You can dry mint leaves on trays or by hanging bunched branches upside down in a warm, dark, well-ventilated area, such as an airy attic or outbuilding. Fresh leaves are easy to freeze too.<br>
               </div>
            </div>

            <a href="#modal21" class="modal-open" >&#9676;  Growing Herbs (Parsley)</a>
 
            <div class="modal" id="modal21">
               <div class="modal__content21">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Parsley</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Parsley deserves recognition for more than its role as a garnish. It's rich vitamins A and C, a good source of iron, and freshens your breath, to boot! Parsley is a key ingredient in tabouli, and compliments sauces, stuffing, fish, and poultry dishes.

Though curly leaf parsley (Petroselinum crispum crispum) is the most common type, flat-leaved parsley (P.c. neapolitanum) is preferred for cooking and chopping; it's easier to work with and has a stronger flavor that holds up better in storage.
<h1 style=font-size:4vw>Raising Parsley</h1>
Although parsley is a biennial, it's best to start new plants each year because the leaf flavor is not as good in the second season. To hasten germination of this slow-sprouting seed, pour warm water over seeds and let them stand overnight before planting. Sow seed in individual pots indoors or plant them outside in the garden. Parsley is very hardy: You can direct-sow seeds 2 to 3 weeks before the last spring frost. (If you sow seeds directly in the garden, keep the area as weed-free as possible so the tiny, slow-growing seedlings don't have to compete with a jungle when they sprout.)

Plants do well in sun or partial shade, and prefer a rich, moist soil. Thin plants to stand 6 to 10 inches apart, and provide an even supply of water all summer. In some regions, caterpillars such as cabbage looper and black swallowtail larvae may take up residence and nibble on plants.

<h1 style=font-size:4vw>Harvest and Storage</h1>
To harvest, cut entire leaves from the outer edge of the plant as you need them. At season's end, you can cut the entire plant for storage. To dry parsley, tie stems together and hang them in a shady, warm, well-ventilated area. Once thoroughly dried, crumble the parsley and store it in an airtight container. To freeze, remove leaves from stems, rinse, and pat them dry before placing in a zippered freezer bag.

To keep fresh parsley crisp and flavorful, place stalks in a glass of water and store it in the refrigerator. In cold regions, pot a few plants in the fall to place in a sunny window. Though you won't get a large yield, you will have some fresh, tangy sprigs to remind you of summer!<br>
               </div>
            </div>

            <a href="#modal22" class="modal-open" >&#9676; Herbs</a>
            <div class="modal" id="modal22">
               <div class="modal__content22">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Thyme</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Thymes are versatile, indeed - more than fifty varieties are judged useful for culinary or ornamental gardens! Its flavor heightens that of most any food.<br>

<h1 style=font-size:4vw>Types of Thyme</h1>
The thyme most often used in cooking is know as English thyme (a form of Thymus vulgaris). Like the other thymes, it has woody stems with small oval leaves. It can reach 8 to 12 inches high, though some varieties are smaller. Creeping varieties make attractive aromatic rock garden or edging plants.<br>

Loved for its lemon scent, lemon thyme (Thymus citriodorus) is a delightful plant for both garden and kitchen. One cultivar of lemon thyme with variegated yellow leaves and a prostrate habit is known as 'Doone Valley'. It makes a beautiful ground cover, particularly in winter when it turns strong shades of yellow, red, and green. Caraway thyme (Thymus herbabarona) is a low-growing plant with dark green leaves sporting the fragrance of its namesake herbs. Others thymes sport aromas of lavender, orange, oregano, and rose geranium!<br>

<h1 style=font-size:4vw>Growing Thyme</h1>
It's best to purchase plants rather than start thyme from seed, since it germinates slowly and unevenly. You can also start plants from cuttings if you have a friend willing to share. Thyme thrives in full sun and light well-drained soil. Space plants 9 inches apart.<br>

Where winters are very cold, mulch the plants after the ground freezes with a light mulch such as pine needles. Trim the plants a bit in the spring and summer to maintain a neat growth habit and prevent the development of too much woody growth.<br>

<h1 style=font-size:4vw>Harvest and Storage</h1>
You can harvest leaves and sprigs all summer. To dry thyme for storage, harvest sprigs in early fall, tie them together, and hang them upside down in a shady, warm, well-ventilated area to dry. Store leaves in a tightly lidded container. You can also remove leaves from the stem, dry them on a tray, or freeze them.<br>
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