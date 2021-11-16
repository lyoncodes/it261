<?php

$temp = 89;
if($temp <= 90) {
  echo 'not that hot';
} else {
  echo 'It\'s not that hot';
};

echo "<br>";

$temp = 76;
if($temp <= 76) {
  echo 'what a day for baseball ⚾️';
} elseif($temp < 70) {
  echo 'it\'s a cold day for baseball ⚾️';
} else {
  echo 'must be summer 🌞';
};

echo "<br>";


$sales = 800000;
$salary = 200000;

if($sales >= 800000) {
  $salary *= 1.10;
  echo $salary;
} elseif($sales >= 600000) {
  $salary *= 1.05;
  echo $salary;
} else {
  echo $salary;
};