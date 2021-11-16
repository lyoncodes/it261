<?php
// 1 ruble = 0.013 USD
// 1 pound s = 1.28 USD
// 1 can = 0.79 USD
// 1 E =  1.18 USD
// 1 Y = .0094 USD

$rubles = 10007;
$lbs = 500;
$can = 5000;
$euro = 12000;
$yen = 2000;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/table.css"></link>
  <link rel="stylesheet" type="text/css" href="../../css/styles.css"></link>
  <title>Currency Logic</title>
</head>
<body>
  <table>
    <tr>
      <th>₽ <?php echo $rubles?> rubles</th>
      <td>$<?php echo number_format($rubles *= 0.013, 2)?></td>
    </tr>
    <tr>
      <th>£ <?php echo $lbs?> GBP</th>
      <td>$<?php echo number_format($lbs *= 1.28, 2)?></td>
    </tr>
    <tr>
      <th>C$ <?php echo $can?> CAN</th>
      <td>$<?php echo number_format($can *= 0.79, 2)?></td>
    </tr>
    <tr>
      <th>€ <?php echo $euro?> EU</th>
      <td>$<?php echo number_format($euro *= 1.18, 2)?></td>
    </tr>
    <tr>
      <th>¥ <?php echo $yen?> Yen</th>
      <td>$<?php echo number_format($yen *= 0.0094, 2)?></td>
    </tr>
    <tr>
      <th class="last">Total</th>
      <td class="last">$<?php echo number_format($yen + $euro + $can + $lbs + $rubles, 2)?></td>
    </tr>
  </table>
</body>
</html>