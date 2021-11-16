<?php
// math on strings
$a = '2';
$b = '3';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;

// format out
$money_f = number_format($money, 2);
echo $money_f;
echo '<br>';

// floor it
$money_f = floor($money);
echo $money_f;
echo '<br>';

// the ceiling
$money_f = ceil($money);
echo $money_f;
echo '<br>';

// calculations
$radius = '10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;
echo '<br>';

// f to C
$celcius = 22;
$far = ($celcius * 9/5) + 32;
$far_f = floor($far);

echo ''.$far.' degrees';
echo '<br>';
echo 'floored: '.$far_f.' degrees';
echo '<br>';

// usd to ca
$can = 100.3;
$can *= .79;

echo '<p>I have <b>'.$can.'</b> American dollars </p>';
echo '<br>';

echo '<p>I have <b>'.floor($can).'</b> American dollars </p>';
echo '<br>';
