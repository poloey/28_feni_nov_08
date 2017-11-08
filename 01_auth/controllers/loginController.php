<?php
session_start();
if ( isset ($_SESSION['user_id']) ) {
  header('location: /');
}
$connection = Db::connection($config);


require 'views/login.view.php';
