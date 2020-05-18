<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FruitGuide</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../css/fruit.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="/assets/dcode.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
</head>
<body>

<div class="menu">
    <ul>
      <li><a href="../index.php"><i class="ion-ios-home"></i> Home</a></li>
      <li><a href="HerbsGuide.php"><i class="ion-ios-paperplane"></i> Herb Guide</a></li>
      <li><a href="VegetableGuide.php"><i class="ion-ios-paperplane"></i> Vegetable</a></li>
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
           $d = "FruitGuide";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_fruit/easy/try_yorself_fruit_q1.php">Easy</a></li>
      <?php else: ?>

         <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Easy</a></li>

      <?php endif; $conn->close(); ?>
<!-- _____________________________________________________________________________________________________ --> 
<!-- _____________________________________________________________________________________________________ --> 
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
                 $d = "FruitGuide";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_fruit/medium/try_yorself_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Medium</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllEasy.php">Medium</a></li>
      <?php endif; ?> 
<!-- _______________________________________________________________________________________________________-->
<!-- _______________________________________________________________________________________________________ --> 
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
                 $d = "FruitGuide";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_fruit/hard/try_yorself_fruit_q1.php">Hard</a></li>
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
        <h2 style=font-size:6vw>Fruit   Gardening  Guide &#128214;</h2>
        <p style=font-size:2vw>&#12316;Learn how to grow your favorite small and tree fruits.<br>

            Click on the stories below to find out how to grow your favorite fruits.&#12316;
        </p>
            <a class="titlu" >Apples&#127822;</a>
            <a href="#modal" class="modal-open" >&#9676;  Apple Essentials</a>
 
            <div class="modal" id="modal">
               <div class="modal__content">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Apple Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127826;Select resistant varieties to minimize apple scab and other disease problems.<br>
                    &#127826;Apple trees are not self-fertile; plant at least one other variety that blooms at the same time. Flowering crab apples that bloom at the same time will also pollinate apples.<br>
                    &#127826;Spring planting is recommended in central and northern areas. Where fall and winter weather is generally mild and moist, fall planting is successful.<br>
                    &#127826;Buy dormant, bare-root, 1-year-old trees, if possible. Dwarfs and semi-dwarfs will bear in 3 to 4 years, yielding 1 to 2 bushels per year. Standard-size trees will start to bear in 4 to 8 years, yielding 4 to 5 bushels of apples.<br>
                    <h1 style=font-size:4vw>Preparation</h1><br>
                    &#127826;Choose a site with full sun, moderate fertility, and good air circulation and water drainage.<br>
                    &#127826;Apples will tolerate a wide range of soil types.<br>
                    <h1 style=font-size:4vw>Planting</h1>
                    &#127826;When planting trees on dwarfing and semi-dwarfing rootstocks, be sure the graft union stays at least 1 inch above ground.<br>
                    &#127826;Space standard trees 30 to 35 feet apart, semi-dwarfs 20 to 25 feet apart, and dwarf trees 15 to 20 feet apart.<br>
                    &#127826;Surround each tree with a mouse guard before filling the hole completely.<br>
                    &#127826;Water, prune, and mulch young trees right after planting.<br>
                    <h1 style=font-size:4vw>Care</h1>
                    &#127826;Water young trees regularly, especially those on semi-dwarfing or dwarfing rootstocks, to ensure that the root system becomes well established.<br>
                    &#127826;Renew the mulch periodically, but pull it away from the tree in the fall so mice don't nest over the winter and eat the bark.<br>
                    &#127826;Begin training trees to their permanent framework in the first season.<br>
                    &#127826;Prune bearing trees annually.<br>
                    &#127826;See our article Fruit Pests and Diseases for controls of common apple pests such as apple maggot, plum curculio, green fruitworm, codling moth, fire blight, and powdery mildew.<br>
                    &#127826;The harvest season ranges from midsummer to late fall, depending on the variety.<br>
                    &#127826;To avoid pulling out the stem when you harvest, cup the apple in your hand, tilt it upward, and twist to separate it from the spur at the point of attachment.<br>
               </div>
            </div>




            <a href="#modal1" class="modal-open1" >&#9676;  Planting Apple Trees</a>
 
            <div class="modal1" id="modal1">
               <div class="modal__content1">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Apple Trees</h2>
                 <p class="modal__paragraph1"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127823;Choose a site with full sun, moderate fertility, and good air circulation and water drainage. Apple trees will tolerate a wide range of soil conditions. While you can improve your soil with fertilizer and mulch, other factors -- full sun, good water drainage, the right varieties, and loving care -- will go a long way toward overcoming less-than-perfect soil.<br>

Planting Particulars<br>
&#127823;In the North, plant as early in the spring as possible. In the South where fall and winter weather is moist and mild, fall planting works well; it gives the roots a good headstart on spring.<br>

&#127823;Dig a hole a foot wider and a foot deeper than the root ball, then partially fill it with topsoil or compost. Space standard trees 30 to 35 feet apart, semidwarfs 20 to 25 feet apart, and dwarfs 15 to 20 feet apart. Pound in a stake on the downwind side for support. Support is not essential for semidwarfs, but it is still a good idea for the first few years.<br>

&#127823;Place your tree in the hole and spread the roots carefully. With dwarf or semi-dwarf trees that have only one graft, make sure that the graft union (a small swelling near the base of the trunk) remains at least 1 inch above ground, or the upper variety will take root and override the desired influence of the rootstock.<br>

&#127823;Deep planting of both rootstock-dwarfed and interstem-dwarfed trees results in better tree anchorage and fewer suckers growing up from the roots. However, planting trees much deeper than they grew in the nursery can increase problems with crown rot. With interstem varieties, the interstem section should be half above and half below the ground.<br>

&#127823;Before you fill the hole, place a mouse guard around the trunk to extend about 10 inches or so above the ground. Water your fledglings thoroughly. Then mulch with clean straw or some other weed-free organic material to keep the moist and to control weeds., tilt it upward, and twist to separate it from the spur at the point of attachment.<br>
               </div>
            </div>

            <a href="#modal2" class="modal-open" >&#9676; Choosing Apple Varieties</a>
 
            <div class="modal" id="modal2">
               <div class="modal__content2">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Choosing Apple Varieties</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127823;If you were told about Johnny Appleseed as a schoolchild, you may hope to grow apples as easily as he did, dropping seeds in the ground and leaving a trail of apple-laden trees across the continent. Unfortunately, it's not that easy. Apples require a fair amount of patience and planning. If you want a choice crop, you'll have to control insects, diseases, and other pests, keep an eye on the weather, and prune annually. And your first harvest will only come 3 years or more after planting. But the reward picking apples from your own garden is worth the effort.<br>

<h1 style=font-size:4vw>Orchard Planning</h1>
&#127823;When setting up a home orchard, you will find there are dozens of apple varieties to choose from. Talk to local nursery people, your county extension service agent, or other gardeners to help you select varieties that do well in your area. Rootstock choice determines whether a tree is a dwarf, semidwarf, or standard size. Dwarf trees grow to be 8 to 12 feet tall and just as wide; semidwarf trees grow to be 12 to 18 feet tall and wide; and standard trees grow to be 18 to 22 feet tall and wide. In general, semi-dwarfing rootstocks for apples are recommended, if space permits, as true dwarfs are somewhat less hardy and therefore less suited to the coldest parts of the country.

&#127823;The same rootstock combined with different varieties will produce trees of different sizes with differing degrees of vigor. Spur-type strains of a variety (for example, 'Winespur' is a spur-type strain of 'Winesap') produce more fruit-bearing spurs and less vegetative shoots than their parent variety. Not all rootstocks, nor the apple varieties grafted onto them, will be successful in every region. Most varieties survive well in USDA Hardiness Zones 5 through 7; there's a smaller, but still excellent, group of cold-hardy choices for zones 2 through 4. There are several low-chill varieties for the mild-winter areas of zones 8 through 10. Check apple varieties for cold hardiness, disease-resistance, and pollination requirements before deciding on a variety.

<h1 style=font-size:4vw>Varieties Abound</h1>
&#127823;Try to pick pairs of different early, mid-season, or late varieties to ensure that pollen of two varieties is available at the same time. Depending on your variety selection, you can have fresh apples from early July until early November in many areas. Some apple varieties are best for cooking, others are good for eating fresh, and some are delicious for both. Varieties highly rated for eating fresh are numerous, including 'McIntosh' and other "Mac" types such as 'Jonamac' and 'Jerseymac', which bear fruit earlier than 'McIntosh'. 'Prima', 'Empire', and 'Macoun' are excellent for early, mid-season, and late harvests, respectively, and are enjoying increasing popularity. If you enjoy baked apples, consider 'Cox Orange Pippin' or 'Duchess' old favorites, or more recent choices such as 'Mutsu', 'Melrose', and 'Jonagold', which are excellent for cooking as well as eating fresh.

