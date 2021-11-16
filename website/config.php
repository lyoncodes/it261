<?php
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

$headline = '
<header>
<h1>Michael Lyon\'s PHP Playground</h1>
  <div id="court">
    <img id="ball" class="animate__animated animate__bounce" src="../assets/images/ball.svg">
  </div>
</header>
';
?>