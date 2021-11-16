<?php 

function sayHello() {
  echo 'Hello Mother';
}

sayHello();

echo '<br>';

function passThis($name){
  echo 'Hello '.$name.'';
}

passThis('Miguel');
echo '<br>';

passThis('Gibbs');
echo '<br>';

passThis('Madison');
echo'<br>';

function personProfile($name, $age){
  echo 'Hello '.$name.'. You are '.$age.' years old.';
}

personProfile('Miguel', 30);
echo '<br>';
personProfile('Gibbs', 1);
echo '<br>';
personProfile('Madison', 30);
echo '<br>';

function cube($n){
  $cubing = $n * $n * $n;
  echo $cubing;
}
cube(5);
echo'<br>';

function far_conversion($cel) {
  $far = ($cel * 9/5) + 32;
  return $far;
}

$far = far_conversion(40);
echo ''.$far.' degrees.';

echo'<br>';

function area_volume($val1, $val2, $val3) {
  $area = $val1 * $val2;
  $volume = $val1 * $val2 * $val3;
  return array($area, $volume);
}


//
list($my_area, $my_volume) = area_volume(12, 10, 6);
echo '<b>area:</b> '.$my_area.' ';
echo '<b>volume:</b>'.$my_volume.' ';
?>