&#127823;Buy dormant, bare-root trees, at a local nursery. Get 1-year-old whips, if possible; if not, be sure the trees are not more than 3 years old. Younger trees will become established more quickly, are less costly, and allow you more control in the development of a good framework of branches.
               </div>
            </div>


            <a href="#modal3" class="modal-open" >&#9676;  Apple Tree Care </a>
 
            <div class="modal" id="modal3">
               <div class="modal__content3">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Apple Tree Care</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127823;Water young trees regularly, especially those on semidwarfing or dwarfing rootstocks, to ensure that the root system becomes well established. Renew mulch periodically, but pull it away from the tree in the fall so mice don't nest over the winter and eat the bark.<br>

<h1 style=font-size:4vw>Training Young Trees</h1>
&#127823;Train dwarf apple trees to the central leader system. In the early years of growth, it's important to create a strong framework of scaffold branches because apples can bear heavy crops year after year. Semidwarfing trees can be trained to a central leader shape, but are more easily trained to a modified leader system. Standard trees should also be trained to a modified leader. Prune bearing trees annually. Larger trees need more pruning and you'll eventually have to use a ladder to get the job done. Spur-type apples require less pruning than other trees because they produce more fruiting spurs and less vegetative growth. Apples are often grown without any thinning other than what nature provides in the annual spring drop. However, to avoid potential disease and insect problems, you might want to thin after the natural fruit drop (about 4 to 6 weeks after bloom) to one fruit per cluster, or about 6 to 8 inches between fruit.<br>

<h1 style=font-size:4vw>Potent Pests</h1>
&#127823;Home gardeners who wouldn't dream of using pesticides on other crops may have to consider this option with apples. The fruit are subject to many insect and disease attacks that twist, perforate, and mangle them; most caretakers must spray to get an acceptable crop. But there are alternatives. You can avoid using fungicides by selecting disease-resistant varieties such as 'Prima', 'Priscilla', 'Liberty', and 'Freedom'. These have been field tested for many years and require no spraying for apple scab, cedar-apple rust, and other common diseases, while most other varieties require periodic spraying every spring and summer after planting.<br>

&#127823;Apple maggots, plum curculios, green fruitworms, and codling moths are pests that can trouble a crop. Annual spray programs are usually necessary. Check with your extension service to find approved pest prevention programs for your area. Other pests such as scales, mites, and aphids should be controlled by natural parasite and predator populations if you haven't used a lot of sprays. For problem areas, you can try an anti-insect oil, usually available where pesticides are sold. Spray it in the spring when your apple trees are in the tight cluster stage: after the leaves have unfolded from the fruiting cluster, but before the buds begin to show pink.<br>

<h1 style=font-size:4vw>Harvesting</h1>
&#127823;Most apples are ready to pick when they separate easily from the tree. With some varieties, you may notice the fruit softening a bit or apples may start dropping. Another indicator is the color of seeds in the core -- when they turn dark brown, the apples are ready. Don't yank on the apple to pick it; instead, twist the fruit upward with a rotating motion. Early-season apples tend to start bearing at a younger age; but they generally don't keep long after harvesting them. Many late-season types have good keeping qualities -- they'll keep for a few weeks in a cool place. In a good root cellar, storage apples can keep 5 months or so.<br>
               </div>
            </div>


            <a class="titlu">Apricots&#127825;</a>


            <a href="#modal4" class="modal-open" >&#9676;  Apricot Essentials</a>
 
            <div class="modal" id="modal4">
               <div class="modal__content4">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Apricot Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127825;Plant new trees in early spring, fall planting in mild areas can be successful if trees are dormant.<br>
                    &#127825;Buy dormant, bare-root, 1-year-old trees, if possible.<br>
                    &#127825;Although most varieties are self-fertile, fruit set is better when planted with one or two other varieties nearby. Trees will start bearing in the third or fourth season.<br>
                    &#127825;Expect 3 to 4 bushels of fruit from a standard-size tree, 1 to 2 from a dwarf variety.<br>
<h1 style=font-size:4vw>Preparation</h1>
&#127825;Choose a site in full sun. Northern growers should put trees on the north side of a building so trees warm up as late as possible in the spring. Apricot trees do well in a wide range of well-drained soils.<br>
<h1 style=font-size:4vw>Planting</h1>
&#127825;Space standard-size trees about 25 feet apart; plant genetic dwarfs 8 to 12 feet apart.<br>
<h1 style=font-size:4vw>Care</h1>
&#127825;Apply a small amount of nitrogen fertilizer each spring. Where apricots are easily grown, train to an open center. For colder areas use a modified central leader.<br>
&#127825;Prune bearing trees annually to encourage new fruiting spurs.<br>
&#127825;When fruits are 1 inch in diameter, thin to 3 to 4 fruits per cluster to increase the size of remaining apricots and prevent over bearing one year, little the next.<br>
&#127825;See our article Fruit Pests and Diseases for controls of common apricot pests such as codling moths, peach tree borers, plum curculios, and brown rot disease.<br>
<h1 style=font-size:4vw>Harvesting</h1>
&#127825;Harvesting peaks in July in mild areas and in August in colder ones. The picking season is short.<br>
&#127825;Pick when fruits are fully colored and skin gives slightly when pressed.<br>
               </div>
            </div>


            <a href="#modal5" class="modal-open" >&#9676;  Growing Apricots in the North </a>
 
            <div class="modal" id="modal5">
               <div class="modal__content5">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Apricots in the North</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127825;Apricots are much hardier than most people think. The dormant trees tolerate cold temperatures as low as -20° F, or a typical USDA Zone 5 winter. However, because they have a low chilling requirement (400 to 900 hours), they respond to any warm period in late winter or very early spring by bursting forth with blossoms that are then easily killed by a frost. The longer you keep the trees from blooming, the more likely it is they'll escape a late frost.<br>

<h1 style=font-size:4vw>Make Them Bloom Later</h1>
&#127825;To encourage your trees to bloom late, plant them where they'll stay cool in the spring. The north side of a building is a good location. Set the tree where it is shaded in the spring: as the sun gets higher in the summer, it will get plenty of light. You can also delay blooming by mulching the roots heavily in late winter so the soil will thaw later. Some years it may be too cold for bees to be out pollinating when apricots bloom, which could limit the crop. Some smaller insects do come out and pollinate blossoms whenever temperatures rise even for a short period. Because these insects don't fly very far, you may consider planting a few apricots closer to each other than the 25-foot distance usually recommended.<br>

<h1 style=font-size:4vw>Apricot Choices</h1>
&#127825;Although most apricots are considered self-fertile, some, especially several of the hardier ones such as 'Moongold' and 'Sungold', are not, so check carefully when buying or ordering trees. You may need another variety for cross-pollination. Standard trees can grow 20 to 30 feet tall and can live up to 75 years or more in ideal climates. In the North, where the trees are under unusual stress, they'll probably survive about 15 years (more if the climate is favorable) and grow to be about 20 feet tall.<br>
               </div>
            </div>



            <a href="#modal6" class="modal-open" >&#9676;  Planting Apricots</a>
            <div class="modal" id="modal6">
               <div class="modal__content6">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Apricots</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127825;When planting apricots, choose a site in full sun. In cold climates, set trees on the north side of a building, so that trees will warm up later in the spring and blossoms will be delayed until the danger of frost has passed. Apricots are not very particular about soil type as long as it is well drained.<br>

<h1 style=font-size:4vw>Planting Particulars</h1>
&#127825;Plant standard-size trees about 25 feet apart; space genetic dwarfs 8 to 12 feet apart. Place your tree in the hole and spread the roots carefully. Apricot trees need to be watered slowly and deeply, out past the root zone. This means irrigating so the water penetrates about three feet deep and as wide as the tree's canopy. Deep watering helps trees survive drought and assists with fruit sizing during late April and May. Mulch around the trees to retain moisture and keep grass down.<br>
               </div>
            </div>


            <a href="#modal7" class="modal-open" >&#9676;  Growing Apricots</a>
            <div class="modal" id="modal7">
               <div class="modal__content7">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Apricots</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127825;Apricots are beautiful to look at and wonderful to eat, but many people still don't fully appreciate them. Fresh apricots are difficult to find in many markets because they don't ship well. Apricot trees can be a lovely centerpiece in a yard: their blossoms are white or pink; their foliage is bronze in the spring, deep green in the summer, and yellow in the fall.<br>

                    &#127825;The commercial growing range for apricots is limited, but home gardeners can grow them successfully in many parts of the country by selecting the right variety and location for the tree. Genetic dwarf varieties can be grown in containers. In areas with severe winters, you can wheel them into the garage or other sheltered area until spring warms things up outdoors.<br>

<h1 style=font-size:4vw>Planning for Success</h1>
&#127825;Apricots bloom earlier in the spring than other fruit trees and have only a limited tolerance of high summer heat. While the tree is fairly hardy (some varieties withstand winter lows down to -20° F), it can bloom too early--if you get a warm spell in late February or early March. In areas that have late frosts, you can choose some of the newer varieties developed in the North that bloom later and produce well in harsh climates.<br>

