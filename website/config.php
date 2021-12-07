<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

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

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo 'Error';
      die();
  }
}
?>