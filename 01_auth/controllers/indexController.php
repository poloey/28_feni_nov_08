<?php
session_start();
if (! isset ($_SESSION['user_id']) ) {
  header('Location: login.php');
}
require 'core/boot.php';
require 'views/index.view.php';
