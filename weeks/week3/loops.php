<?php

for ($x = 0; $x < 10; $x++){
  echo $x;
};

// for ($cel = 0; $cel <= 100; $cel++) {
//   $far = ($cel * 9/5) + 32;
//   $far_f = floor($far);
//   echo '<b> Farenheit: </b> '.$far_f.' <b> Celcius: </b>'.$cel.'';
//   echo '<br>';
// };

// driving in canada 

for ($k = 0; $k < 100; $k++) {
  $mi = $k * .62137;
  $mi_f = floor($mi);
  echo '<span>mile: </span>'.$mi_f.'<span> kilometer: </span> <span class="danger">'.$k.'</span>';
  echo '<br>';
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css"></link>
  <title>Document</title>
</head>
<body>
</body>
</html>