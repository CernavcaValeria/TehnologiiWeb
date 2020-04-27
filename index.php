<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style_index_nou.css">
      <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <title>Home</title>
</head>
<style >
  *  { 
    margin: 0; 
    border: 0; 
}
 .menu{
    border:none;
    border:0px;
    margin:0px;
    padding:0px;
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
    padding:0;
}

.menu li
{
    float:left;
    padding:0px;
    width:16.66666666%;

}

.menu li a
 {
    background:#333;
    color:#ccc;
    display:block;
    font-weight:normal;
    line-height:60px;
    margin:0px;
    padding:0px 5%;
    text-align:center;
    text-decoration:none;
    font-family: Arial;
}

.menu li a:hover, .menu ul li:hover a
{
    background:#44a1ca;
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
    width:16.66666%;
    z-index:200;
    position: absolute;
    font-family: Arial;
}

.menu li:hover ul
{
  display:block;
  width:16.66666%;

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
  background:#44a1ca;
  border:0px;
  color:#fff;
  text-decoration:none;
  border:1px solid white;
  transition: 0.5s;
  margin:0;
}

@media(max-width: 900px)
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
    .box-6m li{
        flex:4;
        order:4;        
        width: 100%
    }
    .menu li:hover ul
{
  display:block;
  width:100%;
}
}

</style>
<body>
<!-- menu -->

<div class="menu">
<ul>  
  <div class="box-1m">
      <li> 
        <a href=""> <i class="ion-arrow-right-b"></i>  Theaching Guid</a>
        <ul>
          <li> <a href="_teachingGuid/FoodGardeningGuide.php">Gardening Guide</a></li>
          <li> <a href="_teachingGuid/"> Pest Control</a></li>
          <li> <a href="_teachingGuid/HerbsGuide.php">Herbs care </a></li>
          <li> <a href="_teachingGuid/FruitGuide.php">Fruit care </a></li>
          <li> <a href="_teachingGuid/VegetableGuide.php">Vegetable care</a></li>
          <li> <a href="_teachingGuid/ReadMe.html">Read Me</a></li>
        </ul>
      </li>
    </div>  
  <div class="box-2m">  
      <li> 
        <a href=""> <i class="ion-arrow-right-b"></i> Grount Soils  </a>
        <ul>
          <li> <a href="_Grount/TypesGrountSoils.php">Types</a></li>
          <li> <a href="_Grount/UseGrountSoils.php">Use-case</a></li>
          <li> <a href="_Grount/PracticalTips.php">Practical tips</a></li>
          <li> <a href="_Grount/DetermineSoil.php">Determine Type</a></li>
        </ul>
      </li>
    </div>
    <div class="box-3m">    
      <li> 
        <a href=""> <i class="ion-arrow-right-b"></i> Gardening Tools </a>
        <ul>
          <li> <a href="_Tools/ElectricTools.php">Electric Tools</a></li>
          <li> <a href="_Tools/PrimitiveTools.php">Primitive Tools</a></li>
          <li> <a href="_Tools/">Use Case</a></li>
        </ul>
      </li>
    </div>
    <div class="box-4m">    
      <li>
        <a href=""> <i class="ion-arrow-right-b"></i>  Landscaping </a>
        <ul>
          <li> <a href="_Landscaping/stylesGarden.php">Styles</a></li>
          <li> <a href="_Landscaping/ideaGarden.php">Ideas</a></li>
        </ul>
      </li>
    </div>
    <div class="box-5m">    
      <li>
        <a href=""> <i class="ion-arrow-right-b"></i>  Plant's Calendar</a>
        <ul>
          <li> <a href="_PlantingCalendar/spring.php">Spring Season</a></li>
          <li> <a href="_PlantingCalendar/summer.php">Summer Season </a></li>
          <li> <a href="_PlantingCalendar/autumn.php">Autumn Season</a></li>
        </ul>
      </li>
    </div>
    <div class="box-6m">  
<?php
if(!isset($_SESSION['user_id'])):
?>
    <li>
        <a href=""> <i class="ion-arrow-right-b"></i>  Authentication </a>
        <ul>
          <li> <a href="authen/login.html">Login</a></li>
          <li> <a href="authen/register.html">Sign up</a></li>

        </ul>
      </li>
 <?php
  else:
 ?>      
    <li>
        <a href=""> <i class="ion-arrow-right-b"></i>  My profile </a>
        <ul>
          <li> <a href="_checkProgres/progres.php">My Progress</a></li>
          <li> <a href="authen/logout.php">Logout</a></li>
        </ul>
      </li>
    </div>  
