<?php 
session_start();
if ( isset ($_SESSION['user_id']) ) {
  header('location: /');
}
require 'core/boot.php';
$message = '';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ) {
  if ($connection->registerUser($_POST)) {
    $message = 'registered successfully';
  }
}
require 'views/register.view.php';