<h1 style=font-size:4vw>Varieties</h1>
&#127825;When choosing a variety, select one recommended for your zone and climate that will flower after the last spring frost in your area and that will live through your winter. In preferred apricot growing areas such as Santa Clara and San Benito counties in California, you will want to consider the ripening period--early, midseason, or late. Most varieties are self-fertile; that is, one variety is all you need for trees to fruit. The full-size trees generally grow be between 20 and 30 feet tall and live about 75 years. Most will start bearing in their third or fourth year. Expect 3 to 4 bushels of fruit from a standard-size tree, 1 to 2 from a dwarf variety.<br>

&#127825;Reliable dwarf apricot trees are rare, if you really want a dwarf tree, try a genetic dwarf such as 'Stark Golden Glo' or 'Garden Annie' apricot. These trees are naturally small, so they don't need to be grafted onto dwarfing stock. Buy dormant, bare-root, 1-year-old trees, if possible. Plant trees in early spring in the North and East; in California and other mild-winter areas, you can plant in the fall.<br>
               </div>
            </div>
        

            <a href="#modal8" class="modal-open" >&#9676;  Care for Apricots</a>
            <div class="modal" id="modal8">
               <div class="modal__content8">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Care for Apricots</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127825;Apricots need water consistently throughout the growing season. Lack of moisture in early summer will result in small fruits; later in the season, it can interfere with bud set for next year's crop. You will probably need to water deeply every 10 to 14 days if there is no rain. Where there is plenty of moisture in the winter and spring, you may need to water only three or four times during the summer. Apply a small amount of nitrogen fertilizer each spring.

<h1 style=font-size:4vw>Training Young Trees</h1>
&#127825;Many growers in western states train young apricot trees to a vase shape (open center). In harsher climates a modified central leader is a better idea. Fruit develops on spurs of 1-year-old branches; the spurs live for 3 or 4 years. Weak branches require thinning or heading to strong lateral branches to encourage new fruiting wood and expose more of the inner parts of the tree to sun and air. Remove fruiting wood that is 6 years old or older. Since apricots bloom very early and many flowers may be killed by frost, wait until after petal fall to prune.

&#127825;Under good growing conditions trees produce too many fruits. If all the fruits are allowed to stay on the trees, your apricots will be small, and the weight of the fruits could break the branches. Thin out the weakest fruits to the three or four healthiest apricots per cluster. The best time to thin is when fruits measure about 1 inch across. If you have only one or two trees, hand-pick the excess fruits.

<h1 style=font-size:4vw>Apricot Pests and Diseases</h1>
&#127825;Apricots are relatively free of pests and diseases. However, in areas where humidity tends to be high, brown rot disease can pose serious problems. Aside from the plum curculio, the occasional codling moth, and stray peach tree borer, few insects bother these trees. Protect trees from gophers when planting.

<h1 style=font-size:4vw>Harvesting</h1>
&#127825;The harvest season for apricots is July in mild climates and August in colder ones, though different varieties can be slightly earlier or later. Expect 3 to 4 bushels of fruit from a full-size tree, 1 to 2 from a dwarf. Pick the fruits after they attain a rich apricot color and give slightly when pressed. The apricot season is short, so try to plan around it. If you leave for a 2-week vacation at the crucial time, you may come back to bushels of spoiled fruit on the ground.<br>
               </div>
            </div>

            <a class="titlu">Blackberries &#127827;</a>

            <a href="#modal9" class="modal-open" >&#9676; Blackberry Essentials</a>
            <div class="modal" id="modal9">
               <div class="modal__content9">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Blackberry Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
<h1 style=font-size:4vw>Choose virus-free plants.</h1>
&#127827;Plan a training system to match the growth habit of your variety - either upright or trailing.<br>
&#127827;Plant in early spring in most areas; in mild-winter areas of the South and Pacific Coast, plant in fall or winter.<br>
<h1 style=font-size:4vw>Preparation</h1>
&#127827;Choose a well-drained site in full sun at least 300 feet from any wild blackberries.<br>
&#127827;Construct trellises for trailing varieties before planting.<br>
<h1 style=font-size:4vw>Planting</h1>
&#127827;Plant upright varieties at 3-foot intervals in rows 8 feet apart. Set trailing varieties 5 to 8 feet apart in rows 6 to 10 feet apart.<br>
&#127827;Set plants 1 inch deeper than they were grown in the nursery.<br>
<h1 style=font-size:4vw>Care</h1>
&#127827;Cultivate shallowly; the roots are near the surface.<br>
&#127827;Mulch with a thick layer of shredded bark, wood chips, leaves, or hay.<br>
&#127827;Plants usually don't require pruning the first year. Prune out fruiting canes as soon as berries are harvested each summer, and select replacement canes for the following year.<br>
&#127827;Fertilize early each spring with 1/2 to 3/4 cup of a complete fertilizer such as 5-10-10 or 8-8-8 per plant. Sprinkle it in a band 12 to 24 inches from canes and hoe it lightly into the soil.<br>
&#127827;To prevent chilling injury in the winter, lay the canes of trailing types on the ground in winter and cover with a thick layer of mulch.<br>
&#127827;See our article Fruit Pests and Diseases for controls of common blackberry pests such as viruses, aphids, mites, and raspberry crown borers.<br>
<h1 style=font-size:4vw>Harvesting</h1>
&#127827;Berries should be harvested every 2 to 4 days when ripe.<br>
&#127827;Pick berries in the cool of early morning. Refrigerate berries immediately after harvesting.<br>
               </div>
            </div>


            <a href="#modal10" class="modal-open" >&#9676; Planting Blackberries</a>
            <div class="modal" id="modal10">
               <div class="modal__content10">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Blackberries</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127827;Blackberries need full sun. They aren't fussy about soils, although good drainage is important. If the soil has a good amount of humus, so much the better, but average fertility is all they need. Do not plant blackberries where any other brambles have been growing; diseases can build up over time and one of the easiest ways to avoid problems is to start fresh on a new site. Because wild blackberries and raspberries can harbor diseases and pests, try to keep your garden plants at least 300 feet from any wild relatives. Also avoid planting where any nightshade family members - tomatoes, potatoes, eggplants, peppers - grew in the last 2 years, as they can transmit verticillium wilt to blackberry plants.<br>

                    <h1 style=font-size:4vw>Planting Particulars</h1>
                    &#127827;Plants should be set out in early spring. If you get your plants from a mail-order company, order them at least a month or two before planting time and indicate the week you'd like the plants to arrive. If you can't plant the day they arrive, keep plants, well wrapped, in a cool place. If they are loose and unpacked, set them temporarily in a shallow trench at the edge of the garden and fill it with soil so the roots don't dry out. Nursery plants may have a 6- or 8-inch dormant cane extending from the root ball. You can use it as a handle in moving the plants and later as a row marker. Set the plants in the ground 1 inch deeper than they were grown in the nursery, then firm moist soil around the roots.<br>
                    
                    &#127827;Plant upright varieties at least 3 feet apart in the row, with 8 feet between rows. For trailing types, allow 5 to 8 feet between plants and 6 to 10 feet between rows. The plants are relatively drought tolerant, but they'll need a steady supply of water to get them established. In the second and subsequent years, plants need 1 to 2 inches of water per week during fruit development, especially if the weather turns dry and windy, a bit less once the crop is harvested. Drip irrigation is a good watering method for blackberries.<br>
                    
                    <h1 style=font-size:4vw>Planting Particulars</h1>
                    &#127827;Plants should be set out in early spring. If you get your plants from a mail-order company, order them at least a month or two before planting time and indicate the week you'd like the plants to arrive. If you can't plant the day they arrive, keep plants, well wrapped, in a cool place. If they are loose and unpacked, set them temporarily in a shallow trench at the edge of the garden and fill it with soil so the roots don't dry out. Nursery plants may have a 6- or 8-inch dormant cane extending from the root ball. You can use it as a handle in moving the plants and later as a row marker. Set the plants in the ground 1 inch deeper than they were grown in the nursery, then firm moist soil around the roots.<br>
                    
                    &#127827;Plant upright varieties at least 3 feet apart in the row, with 8 feet between rows. For trailing types, allow 5 to 8 feet between plants and 6 to 10 feet between rows. The plants are relatively drought tolerant, but they'll need a steady supply of water to get them established. In the second and subsequent years, plants need 1 to 2 inches of water per week during fruit development, especially if the weather turns dry and windy, a bit less once the crop is harvested. Drip irrigation is a good watering method for blackberries.<br>
               </div>
            </div>

            <a href="#modal11" class="modal-open" >&#9676; Blackberry Care & Harvesting</a>
            <div class="modal" id="modal11">
               <div class="modal__content11">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Blackberry Care & Harvesting</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    &#127827;Each year blackberry plants produce new canes from the crown just below the soil surface, and from roots that extend some distance out. Each cane lives for 2 years. The first year a cane produces only leaves, the second year it bears fruit. It won't fruit again, so old canes should be pruned out as soon as possible after the harvest to prevent disease from attacking the plant. Pruning reduces stress on the plants. Keep enough fruiting canes to have a good crop and remove the rest along with undesired root suckers each year. There are two different types of blackberries, upright and trailing, and each requires a different pruning method. The upright ones produce arching canes that can just support themselves. Included in this group are the semi-uprights, which flop a bit but can be treated just like the uprights. The trailing types sprawl and must be supported on wires.<br>

                    &#127827;The two groups also bear their fruit differently: upright kinds have fruit at the tips of the canes, trailing kinds have berries all along their length. The trailing types tend to be less hardy than the uprights, but they are usually more productive. Your choice depends on where you live, how much space you have, and the variety of fruit you prefer.<br>

