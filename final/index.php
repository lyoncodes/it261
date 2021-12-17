<?php
session_start();
include('config.php');

if(!isset($_SESSION['username'])) {
  $_SESSION['msg'] = 'You must login first';
  header('Location:login.php');
}

if(isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['success']);
  header('Location:login.php');
}

include('includes/header.php');?>
<?=$headline ?>
<?=$title ?>
<?php include('includes/footer.php'); ?>