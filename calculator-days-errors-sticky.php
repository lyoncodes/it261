
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form.css">
  <title>Trip Calculator Errors</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="name">Traveler Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
    
    <label for="miles">How Many Miles?</label>
    <input type="text" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

    <label for="hpd">How Many Hours Per Day Will You Drive?</label>
    <input type="text" name="hpd" value="<?php if(isset($_POST['hpd'])) echo htmlspecialchars($_POST['hpd']);?>">
    
    <label for="eff">Fuel Efficiency</label>
    <select name="eff">
      <option value="" NULL
      <?php if(isset($_POST['eff']) && $_POST['eff'] == NULL) echo 'selected="unselected" ' ;?>
      >Select Your Efficiency Level</option>
      <option value="10"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '10') echo 'selected="selected" ' ;?>
      >terrible(10)</option>
      <option value="20"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '20') echo 'selected="selected" ' ;?>
      >average(20)</option>
      <option value="40"
      <?php if(isset($_POST['eff']) && $_POST['eff'] == '40') echo 'selected="selected" ' ;?>
      >good(40)</option>
    </select>
    
    <label for="ppg">Price Per Gallon</label>
    <ul>
      <li><input type="radio" name="ppg" value="3.00"
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.00') echo 'checked="checked"';?>>$3.00</li>
      <li><input type="radio" name="ppg" value="3.50"
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.50') echo 'checked="checked"';?>
      >$3.50</li>
      <li><input type="radio" name="ppg" value="4.00"
      <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '4.00') echo 'checked="checked"';?>
      >$4.00</li>
    </ul>
    
    <input type="submit" value="Convert">
    <p><a href="">Reset</a></p>
  </fieldset>
</form>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(
      $_POST['name']
    )) {
      echo '<p>please fill out the name field</p>';
    };
    if(empty(
      $_POST['miles']
    )) {
      echo '<p>please fill out the miles field</p>';
    };
    if(empty(
      $_POST['hpd']
    )) {
      echo '<p>please fill out the hours per day field</p>';
    };
    if(empty(
      $_POST['ppg']
    )) {
      echo '<p>please fill out the price per gallon field</p>';
    };
    if($_POST['eff'] == NULL) {
      echo '<p>Please choose your efficiency rating</p>';
    } elseif(isset(
      $_POST['name'],
      $_POST['miles'],
      $_POST['eff'],
      $_POST['hpd'],
      $_POST['ppg']
    )) {
      $name = $_POST['name'];
      $miles = $_POST['miles'];
      $eff = $_POST['eff'];
      $hpd = $_POST['hpd'];
      $ppg = $_POST['ppg'];

      $cost = (intval($miles)/intval($eff)) * $ppg;
      $num_days = intval($miles)/(55 * intval($hpd));

      echo '
        <div class="col-12 plane">
          <p>'.$name.', you will be driving '.$miles.' miles</p>
          <p> Your vehicle has an efficiency rating of '.$eff.' miles per gallon</p>
          <p> Your total cost for gas will be $'.$cost.' dollars</p>
          <p> You will be driving a total of '.floor($miles/55).' hours equating to '.ceil($num_days).' days.</p>
        </div>
      ';
    }
  }
?>

</body>
</html>