<h1 style=font-size:4vw>Post System</h1>
&#127827;If you want to support upright-growing blackberry plants, you can train them to grow neatly around posts. Space plants 3 feet apart in rows. Each plant should be attached to a 6-foot post about the thickness of a wrist or to a 2- by 2-inch board sunk about 1 foot into the ground. When the new canes (the leafy ones) are about hip high, pinch back the growing tip of each one; this encourages the canes to branch out during the rest of the season. The next summer the leafy canes become fruiting canes, bearing amazing clusters of fruits at a height where they're easy to pick. Later in the summer, immediately after you've harvested the blackberries, cut off the fruiting canes close to the ground.<br>

<h1 style=font-size:4vw>Wire Trellis System</h1>
&#127827;Give trailing plants a wire trellis or fence to grow on instead of a post, and spread the canes out as much as possible. How much the canes will grow in 1 year varies; one way to handle the very long ones is to wrap them around two strands of wire. The fruit dangles within easy reach, minimizing scratches while harvesting.

<h1 style=font-size:4vw>Wintering Over</h1>
&#127827;In northern areas, where winter protection is necessary, set the canes on the ground for the winter, cover them with clean straw or leaves if you don't get much snow, then carefully place them up on the wire in early spring before they start growing again. In milder climates, train the new canes on the wire as soon as you've cut out the fruiting canes and leave them right there through the winter. Each year remove the canes that have fruited and allow several leafy canes to replace them. In areas with long growing seasons, the vines may get extremely long and require a dormant-season pruning. Cut them back to about 8 to 10 feet in late winter. Fruiting is heaviest near the base of the canes, so you won't be losing much of the crop and the resulting berries will be larger.<br>

<h1 style=font-size:4vw>Harvesting</h1>
&#127827;Berries will ripen over a period of several weeks and should be harvested every 2 to 4 days. Pick berries in the cool of early morning and avoid bruising them. Refrigerate the berries immediately; they'll keep for 4 to 5 days at 35° F if picked when warm, berries don't keep as long.<br>
               </div>
            </div>
            
            
            <a href="#modal12" class="modal-open" >&#9676; Growing Blackberries</a>
            <div class="modal" id="modal12">
               <div class="modal__content12">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Blackberries</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The great tangles of thorny blackberry vines that sprawl over abandoned farmland in some parts of this country are a far cry from the tamer types that, with a little coaxing, grow tidily in even a small backyard. Blackberries are among the easiest fruits to grow at home. Cultivated varieties have larger berries than the wild types. They'll start to bear the second year after planting and continue for about 15 years. Trained properly, four plants, each with a 3-by-3-foot growing area, can supply enough berries for a family of four. Where winters are not too severe, the new thornless varieties do well.<br>

<h1 style=font-size:4vw>Blackberry Relatives</h1>
&#127827;Blackberries are classified botanically as Rubus, a genus that also includes raspberries. Blackberries may be called dewberries in some areas. Boysenberries, marionberries, or loganberries are not separate species, just common names for the blackberry varieties 'Boysen', 'Marion', and 'Logon'.<br>

<h1 style=font-size:4vw>Planning Your Patch</h1>
&#127827;You may be tempted to start your blackberry patch with plants from a neighbor; blackberries are prolific and tend to spread widely, so people often give plants away. It's easy to do, too. The upright types form suckers up to 10 feet from the parent so you can just dig up the well-rooted young shoots in the spring and move them. Trailing blackberries will root where the tip of a cane touches the ground, making a new plant in no time. But don't accept donated plants unless you're sure your neighbor's patch is healthy.<br>

&#127827;Viruses are a widespread problem with blackberries. Symptoms aren't dramatic, so early detection may be difficult. Plants decline gradually, producing less and less until you're left with berryless brambles. There's no way to cure such infections. If possible, purchase certified virus-free plants from a reputable nursery. Once you have a few good plants you can multiply them by digging up suckers or by rooting cane tips.<br>
               </div>
            </div>








            <a class="titlu">Cherries &#127826;</a>

            <a href="#modal13" class="modal-open" >&#9676; Cherry Essentials</a>
            <div class="modal" id="modal13">
               <div class="modal__content13">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Cherry Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    &#127826;Tart cherries thrive in zones 4 to 6, sweet cherries in zones 5 to 7.<br>
                    &#127826;Plant cherry trees in early spring.<br>
                    Tart cherries are self-fertile. Sweet cherries need a compatible variety for cross-pollination.
                    Choose sweet cherry varieties that are especially adapted to your climate and resistant to the major diseases in your area.
                    Standard-size trees start bearing in about their fourth year, dwarf trees in about their third year.
                    One mature, standard-size tart or sweet cherry tree will produce 30 to 50 quarts of cherries each year; a dwarf tree, about 10 to 15 quarts.<br>
                    <h1 style=font-size:4vw>Preparation</h1>
                    &#127826;Choose a sunny site with good air circulation and deep, well-drained soil. Avoid low areas or places surrounded by buildings or shade trees, where cold air settles.<br>
                    <h1 style=font-size:4vw>Planting</h1>
                    &#127826;Plant sweet cherries on standard rootstocks 35 to 40 feet apart; dwarfs, 5 to 10 feet apart. Space tart cherries on standard root stocks 20 to 25 feet apart; dwarfs, 8 to 10 feet apart.<br>
                    &#127826;Set trees on standard rootstocks with the graft union a few inches below the soil level. Set trees on Colt dwarfing rootstock with the graft union several inches above the soil level.<br>
                    <h1 style=font-size:4vw>Care</h1>
                    &#127826;Train dwarf tart cherry trees to a central leader. Train semi-dwarf or standard-size cherry trees to a modified leader.
                    Prune trees every year in late winter to encourage the growth of new fruiting wood. Don't prune in the fall.
                    Fertilize each spring until trees start to bear, then fertilize only after harvest each season.
                    See our article Fruit Pests and Diseases for controls of common cherry pests such as plum curculio, cherry fruit fly, brown rot, and cherry leaf spot.
                    Prevent birds from eating your harvest.<br>
                    <h1 style=font-size:4vw>Harvesting</h1>
                    &#127826;The sugar content of cherries rises dramatically in the last few days of ripening, so wait until they turn fully red, black, or yellow (depending on the variety) before harvesting.
                    Harvest as the cherries ripen over the course of about a week.
                    Pick the cherries with the stems attached, being careful not to tear off the fruit spur that will produce fruit year after year.<br>
               </div>
            </div>


            <a href="#modal14" class="modal-open" >&#9676; Cherry Varieties</a>
            <div class="modal" id="modal14">
               <div class="modal__content14">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Cherry Varieties</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The cherries sold fresh in most markets are sweet cherries -they have a thick, rich, almost plumlike texture and sweet taste. If you like your cherries cooked, then you have probably eaten tart cherries, which are juicier and slightly sour. While sweet cherries certainly have their virtues, tart cherries are delicious in preserves and pies and are much easier to grow. Although sweet and tart cherries have very similar growing requirements and are subject to the same pests, tart cherries are more tolerant of cold winters and long, hot, humid summers and have fewer disease problems.

The tart cherry trees are smaller so they are easier to harvest, prune, and spray. There are many varieties of sweet and tart cherries that are self-fertile, so you can plant just one tree and still harvest fruit. Why not start with one beautiful tart cherry tree to enhance your edible landscape? In time, perhaps you'll want to add more tart cherries or, if you have the right growing conditions, add some sweet cherry trees.<br>

<h1 style=font-size:4vw>Tart Varieties</h1>

Tart cherry trees are ornamental, and the fruit makes wonderful pies, cobblers, and toppings. To get the most from your trees, start with varieties suitable for your climate and look for certified virus-free trees. Tart cherries are hardy in USDA Hardiness Zones 4 through 6. The standard-size 'Montmorency' has been the leading tart cherry variety for many years. It yields heavy crops of large, bright red, high-quality tart cherries in mid- to late June (in zone 6). The tree is available on a semidwarfing rootstock, which produces a tree two-thirds standard size, as well as on standard-size rootstock.

Several genetic dwarf varieties are available. These are naturally small and can be grafted onto the standard rootstocks. They include several spur-type 'Montmorency' sports (varieties that arise from a bud mutation) and 'Meteor', all semidwarfs, and 'North Star', a full dwarf.<br>