<?php endif; ?>      
    </ul>
  </div>


<!-- endmenu -->

<!-- bunvenit -->
<div id="banner">

<?php
if(isset($_SESSION['user_id'])):
?>    	
        <p id="mesaj_bunvenit">Well, Hello  <?php echo $_SESSION['name']?>!</p>
 <?php
  else:
 ?> 
 <p id="mesaj_bunvenit">Well, Hello There!</p><?php endif; ?> 

  </div>
<!-- end bundvenit -->


<style>

 .box-2 .ba li
{
  font-size: 20px;
  color:black; 
  text-decoration: none;
}
.box-1 p
{
    font-size: 20.7px;
    color: black;
    font-family: Times New Roman;
}
  .main
  {
    background-color: #ADD8E6;
    padding-top: 2%;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  }
  @media(min-width: 1050px)
{
  .main
  {
    display: flex;
    background-color: #ADD8E6;
    padding-top: 2%;
  }
  .main-2
  {
    display: flex;
    justify-content: space-around;
  }
}
  .main div
  {
    padding: 10px;
  }
  .box-1
  {
   flex:1;
   order:1;
   background-color: #F8F8FF;
   margin:0 15px 25px;
   box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
   border-radius: 15px;
  }
  .box-1
  {
    font-size: 20px;
  }
  .box-2
  {
   flex:1;
   order:2;
   background-color: #F8F8FF;
   margin:0 15px 25px;
   box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
   border-radius: 15px;
  }
  .box-2 ul li
  {
   text-decoration: none;
   list-style: none;
   margin:3px;
  }
  .box-3
  {
   flex:1;
   order:3;
   margin:20px 15px 25px;
   border-radius: 15px;
   background: #c5c3c4;
   padding: 15px;
   top: 0;
  }
  .formatbutton 
  {
    text-decoration: none;
    color: #7fd4d2;
    background-color: #313639;
    padding: 11px;
    margin-top: 2%;
    font-weight: 700;
    border-radius: 10px;
    letter-spacing: 3px;
    text-align: center;
    font-family: Arial;
  }
    .box-3 .formatbutton:hover
  {
    text-decoration: none;
    color: black;
    background-color: #44a1ca;
  }
@media(max-width: 1500px)
{
  .box-2 .ba li
  {
   font-size: 19px;
  }
  .box-1 p
  {
    font-size: 19.5px;
  }
    .formatbutton 
  {
    padding: 12px;
  }
}   
@media(max-width: 1400px)
{
  .box-2 .ba li
  {
   font-size: 19px;
  }
  .box-1 p
  {
    font-size: 18.5px;
  }
    .formatbutton 
  {
    padding: 12px;
  }
} 
  @media(max-width: 1300px)
{
  .box-2 .ba li
  {
   font-size: 19px;
  }
  .box-1 p
  {
    font-size: 18px;
  }
      .formatbutton 
  {
    padding: 14px;
  }
} 
  @media(max-width: 1200px)
{
  .box-2 .ba li
  {
   font-size: 17.5px;
  }
  .box-1 p
  {
    font-size: 18px;
  }
} 
  @media(max-width: 1120px)
{
  .box-2 .ba li
  {
   font-size: 16px;
  }
  .box-1 p
  {
    font-size: 16px;
  }
        .formatbutton 
  {
    padding: 12.5px;
  }
} 
  @media(max-width: 1050px)
{
  .box-2 .ba li
  {
   font-size: 20px;
  }
  .box-1 p
  {
    font-size: 20px;
  }
}
  @media(max-width: 850px)
{
  .box-2 .ba li
  {
   font-size: 18px;
  }
  .box-1 p
  {
    font-size: 18px;
  }
}  

</style>

