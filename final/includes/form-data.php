<?php
include_once('form-class.php');
$form = array(
	'first_name' => 'text',
	'last_name' => 'text',
	'email' => 'email',
	'username' => 'text',
	'password_pre' => 'password',
	'password_confirm' => 'password'
);
$login_form = array(
  'username' => 'text',
  'password' => 'password'
);
$contact_form = array(
	'name' => 'text',
	'email' => 'email',
	'phone' => 'tel'
);
$checkBox = '';
$option = '';
$form_errors = [];
?>