<h1 style=font-size:4vw>Sweet Varieties</h1>

Sweet cherries aren't for everyone, but for those willing to choose varieties carefully, prune and spray regularly, and deal with marauding birds, the rewards are great. Choosing varieties adapted to your area and resistant to its major diseases is critical. Most sweet cherry varieties are hardy in zones 5 through 7; in colder zones, choose varieties with the hardiest wood and buds. A few sweet cherry varieties resist the problems that plague most sweet cherries- fruit cracking, brown rot, and cherry leaf spot. Some are very hardy, a few are only mildly attractive to birds, and some are self-fertile and genetically dwarfed.

Some of the traditional cherry favorites such as 'Bing' have their drawbacks, especially concerning disease susceptibility. In most areas, stay clear of most commonly sold varieties. 'Bing' can be grown successfully on the West Coast where winters are mild and dry air makes fruit cracking and brown rot less of a problem, but seldom does well in the East. Even where 'Bing' can be grown, there are better varieties for home gardeners. 'Starkcrimson' is a self-fertile genetic dwarf with bigger, sweeter fruit. 'Compact Stella' another self-fertile sweet variety. 'Glacier' produces large, mahogany red fruit in midseason. While there are some self fertile sweet cherry varieties, most should be grown with at least one other compatible variety near by to insure proper pollination.

Which rootstock the variety is growing on will make a difference in its performance and hardiness. Cherry rootstock varieties include 'Mazzard','Mahaleb', and 'Gisele'. These not only dwarf a cherry tree, but also provide disease resistance and better performance in poor soils. Choose a rootstock compatible with your variety and one recommended for your soils and climate.<br>
               </div>
            </div>

            <a href="#modal15" class="modal-open" >&#9676; Cherry Care & Harvesting</a>
            <div class="modal" id="modal15">
               <div class="modal__content15">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Cherry Care & Harvesting</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Dwarf cherry trees are most productive when trained to a central leader. The lowest branch should be about 2 feet off the ground, and the limbs should be spaced at least 8 inches apart. Train semidwarf or standard-size trees to a modified leader. Prune the trees every year in late winter to encourage new fruiting wood to grow. After harvest, cut back overvigorous branches to control the size of the tree. Summer pruning can be done any time until early August; the later you prune, the smaller you'll keep the tree. Don't prune in the fall, as that leaves the tree more susceptible to winter injury.

<h1 style=font-size:4vw>Fertilizing Cherries</h1>
Control grass or other competing vegetation around the tree for the first few years. A heavy mulch from the tree trunk to the tree's dripline helps conserve soil moisture and control weeds. Fertilize each spring until trees start to bear. Once bearing, cherries need little irrigation or fertilizer in most areas.

If you apply nitrogen to bearing trees, wait until after the fruit has been harvested, but apply it no later than midsummer. This will give the tree a boost toward producing plenty of sugars in its leaves to ripen next year's crop. To prepare the tree for winter, it's a good idea to paint tree trunks white or wrap them with white plastic tree guards. Pull mulch away from the trunk and be sure to harden the tree off.

<h1 style=font-size:4vw>Cherry Tree Pests</h1>
Be on the lockout for problems with pests and diseases. In the southern parts of the tart cherry-growing area, the only worm to infest the fruit is the larva of the plum curculio, which also attacks sweet cherries. The cherry fruit fly may infest sweet cherries and tart cherries are susceptible to black cherry fruit flies. The apple maggot and peach tree borer may also cause problems.

Brown rot and cherry leaf spot affect both tart and sweet cherries. Black knot and powdery mildew are potential problems for some areas.

Prevent birds from decimating your crop with netting, scare tactics, or barrier-type controls.

<h1 style=font-size:4vw>Harvesting</h1>
One mature, standard-size tart or sweet cherry tree will produce 30 to 50 quarts of cherries a year; a dwarf tree, about 10 to 15 quarts. Wait until the cherries turn fully red to harvest them; the sugar content rises dramatically in the last few days of ripening. You'll need to go over the tree every other day for about a week. Pick the fruit with stems attached, but be careful not to tear off the woody fruit spur, which will continue to produce fruit year after year. If you're using a mechanical cherry pitter, pick the cherries by leaving the stems on the trees. Use these cherries up soon after you pick them because they'll leak juice and may spoil if left out. Using a hand-cranked cherry pitter, you can pit a quart of cherries in 10 minutes.<br>
               </div>
            </div>
            
            
            <a href="#modal16" class="modal-open" >&#9676; Planting Cherries</a>
            <div class="modal" id="modal16">
               <div class="modal__content16">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Cherries</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Cherries need a sunny site with good air circulation and deep, well-drained soil. Although cherry wood is as winter-hardy as some apple varieties, the flower buds are tender once they start to swell. An elevated site will minimize frost-killed blossoms. Avoid low areas or places surrounded by buildings or shade trees, where cold air settles. Poorly drained soils can cause trees to die in a wet year even though they may have lived through several years of drier weather. Cherries are susceptible to verticillium wilt and other diseases, so don't plant them where verticillium has infested the soil or where tomato family crops, melons, or strawberries grew the previous two seasons. Also avoid planting where peach or cherry trees once grew.

<h1 style=font-size:4vw>Planting</h1>
Plant sweet cherries on standard rootstocks 35 to 40 feet apart; dwarfs, 5 to 10 feet apart. Space tart cherries on standard rootstocks 20 to 25 feet apart; dwarfs, 8 to 10 feet. Set trees on standard rootstocks with the graft union a few inches below the soil level. Set trees on Colt dwarfing rootstock with the graft union several inches above the soil line.<br>
               </div>
            </div>




            <a class="titlu">Citrus &#127819;</a>

            <a href="#modal17" class="modal-open" >&#9676; Growing Citrus</a>
            <div class="modal" id="modal17">
               <div class="modal__content17">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Growing Citrus</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
                    Most people don't realize just how large the citrus family is. What you see in the supermarket is only a small portion of what can be grown. Pummelos, blood oranges, limequats, and myriad mandarin varieties offer exciting new taste experiences and landscape possibilities.

<h1 style=font-size:4vw>Commercial Citrus Belt</h1>
The commercial citrus belt extends roughly from California through Arizona, Texas, along the Gulf Coast, and into Florida; but home growers are not necessarily limited to this area. Small changes in elevation and distance from the coast can make a significant difference in minimum temperatures at a given location. Warm spots around buildings and on hillsides can provide safe growing areas in sections that would not appear suitable from a climate map. The important thing to know is a variety's tolerance to cold, especially the minimum temperature it can tolerate. There are many hardy varieties that can be grown much farther north or inland. If your citrus trees are planted in containers and moved to protected locations during cold weather, you can even grow them in Minnesota or Maine.

<h1 style=font-size:4vw>Where Citrus Grows</h1>
The traditional citrus climate extends from northern California down through southern California and into the low Arizona desert. There is a break in New Mexico, a state that has mostly high elevation with cold winters. Then the citrus belt picks up again in southern Texas and extends along the Gulf Coast and into Florida. Not all types of citrus can be grown in all parts of the citrus belt. Climatic differences within the region markedly affect fruit characteristics and quality. What can be grown in Florida cannot always be grown in California and vice versa. The warm, dry days and cool nights of California develop brightly colored fruit with balanced sugar and acid and thick rinds. The warm, humid days of Florida and the Gulf Coast are usually accompanied by equally warm nights; such even temperatures promote lighter colored fruit without pronounced acidity.

<h1 style=font-size:4vw>Humidity and Temperature</h1>
Humidity and day-to-night temperature fluctuations also influence which varieties are best adapted to an area. Almost all lemons in the supermarket come from western states because in Florida lemons do not develop enough acidity. On the other hand, some types of citrus naturally high in acids, such as many tangelos, are too tart when grown in California. They reach peak quality and sweetness only in Florida or along the Gulf Coast. Citrus types have varying degrees of hardiness, so tolerance to low winter temperatures is often the most important factor in determining which varieties you can grow. The foliage of limes is usually damaged if temperatures fall below 32° F; oranges are damaged at about 26° F to 28° F.

Kumquats and kumquat hybrids can withstand temperatures as low as 18° F, but the ripe fruit is usually less hardy than the foliage. The duration of the cold and the position of the tree in your garden also influence how badly trees are damaged. Each citrus type has a heat requirement that must be met before the fruit will become sweet. Grapefruits need the most heat and only reach peak quality in the California and Arizona deserts, southern Texas, and Florida. Lemons can be grown in cooler climates because they don't need to sweeten.

