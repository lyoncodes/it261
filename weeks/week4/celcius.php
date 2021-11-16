<?php 
  $form_name = "Celcius Form"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../../css/form.css"></link>
  <title><?=$form_name; ?></title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset class="center">
      <legends><h1><?=$form_name; ?></h1></legends>
      <label for="cel">Enter a Celcius Value to Convert</label>
      <input type="number" name="cel">
      <input type="submit" value="Convert it!">
    </fieldset>
  </form>
  <?php
  // https POST listener
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel'])) {
      $cel = $_POST['cel'];
      $cel_int = intval($cel);
      $far = ($cel_int * 9/5) + 32;
      if($cel == NULL) {
        echo "<h3>please enter a value to convert</h3>";
      } elseif($far <= 32) {
        echo '<p> '.$far.' degrees and it is pretty cold!</p>';
      } elseif($far <= 40) {
        echo '<p> '.$far.' degrees and it is so cold!</p>';
      } elseif($far <= 50) {
        echo '<p> '.$far.' degrees and it is getting warmer!</p>';
      } elseif($far <= 60) {
        echo '<p> '.$far.' degrees and i\'m liking it</p>';
      } elseif($far <= 70) {
        echo '<p> '.$far.' degrees and i\'m really liking it.</p>';
      } elseif($far <= 80) {
        echo '<p> '.$far.' degrees and it\'s time to go swimming! but not a cooker</p>';
      } elseif($far <= 98) {
        echo '<p> '.$far.' it\'s hot, but still not a cooker.</p>';
      } elseif($far >= 98) {
        echo '<p> '.$far.' it\'s at least body temp out. Now it\'s cooking.</p>';
      }
    }
  }
  ?>
</body>
</html>