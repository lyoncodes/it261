<?php

$min = 1;
$dice_max = 6;
$photos_max = 20;

$dice = rand($min, $dice_max);

echo $dice;
echo '<br>';

$dice1 = rand($min, $dice_max);
$dice2 = rand($min, $dice_max);

echo $dice1;
echo '<br>';
echo $dice2;
echo '<br>';

if ($dice1 == $dice2) {
  echo 'winner';
} else {
  echo 'not a winner';
}

$i = rand($min, $photos_max);
echo $i;
echo '<br>';

$photos = array(
  'photo1',
  'photo2',
  'photo3',
  'photo4',
  'photo5',
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, count($photos) - 1);
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="../../assets/photos/'.$selected_image.'" alt="'.$photos[$i].'">';

