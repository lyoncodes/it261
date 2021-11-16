<?php
$fname = '';
$fn_exception = '';

$lname = '';
$ln_exception = '';

$email = '';
$email_exception = '';

$wager = '';
$wager_exception = '';

$wines = '';
$wines_exception = '';

$regions = '';
$regions_exception = '';

$comments = '';
$comments_exception = '';

$privacy = '';
$privacy_exception = '';

$phone = '';
$phone_exception = '';

IF($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['fname'])) {
  $fn_exception = 'Please enter your first name';
} else {
  $fname = $_POST['fname'];
}

if(empty($_POST['lname'])) {
  $ln_exception = 'Please enter your last name';
} else {
  $lname = $_POST['lname'];
}

if(empty($_POST['email'])) {
  $email_exception = 'Please enter your email';
} else {
  $email = $_POST['email'];
}

if(empty($_POST['wager'])) {
  $wager_exception = 'Please enter your wager';
} else {
  $wager = $_POST['wager'];
}

if(empty($_POST['wines'])) {
  $wines_exception = 'Please enter your wine';
} else {
  $wines = $_POST['wines'];
}

if($_POST['regions'] == NULL) {
  $regions_exception = 'Please enter your regions';
} else {
  $regions = $_POST['regions'];
}

if(empty($_POST['comments'])) {
  $comments_exception = 'Please agree to comments';
} else {
  $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
  $privacy_exception = 'Please agree to privacy';
} else {
  $privacy = $_POST['privacy'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
  $phone_Err = 'Your phone number please!';
  } elseif(array_key_exists('phone', $_POST)){
      if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
  { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
  $phone_Err = 'Invalid format!';
  }   else{
      $phone = $_POST['phone'];
  }
  }

function my_wines() {
  $my_return = '';
  if(!empty($_POST['wines'])) {
    $my_return = implode(', ', $_POST['wines'] );
  }
  return $my_return;
}

if(isset(
  $_POST['fname'],
  $_POST['lname'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['wager'],
  $_POST['wines'],
  $_POST['regions'],
  $_POST['comments'],
  $_POST['privacy'],
)){
  $to = 'lyoncodes@gmail.com';
  $subject = 'Another Form Email,' .date('m/d/y');
  $body = '
  The first name is: '.$fname.''.PHP_EOL.'
  The last name is: '.$lname.''.PHP_EOL.'
  Wager: '.$wager.''.PHP_EOL.'
  Region: '.$regions.''.PHP_EOL.'
  Wine: '.my_wines().''.PHP_EOL.'
  Comments: '.$comments.''.PHP_EOL.'
  email: '.$email.''.PHP_EOL.'
  phone: '.$phone.''.PHP_EOL.'
  ';

  $headers = array(
    'From' => 'noreply@mystudentswa.com',
    'Reply-to' => ''.$email.''
  );

  mail($to, $subject, $body, $headers);
  header('Location: thx.php');
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/form.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <title>Emailable Form 1</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
<fieldset>
  <label for="fname">First Name</label>
  <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']);?>">
  <span class="danger">
    <?php 
      if(empty($_POST['fname'])) {
        echo $fn_exception;
      }
    ?>
  </span>
  
  <label for="lname">Last Name</label>
  <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']);?>">
  <span class="danger">
    <?php 
      if(empty($_POST['lname'])) {
        echo $ln_exception;
      }
    ?>
  </span>

  <label for="email">Email</label>
  <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
  <span class="danger">
    <?php 
      if(empty($_POST['email'])) {
        echo $email_exception;
      }
    ?>
  </span>

  <label for="phone">Phone</label>
  <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
  <span class="danger">
    <?php 
      if(empty($_POST['phone'])) {
        echo $phone_exception;
      }
    ?>
  </span>

  <ul>
    <label for="wager">O/U</label>
    <li>
      <input type="radio" name="wager" value="over"
      <?php if(isset($_POST['wager']) && $_POST['wager'] == 'over') echo 'checked="checked"';?>
      > +
    </li>
    <li>
      <input type="radio" name="wager" value="under"
      <?php if(isset($_POST['wager']) && $_POST['wager'] == 'under') echo 'checked="checked"';?>
> -
    </li>
    <li>
      <input type="radio" name="wager" value="push"
      <?php if(isset($_POST['wager']) && $_POST['wager'] == 'push') echo 'checked="checked"';?>
> PUSH
    </li>
  </ul>
  <span class="danger">
    <?php 
      if(empty($_POST['wager'])) {
        echo $wager_exception;
      }
    ?>
  </span>

  <label for="wines"> Favorite Wines </label>
  <ul>
    <li>
      <input type="checkbox" name="wines[]" value="cab"
      <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"';?>
> Cabernet
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="pinotnoir"
      <?php if(isset($_POST['wines']) && in_array('pinotnoir', $wines)) echo 'checked="checked"'; ?>> Pinot Noir
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="pinotgris"
      <?php if(isset($_POST['wines']) && in_array('pinotgris', $wines)) echo 'checked="checked"'; ?>> Pinot Gris
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="syrah"
      <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"'; ?>> Syrah
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="merlot"
      <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"'; ?>> Merlot
    </li>
  </ul>
  <span class="danger">
    <?php 
      if(empty($_POST['wines'])) {
        echo $wines_exception;
      }
    ?>
  </span>

  <label for="regions">Regions</label>
  
  <select name="regions">
  <option value="" NULL
  <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected"';?>>Select One</option>
  <option value="nw"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "unselected"';?>>Northwest</option>
  <option value="sw"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "unselected"';?>>Southwest</option>
  <option value="mw"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "unselected"';?>>Midwest</option>
  <option value="ne"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "unselected"';?>>Northeast</option>
  <option value="se"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected = "unselected"';?>>Southeast</option>
  <option value="so"
  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected = "unselected"';?>>South</option>
  
  <span class="danger">
    <?php 
      if(empty($_POST['regions'])) {
        echo $regions_exception;
      }
    ?>
  </span>

  <label for="comments"></label>
  <textarea name="comments">
  <?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?>
  </textarea>
  <span class="danger">
    <?php 
      if(empty($_POST['comments'])) {
        echo $comments_exception;
      }
    ?>
  </span>

  <label for="privacy">Privacy</label>
  <ul>
    <li>
      <input type="radio" name="privacy" value="agree" 
      <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'selected = "unselected"';?>>I agree!
    </li>
  </ul>
  <span class="danger">
    <?php 
      if(empty($_POST['privacy'])) {
        echo $privacy_exception;
      }
    ?>
  </span>
  <input type="submit" value="Send it">
  <p><a href="">Reset </a></p>

</fieldset>
</form>
</body>
</html>