<h1 style=font-size:4vw>Citrus Flowering Habits</h1>
Citrus trees are evergreen and can have both flowers and fruit at the same time, so they are treated a bit differently than other fruit trees. They store food reserves in their leaves and must therefore be protected from stresses that will cause leaf drop. Although the cycles are not as obvious as the cycles in temperate fruit trees, citrus trees go through different stages throughout the year. When temperatures drop below 56° F, the trees stop growing and go into a semi-dormant state. After a period of such cool weather, they can withstand brief cold snaps much more easily than when they are actively growing. It only takes a few days of warmer temperatures to make them more vulnerable, though. In the spring they have a flush of growth and their major bloom period. Some varieties tend to bloom lightly throughout the year; water shortages or other stresses can trigger a second bloom.<br>
               </div>
            </div>


            <a href="#modal18" class="modal-open" >&#9676; Planting Citrus</a>
            <div class="modal" id="modal18">
               <div class="modal__content18">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Citrus</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Citrus can be planted any time of year. Spring is the best time to set out container grown trees from a nursery. Select strong and healthy trees for planting. Citrus trees will grow in most soils except salty ones. Add organic matter to very heavy or sandy soils to improve their structure. Water stress is the single most important source of problems, so the goal is to have moist, but well-drained soil. Choose a site in an area protected from wind and with maximum heat and sun, unless you live in desert regions where a little midday shade might be appreciated. If you live in a cooler area, try to provide extra protection for your trees. Put them against a light-colored, south-facing wall that reflects heat. Planting on a slope where air drains away can often prevent frost damage.

<h1 style=font-size:4vw>How to Plant Citrus</h1>
Place the tree in its planting hole no deeper than it was in the nursery container. If the trunk is in constant contact with damp soil, it is more susceptible to the fungus disease gummosis. Planting distances will depend on type and variety. For example, standard orange trees should be 20 feet apart and standard sized grapefruit 25 feet apart, while standard limes and lemons require less space and can be set 12 to 15 feet apart. Set dwarf trees 6 to 10 feet apart.<br>
               </div>
            </div>

            <a href="#modal19" class="modal-open" >&#9676; Care & Harvesting Citrus</a>
            <div class="modal" id="modal19">
               <div class="modal__content19">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Care & Harvesting Citrus</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Keep a good layer of mulch around the trees, but spread it several inches away from the trunk. The roots are fairly shallow and extend well beyond the dripline, so water the entire root area. The trees should receive a deep soaking about once a week; the soil should dry a bit before the next watering.

When trees are young, they occasionally produce some over vigorous branches. Prune these back so the tree remains well balanced. Limit later pruning to removing dead, broken, and diseased branches; it can be done any time of the year. The nutrient most needed by the trees is nitrogen; mature trees need 1 to 1 1/2 pounds per year. Apply it in four portions throughout the year, or apply the entire amount 6 to 8 weeks before a bloom.

<h1 style=font-size:4vw>Preventing Sunburn</h1>
Lower branches of the tree help protect the trunk from sunburn; citrus bark is very thin and can be easily damaged by too much sun. It helps to paint the lower trunk and other exposed portions with diluted white interior latex paint or to wrap the trunks of young trees with tree wrap tape. If a tree suffers frost damage, wait until new growth starts to see just how much has been hurt, then cut out the damaged parts. Cutting too early could lead to more damage. You may have to wait 6 months to see the new growth.

<h1 style=font-size:4vw>Citrus Pests</h1>
Most of the major citrus pests and diseases affect commercial plantings, not home garden trees, so you do not need a preventive spray program as you do with some of the-other fruits. You do need to deal with some pests, though. Gophers can destroy a tree quickly and must be kept out. Check the leaves frequently for aphids, mealy bugs, and red spider mites. If they're present, spray the leaves frequently with a forceful stream of water or use an insecticidal soap spray. Scale can be controlled with a horticultural oil spray applied in the fall, when temperatures are moderate and trees have been well watered.

<h1 style=font-size:4vw>Harvesting</h1>
You usually can't tell if citrus is ripe by looking at it. When some of the fruit reach full size, taste them to see if they're ripe. Unlike most temperate fruits, many citrus varieties ripen over a period of many months and keep well on the tree even when ripe, so you're not faced with an enormous harvest all at once. Some will ripen a late summer crop from the spring bloom, others will take up to a year or more to mature, and some continue to bloom and fruit year-round. Clip ripe fruit off with pruning shears instead of pulling it to avoid damage to twigs.<br>
               </div>
            </div>
            
            
            <a href="#modal20" class="modal-open" >&#9676; Unusual Citrus</a>
            <div class="modal" id="modal20">
               <div class="modal__content20">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Unusual Citrus</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Home gardeners can enjoy many types of citrus fruits not found in most supermarkets. Here we suggest just a few unusual citrus types to inspire you to do more exploring. Follow the same general horticultural practices for these varieties as for the rest of the citrus family.

<h1 style=font-size:4vw>Blood Oranges</h1>
Once you have tasted a good blood orange, you will never forget its superb flavor, a cross between an orange and a raspberry. Their rind and flesh are a deep red color. Blood oranges are very popular in Europe and are grown commercially in Mediterranean citrus regions. They haven't caught on in the United States primarily because their coloration is a bit unpredictable. Climate plays an important role, but the exact requirements for the development of the pigmented rind and flesh are not known. Fruits grown in hot areas of California and Arizona usually develop the best color, but even their color intensity changes from year to year. You can grow blood oranges in Florida and along the Gulf Coast, but the color is not as reliable and the flavor is often less pronounced than in fruit grown in dry summer, Mediterranean-type climates. Fruit grown in cool coastal climates seldom develops deep colors. Regardless of color, blood oranges are worth growing for their unique flavor. Each of the three most common varieties grown, 'Moro', 'Sanguinetii', and 'Tarocco', has its own distinctive flavor.

<h1 style=font-size:4vw>Pummelos</h1>
As suggested by their botanical name. Citrus grandis, pummelos bear the largest fruit in the citrus family. They are usually compared to grapefruit because of their appearance; many people believe the pummelo may be one of the ancestors of the grapefruit. Supermarkets occasionally sell pummelos as Chinese grapefruit, a label that is probably confusing. Pummelos do not need as much heat as grapefruit and they can be grown in most citrus areas. The largest, sweetest fruit is produced in hot climates; in cooler areas, fruit wilt be smaller and have a thicker rind, but it's still quite good. The fruit's soft, thick rind encloses white or pink flesh. Peeling and eating one for the first time is a memorable experience. The rind tears off and segments separate easily, but the surprise is the way the juice vesicles (the part you scoop out of a grapefruit) separate from the membrane. There is no chewy membrane or bitter rind. The flavor is delicious - mildly sweet without the bitterness common to grapefruit. The texture is firmer than most citrus and there is less juice, but they're definitely not dry. Pummelos are excellent in fruit salads or by themselves. Two principal varieties of pummelo are grown in California and Arizona: 'Chandler' has pink flesh. 'Reinking' has white. Both trees are large and attractive.

<h1 style=font-size:4vw>Kumquat Hybrids</h1>
Kumquat hybrids can be grown in all citrus regions; kumquats are among the hardiest citrus. With this in mind, the USDA crossed kumquats with other popular types of citrus to create hardy kumquat hybrids. Two of these, orangequats and limequats, are beautiful ornamental trees ideal for fruit lovers in cold areas. The orangequat is a hybrid between the 'Satsuma' mandarin and the 'Meiwa' kumquat. It is eaten like a kumquat and has a mildly sweet rind and tart flesh. The fruit is larger than a kumquat, bright orange, and makes excellent marmalade. The tree is small but productive, with handsome foliage. The orangequat is an exceptional ornamental, ideal for containers. 'Nippon' is the only variety. Limequats are equally lovely trees, with light-green-to-yellow fruit borne in abundance. The fruits are juicy, with sweet rinds and tart flesh. They are an excellent lime substitute. 'Eustis' is a commonly available variety.

<h1 style=font-size:4vw>Mandarins</h1>
As a group, the mandarins offer the greatest diversity of varieties among citrus types. Some are available in supermarkets. Home gardeners can grow many more distinctively flavored varieties. Mandarins are usually very attractive trees, sometimes with willowy leaves. They are generally hardier than oranges, although ripe fruit can be damaged at 26° F to 28° F. With wise selection of varieties, you can harvest mandarins from November to June. Three varieties with outstanding flavor are 'Page', 'Encore', and 'Honey'.<br>
               </div>
            </div>








            <a class="titlu">Grapes &#127815;</a>

            <a href="#modal21" class="modal-open" >&#9676; Grape Essentials</a>
            <div class="modal" id="modal21">
               <div class="modal__content21">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Grape Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Choose a variety that is recommended for your climate. Grapes require a long, frost-free growing season.
