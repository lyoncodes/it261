<?php
// $current_date = date("H:i");

// if(isset($current_date)) {
//   echo date("H:i");
// } else {
//   echo 'It may be wise to seek shelter.';
// }

// _GET, _POST, _PUT,  _PATCH, _DELETE

// set it if ye can GET it
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
};

// switch cases
switch($today) {
  case 'Tuesday' : 
  $coffee = '<h2>Tuesday is Java</h2>';
  $img = 'coffee.png';
  $content = 'Java is portable. What does that mean? It means it comes with its own virtual compiler.';
  $color = '#536698';
  break;
  
  case 'Wednesday' : 
  $coffee = '<h2>Wednesday is more Java</h2>';
  $img = 'americano.jpeg';
  $content = 'Java is also secure, with built-in security layers that protect the intergrity of the language. Java and its programs are hard to corrupt.';
  $color = '#536444';

  break;
  
  case 'Thursday' : 
  $coffee = '<h2>Thursday is Node.js Projects (js)</h2>';
  $img = 'latte.jpeg';
  $content = 'Node.js is a runtime. It has an event loop with multiple phases. It\'s extraordinary.';
  $color = '#523698';

  break;
  
  case 'Friday' : 
  $coffee = '<h2>Friday is PHP</h2>';
  $img = 'green-tea.jpeg';
  $content = 'PHP is a server-side scripting language that makes hard things easier. People thought it would be phased out by GO, but it\'s still here.';
  $color = '#006698';
  break;
  
  case 'Saturday' : 
  $coffee = '<h2>Saturday is Algorithms and Math</h2>';
  $img = 'coffee.png';
  $content = 'It\'s all just adding and subtracting after all.';
  $color = '#530098';
  break;
  
  case 'Sunday' : 
  $coffee = '<h2>Sunday is PHP</h2>';
  $img = 'cap.jpeg';
  $content = 'PHP and Vue.js share DNA. Having fluency in one translates well to the other.';
  $color = '#536308';
  break;

  case 'Monday' : 
  $coffee = '<h2>Monday is Java and Bash</h2>';
  $img = 'americano.jpeg';
  $content = 'PHP and BASH are almost sister languages. Long live BASH';
  $color = '#532343';
  break;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css"></link>
  <title>Switch ClassWork Excercises</title>
</head>
<body style='background-color: <?php echo $color ?>'>
  <h2>Daily Specials</h2>
  <nav>
    <ul>
      <li>
        <a href="switch.php?today=Tuesday">Tuesday</a>
      </li>
      <li>
        <a href="switch.php?today=Wednesday">Wednesday</a>
      </li>
      <li>
        <a href="switch.php?today=Thursday">Thursday</a>
      </li>
      <li>
        <a href="switch.php?today=Friday">Friday</a>
      </li>
      <li>
        <a href="switch.php?today=Saturday">Saturday</a>
      </li>
      <li>
        <a href="switch.php?today=Sunday">Sunday</a>
      </li>
      <li>
        <a href="switch.php?today=Monday">Monday</a>
      </li>
    </ul>
  </nav>
  
  <?php echo '<h1>'.$coffee.'</h1>'; ?>
  <img src='../../assets/images/<?php echo $img; ?>' alt="<?php echo $coffee; ?>"></img>
  <?php echo '<p>'.$content.'</p>'; ?>

  <footer>
			<h1>Some Validation</h1>
			<li><a href="http://validator.w3.org/check?uri=referer">HTML</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>
	</footer>
</body>
</html>

