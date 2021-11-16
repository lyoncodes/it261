<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/form.css"></link>
  <title>form 3</title>
</head>
<body>
  <form action="" method="post">
  <fieldset>
    <label for="fname">First Name</label>
    <input type="text" name="fname">
    <label for="lname"> Last Name</label>
    <input type="text" name="lname">
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="msg">Message</label>
    <textarea name="msg"></textarea>
    <input type="submit" value="send"></input>
  </fieldset>
  </form>
  <?php 
    if(isset($_POST['fname'],
            $_POST['lname'],
            $_POST['email'],
            $_POST['msg'],)) {
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    if(empty($fname && $lname && $email && $msg )) {
      echo '<h3>error</h3>';
    } else {
      echo '
      <div class="box">
        <ul>
          <li>
            First Name:'.$fname.'
          </li>
          <li>
            Last Name:'.$lname.'
          </li>
          <li>
            Email:'.$email.'
          </li>
          <li>
            Msg:'.$msg.'
          </li>
        </ul>
      </div>
      ';
    }
    };
  ?>
</body>
</html>