<div class="main">
  <div class="box-1">
       <center> <h2>About us</h2></center><br>
          <center style="font-size: 23px;"><strong>Our mission is to promote gardening</strong></center><br>
        <p>This site is exclusively for gardeners at the beginning of the road, eager to become professionals in this field.<br>
        <br>
        In order to create a comfort, and also to facilitate the learning of gardening, we, the authors of the site have exposed the information as systematically as possible. So, we divided the whole course on gardening concepts, and each concept, in turn, is divided into several departments.
        <br><br>
        In order to strengthen your freshly studied knowledge, we also created a quiz with a few questions, to test your acquired knowledge. So, you will also have a page where you can view your progress.
        <br><br>
        Finally, we invite you to be part of our family. You can both share ideas or ask us questions to enrich your garden treasure.
        </p>
  </div>
  <div class="box-2">
      <center><h2>MORE INFO</h2></center><br>
          <ul class="ba">
            <li> We teach people how to get started gardening and to improve their plant growing skills.</li>
            <center><i class="ion-leaf"></i> </center>
            <li> We taught people to plant vegetation, fruits and herbs correctly and neatly.</li>
            <center><i class="ion-leaf"></i> </center>
            <li>We teach people to get acquainted with the concept of soils for gardening, their types and use-cases.</li>
            <center><i class="ion-leaf"></i> </center>
            <li>We teach people to learn more about gardening tools and how to use them.</li>
            <center><i class="ion-leaf"> </i> </center>
            <li>We teach people to find out more about the gardener's calendar, divided into 3 seasons, very explicit and meticulous.</li>
            <center><i class="ion-leaf"> </i> </center>
            <li>We help people tastefully decorate their garden, in a style suggested by us.</li>
            <center><i class="ion-leaf"> </i> </center>  
            <li>We help gardeners research information through our knowledges in this theme.</li>                   

          </ul>

  </div>
  <div class="box-3">
    <h2>Flux de date RSS:</h2>
            <p class="formatbutton">User1</>
            <p class="formatbutton">User2</p>
            <p class="formatbutton">User3</p>
            <p class="formatbutton">User4</p>
            <p class="formatbutton">User5</p>
            <p class="formatbutton">User6</p>
            <p class="formatbutton">User7</p>
            <p class="formatbutton">User8</p>
            <p class="formatbutton">User9</p>
            <p class="formatbutton">User10</p>
  </div>
</div>

 <style>
  p.writeus
  {
    font-size: 23px;
  }

    p.footerName
  {
    font-size: 25px;
    margin-bottom: 10px;
    line-height: normal;
    font-family: 'Merriweather',serif;
  }
    p.footerSocial
  {
    color:#fff;
    font-size: 25px;
    padding-bottom: 5%;
    padding-top: 3%
  }

  div.footerSocialItems i
  {
     width: 12.5%;
     display: inline-block;
     float: left;
     font-size: 32px;
     color: white;
  }

  p.socialcolor a i:hover
  {
   color:#00008B;
   transition: 0.5s;
  }

   p.socialcolor1 a i:hover
  {
   transition: 0.5s;
   color: #f09433; 
  }

  p.socialcolor1 a i:hover
  {
   color: #f09433; 
   transition: 0.5s;
  }
         
  p.socialcolor2 a i:hover
  {
   transition: 0.5s; 
   color:#FF0000; 
  }

   p.socialcolor3 a i:hover
  {
    color:#00BFFF; 
   transition: 0.5s;
  }

  p.socialcolor4 a i:hover
  {
    color:#B22222; 
   transition: 0.5s;
  }

  p.socialcolor5 a i:hover
  {
    color:#32CD32;
   transition: 0.5s;
  }

  p.socialcolor6 a i:hover
  {
    color:#C0C0C0;
   transition: 0.5s;
  }
  .button
  {
   font-size: 18px;
   font-weight: :700;
   text-decoration: none;
   color:#fff;
   text-transform: uppercase;
   letter-spacing:2px;
   padding-top: 8px;
   padding-bottom:8px;
   padding-right:20px;
   padding-left: 20px;
   display: inline-block;
   border-width: 2px;
   border-color:#fff;
   border-style: solid;
   border-radius: 50px;
   margin-bottom: 20px;
  }

  .button:hover
  {
    color:#061634;
    border-color:#061634;
    transition: 0.2s;
    background-color: #fff;
  }
  .mainend
  {
    background-color:#061634;
    color:#6479a2;
    padding-top: 50px;
        padding-bottom: 2%;
  }
  .box-1end{
    margin:3%;
  }
  .box-2end{
   margin:1%;
  }
  .box-3end{
   margin:3%;
  }

  @media(min-width: 1000px){
    .mainend{
      display: flex;
    }

  .box-1end{
    flex:1;
    order:1;
    width: 100%;
    padding-bottom: 3%;
  }
  .box-2end{
    flex:1;
    order:2;
    width: 100%;
    padding-bottom: 3%;
  }
  .box-3end{
    flex:1;
    order:3;
    width: 100%;
    padding-bottom: 1%;
  }
    }

    @media(max-width: 1200px)
{
  div.footerSocialItems i
    {
        font-size: 28px;
    }
    p.footerName
   {
    font-size: 21px;
   }
    p.footerSocial
   {
     font-size: 21px;
   }
     p.writeus
     {
      font-size: 19px;
     }
}
    @media(max-width: 1000px)
{
  div.footerSocialItems i
    {
        font-size: 25px;
    }
    p.footerName
   {
    font-size: 18px;
   }
    p.footerSocial
   {
     font-size: 18px;
   }
        p.writeus
     {
      font-size: 16px;
     }
}
    @media(max-width: 1000px)
{
  div.footerSocialItems i
    {
        font-size: 40px;
    }
    p.footerName
   {
    font-size: 30px;
   }
    p.footerSocial
   {
     font-size: 30px;
   }
        p.writeus
     {
      font-size: 27px;
     }
       .button
  {
   font-size: 23px;
   letter-spacing:2.7px;
   padding-top: 12px;
   padding-bottom:12px;
   padding-right:25px;
   padding-left: 25px;
  }  
}
    @media(max-width: 900px)
{
  div.footerSocialItems i
    {
        font-size: 35px;
    }
    p.footerName
   {
    font-size: 25px;
   }
    p.footerSocial
   {
     font-size: 25px;
   }
        p.writeus
     {
      font-size: 22px;
     }
}
    @media(max-width: 700px)
{
  div.footerSocialItems i
    {
        font-size: 30px;
    }
    p.footerName
   {
    font-size: 20px;
   }
    p.footerSocial
   {
     font-size: 20px;
   }
        p.writeus
     {
      font-size: 18px;
     }
}
  
