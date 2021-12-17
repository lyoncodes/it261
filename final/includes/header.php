<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="stylesheet" href="../css/cards.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/animation.css">
  <title>🧸Final🧸</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
</style>
<body>
  <nav class="col-12 plane">
    <?=makeNav($nav) ?>
    <?php if(isset($_SESSION['success'])) :?>
    <div class="welcome-login-msg">
      <h3>
      <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
      ?>
      </h3>
    </div>
    <?php endif ; 
    if(isset($_SESSION['username'])) :?>
      <div class="welcome-logout-nav">
        <h3>Logged in as: <?=$_SESSION['username']; ?></h3>
        <span><a href="index.php?logout='1'">Log Out</a></span>
      </div>
    <?php endif ; ?>
  </nav>