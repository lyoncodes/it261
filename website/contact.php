<?php
$name = '';
$n_exception = '';

$email = '';
$email_exception = '';

$phone = '';
$phone_exception = '';

$color = '';
$color_exception = '';

$option = '';
$option_exception = '';

$msg = '';
$msg_exception = '';

$privacy = '';
$privacy_exception = '';

IF($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
  $n_exception = 'Please enter your first name';
} else {
  $name = $_POST['name'];
}

if(empty($_POST['email'])) {
  $email_exception = 'Please enter your email';
} else {
  $email = $_POST['email'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
  $phone_exception = 'Your phone number please!';
  } elseif(array_key_exists('phone', $_POST)){
      if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
  { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
  $phone_exception = 'Invalid format!';
  }   else{
      $phone = $_POST['phone'];
  }
  }

if(empty($_POST['color'])) {
  $color_exception = 'Please enter a color';
} else {
  $color = $_POST['color'];
}

if(empty($_POST['option'])) {
  $option_exception = 'Please enter a option';
} else {
  $option = $_POST['option'];
}

if(empty($_POST['msg'])) {
  $msg_exception = 'Please let me know what you\'d like to work on!';
} else {
  $msg = $_POST['msg'];
}

if(empty($_POST['privacy'])) {
  $privacy_exception = 'Please agree to privacy';
} else {
  $privacy = $_POST['privacy'];
}

function my_colors() {
  $my_return = '';
  if(!empty($_POST['color'])) {
    $my_return = implode(', ', $_POST['color']);
  }
  return $my_return;
}

if(isset(
  $_POST['name'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['color'],
  $_POST['option'],
  $_POST['msg'],
  $_POST['privacy'],
)){
  $to = 'szemeo@mystudentswa.com';
  $subject = 'Another Form Email,' .date('m/d/y');
  $body = '
  The first name is: '.$name.''.PHP_EOL.'
  The return email is: '.$email.''.PHP_EOL.'
  Their color is: '.my_colors().''.PHP_EOL.'
  The message is: '.$msg.''.PHP_EOL.'
  Their selected option is: '.$option.''.PHP_EOL.'
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
<?php 
include 'includes/header.php';
include 'config.php';
?>
<?php echo $headline ?>
<section>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
    <span class="danger">
      <?php 
        if(empty($_POST['name'])) {
          echo $n_exception;
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

    <label for="msg"></label>
    <textarea name="msg"><?php if(isset($_POST['msg'])) echo htmlspecialchars($_POST['msg']);?></textarea>
    <span class="danger">
      <?php 
        if(empty($_POST['msg'])) {
          echo $msg_exception;
        }
      ?>
    </span>
    
    <label for="color"> Favorite Colors </label>
    <ul>
      <li>
        <input type="checkbox" name="color[]" value="red"
        <?php if(isset($_POST['color']) && in_array('red', $color)) echo 'checked="checked"';?>> Red
      </li>
      <li>
        <input type="checkbox" name="color[]" value="blue"
        <?php if(isset($_POST['color']) && in_array('blue', $color)) echo 'checked="checked"'; ?>> Blue
      </li>
      <li>
        <input type="checkbox" name="color[]" value="green"
        <?php if(isset($_POST['color']) && in_array('green', $color)) echo 'checked="checked"'; ?>> Green
      </li>
      <li>
        <input type="checkbox" name="color[]" value="yellow"
        <?php if(isset($_POST['color']) && in_array('yellow', $color)) echo 'checked="checked"'; ?>> Yellow
      </li>
    </ul>
    <span class="danger">
      <?php 
        if(empty($_POST['color'])) {
          echo $color_exception;
        }
      ?>
    </span>
    
    <label for="option">Option</label>
    <select name="option">
      <option value="" NULL
      <?php if(isset($_POST['option']) && $_POST['option'] == NULL) echo 'selected = "unselected"';?>>Select One</option>
      <option value="nw"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'a') echo 'selected = "unselected"';?>>A</option>
      <option value="b"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'b') echo 'selected = "unselected"';?>>B</option>
      <option value="c"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'c') echo 'selected = "unselected"';?>>C</option>
      <option value="d"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'd') echo 'selected = "unselected"';?>>D</option>
      <option value="e"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'e') echo 'selected = "unselected"';?>>E</option>
      <option value="f"
      <?php if(isset($_POST['option']) && $_POST['option'] == 'f') echo 'selected = "unselected"';?>>F</option>
    </select>
    
    <span class="danger">
      <?php 
        if(empty($_POST['option'])) {
          echo $option_exception;
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

    <div>
      <input type="submit" value="Send it">
    </div>
    <p><a href="">Reset </a></p>
  </fieldset>
  </form>
</section>

</body>
</html>