</style>

<div class="mainend">
  <div class="box-1end">
      <p class="footerName">Cernavca Valeria & Rusu Sandra</p>
      <p class="footerName"><i class="ion-leaf"></i> Gardening developpment and teaching </p>
  </div><br><br>
  <div class="box-2end">
        <p class="footerSocial">Our Social Links:</p>
        <div class="footerSocialItems">
          <p class="socialcolor2"><a href="https://www.pinterest.com/ngagrows" target="_blank" ><i class="ion-social-pinterest" aria-hidden="true" ></i></a></p>
          <p class="socialcolor1"><a href="https://www.instagram.com/gardenstoryusa/?hl=ro" target="_blank" class="i1"><i class="ion-social-instagram" aria-hidden="true" ></i></a></p>
          <p class="socialcolor2"><a href="https://www.youtube.com/channel/UCsZ9_j7tgOafXVDcLeVrf5w" target="_blank"><i class="ion-social-youtube" aria-hidden="true"></i></a></p>
          <p class="socialcolor3"><a href=https://twitter.com/gardenknowhow?lang=en target="_blank"><i class="ion-social-twitter" aria-hidden="true"></i></a></p>
          <p class="socialcolor4"><a href=https://mail.google.com/mail/u/0/#inbox/FMfcgxwHMPpmxjpdqgDqNlRPBsDkgFdB target="_blank"><i class="ion-social-googleplus" aria-hidden="true" ></i></a></p>
          <p class="socialcolor5"><a href=https://api.whatsapp.com/send?phone=&text=Checkout%20this%20awesome%20quote%20by%20Marcus%20Tullius%20Cicero%20https%3a%2f%2fwww.quoteload.com%2fquotes%2fauthors%2fmarcus-tullius-cicero%2f372-if-you-have-a-garden-and-a-library-you-have-everything-you-need&source=&data=&app_absent= target="_blank"><i class="ion-social-whatsapp" aria-hidden="true" ></i></a></p>
          <p class="socialcolor6"><a href="https://github.com/Valeria1999" target="_blank"><i class="ion-social-github" aria-hidden="true"></i></a></p>
          <p class="socialcolor"><a href="https://www.facebook.com/TheGardenerMag/?__tn__=%2Cd%2CP-R&eid=ARDuaGES9MYUMoXjWjTl4cAjJFntX39iHNLgcTaShC0MTuLVwVHmQLBUJKcXNo6r5QGLj-VSe_UfyGEp" target="_blank"><i class="ion-social-facebook" aria-hidden="true"></i></a></p>
        </div>
  </div><br><br>
  <div class="box-3end">
        <div>
          <a href="_sendEmail/sendMail.php" class="button" target="_blank">Make Contact</a><br><br>
        </div>
        <p class="writeus">Write Us For more Informations !</p>
  </div>
</div>

</body>
</html>