Grapes start to bear 2 years after 1-year-old vines are planted. Established vines will yield up to 15 pounds of grapes per year, 30 to 40 pounds from a muscadine.
Plant grapes in the spring.
<h1 style=font-size:4vw>Preparation</h1>
Select a site with deep, well-drained, loose soil in full sun.
Set up a trellis system before planting.
<h1 style=font-size:4vw>Planting</h1>
Space vines 6 to 10 feet apart (16 feet for muscadines).
For each vine, dig a planting hole 12 inches deep and 12 inches wide. Fill with 4 inches of topsoil. Trim off broken roots and set the vine into the hole slightly deeper than it grew in the nursery.
Cover the roots with 6 inches of soil and tamp down. Fill with the remaining soil, but don't tamp this down.
<h1 style=font-size:4vw>Care</h1>
Prune the top back to two or three buds at planting time and follow the first-year training steps.
Prune annually when the vines are dormant according to the training system you select.
Do not fertilize unless the soil is very poor or the plants show poor foliage color or signs of nutrient deficiencies.
Cultivate shallowly around the base of plants to control weeds.
Drape netting over vines to prevent birds from destroying your harvest.
See our article Fruit Pests and Diseases for controls of common grape pests such as aphid, scale, anthracnose, and black rot.
<h1 style=font-size:4vw>Harvesting</h1>
Grapes will only ripen on the vine. As they ripen, the sugar content rises to about 20 percent.
Harvest table grapes when the flavor is right; harvest wine grapes when they reach the appropriate sugar content.<br>
               </div>
            </div>


            <a href="#modal22" class="modal-open" >&#9676; Buying Grapes</a>
            <div class="modal" id="modal22">
               <div class="modal__content22">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Buying Grapes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    It's a wonder more gardeners don't plant grapevines. Just 2 years after planting, you can be sampling your own grapes; in 3 years, you can be harvesting up to 15 pounds of grapes from each vine - plenty for eating and making jellies, juice, or wine. Two healthy vines are enough for most home growers. Many gardeners who raise everything from Brussels sprouts to plum trees have never tried grapes. Often, it isn't because they don't like them, but because they think grapes are difficult to prune properly. However, many home gardeners know that grapes are easy to grow. After the first year, you just need to give vines a simple annual pruning to keep them bearing well. There are three major groups of grapes. American grapes (Vitis labrusca) are generally quite winter hardy and grow well in most parts of the United States. European grapes (Vitis vinifera) grow best in warm, dry areas. Crosses between European- and American-type grapes have produced hybrids that are hardier and can be grown over a greater range. Muscadine grapes (Vitis rotundifolia) are native grapes well adapted to growing conditions in southeastern United States.

<h1 style=font-size:4vw>Planning for Grapes</h1>
Choose grape varieties carefully. American-type grapes such as 'Concord' and 'Catawba' do well in the cool climate of New England, in the Midwest, and in the Northwest. The 'Concord', developed in the 1850s, is still a mainstay in many home gardens; it's vigorous, hardy, and easy to propagate from cuttings. European grapes (usually wine varieties such as 'Zinfandel' or 'Chardonnay') flourish in California where bright, dry summer days and mild winter temperatures provide a favorable environment. Tougher-skinned muscadine grapes do best in the Deep South.

Some of the new hybrid crosses between European and American types, such as the 'Baco Noir' and 'Seibel' varieties, are hardy and have extended the range in which wine grapes can be grown. Vineyards in New York State, where winter temperatures drop well below zero, produce high quality wines.

<h1 style=font-size:4vw>Hardy Grapes</h1>
Over the years plant breeders have introduced earlier-ripening and more winter-hardy grapes. 'Swenson Red', for example, produces delicious medium to large red table grapes and is winter hardy to -25° F. Most grapes are self-fertile, but check to be sure when you place your order. A few will need pollinizing plants. Muscadines come in self-fertile and self-sterile lines. The best fruits are from the self-sterile vines; to assure pollination you have to grow a pollinizing vine, too. Whether a variety is from a self-fertile line or not should be noted in the mail-order catalog or at the nursery. Many garden centers sell grape plants in containers (in 8-inch pots, for example). There's usually a thin, 8- to 10 inch-tall stem that will develop over the years into a sturdy trunk. Vines grown in containers are easy to plant because the roots are less stressed in transplanting. Tap the plant out of the container and set the root ball, with as much of its soil as possible, into a prepared hole.

<h1 style=font-size:4vw>Buying Grapes</h1>
Buying container plants locally can be more expensive than ordering from a mail-order company. If you send away, your grapevines will probably arrive bare-root with a moist packing of peat moss or other material to keep the roots from drying out. The stem is usually cut back at planting. There is no advantage to buying a vine older than 1 year. Roots always have to be trimmed back at planting time, and no matter how old the vine is it takes a certain amount of time for the roots to reestablish themselves. Older vines won't necessarily give you earlier fruiting.<br>
               </div>
            </div>

            <a href="#modal23" class="modal-open" >&#9676; Planting Grapes</a>
            <div class="modal" id="modal23">
               <div class="modal__content23">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Planting Grapes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The fall before you plant, mark the location for your vines. Get rid of all weeds, especially perennial ones, as your vines can easily survive 30 years or more in the same location. Grapes don't require superior soil, but good drainage is a must. Although you won't start training the vines until the second year, set up the trellis system before spring planting so you don't damage the roots later.

<h1 style=font-size:4vw>Planting</h1>
In the spring, work the soil again and plant the vines 6 to 10 feet apart. (Double this spacing for muscadines.) For each vine, dig a hole 12 inches deep and 12 inches wide to accommodate the roots. Shovel in a 4-inch layer of topsoil. Then prune the top of your grapevine back to two or three buds and trim off any broken roots or roots too long to fit into the hole without crowding. Set the vine into the hole, slightly deeper than it was grown in the nursery, and spread its roots. Cover the roots with 6 inches of topsoil, keeping the buds above the soil line. Tamp down the soil, then fill the remainder of the hole with topsoil but don't tamp it down. Water the new plants well. Although grapevines are known to be drought tolerant, they need plenty of water right after planting so roots can get established.<br>
               </div>
            </div>
            
            
            <a href="#modal24" class="modal-open" >&#9676; Care & Harvesting of Grapes</a>
            <div class="modal" id="modal24">
               <div class="modal__content24">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Care & Harvesting of Grapes</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Grapes should be pruned yearly because fruits only form on buds that arise from the previous season's growth. There are various methods of training grapevines. Your preferences, space limitations, and the variety of grape you are growing will determine your trellis system. Prune vines when they are dormant; in most of the country, that means very early spring, before any green shoots appear. Muscadines in the Deep South can be pruned any time after the first fall frost.

<h1 style=font-size:4vw>Fertilizing</h1>
Unless your soil is very poor, grapes, which are very deeply rooted, don't require much fertilization. Where fertility is low, a soil test will determine whether you should add phosphorus or potassium. For all soils, fertilize lightly the second year. Apply no more than 1/4 pound of 10-10-10 fertilizer in a circle up to 4 feet away from each vine. In following years when the vines are established, apply about a pound up to 8 feet away from the base if growth was slow or foliage color poor the previous season. Apply it only when the buds start to swell in the spring; later fertilizing may cause extensive growth in late summer, making the plant more vulnerable to winter injury.

<h1 style=font-size:4vw>Grape Checklist</h1>
While grapevines can survive some neglect, they need regular attention to reach maximum yields:<br>

1) Prune carefully. Leaving too much growth causes far more problems than overpruning.<br>

2) Cultivate shallowly around the base of your plant while it's young to avoid damaging roots near the surface.<br>

