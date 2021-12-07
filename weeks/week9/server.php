<?php

session_start();

include('config.php');

function checkInequality($a, $b){
  if ($a !== $b) {
    return 1;
  }
}

function setSessionVariables($arr){
  foreach($arr as $cred => $val) {
    $_SESSION["$cred"] = $val;
  }
}

function generateToken($pw){
  return md5($pw);
}

function return_query($connection, $query) {
  return mysqli_query($connection, $query) or die(myError(__FILE__,__LINE__,mysqli_error($connection)));
}


if(isset($_POST['reg_user'])) {
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  
  foreach ($form as $field => $val) {
    ${$field} = mysqli_real_escape_string($iConn, $_POST[$field]);
    if (empty( ${$field} )) {
      $error_msg = str_replace('_', ' ', $field);
      array_push($errors, "$error_msg is required");
    }
  };
  
  if(checkInequality($password_pre, $password_confirm)){
    array_push($errors, 'Your password is wack.');
  };
  
  $sql = "SELECT * FROM Users WHERE username = '$username' OR email = '$email' LIMIT 1 ";
  
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  $rows = mysqli_fetch_assoc($result);

  if ($rows) {
    foreach($rows as $row => $val) {
      if ($row == $val) {
        array_push($errors, 'User already exists!');
      }
    }
  }
  
  if (empty($errors)) {
    $password = generateToken($password_pre);
    include('includes/insert-cmd.php');
    mysqli_query($iConn, $insert_query);
    setSessionVariables(['username' => $username, 'success' => $success, 'email' => $email, 'password' => $password]);
    header('Location:login.php');
  }
}

// login_user handler
if(isset($_POST['login_user'])) {
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  
  foreach($login_form as $field => $val) {
    ${$field} = mysqli_real_escape_string($iConn, $_POST[$field]);
    if (empty( ${$field} )) {
      $error_msg = str_replace('_', ' ', $field);
      array_push($errors, "$error_msg is required");
    }
  }

  if(empty($errors)){
    $password = generateToken($password);
    
    $sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password' ";
    $results = mysqli_query($iConn, $sql);
    
    if (mysqli_num_rows($results) == 1) {
      setSessionVariables(['username' => $username, 'success' => $success, 'password' => $password]);
      header('Location:index.php');
    } else {
      array_push($errors, 'The username/password is incorrect');
    }
  }
}
