<?php
  include('includes/form-data.php');
  include('includes/form-config.php');
  include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/form.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <title>Registration</title>
</head>
<body>
  <h1>New Account Creation</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <?=makeFormLabels($form)?>
    <button type="submit" name="reg_user" class="btn">Sign Up</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
    <?php 
    include('errors.php'); ?>
  </fieldset>
  </form>
</body>
</html>
