<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors
include_once('includes/form-data.php');
include('credentials.php');

foreach ($form as $field => $val) {
  ${$field} = '';
}
$success = 'You have successfully logged on!';
$errors = [];

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo 'Error';
      die();
  }
} 