3) Fertilize lightly. Unless the soil is particularly poor, grapevines need little feeding. Grape growers encounter a few common problems. For example, if you plant a seedless variety, you may find that your grapes are smaller than those in supermarkets. Grape seeds produce a plant hormone that causes the berries to increase in size. Seedless varieties are missing this hormone and thus produce smaller grapes. If you want larger grapes, keep more buds at pruning and thin out one cluster of every three just before spring bloom. If your grapes are of mature size but fail to ripen on the vine in the (all, the leaves may be shading the grapes, which inhibits ripening. Try pinching foliage-bearing side shoots back to one leaf, which will bring more sunlight and warmth to the clusters.<br>

<h1 style=font-size:4vw>Grape Pests</h1>
Your first planting of grapes may escape insect or disease attacks for a while, but eventually some trouble usually arrives. In humid areas, mildew diseases can be a problem; European grapes are very susceptible to downy mildew, for example. Black rot, caused by a fungus, develops in warm, moist climates of Eastern states. Anthracnose, another fungus disease, flourishes in wet spring weather. Japanese beetles, aphids, and mites are common garden insects that you may find. The grape berry moth is a pest in central and eastern regions. Larvae of the moth feed on buds, blossoms, and berries, tying berries together with silken threads as they feed. Two generations usually occur. Clean up grape leaves in the fall to reduce the number of overwintering pests. The following spring, cultivate around plants to turn up overwintered pupae. The grape phylloxera is a pest common in California, where it attacks roots by sucking juices from them and creating galls, and in the East, where it attacks leaves as well as roots. Galls about the size of peas form on leaf undersides. American varieties are resistant, but other types are not. No chemical controls exist; if you have a severe problem, grow American types or European varieties with resistant American rootstocks.

<h1 style=font-size:4vw>Harvesting</h1>
Grapes do not ripen off the vine, so pick them when they are completely ripe. Use a sharp knife or small pruner to cut the bunches. Bees and wasps may occasionally light on the grapes to feast on some sweet juice, so watch for them..<br>
               </div>
            </div>






            <a class="titlu">Pears &#127824;</a>

            <a href="#modal25" class="modal-open" >&#9676; Pear Essentials</a>
            <div class="modal" id="modal25">
               <div class="modal__content25">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Pear Essentials</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    
Choose fire blight-resistant varieties and rootstocks, especially in areas outside dry western regions.<br>
Most varieties will start to bear significant harvests after 5 to 6 years.<br>
Plant at least two different varieties for cross-pollination.<br>
<h1 style=font-size:4vw>Preparation</h1>
Choose a site with full sun, moderate fertility, and good air circulation and water drainage.<br>
Pears will do well in a wide range of soil types.<br>
<h1 style=font-size:4vw>Planting</h1>
Space standard-size trees 20 to 25 feet apart; space dwarf trees 12 to 15 feet apart.<br>
<h1 style=font-size:4vw>Care</h1>
Pears do best with a small amount of fertilizer early in the year. Heavy doses of nitrogen will make the tree more vulnerable to fire blight.<br>
Use spreaders to encourage horizontal branching and earlier fruiting spurs.<br>
See our article Fruit Pests and Diseases for controls of common pear pests such as pear psylla, codling moth, plum curculios, and fire blight.<br>
<h1 style=font-size:4vw>Harvesting</h1>
Don't let pears ripen on the tree. Harvest them when they reach a mature size but are still hard.<br>
Early pears will ripen at room temperature in a few days to a week. Storage varieties will keep 1 to 2 months or more in a cool (40° F), dark place.<br>
               </div>
            </div>


            <a href="#modal26" class="modal-open" >&#9676; Pear Varieties </a>
            <div class="modal" id="modal26">
               <div class="modal__content26">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Pear Varieties</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    The extensive selection of high-quality pear varieties available that can't be found in grocery stores make pear trees well worth growing by home gardeners. Pears require less spraying than peaches, plums, or apples and are easy to train to fit small spaces in a yard. Unfortunately, pear trees can be affected by two serious problems. The insect pest the pear psylla can be difficult to control. And the bacterial disease fire blight has made larger-scale commercial pear growing difficult in many parts of the country. Because of fire blight, most of the United States pear crop now comes from northern California, Oregon, and Washington, where the predominantly dry climate discourages the spread of this disease. If you live outside of this region, you can still grow pears successfully by selecting blight-resistant varieties and rootstocks. With good planning and vigilance during the season, you can grow fresh, tender pears year after year with minimal use of chemical products.<br>

<h1 style=font-size:4vw>Pear Varieties</h1>
Pears can usually be grown wherever apples are successful, though they are somewhat less resistant than apples to extremes of heat and cold. Pears, however, need less attention than apples in matters of pruning and insect control and are more tolerant of moist soil conditions. So if you have predominantly clay soil, pears will probably do better for you than apples on the same site. Compared to other tree fruits, pears are slower to start producing. Many apple varieties begin bearing in 3 to 4 years; with pears, the wait for good crops is longer. Standard types will take about 4 to 8 years to begin bearing; dwarfs, 4 to 6.<br>

As a general rule, pears must be cross-pollinated to produce fruit, so plan to plant two varieties; most combinations of pear varieties will work except for 'Bartlett' and 'Seckel', which don't cross-pollinate well with each other. Out of nearly three thousand varieties, perhaps a hundred have good yields, flavor, texture, and keeping qualities. However, fewer than twenty are grown commercially. Thus, the home gardener has a wide choice of top-quality specialty pears. There are several pear varieties that offer effective resistance to fire blight, such as 'Moonglow', 'Magness', 'Maxine', 'Seckel', and 'Kieffer'. In the South, plant resistant varieties such as 'Leconte' and 'Baldwin'.<br>
               </div>
            </div>

            <a href="#modal27" class="modal-open" >&#9676; Pear Care</a>
            <div class="modal" id="modal27">
               <div class="modal__content27">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Pear Care</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Pears need soil with moderate fertility. Frosts during the bud and blossom period can damage the flowers and reduce yields significantly. Try to locate pears on a slope for better air drainage, or on the north side of a building to retard flowering. Space standard trees 20 to 25 feet apart, dwarf trees 12 to 15 feet apart.

<h1 style=font-size:4vw>Fertilizing Pears</h1>
Keep young trees weed-free, and water well during dry spells to help the roots get established quickly. Fertilize lightly in early spring of the second and succeeding years about 2 weeks before bloom. In moderately fertile soils, use ammonium nitrate at 1/8 pound or its equivalent per tree, multiplied by the number of years the tree has been set. Use less if you have highly fertile soil. If shoot growth on the tree is more than 12 inches in a season, use less fertilizer the following spring. If the leaves are pale green or yellowish in midsummer, add slightly more fertilizer the next year. Be careful applying fertilizer around your pear trees. Too much nitrogen promotes succulent growth, which allows fire blight disease bacteria to enter the tree's tender young shoots more easily.<br>

Also, pears require several months to harden off in the fall. High nitrogen levels after mid-summer delay this hardening-off process. If your pear tree is located in a lawn area, cut back on turf fertilizer applications when you feed your lawn so as not to give your trees too much nitrogen.<br>

<h1 style=font-size:4vw>Pear Pruning</h1>
Dwarf pears are often trained to a central leader. Semi-dwarf and standard-size trees also yield best when trained to a central leader, but they are usually trained to a modified leader because that form is easier to maintain with a larger tree. In an area prone to fire blight, you can prune your tree to multiple leaders. That way an infected leader can be removed while the others keep growing.<br>

Pears are trickier to prune well than apples because all their branches grow nearly straight up. This growth habit promotes weak branches and dense foliage around the center of the tree, which encourages fire blight, fungus diseases, and pear psylla. Once you get the knack of pruning, the results will be worth the trouble. Prune regularly, though generally very lightly. Spreaders will help direct the tree's scaffold branches to a more outward, horizontal direction, and will encourage early development of fruiting spurs. Fortunately, pears are easier to train than most trees. Start in early summer of the first year. Toothpicks or clothespins can be used when branches are small; later, use wooden slats with the ends notched in a "V" to hold them in place. Sharp ends of spreaders can poke into the trunk and branch slightly, but won't hurt the tree. (An alternative practiced by some growers in the West is to hold branches down with a string tied to a clip in the ground). Pears bear their fruit mainly from terminal buds on short branches or spurs. Mature trees need only light pruning during the dormant season, mostly to thin out unfruitful, diseased, or crowded branches.<br>

Avoid heading back cuts during dormant pruning since this will result in new, long, unfruitful shoots. If you have a variety that bears at an early age, such as 'Bosc' or 'Bartlett', remove fruit developing on the ends of thin fragile branches to keep the limbs from breaking.<br>

<h1 style=font-size:4vw>Pollinating Pear</h1>
Pollination can be a problem with pears because bees are not partial to their blossoms; pear nectar contains less than 10 percent sugar, compared to nearly 50 percent in apple nectar, and pears often flower when it's too cold (below 55° F) or wet for the bees to fly. To make matters worse, pear blossoms are fertile only for a short time. Pollination is most likely if the weather is warm during pear blossom time. If you're fortunate enough to live near an ocean coast or large lake, the cooling influence of the water in the spring promotes later blooming of pears and facilitates pollination. Ask other pear growers if pollination in your area is erratic from year to year; if so, you may need a beehive when your trees are coming into their bearing years for consistent fruit set. Move it to within 50 feet of your pear trees when blossoming starts. Even with a beehive, you may have occasional years of near-total crop failure owing to frosts or poor flying weather for the bees.<br>
               </div>
            </div>
            
            
            <a href="#modal28" class="modal-open" >&#9676; Harvesting Pears</a>
            <div class="modal" id="modal28">
               <div class="modal__content28">
                 <a href="#" class="modal__close">&times;</a>
                 <h2 class="modal__heading" style=font-size:5vw>Harvesting Pears</h2>
                 <p class="modal__paragraph"><h1 style=font-size:4vw>Planning</h1><br>
                    Pears should be harvested when they are mature, but still hard, and ripened off the tree for the best eating and canning quality. If you wait until the pears get ripe on the tree they'll be mushy inside within a day or two. The early varieties will take a few days to a week to ripen after harvest; later ripening varieties often require several weeks or more to reach best quality. Mature pears will be full size and the color of many varieties at this stage turns from green to light yellow. Generally, if you lift the fruit up it should break away easily from the stem. (The 'Bartlett' pear will need a slight twist to loosen it.) Pears grow larger and get softer all through the picking period.

<h1 style=font-size:4vw>Storing Pears</h1>
If you're going to keep some pears in cool storage for eating a month or two in the future, pick them when they are full size but still quite hard. Even though the skin is firm, handle them gently; they bruise easily. Pears that you will eat right away can be harvested later when the skin is a bit softer. Many varieties can be kept for a few weeks in a cool, dark place. For longer storage, pears need refrigeration at 32° F to 40 oF. Bring them out to room temperature for a week or so before eating them.<br>
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