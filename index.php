<?php
session_start();
?>

<?php

$feed_url = "http://proiect.md/RSS/rss.php";

$object = new DOMDocument();

$object->load($feed_url); // read data from url

$content = $object->getElementsByTagName("item");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/indexProiect.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <title>Home</title>
</head>
<body>
<!-- menu -->

<div class="menu">
  <ul>  
      <li class="box-1m"> 
        <a href=""> <i class="ion-arrow-right-b"></i> Garden Guide</a>
        <ul>
          <li> <a href="_teachingGuid/FoodGardeningGuide.php">General Guide</a></li>
          <li> <a href="_teachingGuid/HerbsGuide.php">Herbs care </a></li>
          <li> <a href="_teachingGuid/FruitGuide.php">Fruit care </a></li>
          <li> <a href="_teachingGuid/VegetableGuide.php">Vegetable care</a></li>
          <li> <a href="_teachingGuid/ReadMe.html">Read Me</a></li>
        </ul>
      </li>  
      <li class="box-2m"> 
        <a href=""> <i class="ion-arrow-right-b"></i> Grount Soils  </a>
        <ul>
          <li> <a href="_Grount/TypesGrountSoils.php">Types</a></li>
          <li> <a href="_Grount/UseGrountSoils.php">Use Case</a></li>
          <li> <a href="_Grount/PracticalTips.php">Practical tips</a></li>
          <li> <a href="_Grount/DetermineSoil.php">Determine Type</a></li>
        </ul>
      </li>
      <li class="box-3m"> 
        <a href=""> <i class="ion-arrow-right-b"></i> Garden Tools </a>
        <ul>
          <li> <a href="_Tools/ElectricTools.php">Electric Tools</a></li>
          <li> <a href="_Tools/PrimitiveTools.php">Primitive Tools</a></li>
          <li> <a href="_Tools/Use-Case.php">Use Case</a></li>
        </ul>
      </li>
      <li class="box-4m">
        <a href=""> <i class="ion-arrow-right-b"></i>  Landscaping </a>
        <ul>
          <li> <a href="_Landscaping/stylesGarden.php">Styles</a></li>
          <li> <a href="_Landscaping/ideaGarden.php">Ideas</a></li>
        </ul>
      </li>
      <li class="box-5m">
        <a href=""> <i class="ion-arrow-right-b"></i> Calendar</a>
        <ul>
          <li> <a href="_PlantingCalendar/spring.php">Spring Season</a></li>
          <li> <a href="_PlantingCalendar/summer.php">Summer Season </a></li>
          <li> <a href="_PlantingCalendar/autumn.php">Autumn Season</a></li>
        </ul>
      </li>
<?php
if(!isset($_SESSION['user_id'])):
?>
    <li class="box-6m">
        <a href=""> <i class="ion-arrow-right-b"></i>  Authentication </a>
        <ul>
          <li> <a href="authenAJAX/login.html">Login</a></li>
          <li> <a href="authenAJAX/register.html">Sign up</a></li>
        </ul>
      </li>
 <?php
  else:
 ?>      
    <li class="box-6m">
        <a href=""> <i class="ion-arrow-right-b"></i>  My profile</a>
        <ul>
          <li> <a href="_checkProgres/progres.php">My Progress</a></li>
          <?php 
              mysql_connect('localhost','root','');
              mysql_select_db('register-bd');
              $user = $_SESSION['user_id'];
              $q = mysql_query("SELECT COUNT(level) as num FROM result where userId='$user' ");
              while($result=mysql_fetch_array($q)){
                    $counter = $result['num']; }
          if ($counter==45):?>
          <li> <a href="admin/insertEasy.php">Management</a></li>
          <?php endif; ?>     
          <li> <a href="authenAJAX/logout.php">Logout</a></li>
        </ul>
      </li>
<?php endif; ?>      
    </ul>
  </div>
<!-- endmenu -->


<!-- bunvenit -->
<div id="banner">

<?php if(isset($_SESSION['user_id'])): ?>      
  <p id="mesaj_bunvenit">Well, Hello  <?php echo $_SESSION['name']?>!</p>
<?php else: ?> 
  <p id="mesaj_bunvenit">Well, Hello There!</p><?php endif; ?> 

</div>
<!-- end bundvenit -->


