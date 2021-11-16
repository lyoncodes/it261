<?php
$dog_to_show = array(
  'Name' => 'Gibbs',
  'Home' => 'Mexico',
  'Breed' => 'Schnoodle'
);

$dog_to_show['Name'] = 'Gibbs';
$dog_to_show['Home'] = 'Mexico';
$dog_to_show['Breed'] = 'Schnoodle';

// foreach($dog_to_show as $key => $value) {
//   echo ''.$key.': '.$value.'<br>';
// }

// Build an hard-coded nav why don't ya
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// foreach($nav as $key => $value) {
//   echo '<b> '.$key.'</b>: '.$value.'<br>';
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css"></link>
  <title>✨ Our Darling Foreach() ✨</title>
</head>
<body>
  <nav>
    <ul>
      <?php 
        foreach($nav as $key => $value) {
          echo '<li><a href="'.$key.'"> '.$value.' </a></li>';
        } 
      ?>
    </ul>
  </nav>
  <div class="col-12">
    <h1>Our foreach() loops </h1>
    <h2>Dog Profile</h2>
    <?php foreach($dog_to_show as $key => $value) {
    echo '<b> '.$key.'</b>: '.$value.'<br>';
    } ?>

  </div>
</body>
</html>