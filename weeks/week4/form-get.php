<?php

if (isset($_GET['fname'],
          $_GET['lname'], 
          $_GET['email'])){
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
// if(empty($_GET['name'] && $_GET['email'])) {
//   echo 'A form field is missing';
// } else {
//   echo $fname;
//   echo '<br>';
//   echo $lname;
//   echo '<br>';
//   echo $email;
//   echo '<br>';
// }
} else {
  echo '
    <form action="" method="get">
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