<div class="main">
  <div class="box-1">
       <div class="centerInfo"><h2>About us</h2></div><br>
          <div class="centerInfo2"><strong>Our mission is to promote gardening</strong></div><br>
        <p>This site is exclusively for gardeners at the beginning of the road, eager to become professionals in this field.<br>
        <br>
        In order to create a comfort, and also to facilitate the learning of gardening, we, the authors of the site have exposed the information as systematically as possible. 
        <br><br>So, we divided the whole course on gardening concepts, and each concept, in turn, is divided into several departments.
        <br><br>
        In order to strengthen your freshly studied knowledge, we also created a quiz with a few questions, to test your acquired knowledge. So, you will also have a page where you can view your progress.
        <br><br>
        Finally, we invite you to be part of our family. You can both share ideas or ask us questions to enrich your garden treasure.
        </p>
  </div>
  <div class="box-2">
      <div class="centerInfo"><h2>MORE INFO</h2></div><br>
          <ul class="ba">
            <li><i class="ion-leaf"></i> We teach people how to get started gardening and to improve their plant growing skills.</li>    
            <li><i class="ion-leaf"></i> We taught people to plant vegetation, fruits and herbs correctly and neatly.</li>
            <li><i class="ion-leaf"></i>We teach people to get acquainted with the concept of soils for gardening, their types and use-cases.</li>
            <li><i class="ion-leaf"> </i> We teach people to learn more about gardening tools and how to use them.</li>
            <li><i class="ion-leaf"></i> We teach people to find out more about the gardener's calendar, divided into 3 seasons, very explicit and meticulous.</li>
            <li><i class="ion-leaf"> </i>We help people tastefully decorate their garden, in a style suggested by us.</li>
            <li><i class="ion-leaf"> </i> We help gardeners research information through our knowledges in this theme.</li>                  
          </ul>
  </div>

<div class="box-3">   
   <div class="centerInfo"><h2>Feed with the best Gardeners</h2></div>

<?php
     foreach($content as $row)
   {
    echo '<h3 class="formatbutton">' . $row->
      getElementsByTagName("nume")->item(0)->nodeValue . '`s score:' . $row->
      getElementsByTagName("scor")->item(0)->nodeValue . ' level:'. $row->
      getElementsByTagName("level")->item(0)->nodeValue .'</h3>';  
   }
 ?>
 
  </div>
</div>

<div class="mainend">
  <div class="box-1end">
      <p class="footerName">Cernavca Valeria & Rusu Sandra</p>
      <p class="footerName"><i class="ion-leaf"></i> <a class= "documnetation" href="documentation/documentation.html"> Gardening development and teaching </a></p>
  </div><br><br>
  <div class="box-2end">
        <p class="footerSocial">Our Social Links:</p>
        <div class="footerSocialItems">
          <p class="socialcolor2"><a href="https://www.pinterest.com/ngagrows" target="_blank" ><i class="ion-social-pinterest" aria-hidden="true" ></i></a></p>
          <p class="socialcolor1"><a href="https://www.instagram.com/gardenstoryusa/?hl=ro" target="_blank" class="i1"><i class="ion-social-instagram" aria-hidden="true" ></i></a></p>
          <p class="socialcolor2"><a href="https://www.youtube.com/channel/UCsZ9_j7tgOafXVDcLeVrf5w" target="_blank"><i class="ion-social-youtube" aria-hidden="true"></i></a></p>
          <p class="socialcolor3"><a href=https://twitter.com/gardenknowhow target="_blank"><i class="ion-social-twitter" aria-hidden="true"></i></a></p>
          <p class="socialcolor4"><a href=https://mail.google.com/mail/u/0/#inbox/FMfcgxwHMPpmxjpdqgDqNlRPBsDkgFdB target="_blank"><i class="ion-social-googleplus" aria-hidden="true" ></i></a></p>
          <p class="socialcolor5"><a href=https://api.whatsapp.com target="_blank"><i class="ion-social-whatsapp" aria-hidden="true" ></i></a></p>
          <p class="socialcolor6"><a href="https://github.com/Valeria1999" target="_blank"><i class="ion-social-github" aria-hidden="true"></i></a></p>
          <p class="socialcolor"><a href="https://www.facebook.com/TheGardenerMag/?__tn__=%2Cd%2CP-R&eid=ARDuaGES9MYUMoXjWjTl4cAjJFntX39iHNLgcTaShC0MTuLVwVHmQLBUJKcXNo6r5QGLj-VSe_UfyGEp" target="_blank"><i class="ion-social-facebook" aria-hidden="true"></i></a></p>
        </div>
  </div><br><br>
  <div class="box-3end">
        <div>
          <a href="_sendEmail/sendUsMail.php" class="button" target="_blank">Make Contact</a><br><br>
        </div>
        <p class="writeus">Write Us For more Informations !</p>
  </div>
</div>

</body>
</html>
