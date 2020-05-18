<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Primitive Tools</title>
        <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../css/primitiveTool.css">
</head>
<body>
<div class="menu">
    <ul>
    <li class="box-3m"><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li class="box-2m"><a href="ElectricTools.php"><i class="ion-ios-paperplane"></i> Electric Tools</a></li>
    <li class="box-1m"><a href="Use-Case.php"><i class="ion-ios-paperplane"></i> Use Case</a></li>

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
           $d = "PrimitiveTools";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_primitiveT/easy/try_yorself_primitiveT_q1.php">Easy</a></li>
      <?php else: ?>

         <li > <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Easy</a></li>

      <?php endif; $conn->close(); ?>
<!-- _______________________________________________________________________________________________________ --> 
<!-- _______________________________________________________________________________________________________ --> 
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
                 $d = "PrimitiveTools";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_primitiveT/medium/try_yorself_primitiveT_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Medium</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllEasy.php">Medium</a></li>
      <?php endif; ?> 
<!--  ________________________________________________________________________________________-->
<!-- _________________________________________________________________________________________ --> 
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
                 $d = "PrimitiveTools";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_primitiveT/hard/try_yorself_primitiveT_q1.php"> Hard</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i> Hard</a></li> 
                <?php endif; ?> 

      <?php else: ?> 
            <li><a href="../../_upss/passAllMedium.php">Hard</a></li>
      <?php endif; ?> 
<!--  __________________________________________________________________________________________-->  


            </ul>
        </li>
<?php endif; ?>                

    </ul>
</div>
<br><br>


<div class="bigmain">
  <div class="main">
    <div class="box-1">
       <div class="centerInfo"><h3>Primitive Tools every gardener needs <br><i class="ion-arrow-down-b"></i></h3></div>
    </div>
  </div>
