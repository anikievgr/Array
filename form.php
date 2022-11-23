<?php
$text = $_GET['forma'];
$longString = strlen($text);
$Answer = array(
    "TEXT"=>$text,
    "LongStrind"=> $longString
);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <div class="answer">
        <div class="textItems">
        <div class="text textItem"><?=$Answer["TEXT"]?></div>
        <div class="long textItem"><?=$Answer["LongStrind"]?></div>
        </div>
    </div>
  </body>
</html>