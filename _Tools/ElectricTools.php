<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eectric Tools</title>
        <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../css/electricTool.css">
</head>
<body >
  
<div class="menu">
    <ul>
    <li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li><a href="PrimitiveTools.php"><i class="ion-ios-paperplane"></i> Primitive Tools</a></li>
    <li><a href="Use-Case.php"><i class="ion-ios-paperplane"></i> Use Case</a></li>
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
           $c = "Tools";
           $d = "ElectricTools";
           $level='easy';

           $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
           
           $result = $conn->query($sql);
         if ($result->num_rows<1):
      ?>
          <li> <a href="quiz/quiz_for_electricT/easy/try_yorself_electricT_q1.php">Easy</a></li>
      <?php else: ?>

         <li > <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i>  Easy</a></li>

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
                 $d = "ElectricTools";
                 $level='medium';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_electricT/medium/try_yorself_electricT_q1.php">Medium</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i>  Medium</a></li> 
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
                 $d = "ElectricTools";
                 $level='hard';
              
                 $sql = "SELECT userId,level,concept,departament FROM result where userId='$user' and departament='$d' and concept='$c' and level='$level'";
                 $result = $conn->query($sql);
                if ($result->num_rows<1):
                ?>
                <li><a href="quiz/quiz_for_electricT/hard/try_yorself_electricT_q1.php">Hard</a></li>
                <?php else: ?>
                <li> <a href="../../_upss/sorry.php"><i class="ion-checkmark-circled"></i>  Hard</a></li> 
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
    <div class="box-1">
       <div class="centerInfo"><h3>Electric Tools every gardener needs <br><i class="ion-arrow-down-b"></i></h3></div>
    </div>
  </div>

    <div class="main">
    <div class="box-1">
      
        <div class="wrap4">
          <div class="card12">
              <div class="front4"><span></span></div>
              <div class="back4"><span>Gas Edger</span></div>
          </div>
    </div>
  </div>
    <div class="box-2"><br>
         <p>A gas edger is the most powerful kind of edger tool that you can buy. While they weigh more than other available types, they are not so heavy that people are unable to lift them into a truck or onto the back of a trailer. They do tend to be rather noisy, so it's important to consider how close your neighbors are before buying this type of edger, and whether the noise is going to disturb them.
         They are perfect if you have a very large yard and need to do a lot of edging, as they will cut down on the amount of time that this work takes. You can choose between a smaller gas edger that has a two-cycle engine or a larger, more powerful one that has a four-cycle engine. The four-cycle engine machines tend to be cleaner when they run, making them better for the environment. In addition, look for a fourth wheel, as this will make it much easier to maneuver the edger and will help keep it from tipping over.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      
      <div class="wrap5"><br>
          <div class="card12">
              <div class="front5"><span></span></div>
              <div class="back5"><span>Lawn Mower </span></div>
          </div>
          </div>
    </div>
    <div class="box-2">
        <p>This is a machine that works by using revolving blades to cut the grass in your lawn to a pre-set height. With most machines, you can adjust how tall you want the grass to be, allowing you to personalize your lawn and how often you have to mow. There are many types of lawn mowers available, making it easy to find one that will meet your needs without breaking the bank. For most small mowers, an engine turns the blades and will either move the lawn mower as well or require the person using it to push it.<br>Larger mowers are usually self-propelled, which means the user only has to guide where the mower goes and not actually use much effort to move the mower. Finally, there are also ride-on lawn mowers that are much larger and ideal for mowing big lawns. While there are robotic lawn mowers that are remote-controlled and will work on their own, these are not very popular and are difficult to find.<br>You can buy lawn mowers that run on gasoline, are electric, or are push-powered and reel mowers. The kind that you choose will depend on the power that you need, the size of your lawn, and your budget.</p>
     </div>
  </div>

