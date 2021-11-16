<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/form.css"></link>
  <title>form arithmetic</title>
</head>
<body>
  <form action="" method="post">
  <fieldset class="center">
    <h1>Form</h1>
    <label for="name">First Name</label>
    <input type="text" name="name">
    <label for="coffees"> No. of Coffees</label>
    <input type="number" name="coffees">
    <label for="lattes">Lattes</label>
    <input type="number" name="lattes">
    <label for="cap">Cappucino</label>
    <input type="number" name="cap">
    <input type="submit" value="order">
  </fieldset>
  </form>
  <?php 
    if(isset($_POST['name'],
            $_POST['coffees'],
            $_POST['lattes'],
            $_POST['cap'],)) {
    $name = $_POST['name'];
    $coffees = $_POST['coffees'];
    $int_coffees = intval($coffees);
    $lattes = $_POST['lattes'];
    $int_lattes = intval($lattes);
    $cap = $_POST['cap'];
    $int_cap = intval($cap);
    $total = $int_coffees + $int_lattes + $int_cap;
    $f_total = number_format($total, 0);

    if(empty($name && $coffees && $lattes && $cap )) {
      echo '<h3>error: Your order is incomplete.</h3>';
    } else {
      echo '
      <div class="box">
        <h2>Hello: '.$name.'</h2>
        <p>Thanks for ordering:</p>
        <ul>
          <li>
            Coffees:'.$coffees.'
          </li>
          <li>
            lattes:'.$lattes.'
          </li>
          <li>
            cap:'.$cap.'
          </li>
        </ul>
        <p>your total: '.$f_total.'</p>
      </div>
      ';
    }
    };
  ?>
</body>
</html>