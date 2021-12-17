<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
// Chronos
date_default_timezone_set('America/Los_Angeles');
// Navigation
$nav = array(
  "index.php" => "Home",
  "about.php" => "About",
  "switch.php" => "Switch",
  "contact.php" => "Contact",
  "ballpark.php" => "Ballparks"
);

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Click <a href="./ballpark.php" class="embed-link slime">Ballparks</a> to get started.';
  break;
  case 'about.php':
    $title = 'This is a Controller layer for a simulation of Major League Baseball\'s merchandising database. It explores a miniscule part of the database.';
  break;
  case 'gallery.php':
    $title = 'Dog Gallery';
  break;
  case 'gallery-view.php':
    $title = 'Another Dog Gallery?';
  break;
  case 'daily.php':
    $title = 'Daily Assignment';
  break;
  case 'contact.php';
    $title = 'Contact Michael';
}

function makeNav($list)
{
  $ret = '';
  foreach($list as $url => $text)
  {
    if($url == THIS_PAGE)
    {
      $ret .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }else{
      $ret .= '<a href="'. $url . '">' . $text . '</a>' . PHP_EOL;
    }
  }
  return $ret;
}
?>