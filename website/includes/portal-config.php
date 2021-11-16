<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
// Chronos
date_default_timezone_set('America/Los_Angeles');
// Navigation
$nav = array(
  "index.php" => "Home",
  "about.php" => "About",
  "people.php" => "People",
  "contact.php" => "Contact",
  "gallery.php" => "Gallery",
  "daily.php" => "Daily"
);

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Portal Page';
  break;
  case 'daily.php':
    $title = 'Daily.php';
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