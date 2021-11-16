<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../../css/form.css">
  <title>Sticky Form</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
  <fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
    <label for="email">Email</label>
    <input type="email" name="email" value="
    <?php  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <label for="amount">Amount</label>
    <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">
    <label for="rate">Currency Exchange Rate</label>
    <ul>
      <li><input type="radio" name="rate" value="0.013"
      <?php if(isset($_POST['rate']) && $_POST['rate'] == '0.013') echo 'checked="checked"';?>>
      ₽ Rubles</li>
      <li><input type="radio" name="rate" value="0.76"
      <?php if(isset($_POST['rate']) && $_POST['rate'] == '0.76') echo 'checked="checked"';?>
      >C$ Canadian</li>
      <li><input type="radio" name="rate" value="1.28">
      <?php if(isset($_POST['rate']) && $_POST['rate'] == '1.28') echo 'checked="checked"';?>
      £ Pounds</li>
      <li><input type="radio" name="rate" value="1.18"
      <?php if(isset($_POST['rate']) && $_POST['rate'] == '1.18') echo 'checked="checked"';?>>
      € Euros</li>
      <li><input type="radio" name="rate" value="0.0094"
      <?php if(isset($_POST['rate']) && $_POST['rate'] == '0.0094') echo 'checked="checked"';?>>
      ¥ Yen</li>
    </ul>
    <label for="bank">Choose Your Bank</label>

    <select name="bank">
      <option value="" NULL
      <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected" ' ;?>
      >Select Your Bank</option>
      <option value="BOA"
      <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="selected" ' ;?>
      >Bank of America</option>
      <option value="key"
      <?php if(isset($_POST['bank']) && $_POST['bank'] == 'key') echo 'selected="selected" ' ;?>
      >Key Bank</option>
      <option value="chase"
      <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected" ' ;?>
      >Chase</option>
      <option value="BECU"
      <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected" ' ;?>
      >BECU</option>
      <option value="mattress"
      <?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected="selected" ' ;?>
      >Mattress</option>
    </select>

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
      $_POST['email']
    )) {
      echo '<p>please fill out the email field</p>';
    };
    if(empty(
      $_POST['amount']
    )) {
      echo '<p>please fill out the amount field</p>';
    };
    if(empty(
      $_POST['rate']
    )) {
      echo '<p>please fill out the rate field</p>';
    };
    if($_POST['bank'] == NULL) {
      echo '<p>Please choose your banking institution</p>';
    } elseif(isset(
      $_POST['name'],
      $_POST['email'],
      $_POST['amount'],
      $_POST['rate'],
      $_POST['bank']
    )) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $amount = $_POST['amount'];
      $rate = $_POST['rate'];
      $bank = $_POST['bank'];

      $dollars = intval($amount) * $rate;
      echo '
        <div class="col-12 plane">
          <h2>Hello '.$name.'</h2>
          <p> You have transfered $'.floor($dollars).' USD to your '.$bank.' account. We have sent a confirmation of this transaction to: '.$email.'</p>
        </div>
      ';
    }
  }
?>
</body>
</html>