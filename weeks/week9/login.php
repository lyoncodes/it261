<?php
  // include('includes/form-data.php');
  // include('includes/form-config.php');
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1><?php if(isset($_SESSION['success'])){ echo $_SESSION['success']; } ?></h1>
  <h1><?=$email?></h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">

    <label for="password">Password</label>
    <input type="password" name="password">

    <button type="submit" class="btn" name="login_user">Login</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
    <?php 
    include('errors.php');
    ?>
  </fieldset>
  </form>
</body>
</html>