<?php


?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

for ($i=0; $i <= 20 ; $i++) { 
    echo $i;
    echo ",";
    echo $i * $i;
    echo "<br>";
}
?>
<p>odpočet rakety ve jménu Kim Jong un užunk uma</p>
<?php
/*odpočet - mělo by fungovat */
for ($i=10; $i >=0; $i--) { 
  echo $i;
  echo "<br>";
}
echo "raketa letí -김정의 이름으로 - gimjeong-ui ileum-eulo ";
?>
<p>vygenerovat x náhodných čísel v rozahu od minima až po maxima</p>
<?php
define('max_number', 100);
define('min_number', 0);
define('numbers_count', 10);
for ($i=0; $i < numbers_count ; $i++) { 
  echo rand(min_number, max_number). ",";
}
?>

<p>schody CSS</p>

<br>
<?php for ($i=20; $i<400; $i+=20) { ?> 
 <div style="display: block; width:<?=$i?>px; height: 20px; 
  background-color: blue;"></div>
  <?php } ?>
</body>
</html>