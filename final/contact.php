<?php
session_start();

include('includes/form-data.php');
include('includes/form-config.php');


IF($_SERVER['REQUEST_METHOD'] == 'POST') {
  foreach($contact_form as $field => $val) {
    if (empty($_POST[$field])) {
      array_push($form_errors, "$field is required");
    } else {
      ${$field} = $_POST[$field];
    }
  }

// if(empty($_POST['phone'])) {  // if empty, type in your number
//   $phone_exception = 'Your phone number please!';
//   } elseif(array_key_exists('phone', $_POST)){
//       if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
//   { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
//   $phone_exception = 'Invalid format!';
//   }   else{
//       $phone = $_POST['phone'];
//   }
//   }
if(empty($_POST['checkBox'])) {
  array_push($form_errors, "Select an option from the checkbox");
} else {
  $checkBox = $_POST['checkBox'];
}
if(empty($_POST['option'])) {
  array_push($form_errors, "Select an option from the dropdown");
} else {
  $option = $_POST['option'];
}
if(isset(
  $_POST['name'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['privacy'],
  $_POST['checkBox'],
  $_POST['option']
)){
  $to = 'szemeo@mystudentswa.com';
  $subject = 'Another Form Email,' .date('m/d/y');
  $body = '
  The first name is: '.$name.''.PHP_EOL.'
  The return email is: '.$email.''.PHP_EOL.'
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
include('../final/includes/header.php');
include('../final/config.php');
?>
<?php echo $headline ?>
<section>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <?php 
      include('../final/errors.php');
    ?>
    <?=makeFormLabels($contact_form)?>
    <!-- CHECKBOX -->
    <ul>
      <li>
        <input type="checkbox" name="checkBox[]" value="Vendor"
        <?php if(isset($_POST['checkBox']) && in_array('Vendor', $checkBox)) echo 'checked="checked"';?>>Vendor
      </li>
      <li>
        <input type="checkbox" name="checkBox[]" value="Merchandise"
        <?php if(isset($_POST['checkBox']) && in_array('Merchandise', $checkBox)) echo 'checked="checked"';?>>Merchandise
      </li>
      <li>
        <input type="checkbox" name="checkBox[]" value="Licensing"
        <?php if(isset($_POST['checkBox']) && in_array('Licensing', $checkBox)) echo 'checked="checked"';?>>Licensing
      </li>
    </ul>
    <!-- SELECT -->
    <label for="option">Availability</label>
    <select name="option">
      <option value="" NULL
      <?php if(isset($_POST['option']) && $_POST['option'] == NULL) echo 'selected = "unselected"';?>>Select One</option>
      <option value="9AM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '9AM') echo 'selected = "unselected"';?>>9AM</option>
      <option value="10AM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '10AM') echo 'selected = "unselected"';?>>10AM</option>
      <option value="11AM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '11AM') echo 'selected = "unselected"';?>>11AM</option>
      <option value="1PM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '1PM') echo 'selected = "unselected"';?>>1PM</option>
      <option value="2PM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '2PM') echo 'selected = "unselected"';?>>2PM</option>
      <option value="3PM"
      <?php if(isset($_POST['option']) && $_POST['option'] == '3PM') echo 'selected = "unselected"';?>>3PM</option>
    </select>
    <!-- RADIO BUTTON -->
    <label for="privacy">Privacy</label>
    <ul>
      <li>
        <input type="radio" name="privacy" value="agree"
        <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'selected = "unselected"';?>>I agree!
      </li>
    </ul>
    <!-- BUTTON -->
    <div>
      <input type="submit" value="Send it">
    </div>

    <p><a href="">Reset </a></p>
  </fieldset>
  </form>
</section>
</body>
</html>