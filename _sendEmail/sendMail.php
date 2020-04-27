
<!-- <meta charset="utf-8">  -->

<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Trimite forma la mail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
    	form {
    		background-color: #f9f9f9;
    		padding: 20px;
    		margin: 20px;
    	}
    </style>
  </head>

  <body>
    <div class="container">

      <div class="row">
      	<div class="col-sm-4">
      		<form action="#" method="POST">
      			<legend>Send us question or coments</legend>

      			<div class="form-group">
      				<label for="">Introduce your Name</label>
      				<input type="text" class="form-control" id="" name="name1" placeholder="Name, Surname">
      			</div>
      		
      			<div class="form-group">
      				<label for="">Introduce your Email</label>
      				<input type="text" class="form-control" id="" name="email1" placeholder="mail@gmail.com">
      			</div>

            <div class="form-group">
              <label for="">Introduce your Text</label>
              <input type="text" class="form-control" id="" name="text" placeholder="Some text" >
            </div>
            <input type="submit"  class="btn btn-primary" value="Send your complaints and suggestions" name="sab">
      		</form>
      	</div><!-- .col-sm-4 -->
      </div> <!-- .row -->

    </div><!-- /.container -->
    <?php
$letter="Letter";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// extrag variabilele din post  
if (isset($_POST['name1']))     {$name1     = $_POST['name1'];    if ($name1 == '') {unset($name1);}}
if (isset($_POST['email1']))    {$email1    = $_POST['email1'];   if ($email1 == '')  {unset($email1);}}
if (isset($_POST['text']))      {$text      = $_POST['text'];   if ($text == '')  {unset($text);}}
if (isset($_POST['sab']))       {$sab     = $_POST['sab'];    if ($sab == '')   {unset($sab);}}
//sa scap de spatii inutile
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// receiver
$address="cernavcavaleria@gmail.com";
//ce contine scrisoarea
$note_text="Sugestion or question !\r\nUser : $name1 \r\n Email : $email1 \r\n Message: $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$letter,$note_text,"Content-type:text/plain; windows-1251"); 
//thank you message
echo "<center><p style='color:black; font-size:25px'>Dear  <b>$name1</b> your message is succesfuly send.</p></center> <hr><br>
     <center><p style='color:green; font-size:25px'> Site administrators thank you for contributing to the efficiency of the site.</p></center><hr>
    <center><p style='color:black; font-size:25px'><br>You will be answered soon by mail <b> $email1</b>.</p></center>";
}

?>
  </body>
</html>
	