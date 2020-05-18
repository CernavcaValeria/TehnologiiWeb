<?php

$connect = new PDO("mysql:host=localhost; dbname=register-bd", "root", "");

$query = "SELECT result.userId, users.login ,sum(result.finalScore) as suma , users.level FROM result INNER JOIN users on result.userId=users.id GROUP BY userId  order by suma desc limit 10";

$statement = $connect->prepare($query);

$statement->execute(); //will execute query

$result = $statement -> fetchAll(); //will return the result in an array format

header("Content-Type: text/xml; charset=iso-8859-1");

$base_url = "http://localhost/RSS/";

echo "<?xml version='1.0' encoding='UTF-8' ?>" . PHP_EOL;

echo "<rss version='2.0'>" . PHP_EOL;

echo "<channel>" . PHP_EOL;

echo  "<title>Feed Title | RSS</title>" . PHP_EOL;

echo "<link>" .$base_url. "rss.php</link>" . PHP_EOL;

echo "<description>Cloud RSS</description>" .PHP_EOL;

echo "<language>en-us</language>" . PHP_EOL;


foreach($result as $row)
{
  echo "<item xmlns:dc='ns:1'>".PHP_EOL;
  echo '<nume>' .$row["login"]. '</nume>' . PHP_EOL;
  echo '<scor>' .$row["suma"].'</scor>' . PHP_EOL;
  echo '<level>' .$row["level"].'</level>' . PHP_EOL;
  //echo '<link>' .$base_url."test/".$row["level"] .'/</link>' . PHP_EOL;

  echo '<IdUser>' .($row["userId"]).'</IdUser>' . PHP_EOL; //will genarate unique id for each post

  echo '<category>TEST</category>' . PHP_EOL;
  echo '</item>' . PHP_EOL;
}

echo '</channel>' . PHP_EOL;

echo '</rss>' . PHP_EOL;



?>




