<?php

if (isset($_POST['fname'],
          $_POST['lname'], 
          $_POST['email'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
if(empty($_POST['name'] && $_POST['email'])) {
  echo 'A form field is missing';
} else {
  echo $fname;
  echo '<br>';
  echo $lname;
  echo '<br>';
  echo $email;
  echo '<br>';
}
} else {
  echo '
    <form action="" method="post">
    <label>First Name</label>
    <input type="text" name="fname"></input>
    
    <label>Last Name</label>
    <input type="text" name="lname"></input>

    <label>Email</label>
    <input type="email" name="email"></input>

    <input type="submit" value="send">
    </form>
  ';
}