<div class="main">
    <div class="box-1">
      
        <div class="wrap3">  
          <div class="card12">
              <div class="front3"><span></span></div>
              <div class="back3"><span>Electric <br>Edger</span></div>
          </div>
        </div>
      </div>  
    <div class="box-2"><br><br>
        <p>When choosing an electric edger, you will have to decide whether you want it to be cordless or corded. Both types are very lightweight and are thus ideal for people who aren't strong enough to use a manual edger or to handle the strength, power, and weight of a gas edger. Make sure that you choose one that has a strong blade, as these edgers don't tend to be as powerful as gas ones, and they can take longer to complete the same amount of work.<br> They are very quiet and are perfect if you live close to your neighbors and want to make sure that you don't disturb them with your yard work. They're also ideal for smaller yards, as corded options have a limit to how far they can reach, and even a great battery won't last long enough to easily edge a very large lawn.</p>
     </div>
    </div>


    <div class="main">
    <div class="box-1">
      
        <div class="wrap6">
          <div class="card12">
              <div class="front6"><span></span></div>
              <div class="back6"><span>Leaf Blower</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br>
        <p>These popular tools work by forcing air out of a nozzle. The person using the leaf blower can direct the air where they want it to go, thereby easily moving piles of leaves or lawn clippings. You can buy either electric or gas-powered leaf blowers. They are available for purchase in a backpack format with the nozzle hanging down for easy use, or as completely handheld models. Of course, the backpack leaf blowers are easier to use for a long period of time and are often gasoline powered, as these types of blowers are usually heavier.<br>If you have a huge yard or will be helping neighbors clear their lawns in addition to your own, then you may want to look into buying a larger leaf blower that has wheels or even a motor that will allow it to self-propel. These are much stronger but also more expensive.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      
        <div class="wrap7" >
          <div class="card12">
              <div class="front7"><span></span></div>
              <div class="back7"><span>Mulcher</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br>
        <p>When choosing an electric edger, you will have to decide whether you want it to be cordless or corded. Both types are very lightweight and are thus ideal for people who aren't strong enough to use a manual edger or to handle the strength, power, and weight of a gas edger. Make sure that you choose one that has a strong blade, as these edgers don't tend to be as powerful as gas ones, and they can take longer to complete the same amount of work.<br> They are very quiet and are perfect if you live close to your neighbors and want to make sure that you don't disturb them with your yard work. They're also ideal for smaller yards, as corded options have a limit to how far they can reach, and even a great battery won't last long enough to easily edge a very large lawn.</p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      
        <div class="wrap8">
          <div class="card12">
              <div class="front8"><span></span></div>
              <div class="back8"><span>Cultivator</span></div>
          </div>
        </div>
    </div>
    <div class="box-2"><br><br><br><br>
        <p>Used after a tiller to ensure that the ground is very soft and ready for planting, these tools are generally walked behind or pushed. They are great for use in vegetable gardens or if you are going to redo your lawn and want to make sure that the ground is soft and prepared for the grass seed.The Mantis Electric Cultivator is a faster way to dig anywhere. Much easier than using a shovel or other hand tools. </p>
     </div>
    </div>

    <div class="main">
    <div class="box-1">
      
        <div class="wrap9">
          <div class="card12">
              <div class="front9"><span></span></div>
              <div class="back9"><span>Trailer Sprayer</span></div>
            </div>
          </div>
    </div>
    <div class="box-2"><br><br><br>
        <p>These are sprayers that attach to your ATV or lawn tractor and have wheels so that they can be easily towed across the ground. They have very efficient pumps and can be used to spray items that are very tall.Sprayers may have started as a niche for the inventive, but have since become an integral part of farming for decades. The ease of scale our products provide allows you to properly apply chemicals that control diseases, insects and weeds. Enjoy high yield crops without worrying about faulty equipment and painstaking measures to ensure that your crops are treated. Our equipment is specially designed to be robust, easily customized to the unique needs of your farm and simple to maintain.</p>
     </div>
    </div>
</div>


</body>
</html>