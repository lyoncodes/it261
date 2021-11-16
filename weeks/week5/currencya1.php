<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../../css/form.css">
  <title>rate Form</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="amount">Amount</label>
    <input type="number" name="amount">
    <label for="rate">Currency</label>
    <ul>
      <li><input type="radio" name="rate" value="0.013">₽ Rubles</li>
      <li><input type="radio" name="rate" value="0.76">C$ Canadian</li>
      <li><input type="radio" name="rate" value="1.28">£ Pounds</li>
      <li><input type="radio" name="rate" value="1.18">€ Euros</li>
      <li><input type="radio" name="rate" value="0.0094">¥ Yen</li>
    </ul>
    <input type="submit" value="Convert">
    <p><a href="">Reset</a></p>
  </fieldset>
</form>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(
      $_POST['name'] &&
      $_POST['email'] &&
      $_POST['amount'] &&
      $_POST['rate']
    )){
      echo 'please fill out all the fields, even email.';
    } elseif(isset(
      $_POST['name'],
      $_POST['email'],
      $_POST['amount'],
      $_POST['rate']
    )) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $amount = $_POST['amount'];
      $rate = $_POST['rate'];

      $dollars = $amount * $rate;
      $f_dollars = floor($dollars);
      echo '
        <div class="col-12 plane">
          <h2>Hello '.$name.'</h2>
          <p> You now have $ '.$f_dollars.' USD. We have sent a confirmation to: '.$email.'</p>
        </div>
      ';
    }
  }
?>
</body>
</html>