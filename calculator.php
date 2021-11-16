
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/nav.css">
  <title>Trip Calculator</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="miles">How Many Miles?</label>
    <input type="text" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">
    
    <label for="eff">Fuel Efficiency</label>
    <select name="eff">
      <option value="10"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '10') echo 'selected="selected" ' ;?>
      >terrible</option>
      <option value="20"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '20') echo 'selected="selected" ' ;?>
      >average</option>
      <option value="40"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '40') echo 'selected="selected" ' ;?>
      >good</option>
    </select>
    
    <label for="ppg">Price Per Gallon</label>
    <ul>
      <li><input type="radio" name="ppg" value="3.00"
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.00') echo 'checked="checked"';?>>
      3.00</li>
      <li><input type="radio" name="ppg" value="3.50"
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.50') echo 'checked="checked"';?>
      >3.50</li>
      <li><input type="radio" name="ppg" value="4.00">
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '4.00') echo 'checked="checked"';?>
      4.00</li>
    </ul>
    
    <input type="submit" value="Convert">
    <p><a href="">Reset</a></p>
  </fieldset>
</form>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(
      $_POST['miles']
    )) {
      echo '<p>please fill out the miles field</p>';
    };
    if(empty(
      $_POST['ppg']
    )) {
      echo '<p>please fill out the price per gallon field</p>';
    };
    if(empty(
      $_POST['eff']
    )) {
      echo '<p>please fill out the efficiency field</p>';
    };
    if($_POST['eff'] == NULL) {
      echo '<p>Please choose your effing institution</p>';
    } elseif(isset(
      $_POST['miles'],
      $_POST['eff'],
      $_POST['ppg']
    )) {
      $miles = $_POST['miles'];
      $eff = $_POST['eff'];
      $ppg = $_POST['ppg'];

      $cost = (intval($miles)/intval($eff)) * $ppg;
      echo '
        <div class="col-12 plane">
          <p> You have driven '.$miles.' miles</p>
          <p> Your vehicle has an efficiency rating of $'.$eff.' per gallon</p>
          <p> Your total cost for gas will be $'.floor($cost).' dollars</p>
        </div>
      ';
    }
  }
?>

</body>
</html>