<div class="main">
    <div class="box-1">
      
        <div class="wrap3">
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Trowel</span></div>
          </div>
        </div>
        
    </div>
    <div class="box-2"><br><br>
       <p>These have much shorter handles than other kinds of shovels, making them ideal for using by hand when you are close to the ground. They are perfect for digging holes for planting, but their edge has to be kept sharp enough or they will be very frustrating to use. They can easily be sharpened using a bench grinder. Buying a trowel with an ergonomically designed handle will keep your hand from cramping and help ensure that you don't get blisters when using this tool.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-1">
      
        <div class="wrap4">
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Square Shovel</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
       <p>These shovels have flat tips that are very hard and straight, making them perfect for digging tightly packed dirt, as they will have more force and make it easier to penetrate the ground. They are also great for scooping up and moving the rock, mulch, sand, and soil. Square shovels can be used to edge a lawn, cut roots and sod, and easily divide perennials without causing too much trauma to the plants.</p>
     </div>
    </div>

  <div class="main">
    <div class="box-1">
      
        <div class="wrap5">
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Pointed <br>Shovel</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
       <p>When you are going to be digging into tilled soil that is fairly loose and easy to move, you'll want to use a pointed shovel, as they will make the job very easy. These shovels don't have the driving force that square shovels do, but they are helpful to have when planting a garden.</p>
     </div>
    </div>

 <div class="main">
    <div class="box-1">
      
        <div class="wrap6">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Garden Fork</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
       <p>These giant forks have four very strong tines that make it easy to penetrate the soil. They are generally made from a single piece of steel, which ensures that the tines will not break. Use a garden fork when you need to break up soil, turn it over, or work some compost into your garden.</p>
     </div>
    </div>  
 
 <div class="main">
    <div class="box-1">
      
        <div class="wrap7">
          <div class="card12"><br><br>
              <div class="front7"><span></span></div>
              <div class="back7"><span>Potato Fork</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
       <p>While you can use a garden fork to dig up potatoes, if you want to make sure that you don't accidentally damage your crop, you will need to use a potato fork. They have multiple tines that are quite thin with blunted ends so that the potatoes aren't damaged when you dig.</p>
     </div>
    </div> 

   <div class="main">
    <div class="box-1">
      
        <div class="wrap8">
          <div class="card12">
              <div class="front8"><span></span></div>
              <div class="back8"><span>Hoe</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
       <p>These tools are commonly used just to tear unwanted weeds and plants out of the garden, and they are also great for cultivating soil and breaking up larger clumps so that the garden is ready for planting. When the ground is soft enough, they can easily be used to dig trenches for your bulbs or seeds or to make furrows.</p>
     </div>
    </div>  

 <div class="main">
    <div class="box-1">
      
        <div class="wrap9"><br>
          <div class="card12">
              <div class="front9"><span></span></div>
              <div class="back9"><span>Edging Shears</span></div>
          </div>
        </div>
    </div>
    <div class="box-2">
       <p>These shears are positioned at a right angle to the handle, making it very easy to use them without having to get down on your knees. While some people try to use them by operating both of the handles at the same time, the best way to operate them is by only moving the handle that controls the upper blade of the shears. This will ensure that you have a nice smooth motion and the tool will not jerk around as you are trying to use it. It's important that you keep the shears level with the side of the lawn where you are cutting and cut at a swift pace, as this will help ensure that you get clean cuts on your grass. Make sure to wipe down the blades when you are finished using them, and if you notice that the grass is being bent instead of cut then you will need to sharpen them.</p>
     </div>
    </div>  

  <div class="main">
    <div class="box-1">
      
          <div class="wrap10"><br>
            <div class="card12">
                <div class="front10"><span></span></div>
                <div class="back10"><span>Rake</span></div>
            </div>
          </div>
    </div>
    <div class="box-2">
        <p>Being able to get your leaves and lawn debris into a pile is important, and during the fall especially you will want a tool to help with this process. Rakes are indispensable for this. There are a number of different kinds of rakes available, each best suited to different jobs. Leaf rakes are plastic and have a little give to them, making them ideal for raking up large piles of leaves, pine needles, and even cut grass. Another kind of rake that is important for lawn care is the bow rake, which has shorter, stronger tines. These rakes are perfect for moving gravel, sand, or rocks around and for landscaping your garden and lawn.</p>
     </div>
    </div> 

  <div class="main">
    <div class="box-1">
      
            <div class="wrap11"><br><br>
              <div class="card12">
                  <div class="front11"><span></span></div>
                  <div class="back11"><span>Hose</span></div>
              </div>
            </div>
    </div>
    <div class="box-2">
        <p>This long, flexible tube is the best way to move water from one location to another and by which to water your garden and your lawn. It can be attached to the spigot on the side of your home and then the other end left free to allow the water to flow, attached to a sprinkler, or used with a sprayer so you can easily control where the water goes. There are also hoses that have small holes in them, and these "soaker hoses" make it easy to run an irrigation system through your garden or lawn at very little cost.
        When buying a hose, you will want to make sure that it is long enough to reach where you need it to reach. While you can connect multiple hoses to each other, it"s often easier to simply use one longer one. Other factors to consider include how heavy duty or light the hose is and whether or not it can hold hot water if that is needed for your work.</p>
     </div>
    </div> 

<div class="main">
    <div class="box-1">     
            <div class="wrap12"><br>
              <div class="card12">
                  <div class="front12"><span></span></div>
                  <div class="back12"><span>Garden<br> Gloves</span></div>
              </div>
            </div>
    </div>
    <div class="box-2">
        <p>You may not think of these as a tool, but I find gloves to be an indispensable item in my tool shed. Gloves not only protect your hands from getting dirty but also protect you from injury. If you have to deal with thorny branches or prickly plants, gloves will protect your hands and wrists from scratches, scrapes, and splinters.If you have sensitive skin like I do, then gardening gloves aren't optional. I have to wear gloves in the garden to avoid rashes and allergic reactions to plants, fertilizers, and other chemicals. Eczema prone gardeners need a nice set of gloves to protect their hands.They even make touchscreen garden gloves now, which are perfect if you listen to music or podcasts on a smartphone while you garden.</p>
     </div>
    </div>                    

</div>


</body>
</html>