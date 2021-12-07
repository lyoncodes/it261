<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
// Chronos
date_default_timezone_set('America/Los_Angeles');
// Navigation
$nav = array(
  "index.php" => "Home",
  "about.php" => "About",
  "gallery.php" => "Dogs",
  "contact.php" => "Contact",
  "gallery-view.php" => "Gallery",
  "daily.php" => "Daily"
);

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Portal Page';
  break;
  case 'about.php':
    $title = 'About Page';
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