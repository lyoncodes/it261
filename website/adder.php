<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Header Assignment</title>
</head>
<style>
  p {
      color:red;
      text-align: center;
  }
  
  h1 {
      color:green;
  }
  
  h2 {
      font-size:1.5em;
      text-align: center;
  }
  
  form {
      width:350px;
      margin:0 auto;
      border:1px solid red;
      padding:10px;
  }
  
  h1 {
      text-align: center;
  }
</style>
<body>
  <h1>Adder.php</h1> 
  <form action="" method="post">
    <label for="num1">Enter the first number:</label>
    <input type="number" name="num1"><br>
    <label for="num2">Enter the second number:</label>
    <input type="number" name="num2">
    <input type="submit" value="Add Em!!">
  </form>
  <?php
  if (isset($_POST['num1'], $_POST['num2'],)) {
    $num1 = $_POST['num1'];
    $int_num1 = intval($num1);
    $num2 = $_POST['num2'];
    $int_num2 = intval($num2);
    $myTotal = $int_num1 + $int_num2;

    if(empty($num1 && $num2)) {
      echo '<h3>Error: you must enter both numbers</h3>';
    } else {
      echo '<div>
      <h2>You added '.$num1.' and '.$num2.'</h2>
      <p> and the answer is: <br> <span style="color:red;">'.$myTotal.'!</span></p>
      <p><a href="">Reset Page</a></p></div>
      ';
    }
  };
  ?>

<!-- the isset method needs to be passed the post event for the num2 input - 3 -->
<!--strings need to be converted to integers with intval() - 4, 5-->
<!--$myTotal should produce the sum of two integers rather than decrement a value by the sum of two ints - 6-->
<!--casing and syntax errors in conditional logic - 7-->
<!--php variable syntax and html syntax errors in echo statements - 7 - 10 -->
<!-- consolidate echo into a single div, with single quote syntax - 7 - 10 -->
<!--if-else logic added to account for empty POSTs - 10 -->
<!--closing php tag-->
<!--relocate php to html body for html naming references-->
<!-- format html doc header - 12 -->
<!-- add post method to form - 20 -->
<!-- html syntax in form - 20 - 24 -->
  <!-- missing label tags - 21 - 22 -->
  <!-- forms should collect numbers, not text - 21 - 22 -->
  <!-- name casing - 21 -->
  <!-- unneeded break tag  - 22 -->
  <!-- missing quotes - 23 -->
<!-- copy and paste styles from browswer version -->


</body>
</html>